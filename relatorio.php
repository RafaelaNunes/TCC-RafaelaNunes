<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estiloTabela.css">
	
</head>


<body>


<?php 
	include "conexao.php";
	include('verifica_login.php');

    $idobra= $_GET['idobra'] ?? '';
    $idcategoria = $_GET['idcategoria'] ?? '';
    $idproduto= $_GET['idproduto'] ?? '';

	$sql = "SELECT * FROM material WHERE idproduto ='".$idproduto."' ";

	$dados = mysqli_query($conexao, $sql);

	
	?>

<!--------------------------------------  TOPO------------------------------ -->
<div class="topo">

	<input type="checkbox" id="check">
	<label id="icone" for="check"><img width="30" height="33" src="Imagens/icone.png"></label>

	<div class="barra">
		
		<nav>
			<a href="index.php"><div class="link"> Home</div></a>
			
			<a href="obras.php"><div class="link"> Minhas Obras</div></a>
			
			<div class="link"><?php echo "<a href ='categoria.php?idobra=$idobra' class='editar'> Categoria</a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='buscar_produtos.php?idobra=$idobra' class='editar'> Produtos</a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='relatorio.php?idobra=$idobra' class='editar'> Relatorios </a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='perfil_obra.php?idobra=$idobra' class='editar'> Perfil Obra</a> <br> "; ?></div>
			
			<a href="logout.php"><div class="link"> Sair</div></a>
			
		</nav>
	</div>
</div>
<!-------------------------------------- -- FIM DO TOPO------------------------------ -->


	
		
	

	<div class="conteinerTabela">

		
	<table  class="tabelaCategoria">
	<tr>
        <td class="tituloTabela" style="text-align: center;	height: 52px; font-size: 25px;">Relatorios</td> 
      
    </tr>


     
    <?php
    
	                  
	echo "<tr  class='tamanhoColuna'>
	<td class='col'> <a href ='relatorios/relatorioCategoria.php?idobra=$idobra' class='editarRelatorio'> Categoria</a> </td>   </tr>

<tr  class='tamanhoColuna'>
<td class='col2' ><a href ='relatorios/relatorioGastoMensal.php?idobra=$idobra' class='editarRelatorio'> Gasto Mensal</a> </td> </tr>
	
<tr  class='tamanhoColuna'>
	  <td class='col'> <a href ='relatorios/relatorioGastoTotal.php?idobra=$idobra' class='editarRelatorio'> Gasto total</a> </td>  </tr>

<tr  class='tamanhoColuna'>
	  <td class='col2'> <a href ='relatorios/relatorioProduto.php?idobra=$idobra' class='editarRelatorio'> Produto</a></td>  </tr>  

<tr  class='tamanhoColuna'>	 
	 <td class='col'><a href ='relatorios/relatorioPagamento.php?idobra=$idobra' class='editarRelatorio'>Metodo de Pagamento</a> </td> </tr> "; ?>

   
     
</table>


		        
		        
			
		
			

</body>
</html>
</body>
