<?php

class Endereco {

    /**
     * Biblioteca responsavel por: 
     * gravar o endereço dos usuarios
     */
    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    public function gravar($data, $id_usuario){
        $data['id_dados_pessoais'] = $id_usuario;
        $this->db->insert('endereco', $data);
        return $this->db->insert_id();
    } 
    
}

