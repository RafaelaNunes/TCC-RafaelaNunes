
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

    $categotia =  $_POST['categotia'];
    $idobra= $_POST['idobra'];
   
    $sql = "SELECT idcategoria FROM categoria WHERE nome ='".$categotia."' ";
    $dados = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($dados);
    $idresgatado=$linha['idcategoria'];
    

    $sql2 ="SELECT * FROM material WHERE idcategoria ='".$idresgatado."' ";
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
 
$query = "SELECT  SUM(valor) FROM material WHERE idcategoria = '$idresgatado'" ;
$result = $conexao->query($query);

// Imprimir resultado


//pega o nome do material 
echo "<br><br>";
echo " <h1 class='tituloRelatorio'> Relatorio Gastos da Categoria  $categotia </h1>" ;
 ?>
		
	<table  class="tabelaCategoria">

	<tr>
        <td class="tituloTabela">Produto</td> 
        <td class="tituloTabela">Data da compra</td> 
        <td class="tituloTabela">Valor</td>
        <td class="tituloTabela">&nbsp;</td>  
        
    </tr>


     
    <?php
    
	                 
	echo "<tr class='tamanhoColuna'>";
	while ($linha2 = mysqli_fetch_assoc($dados2)) {
	$produtos=$linha2['nome'];
	$valor=$linha2['valor'];
	$data=$linha2['datadacompra'];
	$data=implode("/",array_reverse(explode("-",$data)));

          			echo "  <td class='nome2' > $produtos   </td>  
          			<td class='nome2' > $data   </td>  
                      
        <td class='tamanho' > R$$valor,00   </td> 

        
    
    </tr>";
	
	
}
  while ($row = mysqli_fetch_array($result)) {
	$valortotal =$row['SUM(valor)'];

	echo "  <td class='nome2' style='color:red;' > Valor total   </td>   
	 <td class='nome2'  >    </td>   
                      
        <td class='tamanho' style='color:red;' > R$$valortotal,00   </td> 
	
    </tr>";
}




    ?>
     
</table>

	
  
   <div class="divAdd"><?php echo "<a href ='relatorioCategoria.php?idobra=$idobra' class='linkAdd'> Voltar</a> <br> "; ?></div>

</body>
</html>