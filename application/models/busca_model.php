<?php

class Busca_model extends CI_Model
{
    public function buscar($busca) 
    {
        // se o campo de busca estiver vazia, apenas cair no return e parar o código no mesmo
        if(empty($busca)) {
            return array();
        }

        $busca = $this->input->post("busca");
        $this->db->like("name", $busca);
        return $this->db->get("tb_prontuarios")->result_array();
    }
}