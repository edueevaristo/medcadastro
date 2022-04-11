<?php

class Prontuarios_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_prontuarios")->result_array();
    }


    /* chamando para inserir o novo prontuário na tabela */
    public function store($prontuario)
    {
    $this->db->insert("tb_prontuarios", $prontuario);
    }


    //método para mostrar um prontuário já adicionado para realizar a edição do mesmo
	public function show($id)
	{
		return $this->db->get_where("tb_prontuarios", array(
			"id" => $id
		))->row_array();
	}


    //método para atualização do prontuário já adicionado, implementando ele na model
    public function update($id, $prontuario)
    {
        $this->db->where("id", $id);
        return $this->db->update("tb_prontuarios", $prontuario);
    }

    public function deletar($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("tb_prontuarios");
    }
}