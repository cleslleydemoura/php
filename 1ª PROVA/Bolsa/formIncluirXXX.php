<?php
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Clientes</b></font></div></td>
        </tr>
    </table>    
    <form name="formClientes" id="formClientes" method="POST" action="incluirXXX.php">
    <table width="35%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="24%" height="25">Nome do Fabricante:</td>
            <td height="25" width="76%"><input type="text" name="bolFabricante" required></td>
        </tr>
        <tr>
            <td height="25" width="24%">Modelo:</td>
            <td height="25" width="76%"><input type="text" name="bolModelo" required></td>
        </tr>
    <tr>
    <td height="25" colspan="2">
        <div>
                <input type="submit" name="cadCliente" value="Cadastrar Cliente">
        </div></td>
    </tr>
    </table>
    </form>
</body>
    <div align="center">
        <a href='index.php'>Voltar para o menu de Opções Gerenciamento de Clientes</a><br/>
    </div>
<?php
    include_once 'includes/rodape.php';
?>