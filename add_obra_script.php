<?php 
session_start();
include('conexao.php');

$id = "SELECT * FROM usuario WHERE nome ='".$_SESSION['nome']."'";
$dados = mysqli_query($conexao, $id);
$linha = mysqli_fetch_assoc($dados);
 // echo "$id";

$nome =  $_POST['nome'];
$dataInicio =  $_POST['dataInicio'];
$dataPrevisao =  $_POST['dataPrevisao'];
$valorEstimado =  $_POST['valorEstimado'];
$idusuario =  $linha['idusuario'];


//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
		$sql = "insert into obra values (null,'".$nome."','".$dataInicio."','".$dataPrevisao."',null,'".$valorEstimado."','".$idusuario."')"; 
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
    alert('Obra cadastrado com sucesso');
 window.location.href='obras.php'</script>";
     
    

	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
   window.location.href='add_obra.php'</script>";
	
			}
		
	


?>