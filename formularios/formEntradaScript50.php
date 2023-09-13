<?php
    include_once 'includes/cabecalho.php';
?>
    <h1>Utilizando as Variáreis SuperGlobais</h1>
    <div id="main">
    <form name="script50" action="formSaidaScript50.php" method="POST">
        <div class="row">
            <label>Digite o 1º Valor</label><br>
            <input type="text" name="valor1" required>
        </div>
        <br>
        <div class="row">
            <label>Digite a 2º Valor</label><br>
            <input type="text" name="valor2" required>
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
