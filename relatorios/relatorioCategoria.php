<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/estiloBusca.css">
	
</head>


<body>


<?php 
	include "../conexao.php";
	include('../verifica_login.php'); 

    $idobra= $_GET['idobra'] ?? '';
    
    
	
	?>

<!--------------------------------------  TOPO------------------------------ -->
<div class="topo">

	<input type="checkbox" id="check">
	<label id="icone" for="check"><img width="30" height="33" src="../Imagens/icone.png"></label>

	<div class="barra">
		
		<nav>
			<a href="index.php"><div class="link"> Home</div></a>
			<a href="obras.php"><div class="link"> Minhas Obras</div></a>
			  <div class="link"><?php echo "<a href ='categoria.php?idobra=$idobra' class='editar'> Categoria</a> <br> "; ?></div>
			
			<div class="link"><?php echo "<a href ='../buscar_produtos.php?idobra=$idobra' class='editar'> Produtos</a> <br> "; ?></div>

			<div class="link"><?php echo "<a href ='../relatorio.php?idobra=$idobra' class='editar'> Relatorios </a> <br> "; ?></div>

			<div class="link"><?php echo "<a href ='perfil_obra.php?idobra=$idobra' class='editar'> Perfil Obra</a> <br> "; ?></div>
			<a href="logout.php"><div class="link"> Sair</div></a>
			
		</nav>
	</div>
</div>
<!-------------------------------------- -- FIM DO TOPO------------------------------ -->

<div class="conteinerRelatorio">
	
<form action="relatorioCategoria_script.php" method="POST">

	 		<H1 class="tituloRelatorio"> Informe o nome da categoria</H1>
          
          
           <input type="hidden" name=idobra value="<?php echo $idobra; ?>"/>

  <select name="categotia" class="opcao">
    <option>Selecione</option>
           	<?php 

    $sql = "SELECT * FROM categoria WHERE idobra ='".$idobra."' ";
    $dados = mysqli_query($conexao, $sql);


    while ( $linha = mysqli_fetch_assoc($dados)) { ?>
    	
    	
    	<option value="<?php echo $linha['nome']; ?> "><?php echo $linha['nome']; ?> 
    </option>
    	<?php
    } 
    
       ?>    
           </select>
			
 			
		  
		    
            <button type="submit" class="botaoBuscar">Buscar</button> <br><br>
			
		
		</form>
		 
		 <div class="divAdd"><?php echo "<a href ='../relatorio.php?idobra=$idobra' class='editar' class='linkAdd'> Voltar</a> <br> "; ?></div>

		
</div>
</body> 