<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css?ts=<?=time()?>">
	
</head>
<body>
	<?php 
	
	include('verifica_login.php');
	include('conexao.php');
	
	$idobra= $_GET['idobra'] ?? '';
	$idusuario= $_GET['idusuario'] ?? '';
	$nome= $_GET['nome'] ?? '';
	$datainicio= $_GET['datainicio'] ?? '';
	$datatermino= $_GET['datatermino'] ?? '';
	$valorestimado = $_GET['valorestimado'] ?? '';
	

	
	
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

	<form action="editar_perfil_script.php" method="POST">

	 		<h2 class="titulo"> Editar Perfil</h2>
          
           <label class="indicador"> Nome: </label>
           <input type="text" name="nome"  class="campoCadastro" value="<?php echo $nome; ?>"> <br>

			
 	       <label class="indicador"> Data Inicio : </label>
           <input type="date" name="datainicio"  class="campoCadastro" value="<?php echo $datainicio; ?>"> <br>

            <label class="indicador"> Previsão de Termino : </label>
           <input type="date" name="datatermino"  class="campoCadastro" value="<?php echo $datatermino; ?>"> <br>

            <label class="indicador"> Valor estimado : </label>
           <input type="text" name="valorestimado"  class="campoCadastro" value="<?php echo $valorestimado; ?>"> <br>
			
			<input type="hidden" name=idusuario value="<?php echo $idusuario; ?>"/>

			<input type="hidden" name=idobra value="<?php echo $idobra; ?>"/>
		     
		  
		    
          <div class="botao">

          	  <button type="submit" class="botao_add">Renomear</button> <br><br>
          </div>

         </form>
          <div class="divAdd"><?php echo "<a href ='perfil_obra.php?idobra=$idobra' class='linkAdd'> Voltar</a> <br> "; ?>  </div>
    
</div>

 
</body>
</html>