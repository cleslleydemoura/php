<?php
    include_once 'includes/cabecalho.php';
    
        $valIdade = $_POST['valIdade'];
        $valNome = $_POST['valNome'];
        $valEmail = $_POST['valEmail'];

        if ($valIdade >= 18)
        {
            echo $valNome, " (", $valEmail, "), você é maior de idade!";
        }                      
        else
        {
            echo $valNome, " (", $valEmail, "), você é menor de idade!";
        }

    include_once 'includes/rodape.php';
?>
