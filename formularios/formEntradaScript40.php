<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Estruturas de Controle - Comandos Condicionais - Comando if</h1>
    <div id="main">
    <form name="script40" action="formSaidaScript40.php" method="POST">
        <div class="row">
            <label>Digite o Mês</label><br>
            <input type="number" name="valMes" required>
        </div>
        <br>
        <div class="row">
            <label>Digite o Ano</label><br>
            <input type="number" name="valAno" required>
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
