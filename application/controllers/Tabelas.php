<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabelas extends CI_Controller
{
    /**
     * Controlador responsavel por:
     * Carregar as views dos bairros mais coletados
     */
    public function __construct()
    {
        /**
         * Metodo construtor
         */
        parent::__construct();
         /**
         * Verificação se o usuario é administrador 
        */
        if (!$this->ion_auth->is_admin()) {
            $this->session->set_flashdata('message', 'Você deve ser um administrador para visualizar esta página');
            redirect('auth/login');
        }
        $this->load->view('common/header');
        $this->load->view('adm/navbar_adm');
        $this->load->model('BairroModel','bairro');
        $this->load->view('common/footer');
        
    }
    
    /**
     * Bairros mais caletados
     */
    
    public function mooca()
    {
        $a['titulo'] = "Mooca";
        $a['table'] = $this->bairro->mooca();
        $this->load->view('adm/tabela_oleo', $a);

   
    }

    public function ema()
    {
        $a['titulo'] = "Vila Ema";
        $a['table'] = $this->bairro->ema();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function zelina()
    {
        $a['titulo'] = "Vila Zelina";
        $a['table'] = $this->bairro->zelina();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function prudente()
    {
        $a['titulo'] = "Vila Prudente";
        $a['table'] = $this->bairro->prudente();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function tatuape()
    {
        $a['titulo'] = "Tatuapé";
        $a['table'] = $this->bairro->tatuape();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function analia()
    {
        $a['titulo'] = "Ánalia Franco";
        $a['table'] = $this->bairro->analia();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function lucas()
    {
        $a['titulo'] = "Parque São Lucas";
        $a['table'] = $this->bairro->lucas();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function agua()
    {
        $a['titulo'] = "Água Rasa";
        $a['table'] = $this->bairro->agua();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function ivone()
    {
        $a['titulo'] = "Vila Ivone";
        $a['table'] = $this->bairro->ivone();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function bancario()
    {
        $a['titulo'] = "Parque Bancário";
        $a['table'] = $this->bairro->bancario();
        $this->load->view('adm/tabela_oleo', $a);
    }

    public function primavera()
    {
        $a['titulo'] = "Vila Primavera";
        $a['table'] = $this->bairro->primvara();
        $this->load->view('adm/tabela_oleo', $a);
    }

}