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

	$sql = "SELECT * FROM produto WHERE idcategoria ='".$idcategoria."' ";
    $dados = mysqli_query($conexao, $sql);

    $sql2 = "SELECT * FROM categoria WHERE idcategoria ='".$idcategoria."' ";
    $dados2 = mysqli_query($conexao, $sql2);
    while ($linha2 = mysqli_fetch_assoc($dados2)) {
	 $nomeCategoria=$linha2['nome'];
     
      }

	
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
 <?php 
echo "<h1 class='tituloPagina'> $nomeCategoria </h1>";
 ?>
		
	<table  class="tabelaCategoria">

	<tr>
        <td class="tituloTabela">Nome</td> 
        <td class="tituloTabela">&nbsp;</td>  
        <td class="tituloTabela">&nbsp;</td>
    </tr>


     
    <?php
    
	                 
	echo "<tr class='tamanhoColuna'>";
	while ($linha = mysqli_fetch_assoc($dados)) {
	 
                     $nome=$linha['nome'];
                     $idcategoria=$linha['idcategoria'];
                     $idproduto=$linha['idproduto'];
                     
		

     echo "  <td class='nome2' ><a href ='material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto&&nomeProduto=$nome' class='linkproduto'>  $nome </a>  </td>   
                      
        <td class='tamanho' > <div class='linkeditar'> <a href ='editar_produto.php?idcategoria=$idcategoria&&idobra=$idobra&&nome=$nome&&idproduto=$idproduto' class='link2' > Editar</a> </div>  </td> 

         <td class='tamanho'> <div class='linkexluir'> <a href ='excluir_produto.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto' class='link2' > Excluir</a></div></td>
    
    </tr>";
}
    ?>
     
</table>


		        
		        
			
		</div>
		
		
		
		
		<div class="divAdd"><?php echo "<a href ='add_produto.php?idcategoria=$idcategoria&&idobra=$idobra' class='linkAdd'> Novo Produto</a> <br> "; ?>  </div>

		<div class="divAdd"><?php echo "<a href ='categoria.php?idobra=$idobra' class='linkAdd'> Voltar</a> <br> "; ?>  </div>
			
		
		
			

</body>
</html>