<?php

class Login_model extends CI_Model {

    public function store($email, $password) 
    {
        /*método da model para dizer o seguinte:
        "busque no banco o campo e-mail e password do usuário já cadastrado"
        */
        $this->db->where("email", $email);
        $this->db->where("password", $password);


        /* Após o usuário inserir os seus dados de login
        realizar o processo de busca no SQL db_users e com o método do "GET" para trazer estes dados
        e também o "row_array" porque só vamos querer uma linha, ou seja, somente um login
        */
        $user = $this->db->get("tb_users")->row_array();

        /* após isso, retorne o usuário */
        return $user;
    }



}