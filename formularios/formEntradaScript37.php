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
        <div id="main" class="row">            
                <h6>Tipos de Campos em um Formulário</h6>
                <form name="form1" method="POST" action="formSaidaScript37.php">
                    <div>
                        <label>Digite seu nome</label>
                        <input type="text" name="nomeIndex" required>                        
                        <div class="row">
                            <div>
                                <label>Password(Senha)</label>
                                <input id="password" type="password" required>                                
                            </div>
                            <div>
                                <p><label>Sexo</label></p>
                                <p>
                                <label>
                                <input name="group1" type="radio" required>
                                <span>Masculino</span>
                                </label>
                                </p>
                                <p>
                                <label>
                                <input name="group1" type="radio" required>
                                <span>Feminino</span>
                                </label>
                                </p>
                            </div>
                            <label>Opções</label>
                            <select class="browser-default">
                            <option value="" disabled selected required>Caixa de Seleção</option>
                            <option value="1">Opção 1</option>
                            <option value="2">Opção 2</option>
                            <option value="3">Opção 3</option>
                            </select>
                            <p><label>Deseja receber informações</label></p>
                            <p>
                            <label>
                            <input type="checkbox" required>
                            <span>Sim</span>
                            </label>
                            </p>
                            <p>
                            <textarea id="textarea1" required></textarea>
                            <label for="textarea1">Seus Comentários</label>
                            </p>                          
                            <div class="btn">
                                <span>Envie sua imagem</span>
                                <input type="file">
                            </div>                           
                        </div>
                    </div>
                    <button type="submit" name="action">Enviar</button>
                    <button type="reset">Limpar</button>
                </form>                       
        </div>
    </body>
</html>
