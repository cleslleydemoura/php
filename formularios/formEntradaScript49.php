<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Trabalhando com Classes e Funções no PHP - Retorno de Valores de uma Função</h1>
    <div id="main">
    <form name="script49" action="formSaidaScript49.php" method="POST">
        <div class="row">
            <label>Digite o Nome do Aluno</label><br>
            <input type="text" name="nomeAluno" required>
        </div>
        <br>
        <div class="row">
            <label>Digite a 1ª Nota do Aluno</label><br>
            <input type="text" name="nota1Aluno" required>
        </div>
        <br>
        <div class="row">
            <label>Digite a 2ª Nota do Aluno</label><br>
            <input type="text" name="nota2Aluno" required>
        </div>
        <br>
        <div class="row">
            <button type="submit" name="enviar">Enviar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
    </div>    
<?php
    include_once 'includes/rodape.php';
?>
