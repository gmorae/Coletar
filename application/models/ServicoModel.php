<?php
class ServicoModel extends CI_Model{

    /**
     * Model responsavel por: 
     * Trazer do banco de daodos informações
     * sobre os serviços disponiveis 
     */
    public function condominio($id){
        $sql = "SELECT * FROM servicos WHERE id = 1";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function residencia($id){
        $sql = "SELECT * FROM servicos WHERE id = 2";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function comercio($id){
        $sql = "SELECT * FROM servicos WHERE id = 3";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function empresa($id){
        $sql = "SELECT * FROM servicos WHERE id = 4";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function igrejas($id){
        $sql = "SELECT * FROM servicos WHERE id = 5";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function escolas($id){
        $sql = "SELECT * FROM servicos WHERE id = 6";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function hotel($id){
        $sql = "SELECT * FROM servicos WHERE id = 7";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

}