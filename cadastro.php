<!DOCTYPE html>
<html>
<head>
	<title> CDG-Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo_login.css">
</head>
<body>
	
	<div class="conteiner">
	

  <form action="cadastro_script.php" method="POST">

	 		<br><br><h2 class="titulo"> Cadastro </h2> <br><br>

             <input type="text" name="nome"  class="campoLogin" placeholder="Nome"> <br>
			 <input type="text" name="email"  class="campoLogin" placeholder="Email"> <br>
		     <input type="password" name="senha" id="senhaLogin" class="campoLogin" placeholder="Senha"> <br>
		     <input type="password" name="confirmesenha"  class="campoLogin" placeholder="Confime sua senha"> <br>


            <button type="submit" class="botao_login">Cadastrar</button> <br><br>
			
		
		</form>

	
		<div class="linkLogin"> 
		<a class="linkLogin" href="login.php"> Já sou cadastrado </a>
	</div> 
	
  

	</div>
	 
	

</body>
</html>