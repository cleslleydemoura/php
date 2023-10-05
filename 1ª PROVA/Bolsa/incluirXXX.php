<?php
    require_once("includes/conectarBD.php");
    include_once ("includes/cabecalho.php");
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Clientes</b></font></div></td>
        </tr>
    </table><br/>
    <?php
        //Recebe os dados digitados no formulário de cadastro de clientes via método POST        
        $fabricanteBol = $_POST["bolFabricante"];
        $modeloBol = $_POST["bolModelo"];
        //O comando SQL que gravará os dados dos clientes na tabela clientes. Observem que estamos utilizando o comando str_to_date no campo $dtNascimentoCli para que o usuário possa digitar a data no formato dd/mm/aaaa
        $sql = mysqli_query($conexao,"INSERT INTO clientes (bolFabricante, bolModelo) VALUES ('$fabricanteBol', '$modeloBol')") or die("Erro no comando SQL!!!<br/> <b><a href='formIncluirXXX.php'><b>Voltar Para a Inclusão de Clientes</a><br/>".mysqli_error($conexao));
        echo "<div align=center>Os dados do Cliente $fabricanteBol foram cadastrados com sucesso!!! Veja abaixo os dados cadastrados.<br/><br/>";
        echo "<table class='striped'>";
        echo "<tr>";
        echo "<th><div>Nome do Fabricante</div></th>";
        echo "<th><div>Modelo</div></th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$fabricanteBol</font></td>";
        echo "<td>$modeloBol</font></td>";
        echo "</tr>";
        echo "</table><br/>";
        echo "<div align='center'><font face='Arial' size='2'>";
        echo "<b><a href='formIncluirXXX.php'><b>Voltar para a Inclusão de Clientes</a><br/>";
    ?>
<?php
    include_once 'includes/rodape.php';
?>