<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
  <table class="table">
    <tr>
      <td>Nome: </td>
      <td><input type="text" name="nome" class="form-control"/></td>
    </tr>

    <tr>
      <td>Preço: </td>
      <td><input type="number" name="preco" class="form-control"/></td>
    </tr>

    <tr>
      <td>Descrição: </td>
      <td><input type="text" name="descricao" class="form-control"/></td>
    </tr>

    <tr>
      <td>Usado?: </td>
      <td><input type="checkbox" name="usado" value="true"></td>
    </tr>

    <tr>
      <td>Categoria: </td>

      <?php
        $arrayCategorias = listaCategorias($conn); ?>

        <td>
          <select class="form-control" name="categoria_id">
            <?php
              foreach ($arrayCategorias as $categoria) { ?>
                <option value="<?=$categoria['id']?>"><?= $categoria['descricao']?></option>
              <?php }
            ?>
          </select>
        </td>
    </tr>

    <tr>
      <td><button type="submit" class="btn btn-primary form-control">Cadastrar</button></td>
      <td></td>
    </tr>
  </table>
</form>

<?php include("rodape.php"); ?>
