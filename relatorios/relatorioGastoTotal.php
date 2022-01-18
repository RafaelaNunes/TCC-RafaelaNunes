<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/estiloBusca.css">
	
</head>


<body>


<?php 
	
	include "../conexao.php";
	include('../verifica_login.php');

    
  $idobra= $_GET['idobra'] ?? '';
   
    
    

    
    
    

	?>

<!--------------------------------------  TOPO------------------------------ -->
<div class="topo">

	<input type="checkbox" id="check">
	<label id="icone" for="check"><img width="30" height="33" src="../Imagens/icone.png"></label>

	<div class="barra">
		
		<nav>
			<a href="index.php"><div class="link"> Home</div></a>
			<a href="obras.php"><div class="link"> Minhas Obras</div></a>
			  <div class="link"><?php echo "<a href ='categoria.php?idobra=$idobra' class='editar'> Categoria</a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='../buscar_produtos.php?idobra=$idobra' class='editar'> Produtos</a> <br> "; ?></div>

			<div class="link"><?php echo "<a href ='../relatorio.php?idobra=$idobra' class='editar'> Relatorios </a> <br> "; ?></div>

			<div class="link"><?php echo "<a href ='perfil_obra.php?idobra=$idobra' class='editar'> Perfil Obra</a> <br> "; ?></div>
			<a href="logout.php"><div class="link"> Sair</div></a>
			
		</nav>
	</div>
</div>
<!-------------------------------------- -- FIM DO TOPO------------------------------ -->
<div class="conteiner"> 

	
<?php 
echo "<br><br>";
echo " <h1 class='tituloRelatorio'> Relatorio Gastos Total </h1>" ;

?>

 	<table  class="tabelaCategoria" style="margin-top: -30px;">

	<tr>
        <td class="tituloTabela">Categoria</td> 
        <td class="tituloTabela">&nbsp;</td>  
        <td class="tituloTabela">&nbsp;</td>
    </tr>


     
    <?php
    
	                 
	echo "<tr class='tamanhoColuna'>";
	/* pegar o nome da categoria */ 
$sql2 ="SELECT nome , idcategoria FROM categoria WHERE idobra ='".$idobra."' ";
$dado2 = mysqli_query($conexao, $sql2);

	

while ($linha2 = mysqli_fetch_assoc($dado2)) {
	$nome=$linha2['nome'];
	$IDCategoria=$linha2['idcategoria'];
	
	
// faz a soma por categoria
	$query2 = "SELECT   SUM(valor)  FROM material WHERE idcategoria ='".$IDCategoria."' "; ;
    $result2 = $conexao->query($query2);

     while ($row2 = mysqli_fetch_array($result2)) {
          		$valor= $row2['SUM(valor)'];
    echo "<br>";
    
	echo "  <td class='nome2' > $nome   </td>   
                      
        <td class='tamanho' > R$$valor,00   </td> 

         </tr>";


}
}

		
	
 //soma total
//soma total
$query = "SELECT  SUM(valor) FROM material WHERE idobra = '$idobra'" ;
$result = $conexao->query($query);
while ($row = mysqli_fetch_array($result)) {
	$valortotal= $row['SUM(valor)'];
    echo "<br>";
}

    echo "  <td class='nome2' style='color:red;' > Valor total   </td>   
                      
        <td class='tamanho' style='color:red;' > R$$valortotal,00   </td> 
	
    </tr>";







    ?>
     
</table>

  <div class="divAdd"><?php echo "<a href ='../relatorio.php?idobra=$idobra' class='linkAdd'> Volta</a> <br> "; ?></div>
</div>
</body>
</html>
