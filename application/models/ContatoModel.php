<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Carregamentos da bibliotecas
 */
include APPPATH . 'libraries/contato/Validacao_contato.php';
include APPPATH . 'libraries/contato/Contato.php';

class ContatoModel extends CI_Model
{
    /**
     * Model responsavel por:
     * Adionar as duvidas no banco,
     * Listar as duvidas para os adminisradores
     * Excluir as duvidas
     */
    public function salvar()
    {
        if (sizeof($_POST) == 0) return;
        $contato = new Validacao_contato();
        $contato->validate();

        if ($this->form_validation->run()) {
            $dados = new Contato();
            $v = $contato->getData();
            $dados->gravar($v);
        } else { }
    }
    

    public function listar()
    {
        $sql = "SELECT * FROM contato";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->nome</td>";
            $html .= "<td>$row->email</td>";
            $html .= "<td>$row->assunto</td>";
            $html .= "<td>$row->mensagem</td>";
            $html .= '<td>'.$this->get_action_buttonsDuvidas($row->id).'</td>';
            $html .= "</tr>";

        }
        return $html;
    }
    private function get_action_buttonsDuvidas($id){
        
        $html = '<a href="'.base_url('index.php/adm/removerDuvidas/'.$id).'">
        <i class="fas fa-ban mr-3 text-danger"></i></a>';
        
        return $html;
    }
    
    public function removerDuvidas($id){
        $this->db->delete('contato', "id = $id");
    }
}
