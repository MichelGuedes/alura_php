<?php include "cabecalho.php" ?>

    <h1>Cadastro de Produtos</h1>

    <p>
      <?php
        $produtoNome = $_POST["produtoNome"];
        $produtoPreco = $_POST["produtoPreco"];

        echo "Produto " . $produtoNome .
             " de valor " . $produtoPreco . " adicionado com sucesso.";
      ?>
    </p>

<?php include "rodape.php" ?>
