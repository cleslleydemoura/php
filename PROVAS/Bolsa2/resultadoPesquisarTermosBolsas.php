<?php
    require_once("includes/conectarBD.php");
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
      <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Pesquisar Bolsas por Termos de Pesquisa - BIL</b></font></div></td>
      </tr>
      </table><br>
<?php
     //Recebe os dados digitados no formulário de cadastro de bolsas via método POST
      $cliItemPesquisa = $_POST["cliItemPesquisa"];
      $cliTermoPesquisa = $_POST["cliTermoPesquisa"];
      
      //Elimina os espaços em branco digitados pelo usuário através do comando trim
      $cliItemPesquisa = trim($cliItemPesquisa);
      
      $sqlBolsas = mysqli_query($conexao,"SELECT * FROM bolsas WHERE ".$cliItemPesquisa." LIKE '%".$cliTermoPesquisa."%'"
      //Ordena pelo número do código do bolsas
      ." ORDER BY cliID") or die ("Não foi possível realizar a consulta !!!!");
      
?>
<?php
     //Se encontrar algum registro na tabela
     if(mysqli_num_rows($sqlBolsas) > 0)
     {
?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Bolsas Pesquisadas</font></b></font></div>
            </td>
        <tr>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">Código da Bolsas</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Modelo da Bolsas</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">E-mail da Fabricante</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Número de Série</font></b></div></td>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">Dt Lançamento</font></b></div></td>
        </tr>
<?php
        //Lista os dados da tabela enquanto existir
        while($arrayBolsas = mysqli_fetch_array($sqlBolsas))
        {
?>
        <tr>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayBolsas['cliID'];?></font></td>
            <td width="20%" height="25"><b><font face="Arial" size="2"><?php echo $arrayBolsas['cliNome'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayBolsas['cliEmail'];?></font></td>
            <td width="03%" height="25"><b><font face="Arial" size="2"><?php echo $arrayBolsas['cliCPF'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayBolsas['cliDataNascimento'];?></font></td>
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
         echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mais não foram encontrados nenhuma bolsas !!!!<br><br></font></div>";
     }
?>
     <br><div align="center"><font face="Arial" size="2">
     <b><a href='menuPesquisarBolsas.php'><b>Voltar Para o Menu Pesquisar Bolsas</a><br>     
     <b><a href='formAlterarBolsas.php'><b>Voltar Para Alteração de Bolsas</a><br>
     <b><a href='formExcluirBolsas.php'><b>Voltar Para Exclusão de Bolsas</a><br>
     <b><a href='index.php'><b>Voltar para o menu de Opções Gerenciamento de Bolsas</a><br>
<?php
    include_once 'includes/rodape.php';
?>
