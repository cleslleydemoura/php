<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Estruturas de Controle - Comandos Condicionais - Comando if</h1>
    <div id="main">
    <form name="script39" action="formSaidaScript39.php" method="POST">
        <div class="row">
            <label>Digite o Valor do Estoque</label><br>
            <input type="number" name="valEstoque" required>
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