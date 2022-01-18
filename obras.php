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

$id = "SELECT * FROM obra WHERE idusuario ='".$_SESSION['idusuario']."'";
$dados = mysqli_query($conexao, $id);
 
	
	
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
<div class="conteinerTabela">

		
	<table  class="tabelaCategoria">
	
	<tr>
        <th class="tituloTabela">Minhas Obras</th>
        <th class="tituloTabela">&nbsp;</th> 
        <th class="tituloTabela">&nbsp;</th>
    </tr>


     
    <?php
    
	                 
	echo "<tr  class='tamanhoColuna'>";

	while ($linha = mysqli_fetch_assoc($dados)) {
	 
                     $nome=$linha['nome'];
                     $idobra=$linha['idobra']; 
                     
                     
		

     echo " <td class='nome2'>  $nome </td>   
                     
           <td class='tamanho'> <div class='linkeditar'><a href ='perfil_obra.php?idobra=$idobra' class='link2' > ENTRAR</a> </div> </td> 
                      
           <td class='tamanho'><div class='linkexluir'><a href ='excluir_obra.php?idobra=$idobra'  class='link2'> EXCLUIR</a></div</td>
    
    </tr>";
}
    ?>
     
</table>


   

		        
		        
			
		</div>




</body>
</html>