<?php 
class Validacao_endereco {
    /**
     * Biblioteca responsavel por:
     * trazer o endereço do formulario via metedo post
     * e fazer a validação dos campos
     */
    private $form_validation;
    function __construct() {
        $ci = & get_instance();
        $this->form_validation = $ci->form_validation;
    }

    public function getData(){
        $data ['cep'] = $_POST['cep'];
        $data ['endereco']= $_POST['rua'];
        $data ['bairro']= $_POST['bairro'];
        $data ['cidade']= $_POST['cidade'];
        $data ['estado']= $_POST['uf'];
        $data ['numero']= $_POST['numero'];
        $data ['complemento']= $_POST['complemento'];
        return $data;
    }
    public function validate(){
        $this->form_validation->set_rules('cep','cep','required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('numero','numero','required|min_length[1]|max_length[5]');
        $this->form_validation->set_rules('complemento','complemento','');
    }
}
