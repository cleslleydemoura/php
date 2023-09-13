<?php
    include_once 'includes/cabecalho.php';
?>    
    <?php
            $nomeAluno = $_POST['nomeAluno'];
            $nota1Aluno = $_POST['nota1Aluno'];
            $nota2Aluno = $_POST['nota2Aluno'];

            function calcularMedia($nomeAluno, $nota1Aluno, $nota2Aluno)
            {
                $media = ($nota1Aluno + $nota2Aluno) / 2;
                if($media >= 6)
                {
                    echo "O Aluno $nomeAluno, foi Aprovado com média: $media !";
                }
                else
                {
                    echo "O Aluno $nomeAluno, foi Reprovado com média: $media !";
                }
            }
            calcularMedia($nomeAluno, $nota1Aluno, $nota2Aluno);            
        ?>
<?php    
    include_once 'includes/rodape.php';
?>
