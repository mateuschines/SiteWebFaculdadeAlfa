<div class="cycle-slideshow" id="banner">
  <img src="imagens/banner1.jpg">
  <img src="imagens/banner2.jpg">
</div>

<div class="container">
  <h1>Carros em Destaque</h1>

  <div class="row">
    <?php
    //selecionar os carros, rand ele fica tocrando os carros toda hora que atualiza a pg e limit limita o tanto de carros
      $sql = "select * from veiculo order by rand() limit 4";

      $resultado = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultado)) {
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
  <p class="text-center">
    <a href="index.php?pagina=marcas" class="btn btn-info">Ver Todos os Carros</a>
  </p>
</div>
