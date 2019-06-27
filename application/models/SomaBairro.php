<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SomaBairro extends CI_Model
{

    public function mooca()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'mooca'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function ema()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'vila ema'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function zelina()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'vila zelina'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function prudente()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Vila Prudente'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function tatuape()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Tatuapé'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function analia()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Anália Franco'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function lucas()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Parque São Lucas'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function agua()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Água Rasa'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function ivone()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Vila Ivone'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function bancario()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Parque Bancário'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function primavera()
    {
        $sql = "SELECT sum(oleo) 
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND bairro =  'Vila Primavera'
        AND cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
}
