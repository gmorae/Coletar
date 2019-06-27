<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Adm extends CI_Controller
{
    /**
     * Controlador respnsavel por:
     * Mostrar informacoes para os 
     * Administradores
     */
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            $this->session->set_flashdata('message', 'Você deve ser um administrador para visualizar esta página');
            redirect('auth/login');
        }
        $this->load->view('common/header');
        $this->load->view('adm/navbar_adm');
        $this->load->view('common/footer');
        $this->load->model('AdmModel');
        $this->load->database();
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->lang->load('auth');
    }
    
    public function index()
    {
        
        $this->load->model('OleoModel');
        $data['totalColetado'] = $this->OleoModel->totalColetado();
        $data['totalBuscar'] = $this->OleoModel->totalBuscar();
        $this->load->view('adm/home', $data);
    }

    public function detalheUsuario($id = 1)
    {
        
        $a['usuario'] = $this->AdmModel->Detalhe($id);
        $a['somaOleo'] = $this->AdmModel->SomaNoDetalhe($id);
        $this->load->view('adm/detalhe_usuario', $a);
    }
    public function atualizarUsuario($id)
    {
        
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $this->AdmModel->atualizar($id);
        $a['usuario'] = $this->AdmModel->detalhe($id);
        $this->load->view('adm/cadastro_usuario', $a);
    }

    public function removerUsuario($id)
    {
        $this->AdmModel->remover($id);
        redirect('auth');
    }
    
    public function listaBuscar()
    {
        
        $this->load->model('OleoModel');
        $data['table'] = $this->OleoModel->listarOleo();
        $data['titulo'] = 'Óleo para ser coletado';
        $data['message'] = $this->data['message'] = $this->session->flashdata('message','Óleo coletado com sucesso');
        
        $this->load->view('adm/tabela_oleo', $data);
    }

    public function listaColetado()
    {
        
        $this->load->model('OleoModel');
        $data['table'] = $this->OleoModel->listarColetado();
        $data['titulo'] = 'Óleo coletado até o dia '.date('d/m/Y');
        $data['message'] = $this->data['message'] = $this->session->flashdata('message','Óleo coletado com sucesso');
        $this->load->view('adm/tabela_oleo', $data);
    }

    public function adicionaOleo($id)
    {        
        
        $this->load->model('OleoModel');
        $this->OleoModel->adicionaOleo($id);
        redirect('Adm/listaBuscar');
    }

    public function removerOleo($id)
    {
        $this->session->set_flashdata('message', 'Óleo Excluido com sucesso');
        $this->load->model('OleoModel');
        $this->OleoModel->removerOleo($id);
        redirect('adm/listaColetado');
    }

    public function listarDuvidas()
    {
        
        $this->load->model('ContatoModel', 'model');
        $data['table'] = $this->model->listar();
        $this->load->view('adm/lista_contato', $data);
    }

    public function removerDuvidas($id)
    {
        $this->load->model('ContatoModel');
        $this->ContatoModel->removerDuvidas($id);
        redirect('adm/listarDuvidas');
    }
    
    public function bairros()
    {
        $this->load->view('adm/bairro');
        
        /**
         * Nome dos bairros
         */
        $mooca ['nome'] = "Mooca";
        $ema ['nome'] = "Vila Ema";
        $zelina ['nome'] = "Vila Zelina";
        $prudente ['nome'] = "Vila Prudente";
        $tatuape ['nome'] = "Tatuapé";
        $analia ['nome'] = "Anália Franco";
        $lucas ['nome'] = "Parque São Lucas";
        $agua ['nome'] = "Água Rasa";
        $ivone ['nome'] = "Vila Ivone";
        $bancario ['nome'] = "Parque Bancário";
        $primavera ['nome'] = "Vila Primavera";
        
        /**
         * Soma dos bairros
         */
        $this->load->model('SomaBairro', 'soma');
        $mooca ['total'] = $this->soma->mooca();
        $ema ['total'] = $this->soma->ema();
        $zelina ['total'] = $this->soma->zelina();
        $prudente ['total'] = $this->soma->prudente();
        $tatuape ['total'] = $this->soma->tatuape();
        $analia ['total'] = $this->soma->analia();
        $lucas ['total'] = $this->soma->lucas();
        $agua ['total'] = $this->soma->agua();
        $ivone ['total'] = $this->soma->ivone();
        $bancario ['total'] = $this->soma->bancario();
        $primavera ['total'] = $this->soma->primavera();
        

        /**
         * URL para encontrar os bairros
         */
        $mooca ['url'] = base_url('index.php/tabelas/mooca');
        $ema ['url'] = base_url('index.php/tabelas/ema');
        $zelina ['url'] = base_url('index.php/tabelas/zelina');
        $prudente ['url'] = base_url('index.php/tabelas/prudente');
        $tatuape ['url'] = base_url('index.php/tabelas/tatuape');
        $analia ['url'] = base_url('index.php/tabelas/analia');
        $lucas ['url'] = base_url('index.php/tabelas/lucas');
        $agua ['url'] = base_url('index.php/tabelas/agua');
        $ivone ['url'] = base_url('index.php/tabelas/ivone');
        $bancario ['url'] = base_url('index.php/tabelas/bancario');
        $primavera ['url'] = base_url('index.php/tabelas/primavera');

        /**
         * Carregamentos de view
         */
        $this->load->view('adm/bairros',$mooca);
        $this->load->view('adm/bairroe',$ema);
        $this->load->view('adm/bairros',$zelina);
        $this->load->view('adm/bairroe',$prudente);
        $this->load->view('adm/bairros',$tatuape);
        $this->load->view('adm/bairroe',$analia);
        $this->load->view('adm/bairros',$lucas);
        $this->load->view('adm/bairroe',$agua);
        $this->load->view('adm/bairros',$ivone);
        $this->load->view('adm/bairroe',$bancario);
        $this->load->view('adm/bairros',$primavera);
    }

}
