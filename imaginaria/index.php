<?php
    include_once 'includes/cabecalho.php';
?>
<div class="nav-bar-fixed">
    <nav>
        <div class="nav-wrapper blue lighten-1">
            <a href="#!" class="brand-logo">Menu de Opções</a>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="navbar-itens" class="right hide-on-med-and-down">
                <li><a href="formIncluirClientes.php">Incluir</a>
                <li><a href="formAlterarClientes.php">Alterar</a>
                <li><a href="formExcluirClientes.php">Excluir</a>
                <li><a href="menuPesquisarClientes.php">Pesquisar</a>
            </ul>
        </div>
    </nav>
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="formIncluirClientes.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
        <li><a href="formAlterarClientes.php"><i class="material-icons left">done</i>Alterar</a>
        <li><a href="formExcluirClientes.php"><i class="material-icons left">delete</i>Excluir</a>
        <li><a href="menuPesquisarClientes.php"><i class="material-icons left">search</i>Pesquisar</a>
    </ul>
<div>
<div>
    <ul>
        <li class="row"><a href="formIncluirClientes.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
        <li class="row"><a href="formAlterarClientes.php"><i class="material-icons left">done</i>Alterar</a>
        <li class="row"><a href="formExcluirClientes.php"><i class="material-icons left">delete</i>Excluir</a>
        <li class="row"><a href="menuPesquisarClientes.php"><i class="material-icons left">search</i>Pesquisar</a>
    </ul>        
</div>
<?php
    include_once 'includes/rodape.php';
?>
