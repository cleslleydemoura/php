<?php
    include_once 'includes/cabecalho.php';
?>    
    <?php
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            function soma()
            {
                echo "O valor da soma é: ", $GLOBALS['valor1'] + $GLOBALS['valor2'];
            }
            soma();        
        ?>
<?php    
    include_once 'includes/rodape.php';
?>