<?php
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>   
      <table width="55%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td>
                <table width="130%" cellspacing="0" cellpadding="0" border="0">
                <tr>                  
                    <td width="130%" align="center"><b>Menu Pesquisar Bolsas</font></td>                  
                </tr>
                </table></td>
            </tr>
            <tr>
                <td nowrap>
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                    <ol type="I" start="1"><br>
                        <li><a href="pesqTodasBolsas.php"><font color="#3300FF"><b>Todos</font></a>
                        <li><a href="formPesquisarTermosBolsas.php"><b>Escolher Termo de Pesquisa</font></a>
                    </ol>
                    </tr>
                </table></td>              
            </tr> 
          </table>
          <br><div align="center"><font face="Arial" size="2">
          <b><a href='index.php'>Voltar Para o Menu de Opções Gerenciamento das Bolsas</a><br>
<?php
    include_once 'includes/rodape.php';
?>
