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
	$idcategoria= $_GET['idcategoria'] ?? '';
	$idproduto= $_GET['idproduto'] ?? '';
	$nome= $_GET['nome'] ?? '';

	
	 
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
			
			<a href="produtos.php"><div class="link"> Produtos</div></a>
			
			<div class="link"><?php echo "<a href ='relatorio.php?idobra=$idobra' class='editar'> Relatorios </a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='perfil_obra.php?idobra=$idobra' class='editar'> Perfil Obra</a> <br> "; ?></div>
			
			<a href="logout.php"><div class="link"> Sair</div></a>
			
		</nav>
	</div>
</div>
<!-- ----------------------------- TOPO -------------------------------->
<div class="conteiner">

	<form action="editar_produto_script.php" method="POST">

	 		<h2 class="titulo"> Renomear</h2>
          
           <label class="indicador"> Nome: </label>
           <input type="text" name="nome"  class="campoCadastro" value="<?php echo $nome; ?>"> <br>
			
 			
			
			<input type="hidden" name=idobra value="<?php echo $idobra; ?>"/>

			<input type="hidden" name=idcategoria value="<?php echo $idcategoria; ?>"/>
			<input type="hidden" name=idproduto value="<?php echo $idproduto; ?>"/>
		     
		  
		    
            <button type="submit" class="botao_add">Renomear</button> <br><br>
			
		
		</form>
    
</div>


</body>
</html> 