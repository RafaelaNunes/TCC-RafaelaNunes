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
	include"verifica_login.php";

    $idobra= $_GET['idobra'] ?? '';

	$sql = "SELECT * FROM  categoria WHERE idobra ='".$idobra."' ";

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
        <td class="tituloTabela">Nome</td> 
        <td class="tituloTabela">&nbsp;&nbsp;</td> 
         <td class="tituloTabela">&nbsp;&nbsp;</td>
    </tr>


     
    <?php
    
	                 
	echo "<tr  class='tamanhoColuna'>";
	while ($linha = mysqli_fetch_assoc($dados)) {
	 
                     $nome=$linha['nome'];
                     $idobra=$linha['idobra']; 
                     $idcategoria=$linha['idcategoria'];
                     
		

     echo "  <td class='nome2'><a href ='produto.php?idcategoria=$idcategoria&&idobra=$idobra' class='linkproduto'>  $nome </a>  </td>   
          
          <td class='tamanho' > <div class='linkeditar'> <a href ='editar_categoria.php?idcategoria=$idcategoria&&idobra=$idobra&&nome=$nome' class='link2' > Editar</a> </div>  </td> 

           
         <td class='tamanho'> <div class='linkexluir'> <a href ='excluir_categoria.php?idcategoria=$idcategoria&&idobra=$idobra
                      ' class='link2' > Excluir</a></div></td>
    
    </tr>";
}
    ?>
     
</table>


		        
		        
			
		</div>
			<div class="divAdd"><?php echo "<a href ='add_categoria.php?idobra=$idobra' class='linkAdd'> Nova Categoria</a> <br> "; ?></div>
			

</body>
</html>