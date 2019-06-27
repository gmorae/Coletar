<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    /**
     * Controlador responsavel por:
     * Mostrar a area do usuario
     */
    public function __construct(){
        /**
         * Metodo construtor para verificar se ja está cadastrado no sistema 
         */
        parent::__construct();
        $group = 'members';
        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'Cadastre-se para que poassamos retirar seu óleo!');
            redirect('auth/create_user');
        }
        $this->load->view('common/header');
        $this->load->view('usuario/navbar_usuario');
        $this->load->model('UsuarioModel', 'usuario');
        $id = $this->ion_auth->user()->row()->id;
        $this->load->view('common/footer');
        
    }
    
    public function index(){
        $this->load->model('OleoModel', 'oleo');
        $this->oleo->doar();
        $data['table'] = $this->oleo->listar();
        $this->load->view('usuario/pagina_doar', $data);
    }
    public function tabela(){
        $this->load->model('OleoModel', 'oleo');
        $this->oleo->doar();
        $data['titulo'] = 'Depósitos';
        $data['table'] = $this->oleo->listarUsuario();
        $this->load->view('adm/tabela_mes', $data);
    }

    public function editar(){
        
        $id = $this->ion_auth->user()->row()->id;
        $this->usuario->atualizar($id);
        $this->load->view('usuario/editar');
    }
    public function removerOleo($id)
    {
        $this->load->model('OleoModel');
        $this->OleoModel->removerOleo($id);
        redirect('usuario');
    }
    public function removerOleoUsuario($id)
    {
        $this->load->model('OleoModel');
        $this->OleoModel->removerOleoUsuario($id);
        redirect('usuario');
    }

    public function removerUsuario()
    {
        $id = $this->ion_auth->user()->row()->id;
        $this->ion_auth->delete_user($id);
        $this->usuario->remover($id);
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('auth/login', 'Conta excluida');
    }
    
}
