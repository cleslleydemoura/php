<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Resultado do Comando While</h1>
    <div id="main">
    <?php
        $contador = $_POST['contador'];

        while($contador <= 100)
        {
            if ($contador == 34)
            {
                break;
            }
            echo '<pre>';
            echo "Esta é a interação $contador deste loop<br>";
            $contador++;
        }
    ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>
