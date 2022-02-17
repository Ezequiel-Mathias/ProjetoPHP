
<?php
	//Importaçoes
	require_once('../Erros/erros.php');
	require_once('../Calculos/calculos.php');
	//vetor1 tem o intuito de substituir variaveis string e diminuir o codigo e vetor 2 com a mesma finalidade so que com int !
	$vetor1 = array('', '', '','');
	$vetor2 = array(0 , 0 , 0 , 0);
	
	//parte dos calculos e erros
	if(isset($_POST['btncalc'])){
		$vetor2[0] = $_POST['numeroinicial'];
		$vetor2[1] = $_POST['numerofinal'];

		errosimparepar();
		
		if($vetor2[0] >= 0 || $vetor2[1] >= 0){
			//caixa1 == contador
			while($vetor2[0] <= $vetor2[1]){
			
			if($vetor2[0] % 2 == 0){
				$vetor2[2]++;
				$vetor1[0] .= "$vetor2[0] <br>";	
			}else{
				$vetor2[3]++;
				$vetor1[1] .= "$vetor2[0] <br>";
			}
			$vetor2[0]++;
			}
		}
		
	} 
	//funçoes importadas textbox
	$vetor1[2] = pareimpartextboxinicial();
	$vetor1[3] = pareimpartextboxfinal();

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

	 <!--Par e Impar  -->
        <div id="conteudo">
            <div id="titulo">
                Par e Impar
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
				
						NºInicial:<select name="numeroinicial" id="numeroinicial">
						<option value="-1" selected>Por favor selecione um numero</option>
						<?=$vetor1[2];?>
						</select>

						NºFinal: <select name="numerofinal" id="numerofinal">
						<option value="-1">Por favor selecione um numero</option>
						<?=$vetor1[3];?>
						</select> <br>

						<div id="container_opcoes">
						<input type="submit" name="btncalc" value ="Calcular" id="botaocalcular" >	
						</div>
						<p class="textpar">NºPares:</p>	

						<div id="caixapar">
							<?= $vetor1[0]; ?>
						</div>

						<p class="textpar">Quantidade de Numeros pares: <?=$vetor2[2];?></p>

						<p class="textimpar">NºImpar:</p>

						<div id="caixaimpar">
						<?= $vetor1[1]; ?>
						</div>

						<p class="textimpar2">Quantidade de <br>Numeros Impares: <?=$vetor2[3];?></p>
					</form>
            </div>
           
        </div>
        
	<script src="../Menu/menu.js"></script>	
	</body>

</html>