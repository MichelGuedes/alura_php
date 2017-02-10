<?php include "cabecalho.php" ?>

    <form action="adiciona-produto.php" method="post">
      <h1>Cadastro de produtos</h1>

      <label for="produtoNome">Nome do produto: </label>
      <input label="Nome do Produto" type="text" name="produtoNome" placeholder="Digite o nome do produto" autofocus><br>

      <label for="produtoPreco">Preço do produto:</label>
      <input label = "Preço do Produto" type="text" placeholder="Digite o valor do produto" name="produtoPreco" ><br>

      <input type="submit" value="Enviar" value="Cadastrar">
    </form>

<?php include "rodape.php" ?>
