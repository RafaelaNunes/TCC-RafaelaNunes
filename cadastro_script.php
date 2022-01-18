<?php 
include('conexao.php');

$nome =  $_POST['nome'];
$email =  $_POST['email'];
$senha =  $_POST['senha'];
$confirmesenha =  $_POST['confirmesenha'];


if ($email != null && $nome != null ) {
	if ($senha == $confirmesenha) {
		$sql = "insert into usuario values (null,'".$nome."','".$email."','".$senha."')"; 

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
    alert('Usuario cadastrado com sucesso');
    window.location.href='login.php';</script>";
	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
    window.location.href='cadastro.php';</script>";
	
			}
		
	}else{
		echo"<script type='text/javascript'>
    alert('Senhas diferentes');
    window.location.href='cadastro.php';</script>";
	}
	
}else{
	echo"<script type='text/javascript'>
    alert('Preencha todos os campos');
    window.location.href='cadastro.php';</script>";
}


?>


