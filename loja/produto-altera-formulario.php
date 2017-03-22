<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php include("banco-produto.php"); ?>

<?php
  $idProduto = $_GET['id'];
  $produto = buscaProduto($conn, $idProduto);
  $categorias = listaCategorias($conn);
  $usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1>Alteração de produto</h1>

<form action="altera-produto.php" method="post">
  <input type="hidden" name="id" value="<?=$produto['id']?>">

  <table class="table">
    <tr>
      <td>Nome: </td>
      <td><input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>"></td>
    </tr>
    <tr>
      <td>Preço: </td>
      <td><input type="text" class="form-control" name="preco" value="<?=$produto['preco']?>"></td>
    </tr>
    <tr>
      <td>Descrição: </td>
      <td><textarea class="form-control" name="descricao" rows="8" cols="80"><?=$produto['descricao']?></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado?</td>
    </tr>
    <tr>
      <td>Categoria: </td>
      <td>
        <select class="form-control" name="categoria_id">
          <?php foreach ($categorias as $categoria) {
            $categoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
            $selecao = $categoriaSelecionada ? "selected='selected'" : "";
            ?>

            <option value="<?=$categoria['id']?>" <?= $selecao ?>><?= $categoria['descricao'] ?></option>
          <?php } //endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <td><button type="submit" class="btn btn-primary">Alterar</button></td>
    </tr>
  </table>
</form>

<?php include("rodape.php") ?>
