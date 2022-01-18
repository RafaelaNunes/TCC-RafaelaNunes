<?php 
session_start();
include('conexao.php');


$nome =  $_POST['nome'];
$idcategoria =  $_POST['idcategoria'];
$idobra =  $_POST['idobra'];




//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	$sql = "insert into produto values (null,'".$nome."','".$idcategoria."')"; 
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
    
 window.location.href='produto.php?idcategoria=$idcategoria&&idobra=$idobra'</script>";
     
    


	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
   window.location.href='produto.php'</script>";
	
			} 
		
	


?> 