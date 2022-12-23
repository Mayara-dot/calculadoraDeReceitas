<?php

require ("../classes/Ingredientes.php");
function GetData()
{
  $data0 = $_POST['ingrediente'][0];
  $data1 = $_POST['ingrediente'][1];
  $receita = $_POST['receita'];
  $button = $_POST['button'];
  $h4Result = "<p><span>$button</span> da receita</p>";
  $ingredientes = array_merge_recursive($data0, $data1);

  echo "<p>Receita: <span>$receita</span></p>";
  
  if($button == 'metade') {
    echo $h4Result;
      foreach($ingredientes as $k => $v){
      $$k = new Ingredientes($k);
      $$k->metade($v[0], $v[1], $k);
    }
  } else if ($button == 'dobro') {
    echo $h4Result;
      foreach($ingredientes as $k => $v){
      $$k = new Ingredientes($k);
      $$k->dobro($v[0], $v[1], $k);
    }

  } else if ($button == 'triplo') {
    echo $h4Result;
    foreach($ingredientes as $k => $v){
      $$k = new Ingredientes($k);
      $$k->triplo($v[0], $v[1], $k);
    }

  } else { //GRAMAS
    echo "<p>Receita em <span>$button</span></p>";
      foreach($ingredientes as $k => $v){
      $$k = new Ingredientes($k);
      $$k->gramas($v[0], $v[1], $k);
    }  
  }

 

  
}


?>

