<?php 
session_start();
include('conexao.php');


$nome =  $_POST['nome'];
$valor =  $_POST['valor'];
$datacompra =  $_POST['datacompra'];
$datavencimento =  $_POST['datavencimento'];
$localcompra =  $_POST['localcompra'];
$descricao =  $_POST['descricao'];
$idtipopagamento  =$_POST['pagamento'];


  $sql2 = "SELECT idtipopagamento FROM tipopagamento WHERE nome ='".$idtipopagamento."' ";
    $dados2 = mysqli_query($conexao, $sql2);
    $linha2 = mysqli_fetch_assoc($dados2);
    $idresgatado2=$linha2['idtipopagamento'];

$idobra =  $_POST['idobra'];
$idcategoria =  $_POST['idcategoria'];

$idproduto =  $_POST['idproduto'];



//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	$sql = "insert into material values (null,'".$nome."','".$valor."','".$datacompra."','".$datavencimento."','".$localcompra."','".$descricao."','".$idobra."','".$idcategoria."','".$idresgatado2."','".$idproduto."')"; 
	//}

if (mysqli_query($conexao, $sql) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>
    
 window.location.href='material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto&&nomeProduto=nome'</script>";
     
    
 

	
		}else{
			echo"<script type='text/javascript'>
    alert('ERRO');
   window.location.href='material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto'</script>";
	
			}
		
	


?>