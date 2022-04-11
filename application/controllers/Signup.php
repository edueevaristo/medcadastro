<?php
defined('BASEPATH') OR exit('No direct script access allowed');



//criando o cadastro de usuários no banco de dados
class Signup extends CI_Controller {


	public function index()
	{
		
		$data["title"] = "Cadastrar-se";
		//carregar a view de login
		$this->load->view('pages/signup', $data);
		
	}

	public function store()
	{
		//criando uma nova model somente para os usuários
		$this->load->model("users_model");


		//montando nosso cadastro do usuário com o método do CodeIgniter
		$user = array(
			"name" => $this->input->post("name"),
			"country" => $this->input->post("country"),
			"email" => $this->input->post("email"),
			//utilizando o MD5 pra criptografar a senha do usuário
			"password" => md5($this->input->post("password"))
		);

		/*depois de criar o usuário acima, ele vai primeiro mandar pra model e 
		depois redirecionar para a página login*/		
		$this->users_model->store($user);
		redirect("login");
	}
}
