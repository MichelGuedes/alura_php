<?php
  function somaArray($array){
    $r = 0;
    for ($i=0; $i < sizeof($array); $i++) {
      $r += $array[$i];
    }
    return $r;
  }

  $arrayTeste = array(1, 2, 3, 4, 5);
  echo "Resultado da soma do array: " . somaArray($arrayTeste);
?>
