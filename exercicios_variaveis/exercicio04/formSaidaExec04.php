<?php
    include_once 'includes/cabecalho.php';
    
    $valnota1 = $_POST['valnota1'];
    $valnota2 = $_POST['valnota2'];
    $valnotasoma = ($valnota1 + $valnota2);
  
if ($valnotasoma >= 11)
{
    echo $valnotasoma + 7, "";
}                      
else
{
    echo $valnotasoma - 7, "";
}
include_once 'includes/rodape.php';
?>