<?php
	$caixa1 = (int) 0;
	$caixa2 = 0;
	$resultadopar = (String) null;
	$resultadoimpar = (String) null;
	$quantidadepar = 0;
	$quantidadeimpar = 0;
	$contador = 0;
	$resultacheckbox = (String) null;
	
	
	if(isset($_POST['btncalc'])){
		$caixa1 = $_POST['numeroinicial'];
		$caixa2 = $_POST['numerofinal'];

		
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
			
	
	}
	else if(isset($_POST['numeroinicial'])){
		while($contador <= 500){
			$contador++;
			$resultacheckbox .= $contador;
			$contador++;
		}
	}
	else if($caixa1 == 0 || $caixa2 == 0 ){
		echo '<h1 class="erros">ERRO selecione um numero nas duas caixas </h1>';
	}
		
	

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="menu.css">
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

	 <!--Tabuada-->
        <div id="conteudo">
            <div id="titulo">
                Par e Impar
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
				
						NºInicial:<select name="numeroinicial" id="numeroinicial">
						<option value="0" selected>Por favor selecione um numero</option>
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="6" >6</option>
							<option value="7" >7</option>
							<option value="8" >8</option>
							
						</select>
						NºFinal: <select name="numerofinal" id="numerofinal">
						<option value="0">Por favor selecione um numero</option>
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="6" >6</option>
							<option value="7" >7</option>
							<option value="8" >8</option>
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
        
	<script src="menu.js"></script>	
	</body>

</html>