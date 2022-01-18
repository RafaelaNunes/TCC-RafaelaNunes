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
     ?> 
<!-- ----------------------------- TOPO -------------------------------->
<div class="topo">
		
	

	<input type="checkbox" id="check">
	<label id="icone" for="check"><img width="30" height="33" src="Imagens/icone.png"></label>

	<div class="barra">
		
		<nav>
			<a href="index.php"><div class="link"> Home</div></a>
			<a href="obras.php"><div class="link"> Obra</div></a>
			<a href="add_obra.php"><div class="link"> Adicionar Obra</div></a>
			<a href="perfil.php"><div class="link"> Perfil</div></a>
			<a href="logout.php"><div class="link"> Sair</div></a>
			
		</nav>
	</div>
</div>
<!-- ----------------------------- TOPO -------------------------------->
<div class="conteiner">

	<form action="add_obra_script.php" method="POST">
 
	 		<h2 class="titulo"> Adicionar nova Obra</h2>
          
           <label class="indicador"> Nome: </label>
           <input type="text" name="nome"  class="campoCadastro"> <br>
			
 			<label class="indicador"> Data inicio: </label>
			 <input type="date" name="dataInicio"  class="campoCadastro" > <br>
		     
		     <label class="indicador" > Previsão do termino da obra: </label>
		     <input type="date" name="dataPrevisao" class="campoCadastro" > <br>

		      <label class="indicador"> Valor estimado:</label>
		     <input type="text" name="valorEstimado"  class="campoCadastro"> <br>

		     


            <button type="submit" class="botao_add">Adicionar nova obra</button> <br><br>
			
		
		</form>
           


           
	
</div>


</body>
</html>