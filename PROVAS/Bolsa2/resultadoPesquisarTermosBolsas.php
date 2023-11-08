<?php
    require_once("includes/conectarBD.php");
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
      <div class="nav-bar-fixed">
      <div class="nav-bar-fixed">
    <nav>
        <div class="nav-wrapper blue lighten-1">
            <a href="#!" class="brand-logo">Menu de Opções</a>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="navbar-itens" class="right hide-on-med-and-down">
                <li><a href="formIncluirBolsas.php">Incluir</a>
                <li><a href="formAlterarBolsas.php">Alterar</a>
                <li><a href="formExcluirBolsas.php">Excluir</a>
                <li><a href="menuPesquisarBolsas.php">Pesquisar</a>
            </ul>
        </div>
    </nav> 
    <ul id="dropdown" class="dropdown-content">
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Bolsas</a></li>
    </ul>    
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="formIncluirBolsas.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
        <li><a href="formAlterarBolsas.php"><i class="material-icons left">done</i>Alterar</a>
        <li><a href="formExcluirBolsas.php"><i class="material-icons left">delete</i>Excluir</a>
        <li><a href="menuPesquisarBolsas.php"><i class="material-icons left">search</i>Pesquisar</a>
        <li class="divider" tabindex="-1"></li>
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Bolsas</a></li>
    </ul>
</div>
      <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Pesquisar Bolsas por Termos de Pesquisa - BIL</b></font></div></td>
      </tr>
      </table><br>
<?php
     //Recebe os dados digitados no formulário de cadastro de Bolsas via método POST
      $bolItemPesquisa = $_POST["bolItemPesquisa"];
      $bolTermoPesquisa = $_POST["bolTermoPesquisa"];
      
      //Elimina os espaços em branco digitados pelo usuário através do comando trim
      $bolItemPesquisa = trim($bolItemPesquisa);
      
      $sqlBolsa = mysqli_query($conexao,"SELECT * FROM bolsa WHERE ".$bolItemPesquisa." LIKE '%".$bolTermoPesquisa."%'"
      //Ordena pelo número do código do Bolsa
      ." ORDER BY bolID") or die ("Não foi possível realizar a consulta !!!!");
      
?>
<?php
     //Se encontrar algum registro na tabela
     if(mysqli_num_rows($sqlBolsa) > 0)
     {
?>
        <table class="striped">
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Bolsas Pesquisadas</font></b></font></div>
            </td>
        <tr>
            <td><b><font face="Arial" size="2">Código da Bolsa</font></b></div></td>
            <td><b><font face="Arial" size="2">Modelo</font></b></div></td>
            <td><b><font face="Arial" size="2">Fabricante</font></b></div></td>
        </tr>
<?php
        //Lista os dados da tabela enquanto existir
        while($arrayBolsa = mysqli_fetch_array($sqlBolsa))
        {
?>
        <tr>
            <td><b><font face="Arial" size="2"><?php echo $arrayBolsa['bolID'];?></font></td>
            <td><b><font face="Arial" size="2"><?php echo $arrayBolsa['bolModelo'];?></font></td>
            <td><b><font face="Arial" size="2"><?php echo $arrayBolsa['bolFabricante'];?></font></td>
        </tr>
<?php
        //Fecha a execução do comando mysqli_fetch_array 
        }
?>
        </table>
<?php
     }//Fecha a execução do comando mysqli_num_rows > 0
     else
     {
         echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mais não foram encontrados nenhum Bolsa !!!!<br><br></font></div>";
     }
?>

<?php
    include_once 'includes/rodape.php';
?>
