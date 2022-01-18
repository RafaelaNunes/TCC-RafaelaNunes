<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	
</head>
<body>
	<?php 
	include('verifica_login.php');
	include('conexao.php');
	
	$idobra= $_GET['idobra'] ?? '';
	$idproduto= $_GET['idproduto'] ?? '';
	$idcategoria= $_GET['idcategoria'] ?? '';
	$nomeProduto=$_GET['nomeProduto'] ?? '';


    $sql2 = "SELECT * FROM produto WHERE idproduto ='".$idproduto."' ";
    $dados2 = mysqli_query($conexao, $sql2);
	while ( $linha2 = mysqli_fetch_assoc($dados2)) {
    	$nomeProduto = $linha2['nome'];
    }
	
     ?> 
<!-- ----------------------------- TOPO -------------------------------->
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
<!-- ----------------------------- TOPO -------------------------------->
<div class="conteiner">

	<form action="add_material_script.php" method="POST">
          
          
<?php 
echo "<h1 class='titulo'>Adicionar  $nomeProduto </h1>";
 ?>
	 		
          
           


		   <label class="indicador"> Valor: </label>
			<input type="text" name="valor"  class="campoCadastro" > <br>
			
 			<label class="indicador"> Data da compra: </label>
			<input type="date" name="datacompra"  class="campoCadastro" > <br>

			<label class="indicador"> Data de Vencimento: </label>
			<input type="date" name="datavencimento"  class="campoCadastro" > <br>

			<label class="indicador"> Local de compra: </label>
			<input type="text" name="localcompra"  class="campoCadastro" > <br>


			<label class="indicador"> Descrição: </label>
			<input type="text" name="descricao"  class="campoCadastro" > <br>
			<label class="indicador"> Pagamento: </label>

<select name="pagamento" class="campoCadastro">
   

    <option>Selecionar</option>
           	<?php 

    $sql = "SELECT * FROM tipopagamento  ";
    $dados = mysqli_query($conexao, $sql);


    while ( $linha = mysqli_fetch_assoc($dados)) { ?>
    	
    	
    	<option value="<?php echo $linha['nome']; ?> "><?php echo $linha['nome']; ?> 
    </option>
    	<?php
    } 
    
       ?>    
           </select>

		
			<input type="hidden" name=nome value="<?php echo $nomeProduto; ?>"/>
			<input type="hidden" name=idobra value="<?php echo $idobra; ?>"/>

			<input type="hidden" name=idcategoria value="<?php echo $idcategoria; ?>"/>
			<input type="hidden" name=idproduto value="<?php echo $idproduto; ?>"/>
		     
		  
		    
            <button type="submit" class="botao_add">Adicionar</button> <br><br>
			
		
		</form>
    
</div>


</body>
</html>