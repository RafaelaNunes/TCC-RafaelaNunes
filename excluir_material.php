<?php 
session_start();
include('conexao.php');




$idobra= $_GET['idobra'] ?? '';
$idcategoria = $_GET['idcategoria'] ?? '';
$idproduto= $_GET['idproduto'] ?? '';
$idmaterial= $_GET['idmaterial'] ?? '';



//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	 $sql =  "DELETE FROM `material` WHERE `material`.`idmaterial` = '".$idmaterial."'";
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>

  window.location.href='material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto'</script>";

     }else{
			echo"<script type='text/javascript'>
   
   window.location.href='material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto'</script>";
	
			}
 
	


?> 