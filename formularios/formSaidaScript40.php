<?php
    include_once 'includes/cabecalho.php';
    
        $valMes = $_POST['valMes'];
        $valAno = $_POST['valAno'];

        if($valMes == 2 AND ($valAno % 4)== 0):
        {
            $dia = 29;
            echo "O mês $valMes do Ano $valAno tem $dia dias, é um ano bissexto.";
        }            
        elseif($valMes == 2):
        {
            $dia = 28;
            echo "O mês $valMes do Ano $valAno tem $dia dias.";
        }   
        else:
        {
            $dia = 30;
            echo "O mês $valMes do Ano $valAno tem $dia dias.";
        }            
        endif;

    include_once 'includes/rodape.php';
?>