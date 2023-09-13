<?php
    include_once 'includes/cabecalho.php';
    
        $valMes = $_POST['valMes'];
        $valAno = $_POST['valAno'];

        switch ($valMes)
        {
        case 1:
            $dia = 31;
            echo "O mês $valMes do Ano $valAno tem $dia dias.";
            break;
        case 2:
            if (($valAno % 4) == 0)
            {
                $dia = 29;
                echo "O mês $valMes do Ano $valAno tem $dia dias, é um ano bissexto.";
                break;
            }
            else        
            {
                $dia = 28;
                echo "O mês $valMes do Ano $valAno tem $dia dias.";
                break;
            }
        case 3:
            $dia = 31;
            echo "O mês $valMes do Ano $valAno tem $dia dias.";
            break;
        case 4:
            $dia = 30;
            echo "O mês $valMes do Ano $valAno tem $dia dias.";
            break;
        }

    include_once 'includes/rodape.php';
?>
