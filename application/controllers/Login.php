<?php
defined('BASEPATH') OR exit('No direct script access allowed');



//criando o cadastro de usuários no banco de dados
class Login extends CI_Controller {


	public function index()
	{
		/* print("<pre>");
		var_dump($_SESSION);
		print("</pre>");
		die(); */


		$data["title"] = "Login - Codeigniter";
		//carregar a view de login
		$this->load->view('pages/login', $data);
		
	}

	public function store()
	{
		//carregando nossa model no método store
		$this->load->model("login_model");



		/* Funcionará da seguinte forma:

			1 - O processo se inicia indo no banco e buscando o e-mail e senha
			2 - Monta a estrutura com a variável $user que está direcionada para a model,
			pegando o e-mail e senha
			3 - Se o método store de nossa login_model conseguir localizar o usuário, ele vai setar
			uma sessão para este usuário, redirecionando o mesmo para o "dashboard"
			 */
		$email =  $_POST["email"];
		$password = md5($_POST["password"]);
		$user = $this->login_model->store($email, $password);

		if($user) {
			$this->session->set_userdata("logged_user", $user);
			redirect("dashboard");
		} else {
			redirect("login");
		}
	}


	// assim que sair da sessão, para não ter acesso ao Dashboard, somente se estiver logado
	//para isso, criamos o helper auth_helper
	public function logout() 
	{
		$this->session->unset_userdata("logged_user");
		redirect("login");
	}
}
