<?php
    require_once("includes/conectarBD.php");
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
      <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Excluir Dados de Bolsas</b></font></div></td>
      </tr>
      </table>      
<?php
     if (!isset($_POST["cliID"])&& !isset($_POST["enviar"]))
     {
?>
     <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
           <p>Código da Bolsa: <input type="text" name="cliID" size="10">
           <input type="submit" value="Excluir Dados do Bolsa" name="excluir"></p>
           <div align="left"><font face="Arial" size="2"><b>Não Lembra o Código?<a href='pesqTodosBolsas.php'> Clique Aqui </a><br></font></div>
     </form>
<?php
     }
     //Vai buscar dados do Bolsa
     else if(!isset($_POST["enviar"])) 
     {
        $cliID = $_POST["cliID"];
       $consulta = mysqli_query($conexao, "SELECT cliID, cliNome, cliEmail, cliCPF, date_format(cliDataNascimento,'%d/%m/%Y') as cliDataNascimento FROM Bolsas WHERE cliId = '$cliID'");          
        //obtem a resposta do Select executado acima
        $linha = mysqli_num_rows($consulta);
     if ($linha == 0) //verifica quantas linhas teve a query executada, se for igual a zero o Bolsa nao foi encontrado
     {
          echo "Bolsa não encontrada $cliID";
     }
     else
     {
          echo "<div><font face=Arial size=4><b>Bolsa Encontrada:</b></font></div>";
          //seta a linha de campoBolsa da tabela Bolsas e depois coloca cada campo em uma variavel
          $campoBolsa = mysqli_fetch_row($consulta);          
          $cliNome = $campoBolsa[1];
          $cliEmail = $campoBolsa[2];
          $cliCPF = $campoBolsa[3];
          $cliDtNascimento = $campoBolsa[4];         
?>
          <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
          <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
             <tr bgcolor="#6699CC">
                 <td colspan="15"><div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Bolsas Cadastradas</font></b></font></div></td>
             </tr>
             <tr><td width="5%"><div align="center"><b><font face="Arial" size="2">Código da Bolsa</font></b></div></td>                 
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">Modelo da Bolsa</font></b></div></td>                 
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">E-mail da Fabricante</font></b></div></td>
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">Número de Série</font></b></div></td>
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">Data de Lançamento</font></b></div></td>
             </tr>
             <tr>
                 <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $cliID;?></font></td>                 
                 <td width="20%" height="25"><b><font face="Arial" size="2"><?php echo $cliNome;?></font></td>                 
                 <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $cliEmail;?></font></td>
                 <td width="03%" height="25"><b><font face="Arial" size="2"><?php echo $cliCPF;?></font></td>
                 <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $cliDtNascimento;?></font></td>
             </tr>
          </table>
          <input type ="hidden" name="cliID" value="<?php echo $cliID;?>">
          <input type ="hidden" name="enviar" value="S">
          <input type ="submit" value="Deseja Realmente Excluir a Bolsa?" name="excluir"></p>
          </form>
<?php
          mysqli_close($conexao);
     }
     }
     else
     // Excluir Bolsa
     {
          $cliID = $_POST["cliID"];
          $deleta = mysqli_query($conexao, "DELETE FROM Bolsas WHERE cliID = '$cliID'");
          //O comando mysqli_affected_rows(), vai retornar a quantidade de linhas alteradas com o comando DELETE
          if (mysqli_affected_rows($conexao)>0)
          {
             echo "<p align='center'>Dados da Bolsa foram excluídos com sucesso!!!</p>";              
          }
          else
          {
              $erro=mysqli_error($conexao);
              echo "<p align='center'>Erro:$erro</p>";
          }
              mysqli_close($conexao);
          }
?>
          <p><div align="center"><font face="Arial" size="2">
          <p><div align="center"><font face="Arial" size="2">
          <b><a href='formExcluirBolsas.php'><b>Voltar Para Exclusão de Bolsas</a><br>
          <b><a href='index.php'>Voltar para o menu de Opções Gerenciamento de Bolsas</a><br>
<?php
    include_once 'includes/rodape.php';
?>
