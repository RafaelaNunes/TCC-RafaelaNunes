<?php 
include('conexao.php');

$nome =  $_POST['nome'];
$dataInicio =  $_POST['datainicio'];
$dataPrevisao =  $_POST['datatermino'];
$valorEstimado =  $_POST['valorestimado'];
$idusuario =  $_POST['idusuario'];
$idobra = $_POST['idobra'];
 

//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
		 
$sql = "UPDATE `obra` SET `nome` = '$nome', `datainicio` = '$dataInicio',  `dataprevisaotermino` = '$dataPrevisao', `valorestimado` = '$valorEstimado'  WHERE `obra`.`idobra` = $idobra";


		//$sql = "insert into usuario values ('".$idusuario."','".$nome."','".$email."','".$senha."')"; 

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
    window.location.href='perfil_obra.php?idobra=$idobra&&idusuario=$idusuario';</script>";
	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
    window.location.href='perfil_obra.php';</script>";
	
			}

	//


?>