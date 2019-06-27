<?php

class EmpresaModel extends CI_Model{

    public function compromisso($id){
        /**
         * Model responsavel por:
         * trazer do banco de dados as informações sobre a empresa
         */
        $sql = "SELECT * FROM empresa WHERE id = $id";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

}