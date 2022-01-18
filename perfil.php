<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estiloPerfil.css">
	
</head>
<body>

	<?php 
	
	include('verifica_login.php');
	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];
	$idusuario = $_SESSION['idusuario'];
	$senha = $_SESSION['senha'];
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

<div class="conteiner_perfil" >
	
		<div class="info" >
            
            <h1 class="titulo_info"> Perfil do usuario</h1>
			<p class="info_perfil"> Nome: <?php 	echo $_SESSION['nome'];?> </p> 
			<p class="info_perfil">Email: <?php 	echo   $_SESSION['email'];?> </p>

		

	
	

</div>


</body>
</html>