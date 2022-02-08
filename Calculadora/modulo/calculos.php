<?php
/*****************************************************
 * Objetivo: Arquivo de funções matematicas que poderá ser utilizado dentro do projeto
 * Autor: Ezequiel Mathias 
 * Data: 04/02/2022
 * Versão: 1.0
 ******************************************************/

//Criaçao de uma funçao para realizar as operaçoes matematicas

require_once('modulo/config.php');

function operaçaoMatematica($numero1, $numero2, $operaçao){
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $tipodeCalculo =(String) $operaçao;
    $result = (double) 0;

    switch($tipodeCalculo){
        case "SOMAR":
        $result = $num1 + $num2;
        break;
        case "MULTIPLICAR":
        $result = $num1 * $num2;
        break;
        case'SUBTRAIR':
        $result = $num1 - $num2;
        break;
        default:
        if($num2 == 0)
        echo (ERRO_MSG_DIVISAO_0);
        else	
        $result = $num1 / $num2;
        break;
        
    }
    $result = round($result, 2);

return $result;	
     
}

?>