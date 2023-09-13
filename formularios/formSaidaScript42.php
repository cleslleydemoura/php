<?php
    include_once 'includes/cabecalho.php';
    
        $valOpcao = $_POST['valOpcao'];

        switch($valOpcao)
        {
            case 'a':
                echo "Você escolheu Abrir um arquivo";
            break;
            case 's':
                echo "Você escolheu Sair do programa";
            break;
            case 'e':
                echo "Você escolheu Excluir o arquivo?";
            break;
            case 'd':
                echo "Você escolheu Desfazer o último comando";
            break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 'x':
                echo "Você escolheu uma Opção que ainda não foi implementada";
            break;
            default:
                echo "Você escolheu uma opção que ainda não se encontra entre as ";
                echo "disponíveis."."<br>";
                echo "Queira por favor escolher uma opção válida!";
                break; 
        }

    include_once 'includes/rodape.php';
?>