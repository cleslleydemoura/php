<?php
    include_once 'includes/cabecalho.php';
?>
<center>
    <div id="main">
    <h1>Formulário</h1>
    <br>
    <form name="script" action="formSaidaExec02.php" method="POST">
        <div class="row">
            <label>Digite seu Nome: </label><br>
            <input type="text" name="name" placeholder="NOME" required><br>
        </div>
        <div class="row">
            <label>Digite a 1ª nota: </label><br>
            <input type="text" name="valnota1" placeholder="PRIMEIRA NOTA" required><br>
        </div>
        <div class="row">
            <label>Digite a 2ª nota: </label><br>
            <input type="text" name="valnota2" placeholder="SEGUNDA NOTA" required><br>
        </div>
        <div class="row">
            <label>Digite a 3ª nota: </label><br>
            <input type="text" name="valnota3" placeholder="PRIMEIRA NOTA" required><br>
        </div>
        <div class="row">
            <button class="btn" type="submit" name="enviar">Enviar</button>
        </div>
    </form>   
</center>
<?php
    include_once 'includes/rodape.php';
?>