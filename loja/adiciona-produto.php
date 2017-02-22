<?php include("conecta.php"); ?>
<?php include("banco-produto.php") ?>
<?php include("cabecalho.php"); ?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

if(insereProduto($conn, $nome, $preco)) { ?>
    <p class="alert-success">
        Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
    </p>
<?php } else {
    $errMessage = mysqli_error($conn); ?>
    <p class="alert-danger">
        Produto <?= $nome; ?> não foi adicionado: <?= $errMessage ?>
    </p>
<?php } ?>

<?php include("rodape.php"); ?>
