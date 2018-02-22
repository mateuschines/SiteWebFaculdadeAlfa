<div class="container">
  <?php
    $id = "";

    if(isset($_GET["id"])){
      $id = trim ($_GET["id"]);
    }


    $sql = "select * from veiculo where id = ".(int)$id." limit 1";

    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $id = $linha["id"];
    $titulo = $linha["modelo"];
    $imagem = $linha["imagem"];
    $valor = $linha["valor"];

    $imagem = "imagens/".$imagem;
   ?>

   <div class="row">
     <div class="col-md-3">
      <img src="<?php echo $imagem ?>" data-lightbox="Carro" title="<?php echo $titulo; ?>" class="thumbnail img">
     </div>
     <div class="col-md-9">
       <h3><?php echo $titulo; ?></h3>
       <h4>R$: <?php echo $valor; ?></h4>
     </div>
   </div>
</div>
