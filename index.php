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

<div >
	<img id="imagemFundo" width="35%" height="35%"  src="Imagens/fundo1.jpg">
	

</div>
</body>
</html>