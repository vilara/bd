
<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}
function janelaSecundaria1 (URL){
   window.open(URL,"janela1","width=400,height=100,scrollbars=YES")
}
</script>
<?php include "log_auth3.php"; ?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="80%" class="bordasimples">

                      <tr class="titulo">
                        <td colspan="8">LISTA DE USUÁRIOS</td>
                      </tr>

                      <tr class="titulo">
                        <td align="left" >Nome</td>
                        <td align="left" >Função</td>
                        <td align="left" >Citação</td>
                        <td align="left" >E-mail</td>
                        <td align="left" >Nível</td>
                        <td align="left" >Programa</td>
                        <td title="Excursão" align="" >Editar</td>
                         <td title="Excursão" align="" >Excluir</td>
                      </tr>

                      <?php
                      $nn = 1;
                        $sql = mysql_query("SELECT * FROM usu_dados ORDER BY id_usu_dados ASC");
                        while($registro = mysql_fetch_row($sql))
                            {
                                $id =  $registro[0];
                                $nome =  $registro[1];
                                $cpf =  $registro[3];
                                    $login = new ManipulateData();
                                    $login->setTable("usu_senha");
                                    $login->setFieldId("id_usu ='$id'");
                                    $login->setFieldNr("3"); $nivel = $login->data_filter();
                                    $login->setFieldNr("5"); $prog = $login->data_filter();
                            $cit =  $registro[6];
                            $funcao =  $registro[7];
                            $email =  $registro[11];
                            if ($nivel == "1"){$nivel = "Usuário";}
                            else if ($nivel == "2"){$nivel = "Gerente";}
                            else if ($nivel == "3"){$nivel = "Administrador";}
                            if ($prog == "pesca")
                            {
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$nome"; ?></td>
                                <td align="left" ><?php echo "$funcao"; ?></td>
                                <td align="left" ><?php echo "$cit"; ?></td>
                                <td align="left" ><?php echo "$email"; ?></td>
                                <td align="left" ><?php echo "$nivel"; ?></td>
                                <td align="left" ><?php echo "$prog"; ?></td>
                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/usu_inserir&idd=<?php echo"$id";?>')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('editar/index.php?secoes=edit/del_usu_inserir&idd=<?php echo"$id";?>')" >
                                <img src='img/del.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++; }
                            }


            ?>

            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>


        </div>
    </div>


