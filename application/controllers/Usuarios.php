<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


	//Chamar model com o construct, sem precisar ficar inserindo a model em cada método
	public function __construct()
	{
		parent::__construct();
		permission(); //método de bloquear a páginas inserido no construct, para barrar qualquer caminho se não estiver logado
		$this->load->model("users_model");
	}

	
	public function index()
	{		
		$data["users"] = $this->users_model->index();
		$data["title"] = "Usuários";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}
}
