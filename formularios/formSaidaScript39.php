<?php
    include_once 'includes/cabecalho.php';
    
        $valEstoque = $_POST['valEstoque'];

        if ($valEstoque >= 90)
        {
            echo "O Estoque está muito alto, acima do exigido";
        }            
        elseif($valEstoque >= 80)
        {
            echo "O Estoque está alto, acima do exigido";
        }            
        elseif($valEstoque >= 60)
        {
            echo "O Estoque está acima da média, dentro do exigido";
        }            
        elseif($valEstoque >= 30)
        {
            echo "O estoque está em níveis normais, dentro do exigido";
        }            
        else
        {
            echo "O Estoque está abaixo do mínimo, fora do exigido";
        }

    include_once 'includes/rodape.php';
?>