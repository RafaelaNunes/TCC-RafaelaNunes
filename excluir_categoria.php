 <?php 
session_start();
include('conexao.php');




$idobra= $_GET['idobra'] ?? '';
$idcategoria = $_GET['idcategoria'] ?? '';





	 $sql =  "DELETE FROM `material` WHERE `material`.`idcategoria` = '".$idcategoria ."'";
	 $dados = mysqli_query($conexao, $sql);
	
    

    $sql2 =  " DELETE FROM `produto` WHERE `produto`.`idcategoria` = '".$idcategoria ."'";
    $dados2 = mysqli_query($conexao, $sql2);
	
	 $sql3 = "DELETE FROM `categoria` WHERE `categoria`.`idcategoria` = '".$idcategoria ."'";

if (mysqli_query($conexao, $sql3) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>

  window.location.href='categoria.php?idobra=$idobra'</script>";

     }else{
			echo"<script type='text/javascript'>
   
   window.location.href='categoria.php?idobra=$idobra'</script>";
	
			}
	
			

			
	