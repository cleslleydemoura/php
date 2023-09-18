<?php
    include_once 'includes/cabecalho.php';
    
    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $gender = $_POST['gender'];
  
if ($idade >= 21)
{
    echo $idade, " é sua idade. ", $name, ", você satisfaz as condições pedidas!";
}                      
else
{
    echo $idade, " é sua idade. ", $name,", você NÃO satisfaz as condições pedidas!";
}
include_once 'includes/rodape.php';
?>