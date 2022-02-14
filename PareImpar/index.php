



<?php
	//Importaçoes
	require_once('../Erros/erros.php');
	require_once('../Calculos/calculos.php');

	$resultadotextboxinicial = (String) null;
	$resultadotextboxfinal = (String) null;
	$caixa1 = (int) 0;
	$caixa2 = 0;
	$resultadopar = (String) null;
	$resultadoimpar = (String) null;
	$quantidadepar = 0;
	$quantidadeimpar = 0;
	
	
	
	
	if(isset($_POST['btncalc'])){
		$caixa1 = $_POST['numeroinicial'];
		$caixa2 = $_POST['numerofinal'];

		if($caixa1 == $caixa2){
			echo ERRO_NUMEROS_IGUAIS_IMPAR_PAR;
		}


		else if($caixa1 > $caixa2){
			echo ERRO_NUMERO_INICIAL_MAIOR;
		}

		else if($caixa1 >= 0 || $caixa2 >= 0){
		
			//caixa1 == contador
			while($caixa1 <= $caixa2){
			
			if($caixa1 % 2 == 0){
				$quantidadepar++;
				$resultadopar .= "$caixa1 <br>";	
			}else{
				$quantidadeimpar++;
				$resultadoimpar .= "$caixa1 <br>";
			}
			$caixa1++;
			}
		}else{
			echo ERRO_MSG_SELEÇAO_DE_NUMERO;
		}
			
			

	} 

	//funçoes importadas
	$resultadotextboxinicial = pareimpartextboxinicial();
	$resultadotextboxfinal = pareimpartextboxfinal();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../PareImpar/stylesDoArquivo/style.css">
		<link rel="stylesheet" href="../PareImpar/stylesDoArquivo/css.css">
		<link rel="stylesheet" href="../PareImpar/stylesDoArquivo/menu.css">
		<title>Par e Impar</title>
    </head>
	<body>
	<!--Menu Burguer-->	
	<div id="menu-bar">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        
        </div>
        <ul class="nav" id="nav">
            <li><a href="../MediaPHP/index.php">Calculo De Média</a> </li>
            <li><a href="../Calculadora/index.php">Caculadora Simples</a> </li>
            <li><a href="../Tabuada/index.php">Tabuada</a></li>
           
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="menu.js"></script>

	 <!--Tabuada  -->
        <div id="conteudo">
            <div id="titulo">
                Par e Impar
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
				
						NºInicial:<select name="numeroinicial" id="numeroinicial">
						<option value="-2" selected>Por favor selecione um numero</option>
						<?=$resultadotextboxinicial?>
						</select>

						NºFinal: <select name="numerofinal" id="numerofinal">
						<option value="-1">Por favor selecione um numero</option>
						<?=$resultadotextboxfinal?>
						</select> <br>

						<div id="container_opcoes">
						<input type="submit" name="btncalc" value ="Calcular" id="botaocalcular" >	
						</div>
						<p class="textpar">NºPares:</p>	

						<div id="caixapar">
							<?= $resultadopar; ?>
						</div>

						<p class="textpar">Quantidade de Numeros pares: <?=$quantidadepar;?></p>

						<p class="textimpar">NºImpar:</p>

						<div id="caixaimpar">
						<?= $resultadoimpar; ?>
						</div>

						<p class="textimpar2">Quantidade de <br>Numeros Impares: <?=$quantidadeimpar;?></p>
					</form>
            </div>
           
        </div>
        
	<script src="../Menu/menu.js"></script>	
	</body>

</html>