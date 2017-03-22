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

//busca um produto pelo seu id de parametro
function buscaProduto($conexao, $id){
  $query = "select * from produtos where id = {$id}";
  $result = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($result);
}

//insere um novo produto na tabela do banco de dados
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
  $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, '{$usado}')";
  $resultado = mysqli_query($conexao, $query);

  return $resultado;
}

//altera dados de um produto, baseado no id de parametro
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
  $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} where id = {$id}";
  return mysqli_query($conexao, $query);
}

//apaga um produto do banco de dados, espera um ID
function apagaProduto($conexao, $idProduto){
  $query = "delete from produtos where id = {$idProduto}";
  return mysqli_query($conexao, $query);
}
?>
