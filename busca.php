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

    $idobra= $_GET['idobra'];
    $pesquisa= $_GET['busca'];

    
 

	$sql = "SELECT * FROM material WHERE idobra = '$idobra' AND nome LIKE '%".$pesquisa."%' ";
	
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


	<div class="pesquisa">
					<form action="busca.php" method="GET">
						
						<input class="txtbusca" type="search" placeholder="Material" name="busca">
						 <input type="hidden" name=idobra value="<?php echo $idobra; ?>"/>
						

						<button class="btnBusca" type="submit"> Pesquisar</button> <br><br>
					</form>
	</div>

<div class="conteinerTabela">

	<table  class="tabelaCategoria">
	<tr>
        <td class="tituloTabela">Nome</td> 
        <td class="tituloTabela">Valor</td>  
        <td class="tituloTabela">Data Da compra</td>
        <td class="tituloTabela">Data De Vencimento</td>
        <td class="tituloTabela">Local da Compra</td>
         <td class="tituloTabela">Pagamento</td>
       
        <td class="tituloTabela">Categoria</td>
        
    </tr>


    <?php
  
	                 
	echo "<tr>";
	while ($linha = mysqli_fetch_assoc($dados)) {
		
			
		
	 
                     $nome=$linha['nome'];
                     $valor=$linha['valor'];
                     $datadacompra =$linha['datadacompra'];
                     $datadacompra = implode("/",array_reverse(explode("-",$datadacompra)));
                     $datavencimento=$linha['datavencimento'];
                     $datavencimento = implode("/",array_reverse(explode("-",$datavencimento)));
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

    $sql5 = "SELECT nome FROM categoria WHERE idcategoria ='".$idcategoria."' ";
    $dados5 = mysqli_query($conexao, $sql5);
    $linha5 = mysqli_fetch_assoc($dados5);
    $nomeCategoria=$linha5['nome'];
                     

	echo "  <td class='linhaTabela'> $nome </a>";

                 
                    echo "  </td> 

                    <td class='linhaTabela'>  R$$valor,00 </td> 
                    <td class='linhaTabela'>  $datadacompra </td> 
                     <td class='linhaTabela'>  $datavencimento </td> 
                     
                     <td class='linhaTabela'>  $localcompra </td> 
                     <td class='linhaTabela'>  $pagamento </td> 
                      
                      <td class='linhaTabela'>  $nomeCategoria </td> 

                    

    
    </tr>";

     
}

    ?>
     
</table>
 
</div>		
</body>
</html>