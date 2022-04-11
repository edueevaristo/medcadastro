<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prontuarios extends CI_Controller {


	//Chamar model com o construct, sem precisar ficar inserindo a model em cada método
	public function __construct()
	{
		parent::__construct();
		permission(); //método de bloquear a páginas inserido no construct, para barrar qualquer caminho se não estiver logado
		$this->load->model("prontuarios_model");
	}



	public function index()
	{		
		$data["prontuarios"] = $this->prontuarios_model->index();
		$data["title"] = "Prontuários";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/prontuarios', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}

	//function do formulário para adicionar um novo prontuario
	public function new() 
	{
		$data["title"] = "Adicionar Prontuário";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-prontuarios', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}

	//function para "POSTAR/ENVIAR" o prontuario para o banco de dados, e gravar na view
	public function store() 
	{	
		$prontuario = $_POST;
		$prontuario["user_id"] = '1';
		
		//passando o mesmo método "store" para ser adicionado o prontuário na model (e assim que a model fará a conexão com o banco)
		$this->prontuarios_model->store($prontuario);
		redirect("prontuarios");
		
	}


	public function edit($id)
	{
		
		$data["prontuario"] = $this->prontuarios_model->show($id);
		$data["title"] = "Editar Prontuário";
		
		/* print "<pre>";
		var_dump($data);
		exit();
		print "</pre>"; */

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-prontuarios', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}


	//método para edição do prontuário já adicionado, implementando ele no controller e passando para atualizar na model (banco)
	public function update($id)
	{
		
		$prontuario = $_POST;
		$this->prontuarios_model->update($id, $prontuario);
		redirect("prontuarios");

	}

	//método para excluir um prontuário adicionado
	public function delete($id)
	{
		
		$this->prontuarios_model->deletar($id);
		redirect("prontuarios");
	}
}
