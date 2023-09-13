<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style type="text/css">
        h1{
            font: bold 14px Verdana; 
            background-color: #ddeeff;
            padding:5px; 
        } 
        #main{ 
            border: 1px solid #aaaaaa;
            padding: 10px; 
        } 
    </style>
</head>
<body style="margin:10px">
    <h1>Trabalhando com Formulários WEB no PHP</h1>
    <div id="main">
    <h6>Formulário Envio de Dados</h6>
        <form name="form1" action="formSaidaScript36.php" method="POST">
            <label>Digite seu nome</label>
            <input type="text" name="nomeIndex" required>            
            <button type="submit" class="btn">Enviar</button>
        </form>
    </div>    
</body>
</html>
