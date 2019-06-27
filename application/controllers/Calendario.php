<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controlador responsavel por:
 * mostrar as tabelas referente ao ano e aos meses 
 */
class Calendario extends CI_Controller
{
    /**
     * Metodo construtor 
    */
    public function __construct()
    {
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
        $this->load->model('MesModel', 'mes');
        $this->load->view('common/footer');
    }
    /**
     * Doações do ano presente  
     */
    public function index()
    {
        $data['titulo'] = "Tabela do ano de " . date('Y') . "";
        $data['table'] = $this->mes->ano();
        $this->load->view('adm/tabela_mes', $data);
    }
    /*
    * Calendario
    */
    public function janeiro()
    {
        $data['titulo'] = "Tabela do mês de Janeiro ";
        $data['table'] = $this->mes->janeiro();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function fevereiro()
    {
        $data['titulo'] = "Tabela do mês de Fevereiro ";
        $data['table'] = $this->mes->fevereiro();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function marco()
    {
        $data['titulo'] = "Tabela do mês de Março ";
        $data['table'] = $this->mes->marco();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function abril()
    {
        $data['titulo'] = "Tabela do mês de Abril ";
        $data['table'] = $this->mes->abril();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function maio()
    {
        $data['titulo'] = "Tabela do mês de Maio ";
        $data['table'] = $this->mes->maio();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function junho()
    {
        $data['titulo'] = "Tabela do mês de Junho ";
        $data['table'] = $this->mes->junho();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function julho()
    {
        $data['titulo'] = "Tabela do mês de Julho ";
        $data['table'] = $this->mes->julho();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function agosto()
    {
        $data['titulo'] = "Tabela do mês de Agosto ";
        $data['table'] = $this->mes->agosto();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function setembro()
    {
        $data['titulo'] = "Tabela do mês de Setembro ";
        $data['table'] = $this->mes->setembro();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function outubro()
    {
        $data['titulo'] = "Tabela do mês de Outubro ";
        $data['table'] = $this->mes->outubro();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function novembro()
    {
        $data['titulo'] = "Tabela do mês de Novembro ";
        $data['table'] = $this->mes->novembro();
        $this->load->view('adm/tabela_mes', $data);
    }
    public function dezembro()
    {
        $data['titulo'] = "Tabela do mês de Dezembro ";
        $data['table'] = $this->mes->dezembro();
        $this->load->view('adm/tabela_mes', $data);
    }
    /**
     * Doação do mes que estamos
     */
    public function UltimoMes()
    {
        $this->load->helper('date');
        $data['titulo'] = "Tabela do mês de " . data_atual() . "";
        $data['titulo'] = "Tabela do mês de " . data_atual() . "";
        $data['table'] = $this->mes->ultimoMes();
        $this->load->view('adm/tabela_mes', $data);
    }
}
