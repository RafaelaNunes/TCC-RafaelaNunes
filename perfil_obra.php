<!DOCTYPE html>
<html>
<head>
	<title>CDG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estiloPerfil.css">
	
</head>


<body>


<?php 
	include "conexao.php";
	include('verifica_login.php');

     $idobra= $_GET['idobra'] ?? '';

	$sql = "SELECT * FROM  obra WHERE idobra ='".$idobra."' ";

	$dados = mysqli_query($conexao, $sql);
	$linha = mysqli_fetch_assoc($dados);
	$nome=$linha['nome'];
	$datainicio=$linha['datainicio'];
	$datainicio2 = implode("/",array_reverse(explode("-",$datainicio)));
	$datatermino=$linha['dataprevisaotermino'];
	$datatermino2 = implode("/",array_reverse(explode("-",$datatermino)));
	$valorestimado =$linha['valorestimado'];
	$idusuario =$linha['idusuario'];
	?>

<!--------------------------------------  TOPO------------------------------ -->
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
<!-------------------------------------- -- FIM DO TOPO------------------------------ -->
<div class="conteiner_perfil">
	
	        <h1 class="titulo_info"> Informaçoes da Obra </h1>
			<p class="info_perfil">   Nome: <?php 	echo $nome;?> </p> 
			<p class="info_perfil">Data Inicio: <?php 	echo $datainicio2;?>  </p>
			<p class="info_perfil">Previsão Termino: <?php 	echo $datatermino2 ;?>  </p>
			<p class="info_perfil">Valor Estimado: R$ <?php 	echo $valorestimado;?> ,00  </p>

			<div class="divEditar">

				<?php echo "<a href ='editar_perfil.php?idobra=$idobra&&datainicio=$datainicio&&valorestimado=$valorestimado&&datatermino=$datatermino&&idusuario=$idusuario&&nome=$nome' class='linkEditar'> Editar</a> <br> "; ?>
					
				</div>
			
			

			
	
</div>

			
			
			

</body>
</html>