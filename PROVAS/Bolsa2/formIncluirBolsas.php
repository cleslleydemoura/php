<?php
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
<?php
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
<div class="nav-bar-fixed">
    <nav>
        <div class="nav-wrapper blue lighten-1">
            <a href="#!" class="brand-logo">Menu de Opções</a>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="navbar-itens" class="right hide-on-med-and-down">
                <li><a href="formAlterarClientes.php">Alterar</a>
                <li><a href="formExcluirClientes.php">Excluir</a>
                <li><a href="menuPesquisarClientes.php">Pesquisar</a>
                <li><a class="dropdown-trigger" data-target="dropdown">Voltar<i class="material-icons">arrow_drop_down</i></a></li>
            </ul>
        </div> 
    </nav>
    <ul id="dropdown" class="dropdown-content">
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Bolsas</a></li>
    </ul>    
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="formAlterarClientes.php"><i class="material-icons left">done</i>Alterar</a>
        <li><a href="formExcluirClientes.php"><i class="material-icons left">delete</i>Excluir</a>
        <li><a href="menuPesquisarClientes.php"><i class="material-icons left">search</i>Pesquisar</a>
        <li class="divider" tabindex="-1"></li>
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Bolsas</a></li>
    </ul>
<div>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Bolsas</b></font></div></td>
    </tr>
</table>    
<form name="formClientes" id="formClientes" method="POST" action="incluirClientes.php">
<div class = "container" style="margin-top: 100px">        
    <div class="row">
        <div class = "col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">keyboard</i>
                <input type="text" name="cliNome" required>
                <label for="cliNome">Modelo da Bolsa:</label>
            </div>
        </div>
    </div>        
    <div class="row">
        <div class = "col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="text" name="cliEmail" required>
                <label for="cliEmail">Email da Fabricante:</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class = "col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">assignment_ind</i>
                <input type="text" name="cliCPF" required>
                <label for="cliTel">Número de Série:</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class = "col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">event_note</i>
                <input type="date" name="cliDataNascimento" required>
                <label for="cliDataNascimento">Data de Lançamento:</label>
            </div>
        </div>
    </div>
</div><br/><br/>
<div align="center">
    <button type="submit" class="waves-effect waves-light btn-large blue lighten-1" name="cadCliente" value="Cadastrar Cliente"><i class="material-icons left">assignment_ind</i>Cadastrar Bolsa</button>
</div>
</form>
</div>
<?php
    include_once 'includes/rodape.php';
?>
