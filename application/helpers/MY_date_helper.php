<?php
/**
 * Helper criado para fazer a mudança na funcao date (tradução do ingles para o portugues)
 */
function nome_mes($index){
        $mes = array('',
        'Janeiro', 
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro',
    );
    return $mes[$index];
}

function data_atual(){
    $d = Date('d');
    $m = Date('n');
    $y = Date('Y');

    $mes = nome_mes($m);

    return $mes;
}