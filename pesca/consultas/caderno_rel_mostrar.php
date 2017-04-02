
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

function janelaSecundaria1 (URL){
   window.open(URL,"janela1","width=400,height=100,scrollbars=YES")
}
</script>

<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="50%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <!--<tr class="titulo">
                        <td colspan="3">Registros familiar do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>-->

                       <tr class="titulo">
                       <td title="" align="left" >Informação</td>
                       <td title="" align="left" >Ano: <?php echo "$ano"; ?>&nbsp;&nbsp;Mês: <?php echo "$mes"; ?></td>


                      </tr>

                      <?php
                      $nn = 1;

                       if ($ano < 2006){
                       $sql = mysql_query("SELECT sum(rend) FROM pesc_col_caderno WHERE id_cad > 0 $data $fun");
                        while($registro = mysql_fetch_row($sql)){$prod =  $registro[0];$prod = number_format(($prod/1000),2,",",".");}
                        }else{
                        $sql = mysql_query("SELECT sum(peso) FROM pesc_col_caderno WHERE id_cad > 0 $data $fun");
                        while($registro = mysql_fetch_row($sql)){$prod =  $registro[0];$prod = number_format(($prod/1000),2,",",".");}
                         }
                         $sql1 = mysql_query("SELECT count(pescador) FROM pesc_col_caderno WHERE id_cad > 0 $data $fun GROUP BY pescador ");
                        while($registro1 = mysql_fetch_row($sql1)){$pesc =  $registro1[0];}

                         ?>
                                <tr>
                                <td align="left" >Produção em Toneladas</td>
                                <td align="left" ><?php echo "$prod"; ?></td>
                                </tr>

                                 <tr>
                                <td align="left" >Número de pescadores</td>
                                <td align="left" ><?php echo "$pesc"; ?></td>
                                </tr>


            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>
       </div>
    </div>

