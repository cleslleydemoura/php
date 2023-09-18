<?php
    include_once 'includes/cabecalho.php';
    
    $valnota1 = $_POST['valnota1'];
    $valnota2 = $_POST['valnota2'];
    $valnotasoma = $valnota1 + $valnota2;
  
if ($valnotasoma >= 10)
{
    echo $valnotasoma, " O valor da soma é maior que dez!";
}                      
else
{
    echo $valnotasoma, " O valor da soma é menor que dez!";
}
include_once 'includes/rodape.php';
?>