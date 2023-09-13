<?php
    include_once 'includes/cabecalho.php';
?>       
        <h1>Trabalhando com Formulários WEB no PHP</h1>
        <div id="main" class="row">            
        <form name="exemplo" action="formSaidaScript38.php" method="POST">
            <div class="row">
                <label>Digite seu nome</label>
                <input type="text" name="nom" required>                    
                <div class="row">
                    <div class="row">
                        <label>E-mail</label>
                        <input name="email" type="email" required>                        
                    </div>
                    <div class="row">
                        <label>Seus Comentários</label>
                        <textarea name="mensagem"></textarea>                        
                    </div>
                </div>
                <div class="row">
                    <button type="submit" name="action">Enviar</button>
                    <button type="reset">Limpar</button>
                </div>
            </div>            
        </form>                       
        </div>
<?php
    include_once 'includes/rodape.php';
?>