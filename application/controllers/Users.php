<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	//Chamar model com o construct, sem precisar ficar inserindo a model em cada método
	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("users_model");
	}

	
	public function index()
	{		
		$dados["users"] = $this->users_model->index();
		$dados["title"] = "Usuários";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/users', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);

	}

	public function update($id)
	{
		$this->load->model("users_model");
		$users = $_POST;
		$this->users_model->update($id, $users);
		redirect("dashboard");
	}


	public function delete($id)
	{
		
		$this->users_model->deletar($id);
		redirect("users");
	}
}
