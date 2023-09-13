<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Estruturas de Controle - Comandos de Controle de Fluxo - for</h1>
    <div id="main">
    <form name="script45" action="formSaidaScript45.php" method="POST">
        <div class="row">
            <label>Digite Um Valor para contagem</label><br>
            <input type="number" name="contagem" required>
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