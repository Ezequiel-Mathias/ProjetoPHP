<?php
	//Imports
	 require_once('../Erros/erros.php');
	 require_once('../Calculos/calculos.php');
	
	 $valor1 = (double) 0;
	 $valor2 = (double) 0;
	 $resultado = (double) 0;
	 $opçao = (string) null;

	if(isset($_POST['btncalc'])){
		
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];

		//Verificação das caixas vazias
		if($_POST['txtn1'] == '' || $_POST['txtn2'] == ''){
			echo ERRO_MSG_CAIXA_VAZIA;

		}else
		{
				
			if(!isset($_POST['rdocalc']))
			echo ERRO_MSG_OPERAÇAO_CALCULO;

			else{
				//Verificação das caixas com string
				if(!is_numeric($valor1) || !is_numeric($valor2))
				echo ERRO_MSG_CARACTER_DO_NUMERO;

				else{
					$opçao = strtoupper($_POST['rdocalc']);
					//Função importada
					$resultado = operaçaoMatematicaCalculadora($valor1, $valor2, $opçao);
					}
				 }
					
			 }

		}
?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="../Calculadora/stylesDoArquivo/style.css">
		<link rel="stylesheet" href="../Calculadora/stylesDoArquivo/css.css">
		<link rel="stylesheet" href="../Calculadora/stylesDoArquivo/menu.css">
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
            <li><a href="../Tabuada/index.php">Tabuada</a> </li>
            <li><a href="../PareImpar/index.php">Pares e Impar</a> </li>
           
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="menu.js"></script>

	 <!--Calculadora-->
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
				
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" <?=$opçao == 'SOMAR'?'checked':null;?>>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair"<?=$opçao == 'SUBTRAIR'?'checked':null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$opçao == 'MULTIPLICAR'?'checked':null;?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$opçao == 'DIVIDIR'?'checked':null;?>  >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						<?=$resultado?>
						</div>
						
					</form>
            </div>
           
        </div>
     <!--Importação da pasta menu JS-->
	<script src="../Menu/menu.js"></script>	
	</body>

</html>