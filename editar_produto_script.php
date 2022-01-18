<?php 
session_start();
include('conexao.php');



$idcategoria =  $_POST['idcategoria'];
$idobra =  $_POST['idobra'];
$idproduto =  $_POST['idproduto'];

$nome=$_POST['nome'];



//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	  $sql = "update produto set nome = '".$nome."'
            where idproduto = ".$idproduto;
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
 window.location.href='produto.php?idobra=$idobra&&idcategoria=$idcategoria'</script>";
     
    


	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
   window.location.href='categoria.php'</script>";
	
			}
		
	


?>