<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Carregamentos das bibliotecas
 */
include APPPATH . 'libraries/cadastro/Validacao_dados.php';
include APPPATH . 'libraries/cadastro/Validacao_endereco.php';
include APPPATH . 'libraries/cadastro/Dados.php';
include APPPATH . 'libraries/cadastro/Endereco.php';

class CadastroModel extends CI_Model
{
    /**
     * Model responsavel por:
     * Cadastros dos usuarios
     */
    public function criar(){
        if (sizeof($_POST) == 0) return;

        $dado = new Validacao_dados();
        $endereco = new Validacao_endereco();
        
        $dado->validate();
        $endereco->validate();

        if($this->form_validation->run()){
            $dados = new Dados();
            $v = $dado->getData();
            $id = $dados->gravar($v);

            $end = new Endereco();
            $u = $endereco->getData();
            $end->gravar($u, $id);
        } else {
        }
    }

}