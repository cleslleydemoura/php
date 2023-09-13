<?php
    include_once 'includes/cabecalho.php';
?>
    <div id="main">
        <?php
            function nomeAluno($nomeAluno)
            {
                echo "O nome do Aluno é: $nomeAluno";
            }
            nomeAluno($nomeAluno = $_POST['nomeAluno']);            
        ?>
    </div>
<?php    
    include_once 'includes/rodape.php';
?>
