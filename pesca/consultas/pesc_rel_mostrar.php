
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
            <table cellspacing="0" align="center" width="70%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <!--<tr class="titulo">
                        <td colspan="3">Registros familiar do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>-->

                       <tr class="titulo">
                       <td title="" align="left" >Localidade</td>
                       <td title="" align="left" >Ano</td>
                       <td title="" align="left" >Mês</td>
                       <td title="" align="left" >Dia</td>
                       <td title="" align="left" >Pescador</td>
                       <td title="" align="left" >Dias sem pesca</td>
                       <td title="" align="left" >Dias de pesca</td>
                       <td title="" align="left" >Com captura</td>
                        <td title="" align="left" >Sem captura</td>
                        <td title="" align="left" >Média de captura g/dia</td>

                      </tr>

                      <?php
                      $nn = 1;

               $sql = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 $data $local GROUP BY pescador ORDER BY pescador ASC ");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {

                                     $pesc =  $registro[0];
                                     $lista = new ManipulateData();
                                     $NomePesc = $lista->NomePesc($pesc);

                           $sql2 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND sit = 'NPE' $data $local GROUP BY data");
                           $npesc = mysql_num_rows($sql2);

                            $sql3 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND (sit = 'SPE' OR sit = 'ZPE') $data $local GROUP BY data");
                           $hpesc = mysql_num_rows($sql3);

                            $sql4 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND sit = 'ZPE' $data $local GROUP BY data");
                           $zpesc = mysql_num_rows($sql4);

                            $sql5 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND sit = 'SPE' $data $local GROUP BY data");
                           $cpesc = mysql_num_rows($sql5);

                           /*$sql3 = mysql_query("SELECT count(data) FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' $data $local AND (sit = 'SPE' OR sit = 'ZPE') GROUP BY data");
                           $hpesc = mysql_num_rows($sql3); while($registro3 = mysql_fetch_row($sql3)){$hpesc =  $registro3[0];} */

                        /*   $sql4 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND sit = 'ZPE' $data $local");
                           $zpesc = mysql_num_rows($sql4);*/

                             $sql6 = mysql_query("SELECT sum(peso_g) FROM pesc_col_familiar WHERE id_merc > 0 AND pescador = '$pesc' AND sit = 'SPE' $data $local");
                            while($registro6 = mysql_fetch_row($sql6))
                            {  $soma = $registro6[0]; }


                         /*  $sql5 = mysql_query("SELECT sit FROM pesc_col_familiar WHERE pescador = '$pesc' AND sit = 'SPE' $data $local");
                            $dias = mysql_num_rows($sql5);*/

                          if ($cpesc > 0){
                             $med_pesc = $soma/$hpesc;
                              $med_pesc = number_format($med_pesc,2,",",".");
                             }else {$med_pesc = 0;}

                                   /*   $cpesc = $hpesc - $zpesc; */


                         ?>
                                <tr>
                                 <td align="left" ><?php echo "$NomeLoc"; ?></td>   
                                 <td align="left" ><?php echo "$ano"; ?></td>
                                <td align="left" ><?php echo "$mes"; ?></td>
                                <td align="left" ><?php echo "$dia"; ?></td>
                                <td align="left" ><?php echo "$NomePesc"; ?></td>
                                <td align="left" ><?php echo "$npesc"; ?></td>


                                <td align="left" ><?php echo "$hpesc"; ?></td>



                                 <td align="left" ><?php echo "$cpesc"; ?></td>
                                  <td align="left" ><?php echo "$zpesc"; ?></td>
                                   <td align="left" ><?php echo "$med_pesc"; ?></td>
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

