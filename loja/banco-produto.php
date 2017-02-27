<?php
//busca todos os produtos no banco de dados e retorna um array com os valores encontrados
function listaProdutos($conn){
  $result = mysqli_query($conn, "SELECT p.*, c.descricao as descricao_categoria
                                   from produtos p
                             INNER JOIN categorias c on c.id = p.categoria_id");
  $arrProdutos = array();

  while ($produto = mysqli_fetch_assoc($result)) {
    array_push($arrProdutos, $produto);
  }

  return $arrProdutos;
}

//insere um novo produto na tabela do banco de dados
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
  $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
  $resultado = mysqli_query($conexao, $query);

  return $resultado;
}

//apaga um produto do banco de dados, espera um ID
function apagaProduto($conexao, $idProduto){
  $query = "delete from produtos where id = {$idProduto}";
  return mysqli_query($conexao, $query);
}
?>
