<?php

class Dados {
    /**
     * Biblioteca responsavel por: 
     * gravar e listar os dados pessoais dos usuarios
     */

    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    public function gravar($data){
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    } 
    public function listaContato(){
        $sql = "SELECT * FROM  users";
        $rs = $this->db->query($sql);
        return $rs->result();
    }
}

