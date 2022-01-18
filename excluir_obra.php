 <?php 
session_start();
include('conexao.php');




$idobra= $_GET['idobra'] ?? '';






	 $sql =  "DELETE FROM `material` WHERE `idobra` = '".$idobra."'";
	 $dados = mysqli_query($conexao, $sql);
	
    

    $sql2 =  " DELETE FROM `produto` WHERE `idobra` = '".$idobra."'";
    $dados2 = mysqli_query($conexao, $sql2);
	
	 $sql3 = "DELETE FROM `categoria` WHERE `idobra` = '".$idobra."'";
	 $dados3 = mysqli_query($conexao, $sql3);

	 $sql4 = "DELETE FROM `obra` WHERE `idobra` = '".$idobra."'";

if (mysqli_query($conexao, $sql4) or die( mysqli_error($conexao ) )) {
	
    echo"<script type='text/javascript'>

  window.location.href='obras.php'</script>";

     }else{
			echo"<script type='text/javascript'>
   
   window.location.href='obras.php'</script>";
	
			}
	