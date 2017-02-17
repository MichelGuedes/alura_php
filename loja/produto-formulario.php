<?php include("cabecalho.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php">
  <table class="table">
    <tr>
      <td>Nome: </td>
      <td><input type="text" name="nome" /></td>
    </tr>

    <tr>
      <td>Preço: </td>
      <td><input type="number" name="preco" /><br/></td>
    </tr>

    <tr>
      <td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
      <td></td>
    </tr>
  </table>
</form>

<?php include("rodape.php"); ?>
