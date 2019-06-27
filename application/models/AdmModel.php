<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdmModel extends CI_Model
{
    /**
     * Model responsavel por: 
     * Editar 
     * Os dados dos usuarios
     */
    

    public function Detalhe($id)
    {
        $sql = "SELECT * , sum(oleo)
        FROM users
        inner join cadastros
        on users.id = cadastros.id_usuario 
        and id_usuario = $id
        and cadastros.estado_oleo = 1
        ORDER BY cadastros.last_modified";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function SomaNoDetalhe($id)
    {
        $sql = "SELECT sum(oleo)
        FROM users
        inner join cadastros
        on users.id = cadastros.id_usuario 
        and id_usuario = $id
        and cadastros.estado_oleo = 0 ";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    public function atualizar($id)
    {
        if (!sizeof($_POST)) return;

        $data = $this->input->post();
        $this->db->update('users', $data, "id = $id");
        redirect('adm/listarUsuario');
    }
    public function remover($id)
    {
        $sql = "DELETE
        FROM users
        inner join cadastros
        on users.id = cadastros.id_usuario 
        and id_usuario = $id
        and cadastros.estado_oleo = 0 ";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    
    
}
