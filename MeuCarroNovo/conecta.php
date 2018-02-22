<?php 

//criar uma conecao com o banco de dados

$servidor = "localhost";

$usuario = "root";

$senha = "";

$banco = "carros";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco)
or die ("Erro de conexão com o banco: " . mysqli_error() );


//forcar os caracteres para utf8
mysqli_set_charset($conexao, "utf8");