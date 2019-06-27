<?php 

class Curl {
    /**
     * Biblioteca responsavel por: 
     * buscar o cep e preencher os campos do formulario
     */
    private $endereco_ws = "http://viacep.com.br/ws";
    private $url_ws;
 
    public function consulta($cep) {
 
        $this->url_ws = $this->endereco_ws . '/' . $cep . '/json/';
 
        // abre a conexão
        $ch = curl_init();
 
        // define url
        curl_setopt($ch, CURLOPT_URL, $this->url_ws);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // executa o post
        $resultado = curl_exec($ch);
 
        if (curl_error($ch)) {
            echo 'Erro:' . curl_error($ch);
            return false;
        }
        return $resultado;
 
        // fecha a conexão
        curl_close($ch);
 
    }
 
}