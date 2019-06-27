<?php

class Contato {
    /**
     * Biblioteca responsavel por:
     * Gravar e listar as duvidas dos usuarios
     */
    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    public function gravar($data){
        $this->db->insert('contato', $data);
        return;
    } 
    public function listaContato(){
        $sql = "SELECT * FROM  contato";
        $rs = $this->db->query($sql);
        return $rs->result();
    }
}

