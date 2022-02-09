<?php

	


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
				
						NºInicial:<input type="text" name="txtn1" value="<?php echo($valor1);?>" > <br>
						NºFinal:<input type="text" name="txtn2" value="<?php echo($valor2);?>" > <br>
						<div id="container_opcoes">
						<input type="submit" name="btncalc" value ="Calcular" id="botaocalcular" >	
						</div>
						<p class="textimparepar">NºPares:</p>	
						<div id="caixapar">
						
						</div>
						<p class="textimparepar">NºImpar:</p>
						<div id="caixaimpar">
						
						</div>
						
					</form>
            </div>
           
        </div>
        
	<script src="menu.js"></script>	
	</body>

</html>