<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Resultado da função</h1>
    <div id="main">
        <?php
            function saida($texto, $vezes = 1)
            {
                for($indice = $_POST['indice']; $indice < $vezes; $indice++)
                {
                    echo $texto;
                }
                
            }
            saida("Este é um exemplo de função no PHP"."<br><br>");
            saida("Trabalhando com Classes e Funções no PHP, esta linha será impressa três vezes"."<br>", 3);
        ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>
