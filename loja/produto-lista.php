<?php include("conecta.php"); ?>
<?php include("cabecalho.php"); ?>
<?php include("banco-produto.php") ?>

<h1>Produtos encontrados no banco de dados: </h1>

<?php
  /*sempre usar os tres iguais abaixo, para garantir os valores na conversao do parametro*/
  if ((array_key_exists('removido', $_GET))&&($_GET['removido'] === true)){ ?>
    <p class="alert-success">Produto removido com sucesso.</p>
  <?php }
 ?>

<table class="table table-bordered table-striped">
  <tr class="table-header">
    <td>Produto</td>
    <td>Valor</td>
    <td></td>
  </tr>

<?php
  $arrayProdutos = listaProdutos($conn); //funcao insereProduto esta no banco-produto.php, e $conn esta em conecta.php

  foreach ($arrayProdutos as $produto) {?>
    <tr>
      <td><?= $produto['nome'] ?></td>
      <td><?= $produto['preco'] ?></td>
      <td><a href="produto-remove.php?id=<?=$produto['id']?>" class="btn btn-danger">Remover Produto</a></td>
    </tr>
  <?php } ?>

</table>

<?php include("rodape.php"); ?>
