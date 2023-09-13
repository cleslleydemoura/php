<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Resultado do Comando Do While</h1>
    <div id="main">
        <?php
            $expressao1 = $_POST['expressao1'];

            echo "Exemplo de Loop com o comando while<br>";
            do
            {
                echo '<pre>';
                echo "$expressao1<br>";
                $expressao1++;
            } while ($expressao1 < 11);
            
            while($expressao1 < 11)
            {
                echo '<pre>';
                echo "$expressao1<br>";
                $expressao1++;
            }
            echo "<br>";
            echo "Exemplo de Loop com o comando do..while<br>";
            
        ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>
