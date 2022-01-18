<?php
//DADOS PARA CONEXÃO
$server='localhost';
$user= 'root';
$pass='';
$bd='cdg';

//CONEXÃO COM O BANCO
$conexao = mysqli_connect($server,$user,$pass,$bd)  or die("Erro na seleção do banco");

 //para testar se o banco conectou

   /*$connect = mysqli_connect($server,$user,$pass,$bd);
   if(!$connect){
	die('Não conectou! - ' . mysql_error());

   }

   echo 'Conectou';
   */
   

  
	
?>