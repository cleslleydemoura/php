<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Resultado do Comando for</h1>
    <div id="main">
        <?php
            $contagem = $_POST['contagem'];

            echo "Fazendo Contagem Regressiva para Finalizar o Loop... ";
            for($contagem; $contagem >= 0; $contagem--)
            {
                echo('<pre>');
                echo ($contagem > 0) ? "$contagem ":"$contagem...";
            }
        ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>