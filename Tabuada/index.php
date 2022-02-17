<?php
	//importaçoes
	require_once('../Calculos/calculos.php');
	require_once('../Erros/erros.php');
	$resultado = (string) null;
	$resultado = calculosTabuada();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../Tabuada/stylesDoArquivo/style.css">
		<link rel="stylesheet" href="../Tabuada/stylesDoArquivo/css.css">
		<link rel="stylesheet" href="../Tabuada/stylesDoArquivo/menu.css">
		<title>Tabuada</title>
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
            <li><a href="../PareImpar/index.php">Pares e Impar</a> </li>
           
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="menu.js"></script>

	 <!--Tabuada-->
        <div id="conteudo">
            <div id="titulo">
                Tabuada
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
				
						Tabuada:<input type="text" name="txtn1" value="0" > <br>
						Contador:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
						<input type="submit" name="btncalc" value ="Calcular" id="botaocalcular" >	
						</div>	
						<div id="resultado">
						<?=$resultado;?>
						</div>
						
					</form>
            </div>
           
        </div>
        
	<script src="../Menu/menu.js"></script>	
	</body>

</html>