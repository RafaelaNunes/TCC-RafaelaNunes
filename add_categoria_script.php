<?php 
session_start();
include('conexao.php');


$nome =  $_POST['nome'];
$descricao =  $_POST['descricao'];
$idobra =  $_POST['idobra'];



//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	$sql = "insert into categoria values (null,'".$nome."','".$descricao."','".$idobra."')"; 
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