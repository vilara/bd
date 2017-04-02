
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
                <?php   $nn = 1;
                  $sql = mysql_query("SELECT pescador AS pp FROM pesc_col_caderno WHERE id_cad > 0 $data $fun GROUP BY pescador ORDER BY pp ASC");
                        while($registro = mysql_fetch_row($sql))
                        {$pesc =  $registro[0];
                         $lista = new ManipulateData();
                         $NomePesc = $lista->NomePesc($pesc);

                            $sql1 = mysql_query("SELECT count(data) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun GROUP BY data");
                        while($registro1 = mysql_fetch_row($sql1)){$dias =  $registro1[0];}


                        if ($ano < 2006){
                         $sql2 = mysql_query("SELECT sum(rend) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun");
                        while($registro2 = mysql_fetch_row($sql2)){$prod =  $registro2[0];}

                        }else{
                        $sql2 = mysql_query("SELECT sum(peso) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun");
                        while($registro2 = mysql_fetch_row($sql2)){$prod =  $registro2[0];}
                        }
                        $ppp = explode(".", $prod);

                        $prod1 =  $ppp[0].",".$ppp[1];
                        $med = $prod/$dias;  $med = number_format($med,2,",","");
                        $nn++; $pro += $prod;
                         }
                         $n = $nn - 1;
                         $pro_med = $pro/$n; $pro_med = number_format($pro_med,2,'.','');

                         ?>

                      <!--<tr class="titulo">
                        <td colspan="3">Registros familiar do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>-->

                       <tr class="titulo">
                       <td title="" align="left" >Pescador</td>
                       <td title="" align="left" >Nr Dias Trab</td>
                       <td title="" align="left" >Produção</td>
                        <td title="" align="left" >Média</td>
                      </tr>

                      <?php


                        $sql = mysql_query("SELECT pescador AS pp FROM pesc_col_caderno WHERE id_cad > 0 $data $fun GROUP BY pescador ORDER BY pp ASC");
                        while($registro = mysql_fetch_row($sql))
                        {$pesc =  $registro[0];
                         $lista = new ManipulateData();
                         $NomePesc = $lista->NomePesc($pesc);

                            $sql1 = mysql_query("SELECT count(data) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun GROUP BY data");
                        while($registro1 = mysql_fetch_row($sql1)){$dias =  $registro1[0];}


                        if ($ano < 2006){
                         $sql2 = mysql_query("SELECT sum(rend) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun");
                        while($registro2 = mysql_fetch_row($sql2)){$prod =  $registro2[0];}

                        }else{
                        $sql2 = mysql_query("SELECT sum(peso) FROM pesc_col_caderno WHERE id_cad > 0 AND pescador = '$pesc' $data $fun");
                        while($registro2 = mysql_fetch_row($sql2)){$prod =  $registro2[0];}
                        }
                        $prod2 = number_format($prod,2,",","");
                        $ppp = explode(".", $prod);

                        $prod1 =  $ppp[0].",".$ppp[1];
                        $med = $prod/$dias;  $med = number_format($med,2,",","");

                        $des_med  = $prod2 - $pro_med;
                        $var = $des_med * $des_med;$var = number_format($var,2,'.','');
                        $var1 += $var;

                        $des_med1 += $des_med;
                         ?>
                                <tr>
                                <td align="left" ><?php echo "$NomePesc"; ?></td>
                                <td align="left" ><?php echo "$dias"; ?></td>
                                <td align="left" ><?php echo "$prod1"; ?></td>
                                <td align="left" ><?php echo "$med"; ?></td>
                                </tr>

                <?php
                    }

                $var1 = number_format($var1,2,'.','');
                $var2 = $var1/($n - 1);$var2 = number_format($var2,2,'.','');
                $des_pad = sqrt($var2);$des_pad = number_format($des_pad,2,'.','');
                $des_rel = $des_pad/$pro_med;$des_rel = number_format($des_rel,2,'.','');
                $erro = $des_pad/(sqrt($n));$erro = number_format($erro,2,'.','');


                $pro_med1 = explode(".", $pro_med);$pro_med2 =  $pro_med1[0].",".$pro_med1[1];
                 $var3 = explode(".", $var2);$var4 =  $var3[0].",".$var3[1];
                 $des_pad1 = explode(".", $des_pad);$des_pad2 =  $des_pad1[0].",".$des_pad1[1];
                  $des_rel1 = explode(".", $des_rel);$des_rel2 =  $des_rel1[0].",".$des_rel1[1];
                  $erro1 = explode(".", $erro);$erro2 =  $erro1[0].",".$erro1[1];
                ?>
            </table>
               <br /><br />
             <table cellspacing="0" align="center" width="20%" class="bordasimples">
                 <tr>
                                <td align="left" >Produção Média</td>
                                <td align="left" ><?php echo "$pro_med2"; ?></td>
                 </tr>

                 <tr>
                                <td align="left" >Variância</td>
                                <td align="left" ><?php echo "$var4"; ?></td>
                 </tr>

                  <tr>
                                <td align="left" >Desvio Padrão</td>
                                <td align="left" ><?php echo "$des_pad2"; ?></td>
                 </tr>

                  <tr>
                                <td align="left" >Desvio Padrão Relativo</td>
                                <td align="left" ><?php echo "$des_rel2"; ?></td>
                 </tr>

                  <tr>
                                <td align="left" >Erro Padrão</td>
                                <td align="left" ><?php echo "$erro2"; ?></td>
                 </tr>

              </table>
          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>
       </div>
    </div>

