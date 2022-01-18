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

    $pagamento =  $_POST['pagamento'];
    $idobra= $_POST['idobra'];
   
    $sql = "SELECT *  FROM tipopagamento  WHERE nome ='".$pagamento."' ";
    $dados = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($dados);
    $idresgatado=$linha['idtipopagamento'];
    

    $sql2 ="SELECT * FROM material WHERE idtipopagamento  ='$idresgatado' AND idobra = '$idobra'";
    $dados2 = mysqli_query($conexao, $sql2);
    
    

	?>

<!--------------------------------------  TOPO------------------------------ -->
<div class="topo">

	<input type="checkbox" id="check">
	<label id="icone" for="check"><img width="30" height="33" src="../Imagens/icone.png"></label>

	<div class="barra">
		
		<nav>
			<nav>
			<a href="../index.php"><div class="link"> Home</div></a>
			<a href="../obras.php"><div class="link"> Minhas Obras</div></a>
			  <div class="link"><?php echo "<a href ='../categoria.php?idobra=$idobra' class='editar'> Categoria</a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='../buscar_produtos.php?idobra=$idobra' class='editar'> Produtos</a> <br> "; ?></div>

			<div class="link"><?php echo "<a href ='../relatorio.php?idobra=$idobra' class='editar'> Relatorios </a> <br> "; ?></div>
			<div class="link"><?php echo "<a href ='../perfil_obra.php?idobra=$idobra' class='editar'> Perfil Obra</a> <br> "; ?></div>
			<a href="../logout.php"><div class="link"> Sair</div></a>
			
		</nav>
			
		</nav>
	</div>
</div>
<!-------------------------------------- -- FIM DO TOPO------------------------------ -->


	
<?php 
 
$query = "SELECT  SUM(valor) FROM material WHERE idtipopagamento  = '$idresgatado' AND idobra = '$idobra'"  ;
$result = $conexao->query($query);

// Imprimir resultado


//pega o nome do material 
echo "<br><br>";
echo " <h1 class='tituloRelatorio'> Relatorio Metodo Pagamento  $pagamento </h1>" ;
 ?>
		
	<table  class="tabelaCategoria">

	<tr>
        <td class="tituloTabela">Produto</td> 
        <td class="tituloTabela">Data da compra</td> 
        <td class="tituloTabela">Categoria</td> 
        <td class="tituloTabela">Valor</td>  
        
    </tr>


     
    <?php
    
	                 
	echo "<tr class='tamanhoColuna'>";
	while ($linha2 = mysqli_fetch_assoc($dados2)) {
	$nome=$linha2['nome'];
	$data=$linha2['datadacompra'];
	$idcategoria=$linha2['idcategoria'];

	$sql5 = "SELECT * FROM categoria WHERE idcategoria ='".$idcategoria."' ";
    $dados5 = mysqli_query($conexao, $sql5);
    $linha5 = mysqli_fetch_assoc($dados5);
    $nomeCategoria=$linha5['nome'];
                     

	
	$valor=$linha2['valor'];

		 //

         
          			echo "  <td class='nome2' > $nome   </td>   
          			<td class='nome2' > $data   </td>   
          			<td class='nome2' > $nomeCategoria   </td> 
          			<td class='nome2' > R$ $valor,00 </td> 

                      
                  

        
    
    </tr>";

           		

     
}
while ($row = mysqli_fetch_array($result)) {
	$valortotal =$row['SUM(valor)'];

	echo "  <td class='nome2' style='color:red;' > Valor total   </td>   
	<td class='nome2'>&nbsp;</td>  
	<td class='nome2'>&nbsp;</td>  
                      
        <td class='tamanho' style='color:red;' > R$$valortotal,00   </td> 
	
    </tr>";
}






    ?>
     
</table>

	
  
   <div class="divAdd"><?php echo "<a href ='relatorioPagamento.php?idobra=$idobra' class='linkAdd'> Voltar</a> <br> "; ?></div>

</body>
</html>