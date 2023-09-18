<?php
    include_once 'includes/cabecalho.php';
?>
<center>
    <div id="main">
    <h1>Formulário</h1>
    <br>
    <form name="script" action="formSaidaExec03.php" method="POST">
        <div class="row">
            <label>Digite seu Nome: </label><br>
            <input type="text" name="name" placeholder="NOME" required><br>
        </div>
        <div class="row">
            <label>Digite sua Idade: </label><br>
            <input type="text" name="idade" placeholder="IDADE" required><br>
        </div>
        <div class="row">
            <label>Sexo: </label><br>
            <label class="radio-inline">
          <input type="radio" name="gender" id="optradio" >Male
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" id="optradio">Female
        </label>
        </div>
        <br>
        <div class="row">
            <button class="btn" type="submit" name="enviar">Enviar</button>
        </div>
    </form>   
</center>
<?php
    include_once 'includes/rodape.php';
?>