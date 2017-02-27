<?php include("conecta.php"); ?>
<?php include("banco-produto.php") ?>
<?php include("cabecalho.php"); ?>

<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];

if(insereProduto($conn, $nome, $preco, $descricao, $categoria_id)) { ?>
  <h1>Resultado: </h1>
  <p class="alert-success">
    Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
  </p>
<?php } else {
  $errMessage = mysqli_error($conn); ?>
  <h1>Resultado: </h1>
  <p class="alert-danger">
    Produto <?= $nome; ?> não foi adicionado: <?= $errMessage ?>
  </p>
<?php } ?>

<?php include("rodape.php"); ?>
