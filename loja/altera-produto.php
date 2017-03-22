<?php include("conecta.php"); ?>
<?php include("banco-produto.php") ?>
<?php include("cabecalho.php"); ?>

<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
$usado = array_key_exists("usado", $_POST) ? 1: 0;

if(alteraProduto($conn, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
  <h1>Resultado: </h1>
  <p class="alert-success">
    Produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!
  </p>
<?php } else {
  $errMessage = mysqli_error($conn); ?>
  <h1>Resultado: </h1>
  <p class="alert-danger">
    Produto <?= $nome; ?> não foi alterado: <?= $errMessage ?>
  </p>
<?php } ?>

<?php include("rodape.php"); ?>
