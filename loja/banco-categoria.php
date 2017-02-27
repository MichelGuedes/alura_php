<?php
  function listaCategorias($conn){
    $result = mysqli_query($conn, "select * from categorias");
    $arrCategorias = array();

    while ($categoria = mysqli_fetch_assoc($result)) {
      array_push($arrCategorias, $categoria);
    }

    return $arrCategorias;
  }
?>
