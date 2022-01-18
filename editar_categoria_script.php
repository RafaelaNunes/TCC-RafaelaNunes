<?php 
session_start();
include('conexao.php');



$idcategoria =  $_POST['idcategoria'];
$idobra =  $_POST['idobra'];
$nome=$_POST['nome'];



//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	  $sql = "update categoria set nome = '".$nome."'
            where idcategoria = ".$idcategoria;
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
 window.location.href='categoria.php?idobra=$idobra'</script>";
     
    


	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
   window.location.href='categoria.php'</script>";
	
			}
		
	


?>