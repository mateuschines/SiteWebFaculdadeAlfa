
<div class="container">
<?php
  //pegar os dados enviado por get
  $id = "";

  if (isset ( $_GET["id"])) {
    $id = $_GET["id"];
  }

  $sql = "select * from marca where id = ".(int)$id." limit 1";

  $resultado = mysqli_query($conexao, $sql);
  $linha = mysqli_fetch_array($resultado);
  // nao se usa while pq é apenas um resultado

  echo "<h1 class='text-center'>".$linha["marca"]."<h1>";


 ?>

<p>Clique nos carros para ver os detalhes:<p>

  <div class="row">
    <?php
      //selecionar os carros de tal marca por pagina
      $sql = "select * from veiculo where marca_id = ".(int)$id." order by modelo";
      //guardar o resultado
      $resultado = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultado)){

        $id = $linha["id"];
        $titulo = $linha["modelo"];
        $imagem = $linha["imagem"];
        $valor = $linha["valor"];

        $imagem = "imagens/".$imagem;

        $link = "index.php?pagina=veiculo&id=$id";

        echo "<div class='col-md-3 text-center thumbnail'>
                <a href='$link' class=''>
                  <img src='$imagem' class='img'>
                  <p class='tex'>$titulo</p>
                </a>
              </div>";
      }



     ?>
  </div>
