<!DOCTYPE html>
<html>
<head>
	<title>Carros- Compre ja o seu!</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

	<link rel="shotcut icon" href="imagens/icone.png">

	<?php
		//inclui o arquivo de conexao com o banco
		include "conecta.php";
	 ?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			 </button>
			 <a href="index.php" class="navbar-brand">
				 <img src="imagens/logo.png" alt="Logo">
			 </a>
		 </div>
		 <div class="collapse navbar-collapse" id="menu">
			 <ul class="nav navbar-nav navbar-right">
			 	<li><a href="index.php">Home</a></li>
				<?php
					//para selecionar as categorias
					$sql = "select * from marca order by marca";//order by ordena por ordem alfabetica

					$resultado = mysqli_query($conexao, $sql);//executa o sql e guarda o resultado

					while ( $linha = mysqli_fetch_array($resultado)){//ordena os dados pego em Array
						//separar os dados
						$id = $linha["id"];
						$marca = $linha["marca"];

						//criar link para colocar no li HTML
						$link = "index.php?pagina=marca&id=$id";

						echo "<li><a href='$link'>$marca</a></li>";

					}

				 ?>
			 </ul>
		 </div>
	 </div>
 </nav>

	<main>
		<?php
			//fazer a pagina receber home
			$pagina = "home";

			if (isset ( $_GET["pagina"])) {//isset vefirica se esta recebendo a variavel
				$pagina = trim( $_GET["pagina"]);//trim tira os espacos

			}

			$pagina = "paginas/$pagina.php";//atribui o .php ao valor

			if ( file_exists ($pagina)){//se existir incluir pagina
				include $pagina;
			} else {//se nao inclui o erro
				include "paginas/erro.php";
			}
		 ?>
	</main>

	<footer>
		<p class="text-center">
			Todos os Direitos Reservados Desenvolvido por Mateus Rocha -
			<?php
				echo date("Y");
			 ?>
		</p>
	</footer>
</body>
</html>
