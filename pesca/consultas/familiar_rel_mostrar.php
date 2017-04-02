
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
                       <td title="" align="left" >Categoria</td>
                       <td title="" align="left" >Produção em g</td>
                       <td title="" align="left" >Nr Pescadores</td>

                      </tr>

                      <?php
                      $nn = 1;

                      if ($par == "+cap") {
                       $sprod = 0;
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
                                      $s = 0;
                                     $sql3 = mysql_query("SELECT pescador FROM pesc_col_familiar WHERE id_merc > 0 AND esp = '$esp' $data $local GROUP BY pescador");
                                      while($registro3 = mysql_fetch_row($sql3))
                                      { $nr_pesc1 =  $registro3[0];/*echo "$nr_pesc1<br>";*/$s++;}

                                   $sprod += $prod;

                                     if ($prod > 0){
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$NomeCateg"; ?></td>
                                <td align="left" ><?php echo "$prod1"; ?></td>
                                <td align="left" ><?php echo "$s"; ?></td>
                                </tr>
                                <?php  $nn++; }
                            //  echo "<br>";
                            }

                              $sprod1 = number_format($sprod,2,",",".");
                             ?>
                             <tr>
                                <td align="left" >Totais</td>
                                <td align="left" ><?php echo "$sprod1"; ?></td>
                                <td align="left" ><?php echo "-"; ?></td>
                                </tr>
                           <?php
                       }












                             if ($par == "+vend") {

            $sql2 = mysql_query("SELECT esp, sum(qtdev) AS pe, localidade  FROM pesc_col_familiar WHERE id_merc > 0 AND esp != 0 $data $local GROUP BY esp ORDER BY pe DESC ");
                        $num2 = mysql_num_rows($sql2);
                        while($registro2 = mysql_fetch_row($sql2))
                            {

                                     $esp =  $registro2[0];
                                     $prod =  $registro2[1];
                                     $lista = new ManipulateData();
                                     $NomeCateg = $lista->NomeCateg($esp);

                                     $localidade =  $registro2[2];

                                     $sql3 = mysql_query("SELECT esp, count(pescador) FROM pesc_col_familiar WHERE id_merc > 0 AND esp = '$esp' GROUP BY pescador");
                                      while($registro3 = mysql_fetch_row($sql3))
                                       $nr_pesc =  $registro3[0];



                                     if ($prod > 0){
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$NomeCateg"; ?></td>
                                <td align="left" ><?php echo "$prod g"; ?></td>
                                <td align="left" ><?php echo "$nr_pesc"; ?></td>
                                </tr>
                                <?php  $nn++; }

                            }
                       }




                                                    if ($par == "+cons") {

            $sql2 = mysql_query("SELECT esp, sum(qtdec) AS pe, localidade  FROM pesc_col_familiar WHERE id_merc > 0 AND esp != 0 $data $local GROUP BY esp ORDER BY pe DESC ");
                        $num2 = mysql_num_rows($sql2);
                        while($registro2 = mysql_fetch_row($sql2))
                            {

                                     $esp =  $registro2[0];
                                     $prod =  $registro2[1];
                                     $lista = new ManipulateData();
                                     $NomeCateg = $lista->NomeCateg($esp);

                                     $localidade =  $registro2[2];

                                     $sql3 = mysql_query("SELECT esp, count(pescador) FROM pesc_col_familiar WHERE id_merc > 0 AND esp = '$esp' GROUP BY pescador");
                                      while($registro3 = mysql_fetch_row($sql3))
                                       $nr_pesc =  $registro3[0];



                                     if ($prod > 0){
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$NomeCateg"; ?></td>
                                <td align="left" ><?php echo "$prod g"; ?></td>
                                <td align="left" ><?php echo "$nr_pesc"; ?></td>
                                </tr>
                                <?php  $nn++; }

                            }
                       }



            // }
            ?>

            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>
       </div>
    </div>

