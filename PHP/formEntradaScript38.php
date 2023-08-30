<?php
    include_once 'includes/cabecalho.php';
?>
<center>
    <div id="main">
    <h1>Formulário</h1>
    <br>
    <form name="script40" action="" method="POST">
        <div class="row">
            <label>Digite seu nome: </label><br>
            <input type="text" name="valNome" placeholder="NOME" required>
        </div>
        <br>
        <div class="row">
            <label>Digite sua idade: </label><br>
            <input type="number" name="valIdade" placeholder="IDADE" required>
        </div>
        <div class="row">
            <label> Seu E-mail: </label><br>
            <input type="email" name="valEmail" placeholder="E-MAIL" required>
        </div>
        <br>
        <div class="row">
            <button class="btn" type="submit" name="enviar">Enviar</button>
            <button class="btn" type="reset">Limpar</button>
        </div>
    </form>

        <?php
        
        if(isset($_POST['enviar'])){
        include_once 'includes/cabecalho.php';
    
        $valIdade = $_POST['valIdade'];
        $valNome = $_POST['valNome'];
        $valEmail = $_POST['valEmail'];

        if ($valIdade >= 18)
        {
            echo $valNome, " , você é maior de idade!";
        }                      
        else
        {
            echo $valNome, " , você é menor de idade!";
        }

    include_once 'includes/rodape.php';
        }
        
        ?>
    
    </div>
    </center>  
</body>
</html>
<?php
    include_once 'includes/rodape.php';
?>
