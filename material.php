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
    $nomeProduto = $_GET['nomeProduto'] ?? '';
    

	$sql = "SELECT * FROM material WHERE idproduto ='".$idproduto."' ";
    $dados = mysqli_query($conexao, $sql);

    $sql2 = "SELECT * FROM produto WHERE idproduto ='".$idproduto."' ";
    $dados2 = mysqli_query($conexao, $sql);
    while ( $linha2 = mysqli_fetch_assoc($dados2)) {
    	$nomeProduto = $linha2['nome'];
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
<div>
<?php 


echo "<h1 class='tituloMaterial'>$nomeProduto </h1>";
?>
</div>


 <div class="conteinerTabela">

		
	<table  class="tabelaCategoria">
	<tr>
        
        <td class="tituloTabela">Valor</td>  
        <td class="tituloTabela">Data Da compra</td>
        <td class="tituloTabela">Data De Vencimento</td>
        <td class="tituloTabela">Local da Compra</td>
        <td class="tituloTabela">Descrição</td>
         <td class="tituloTabela">Pagamento</td>
        <td class="tituloTabela">&nbsp;</td>  
        <td class="tituloTabela">&nbsp;</td>
    </tr>


     
    <?php
    
	                 

	while ($linha = mysqli_fetch_assoc($dados)) {
	 
                     $nome=$linha['nome'];
                     $valor=$linha['valor'];
                     $datacompra =$linha['datadacompra'];
                     $datacompra2 = implode("/",array_reverse(explode("-",$datacompra)));


                     $datavencimento=$linha['datavencimento'];
                     $datavencimento2 = implode("/",array_reverse(explode("-",$datavencimento)));
                     
                     $localcompra=$linha['localdecompra'];
                      $descricao=$linha['descricao'];
                     $idcategoria=$linha['idcategoria'];
                     $idproduto=$linha['idproduto'];
                     $idmaterial=$linha['idmaterial'];
                      $idpagamento = $linha['idtipopagamento'];

                      $sql4 = "SELECT nome FROM tipopagamento WHERE idtipopagamento ='".$idpagamento."' ";
    $dados4 = mysqli_query($conexao, $sql4);
    $linha4 = mysqli_fetch_assoc($dados4);
    $pagamento=$linha4['nome'];
		

     echo "  


                    <td class='nome2'>  $valor </td> 
                    <td class='nome2'>  $datacompra2 </td> 
                     <td class='nome2'>  $datavencimento2 </td> 
                     
                     <td class='nome2'>  $localcompra </td> 
                     <td class='nome2'>  $descricao </td> 
                     <td class='nome2'>  $pagamento </td>

                      <td class='tamanho' > <div class='linkeditar'> <a href ='editar_material.php?idcategoria=$idcategoria&&idobra=$idobra&&idmaterial=$idmaterial&&idproduto=$idproduto&&valor=$valor&&datacompra=$datacompra&&datavencimento=$datavencimento&&localcompra=$localcompra&&pagamento=$pagamento&&descricao=$descricao&&nomeProduto=$nomeProduto' class='link2' > Editar</a> </div>  </td> 

                      <td class='tamanho'> <div class='linkexluir'> <a href ='excluir_material.php?idcategoria=$idcategoria&&idobra=$idobra&&idmaterial=$idmaterial&&idproduto=$idproduto' class='link2' > Excluir</a></div></td>
    
    </tr>";
}
    ?>
     
</table>


		         
		        
			
		</div>
			<div class="divAdd"><?php echo "<a href ='add_material.php?idcategoria=$idcategoria&&idobra=$idobra&&idproduto=$idproduto' class='linkAdd'> Novo Material</a> <br> "; ?></div>

				<div class="divAdd"><?php echo "<a href ='produto.php?idobra=$idobra&&idcategoria=$idcategoria' class='linkAdd'> Voltar</a> <br> "; ?>  </div>
			

</body>
</html>