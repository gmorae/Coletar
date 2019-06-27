<?php 
class Validacao_dados {
 
    /**
     * Biblioteca responsavel por: 
     * trazer do formulario os dados pessoasis via metodo post
     */
    private $form_validation;

    function __construct() {
        $ci = & get_instance();
        $this->form_validation = $ci->form_validation;
    }

    public function getData(){
        $data ['first_name'] = $_POST['first_name'];
        $data ['phone'] = $_POST['phone'];
        $data ['email']= $_POST['email'];
        $data ['password']= md5($_POST['password']);
        
        return $data;
    }
}
