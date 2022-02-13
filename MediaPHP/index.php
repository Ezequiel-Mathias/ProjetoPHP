<?php
//Importaçoes
require_once('../Calculos/calculos.php');
require_once('../Erros/erros.php');

$nota1 = (double) 0;
$nota2 = (double) 0;
$nota3 = (double) 0;
$nota4 = (double) 0;
$media = 0;

if(isset($_POST['btncalc'])){
$nota1 = $_POST['txtn1'];
$nota2 = $_POST['txtn2'];
$nota3 = $_POST['txtn3'];
$nota4 = $_POST['txtn4'];

//Verificação das caixas vazias
if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == ""){
$media = 0;
echo ERRO_MSG_CAIXA_VAZIA;

}else{

//Verificação de string nas caixas 
if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)){
        $media = 0;  
        echo ERRO_MSG_CARACTER_DO_NUMERO;
     }else{
        $media = calculosmedia($nota1,$nota2,$nota3,$nota4);
         }
    }   
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="../MediaPHP/stylesDoArquivo/style.css">
       <link rel="stylesheet" href="../MediaPHP/stylesDoArquivo/menu.css">
        <meta charset="utf-8">
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
            <li><a href="../Calculadora/index.php">Calculadora Simples</a> </li>
            <li><a href="../Tabuada/index.php">Tabuada</a> </li>
            <li><a href="../PareImpar/index.php">Pares e Impar</a> </li>
           
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="menu.js"></script>
    <!--Parte do conteudo-->
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo ($nota1);?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo ($nota2);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo ($nota3);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo ($nota4);?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo($media); ?>
            </footer>
        </div>
        
		<script src="../Menu/menu.js"></script>	
	</body>


    

</html>