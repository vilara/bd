
<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="50%" class="bordasimples">



                      <tr class="titulo">
                          <td align="left" >Nome</td>
                          <td align="left" >Data</td>
                          <td align="left" >Arquivo</td>
                          <td align="left" >Download</td>

                      </tr>

                      <?php
                      $nn = 1;


                        $sql = mysql_query("SELECT * FROM tb_arquivos WHERE categoria = '$categoria' ");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {

                            $id_lim =  $registro[0];
                            $nome =  $registro[1];
                                  $data =  $registro[2];
                                $categoria =  $registro[3];
                                $arquivo =  $registro[4];
                               ?>
                                <tr>
                                    <td align="left" ><?php echo "$nome"; ?></td>
                                    <td align="left" ><?php echo "$data"; ?></td>
                                    <td align="left" ><?php echo "$arquivo"; ?></td>
                                    <td title="Excursão" align="" ><a href="../../bd/ictio/arq/<?php echo "$categoria"; ?>/<?php echo "$arquivo"; ?>";?><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                            }
                  ?>

            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>


        </div>
    </div>


