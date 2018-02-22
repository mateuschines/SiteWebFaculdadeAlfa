<div class="cycle-slideshow" id="banner">
  <img src="imagens/banner1.jpg">
  <img src="imagens/banner2.jpg">
</div>

<div class="container">

   <h1>Clique nos carros para ver os detalhes:</h1>

   <div class="row">
     <?php
      $sql = "select * from veiculo order by modelo";

      $resultado = mysqli_query($conexao, $sql);

      while($linha = mysqli_fetch_array($resultado)){

        $id = $linha["id"];
        $titulo = $linha["modelo"];
        $imagem = $linha["imagem"];
        $valor = $linha["valor"];

        $imagem = "imagens/".$imagem;

        $link = "index.php?pagina=veiculo&id=$id";

        echo "<div class='col-md-3 text-center thumbnail'>
                <a href='$link' class=''>
                  <img src='$imagem' class='img'>
                  <p>$titulo</p>
                </a>
              </div>";
      }

      ?>
   </div>
</div>
