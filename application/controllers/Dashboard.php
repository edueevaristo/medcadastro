<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("prontuarios_model");

	}

	public function index()
	{
		//criado dentro de auth_helper, para deixar somente acessar se estiver logado com o usuário e senha cadastrado
		permission();


		//Chamar model para o acesso a tela de prontuários, e buscar os dados de acordo com cada view
		$data["prontuarios"] = $this->prontuarios_model->index();
		$data["title"] = "Dashboard";


		// Chamando as views que estão na pasta "views/pages" e também os templates em "views/templates"
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function pesquisar()
	{
		//inserindo a model no controller
		$this->load->model("busca_model");
		$data["title"] = "Resultado da pesquisa por *". $_POST["busca"] ."*";

		$data["resultado"] = $this->busca_model->buscar($_POST);


		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	
}
