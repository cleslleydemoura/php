<?php
    require_once("includes/conectarBD.php");
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Bolsas</b></font></div></td>
        </tr>
    </table><br/>
    <?php
        //Recebe os dados digitados no formulário de cadastro de clientes via método POST        
        $nomeCli = $_POST["cliNome"];
        $emailCli = $_POST["cliEmail"];
        $cpfCli = $_POST["cliCPF"];
        $dtNascimentoCli = new DateTime($_POST["cliDataNascimento"]);
        $dataFormatada = $dtNascimentoCli->format('d/m/Y');
        //O comando SQL que gravará os dados dos clientes na tabela clientes. Observem que estamos utilizando o comando str_to_date no campo $dtNascimentoCli para que o usuário possa digitar a data no formato dd/mm/aaaa
        $sql = mysqli_query($conexao,"INSERT INTO bolsas (cliNome, cliEmail, cliCPF, cliDataNascimento) VALUES ('$nomeCli', '$emailCli', '$cpfCli', str_to_date('$dataFormatada','%d/%m/%Y'))") or die("Erro no comando SQL!!!<br/> <b><a href='formIncluirBolsas.php'><b>Voltar Para a Inclusão de Bolsas</a><br/>".mysqli_error($conexao));
        echo "<div align=center>Os dados da Bolsa $nomeCli foram cadastrados com sucesso!!! Veja abaixo os dados cadastrados.<br/><br/>";
        echo "<table class='striped'>";
        echo "<tr>";
        echo "<th><div>Nome da Bolsa</div></th>";
        echo "<th><div>E-mail da Fabricante</div></th>";
        echo "<th><div>Número de Série</div></th>";
        echo "<th><div>Data de Fabricação</div></th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$nomeCli</font></td>";
        echo "<td>$emailCli</font></td>";
        echo "<td>$cpfCli</font></td>";
        echo "<td>$dataFormatada</font></td>";
        echo "</tr>";
        echo "</table><br/>";
        echo "<div align='center'><font face='Arial' size='2'>";
        echo "<b><a href='formIncluirBolsas.php'><b>Voltar para a Inclusão de Bolsas</a><br/>";
        echo "<b><a href='formAlterarBolsas.php'><b>Voltar para a Alteração de Bolsas</a><br/>";
        echo "<b><a href='formExcluirBolsas.php'><b>Voltar para a Exclusão de Bolsas</a><br/>";
        echo "<b><a href='menuPesquisarBolsas.php'><b>Voltar para a Pesquisa de Bolsas</a><br/>";
        echo "<b><a href='index.php'><b>Voltar para o menu de Opções Gerenciamento de Bolsas</a><br/>";
    ?>
<?php
    include_once 'includes/rodape.php';
?>
