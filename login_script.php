<?php 
session_start();
include('conexao.php');
$email =  $_POST['email'];
$senha =  $_POST['senha'];



$query = "SELECT * FROM `usuario` WHERE `email` = '$email' and `senha`= '$senha'";
$dados = mysqli_query($conexao, $query);
$linha = mysqli_fetch_assoc($dados);
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
//echo $row;
  
if ($row > 0) {

     $_SESSION['idusuario']=$linha['idusuario'];
     $_SESSION['senha']=$linha['senha'];
     $_SESSION['email']=$linha['email'];
     $_SESSION['nome']=$linha['nome'];
     

     header('Location:index.php');
     exit();     
}

else{

    $errors .= "Você não digitou um login<br>";
	echo"<script type='text/javascript'>
    alert('Login ou senha invalidos');
    window.location.href='login.php';</script>";

	exit();



}

?>

