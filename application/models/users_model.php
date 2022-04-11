<?php

class Users_model extends CI_Model {

    public function store($users)
    {
        $this->db->insert("tb_users", $users);
    }

    public function index()
    {
        return $this->db->get("tb_users")->result_array();
    }

    //método para mostrar um usuário já adicionado para realizar a edição do mesmo
	public function show($id)
	{
		return $this->db->get_where("tb_users", array(
			"id" => $id
		))->row_array();
	}

}