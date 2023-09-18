<?php
    include_once 'includes/cabecalho.php';
    
    $name = $_POST['name'];
    $valnota1 = $_POST['valnota1'];
    $valnota2 = $_POST['valnota2'];
    $valnota3 = $_POST['valnota3'];
    $valnotasoma = ($valnota1 + $valnota2 + $valnota3) / 3;
  
if ($valnotasoma >= 5)
{
    echo $valnotasoma, " é sua média. ", $name, ", você foi aprovado!";
}                      
else
{
    echo $valnotasoma, " é sua média. ", $name, ", você foi reprovado!";
}
include_once 'includes/rodape.php';
?>