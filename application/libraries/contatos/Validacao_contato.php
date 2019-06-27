<?php 
class Validacao_contato {

    /**
     * Biblioteca responsavel por: 
     * trazer informações do formulario via metodo post
     * e fazer a validação dos campos
     */
    private $form_validation;
    function __construct() {
        $ci = & get_instance();
        $this->form_validation = $ci->form_validation;
    }

    public function getData(){
        $data ['nome'] = $_POST['nome'];
        $data ['email']= $_POST['email'];
        $data ['assunto']= $_POST['assunto'];
        $data ['mensagem']= $_POST['mensagem'];
        
        return $data;
    }
    public function validate(){
        $this->form_validation->set_rules('nome','nome','required|min_length[2]|max_length[30]');
        $this->form_validation->set_rules('email','email','required|min_length[10]|max_length[512]');
        $this->form_validation->set_rules('assunto','assunto','required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('mensagem','mensagem','required|min_length[5]|max_length[1000]');
    }
}
