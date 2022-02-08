<?php

	$valor1 = (int) 0;
	$valor2 = (int) 0;
	$resultado = (string) null;
	$calculo = (int) 0;
	$contador = (int) 0;

	if(isset($_POST['btncalc'])){
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];
		
		if($valor1 == null || $valor2 == null)
			echo '<h1 class="erros">Preencha todos os campos !</h1>';
		
		else if(!is_numeric($valor1) || !is_numeric($valor2))
			echo'<h1 class="erros">Não são permitido letras! </h1>';
		else{
			while($contador <= $valor2){
				$calculo = $valor1 * $contador;
				$resultado = `$valor1 x $contador = $calculo`;
				$contador++;
			}

		}
		
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
            <li><a href="#">Pares e Impar</a> </li>
           
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
				
						Tabuada:<input type="text" name="txtn1" value="<?php echo($valor1);?>" > <br>
						Contador:<input type="text" name="txtn2" value="<?php echo($valor2);?>" > <br>
						<div id="container_opcoes">
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?=$resultado?>
						</div>
						
					</form>
            </div>
           
        </div>
        
	<script src="menu.js"></script>	
	</body>

</html>