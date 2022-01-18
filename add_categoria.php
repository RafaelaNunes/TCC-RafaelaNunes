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
	$sql = "SELECT * FROM  obra WHERE idobra ='".$idobra."' ";

	$dados = mysqli_query($conexao, $sql);
	$linha = mysqli_fetch_assoc($dados);
	
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

	<form action="add_categoria_script.php" method="POST">

	 		<h2 class="titulo"> Adicionar nova Categoria</h2>
          
           <label class="indicador"> Nome: </label>
           <input type="text" name="nome"  class="campoCadastro"> <br>
			
 			<label class="indicador"> Descrição: </label>
			 <input type="text" name="descricao"  class="campoCadastro" > <br>
			
			<input type="hidden" name=idobra value="<?php echo $linha['idobra']; ?>"/>
		     
		  
		    
            <button type="submit" class="botao_add">Adicionar</button> <br><br>
			
		
		</form>
		<div class="divAdd"><?php echo "<a href ='categoria.php?idobra=$idobra' class='linkAdd'> Voltar</a> <br> "; ?>  </div>
    
</div>


</body>
</html>