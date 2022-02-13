<?php
/**************************************************
 * Objetivo: Arquivo responsalvel por reunir e padronizar alguns dos calculos que serão utilizados nos projetos!
 * Autor: Ezequiel Mathias
 * Data: 13/02/2022
 * Versão: 1.0
 **************************************************
 */

function calculoscalculadora($valor1, $valor2, $calculo, $contador){

    $resultado = (string) null;
    
    while($contador <= $valor2){
        $calculo = $valor1 * $contador;
        $resultado .= "$valor1 x $contador = $calculo <br>";
        $contador++;
    }

    return $resultado;

}
function calculosmedia($nota1, $nota2, $nota3, $nota4){
    $media = (int) 0;
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    return $media;

 }
 
 function operaçaoMatematicaCalculadora($numero1, $numero2, $operaçao){
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