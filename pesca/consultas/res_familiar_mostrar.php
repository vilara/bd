
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
               <tr class="titulo">
                       <td title="" align="left" >Categoria</td>
                       <td title="" align="left" >Produção em Kg</td>
               </tr>

                      <?php
                      $nn = 0;$sprod = 0;
                      $sql4 = mysql_query("SELECT esp, sum(peso_g) AS pe, localidade  FROM pesc_col_familiar WHERE id_merc > 0 AND esp != 0 $data $local GROUP BY esp ORDER BY pe ASC ");
                      while($registro4 = mysql_fetch_row($sql4)){$prod4 =  $registro4[1];$prod41 = number_format($prod4,2,",",".");
                      if ($prod4 > 0){$nn++;}
                      $sprod += $prod4;
                      }
                      if ($nn > 0){$prod_media = $sprod/$nn;   $prod_media1 = number_format($prod_media,2,",",".");}
                      $sql2 = mysql_query("SELECT esp, sum(peso_g) AS pe, localidade  FROM pesc_col_familiar WHERE id_merc > 0 AND esp != 0 $data $local GROUP BY esp ORDER BY pe DESC ");
                        $num2 = mysql_num_rows($sql2);
                        while($registro2 = mysql_fetch_row($sql2))
                            {
                                     $esp =  $registro2[0];
                                     $prod =  $registro2[1];
                                     $prod1 = number_format($prod,2,",",".");
                                     $lista = new ManipulateData();
                                     $NomeCateg = $lista->NomeCateg($esp);
                                     $localidade =  $registro2[2];
                                     if ($prod > 0){
                                     $vari = $prod-$prod_media;
                                     $quad_vari = $vari * $vari;
                                     $soma_quad_vari += $quad_vari;
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$NomeCateg"; ?></td>
                                <td align="left" ><?php echo "$prod1"; ?></td>
                                </tr>
                                <?php
                                $min = $prod1;
                                $max = $prod41;          /*  | $prod_media | $vari | $quad_vari */
                                }
                            }

                             $sprod1 = number_format($sprod,2,",",".")
                            ?>

                             <tr>
                                <td align="left" class="titulo" >TOTAL</td>
                                <td align="left" ><?php echo "$sprod1"; ?></td>
                                </tr>
                           </table>
                            <br /><br />



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
                      <td title="" align="left" >Pescador</td>
                       <td title="" align="left" >Dias sem pesca</td>
                       <td title="" align="left" >Dias de pesca</td>
                       <td title="" align="left" >Com captura</td>
                        <td title="" align="left" >Sem captura</td>
                        <td title="" align="left" >Média de captura Kg/dia</td>

                      </tr>

                      <?php
                      $nnn = 0;

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
                             $cmed_pesc = $med_pesc;
                              $med_pesc = number_format($med_pesc,2,",",".");
                             }else {$med_pesc = 0;}

                                   /*   $cpesc = $hpesc - $zpesc; */


                         ?>
                                <tr>
                                 <td align="left" ><?php echo "$NomeLoc"; ?></td>
                                 <td align="left" ><?php echo "$ano"; ?></td>
                                <td align="left" ><?php echo "$mes"; ?></td>

                                <td align="left" ><?php echo "$NomePesc"; ?></td>
                                <td align="left" ><?php echo "$npesc"; ?></td>


                                <td align="left" ><?php echo "$hpesc"; ?></td>



                                 <td align="left" ><?php echo "$cpesc"; ?></td>
                                  <td align="left" ><?php echo "$zpesc"; ?></td>
                                   <td align="left" ><?php echo "$med_pesc"; ?></td>
                                </tr>
                                <?php





                          $nnn++;
                          $tot_npesc += $npesc;
                          $tot_hpesc += $hpesc;
                          $tot_cpesc += $cpesc;
                          $tot_zpesc += $zpesc;
                           $cpue += $cmed_pesc;
                         }



                        $tot_hpesc55 =  $tot_hpesc;
            ?>
                         <tr class="titulo">
                                 <td align="left" colspan="5">TOTAIS</td>
                                 <td align="left" ><?php echo "$tot_hpesc"; ?></td>




                                 <td align="left" >&nbsp;</td>
                                  <td align="left" >&nbsp;</td>
                                  <td align="left" >&nbsp;</td>
                                </tr>
            </table>
































          <br /> <br />

           <table cellspacing="0" align="center" width="25%" class="bordasimples">

                <?php
                 $sprod1 = number_format($sprod,2,",",".");
                 if ($nnn >0  AND $nn >0){
                 $tot_npesc = $tot_npesc/$nnn;  $tot_npesc1 = number_format($tot_npesc,2,",",".");

                 $tot_hpesc = $tot_hpesc/$nnn;  $tot_hpesc1 = number_format($tot_hpesc,2,",",".");
                 $tot_cpesc = $tot_cpesc/$nnn;  $tot_cpesc1 = number_format($tot_cpesc,2,",",".");
                 $tot_zpesc = $tot_zpesc/$nnn;  $tot_zpesc1 = number_format($tot_zpesc,2,",",".");

                 $prod_media = $sprod/$nn;   $prod_media1 = number_format($prod_media,2,",",".");
                 $variancia = $soma_quad_vari/($nn - 1);
                 $des_pad = sqrt($variancia); $des_pad1 = number_format($des_pad,2,",",".");
                 $cpuee = ($cpue/1000)/$nnn;
                 $cpuee1 = number_format($cpuee,2,",",".");
                   }
                ?>
               <!--      <tr class="titulo"><td colspan="2">Mês :<?php echo "$mes"; ?>   Ano:<?php echo "$ano"; ?></td></tr>

               <tr><td align="left"></td><td align="left"></td></tr>
               <tr><td align="left"></td><td align="left"></td></tr>
               <tr><td align="left"></td><td align="left"></td></tr>
                <tr><td align="left"></td><td align="left"></td></tr>
                <tr><td align="left"></td><td align="left"></td></tr>
                <tr><td align="left"></td><td align="left"></td></tr>
                <tr><td align="left"></td><td align="left"></td></tr>

                 <tr><td align="left"></td><td align="left"></td></tr>
                   <tr><td align="left"></td><td align="left"></td></tr>
                 <tr><td align="left"></td><td align="left"></td></tr>
           <tr><td align="left">Soma Quad</td><td align="left"><?php echo "$soma_quad_vari"; ?></td></tr>
                  <tr><td align="left">Variância</td><td align="left"><?php echo "$variancia"; ?></td></tr>
                <tr><td align="left"></td><td align="left"></td></tr>
                 <tr><td align="left"></td><td align="left"></td></tr>     -->

    <tr  class="titulo">
    <td class="titulo"><?php echo "$ano"; ?></td>
    <td class="titulo">Produção Mínima</td><td class="titulo">Produção Máxima</td><td class="titulo">Nr Pescadores</td>
    <td class="titulo">Média dias s/pesca</td><td class="titulo">Média dias c/pesca</td>
    <td class="titulo">Média dias c/captura</td><td class="titulo">Média dias s/captura</td>
    <td class="titulo">Total de dias de pesca</td><td class="titulo">Produção Total em Kg</td>
    <td class="titulo">Produção Média</td><td class="titulo">Desvio Padrão</td>
    <td class="titulo">CPUE</td></tr>










    <tr>
    <td><?php echo "$mes"; ?></td>
    <td><?php echo "$min"; ?></td>
     <td><?php echo "$max"; ?></td><td><?php echo "$nnn"; ?></td>
     <td><?php echo "$tot_npesc1"; ?></td><td><?php echo "$tot_hpesc1"; ?></td>
     <td><?php echo "$tot_cpesc1"; ?></td><td><?php echo "$tot_zpesc1"; ?></td>
     <td><?php echo "$tot_hpesc55"; ?></td><td><?php echo "$sprod1"; ?></td>
     <td><?php echo "$prod_media1"; ?></td><td><?php echo "$des_pad1"; ?></td>
     <td><?php echo "$cpuee1"; ?></td></tr>






           </table>
         <!-- <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>-->
       </div>
    </div>

