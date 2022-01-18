<!DOCTYPE html>
<html>
<head>
	<title> CDG-Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo_login.css">
</head>
<body>
	
	<div class="conteiner">
	
	<div id="logoLogin"> 
			<center> <img src="Imagens/logo.png" width="350" height="460"></center>
	</div>
 
	
	<div id="area">
		 
		 <form action="login_script.php" method="POST">

	 		<br><br><h2 class="titulo"> Login </h2> <br><br>

			 <input type="text" name="email"  class="campoLogin" placeholder="Email"> <br>
		     <input type="password" name="senha"  class="campoLogin" placeholder="Senha"> <br>

            <button type="submit" class="botao_login">Logar</button> <br><br>
			
		</form>

	<div class="botao"> 
		<a class="linkLogin" href="cadastro.php"> Ainda não tem cadastro? </a>
	</div> 
	
	
	
	</div>  

	</div>
	 
	

</body>
</html>