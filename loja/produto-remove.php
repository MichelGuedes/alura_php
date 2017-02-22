<?php include("conecta.php"); ?>
<?php include("cabecalho.php"); ?>
<?php include("banco-produto.php"); ?>

<?php
  $idProduto = $_GET['id'];
  if(apagaProduto($conn, $idProduto)){
    header("Location: produto-lista.php?removido=true");
  }
 ?>

<?php include("rodape.php"); ?>
