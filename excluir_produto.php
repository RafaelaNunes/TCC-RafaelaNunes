 <?php 
session_start();
include('conexao.php');




$idobra= $_GET['idobra'] ?? '';
$idcategoria = $_GET['idcategoria'] ?? '';
$idproduto= $_GET['idproduto'] ?? '';




//if ($nome != null && $dataInicio != null && $dataPrevisao != null && $valorEstimado != null ) {
	 $sql =  "DELETE FROM `material` WHERE `material`.`idproduto` = '".$idproduto."'";
	 $dados = mysqli_query($conexao, $sql);
	
    

    $sql2 =  " DELETE FROM `produto` WHERE `produto`.`idproduto` = '".$idproduto."'";
	

if (mysqli_query($conexao, $sql2) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>

  window.location.href='produto.php?idcategoria=$idcategoria&&idobra=$idobra'</script>";

     }else{
			echo"<script type='text/javascript'>
   
   window.location.href='material.php?idcategoria=$idcategoria&&idobra=$idobra'</script>";
	
			}
	
			

			
	
 
	


?>