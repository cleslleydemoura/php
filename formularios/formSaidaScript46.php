<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Resultado do Comando for</h1>
    <div id="main">
        <?php
            $indice1 = $_POST['indice1'];

            for($indice1; $indice1 < 7; $indice1++)
            {
                for($indice2 = $indice1; $indice2 >= 0; $indice2--)
                {
                    if($indice2 == $indice1-4)
                    break 2;                        
                    echo "Primeiro Valor '$indice1', Segundo Valor '$indice2'<br>";
                }             
            }
        ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>