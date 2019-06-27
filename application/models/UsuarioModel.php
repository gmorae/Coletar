<?php
class UsuarioModel extends CI_Model
{
    /**
     * 
     * Model responsavel por: 
     * Atualizar o usuario
     * remover o usuario
     * 
     */

    public function atualizar($id){
        if(! sizeof($_POST)) return;
        $data = $this->input->post();
        $this->db->update('users', $data, "id = $id");
        redirect('usuario');
    }

    public function remover($id)
    {
        $this->db->delete('users', "id = $id");
    }

}