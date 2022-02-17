<?php
/**************************************************
 * Objetivo: Arquivo responsalvel por reunir e padronizar os calculos que serão utilizados nos projetos!
 * Autor: Ezequiel Mathias
 * Data: 13/02/2022
 * Versão: 1.0
 **************************************************
 */

 //função do projeto Tabuada
 
function calculosTabuada(){

    $vetor = array(0 , 0 , 0 , 0 , '');

    if(isset($_POST['btncalc'])){

		$vetor[0] = $_POST['txtn1'];
		$vetor[1] = $_POST['txtn2'];
		
		if($vetor[0] == null || $vetor[1] == null)
			echo ERRO_MSG_CAIXA_VAZIA;
		
		else if(!is_numeric($vetor[0]) || !is_numeric($vetor[1]))
			echo ERRO_MSG_CARACTER_DO_NUMERO;
		else if($vetor[0] == 0)
			echo ERRO_TABUADA_DO_ZERO;	
		else{
			while($vetor[2] <= $vetor[1]){
                $vetor[3] = $vetor[0] * $vetor[2];
                $vetor[4] .= "$vetor[0] x $vetor[2] = $vetor[3] <br>";
                $vetor[2]++;
            }
        
            return $vetor[4];
		}
		
	}   

}

//função do projeto Media
function calculosmedia(){

    $vetormedia = array(0, 0 , 0 , 0 , 0);
    $vetormedia[0] = 0;
    $vetormedia[1] = 0;
    $vetormedia[2] = 0;
    $vetormedia[3] = 0;
    $vetormedia[4] = 0;

    if(isset($_POST['btncalc'])){
        $vetormedia[0] = $_POST['txtn1'];
        $vetormedia[1] = $_POST['txtn2'];
        $vetormedia[2] = $_POST['txtn3'];
        $vetormedia[3] = $_POST['txtn4'];
        
        //Verificação das caixas vazias
        if($vetormedia[0] == null || $vetormedia[1] == "" || $vetormedia[2] == null || $vetormedia[3] == null){
        echo ERRO_MSG_CAIXA_VAZIA;

        }else{
        
        //Verificação de string nas caixas 
        if(!is_numeric($vetormedia[0]) || !is_numeric($vetormedia[1]) || !is_numeric($vetormedia[2]) || !is_numeric($vetormedia[3])){
                echo ERRO_MSG_CARACTER_DO_NUMERO;
             }else{
                $vetormedia[4] = ($vetormedia[0] + $vetormedia[1] + $vetormedia[2] + $vetormedia[3]) / 4;
                 }
            }   
        }
            return $vetormedia[4];
 }

 //função do projeto Calculadora

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

//funções do projeto Par e Impar

function pareimpartextboxinicial(){
    $contador = 0;
    $resultadotextboxinicial = (String) null;

    while($contador <= 500){
		$resultadotextboxinicial .= '<option value="' . $contador . '">'. $contador .'</option>';
		$contador++;	
	}
    return 	$resultadotextboxinicial;
}
function pareimpartextboxfinal(){
    $contador2 = 100;
    $resultadotextboxfinal = (String) null;
    
    while($contador2 <= 1000){
		$resultadotextboxfinal .= '<option value="' . $contador2 . '">'. $contador2 .'</option>';
		$contador2++;	
	}
    return 	$resultadotextboxfinal;
}
function errosimparepar(){
    if(isset($_POST['btncalc'])){
        $vetor2 = array(0 , 0 );
        $vetor2[0] = $_POST['numeroinicial'];
		$vetor2[1] = $_POST['numerofinal'];

		if($vetor2[0] == $vetor2[1]){
			echo ERRO_NUMEROS_IGUAIS_IMPAR_PAR;
		}
		else if($vetor2[0] > $vetor2[1]){
			echo ERRO_NUMERO_INICIAL_MAIOR;
		}
        else if ($vetor2[0] == -1 && $vetor2[1] == -1){
			echo ERRO_MSG_SELEÇAO_DE_NUMERO;
		}

}
}

?>