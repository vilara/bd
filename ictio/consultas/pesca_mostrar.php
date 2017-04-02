
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

function janelaSecundaria1 (URL){
   window.open(URL,"janela1","width=400,height=100,scrollbars=YES")
}
</script>
<?php


if ($pesca == "Biometria")
{

?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="18">Registros de Biometria do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>

                      <tr class="titulo">
                        <td align="left" >Registro</td>
                        <td align="left" >Referência</td>
                        <td title="" align="left" >Localidade</td>
                        <td title="" align="left" >Data</td>
                        <td title="" align="left" >Categoria</td>
                        <td title="" align="left" >Comprimento Total</td>
                        <td title="" align="left" >Comprimento Padrão</td>
                        <td title="" align="left" >Sexo</td>
                        <td title="" align="left" >Ematur</td>
                        <td title="" align="left" >GG</td>
                        <td title="" align="left" >GR</td>
                         <td title="" align="left" >Tecido</td>
                         <td title="" align="left" >Histologia</td>
                        <td title="" align="left" >Cabeça</td>
                        <td title="" align="left" >Peso</td>
                        <td title="" align="left" >Empreendimento</td>
                         <td title="" align="left" >Edit</td>
                          <td title="" align="left" >Del</td>
                      </tr>

                      <?php
                      $nn = 1;


                     //    echo "$data_i---$data_f";

                        $sql = mysql_query("SELECT * FROM pesc_col_mercado WHERE data BETWEEN '$data_i' AND '$data_f' $local $espec1 ORDER BY id_familiar ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                            		$id =  $registro[0];
                                $reg =  $registro[1];
                                $ref =  $registro[17];
                                 $sexo =  $registro[18];
                                  $ematur =  $registro[19];
                                $mun =  $registro[4];
                                $dado_fim = new ManipulateData();
                                $dado_fim->setTable("pesc_localidade");
                                $dado_fim->setFieldId("id_locali ='$mun'");
                                $dado_fim->setFieldNr("1"); $mun1 = $dado_fim->data_filter();
                                $data =  $registro[3];
                                $categ =  $registro[5];
                                $dado_fim->setTable("pesc_especie");
                                $dado_fim->setFieldId("id_esp ='$categ'");
                                $dado_fim->setFieldNr("1"); $categ1 = $dado_fim->data_filter();
                                $ct =  $registro[6];
                                $cp =  $registro[7];
                                $esto =  $registro[12];
                                $go =  $registro[13];
                                 $gg =  $registro[23];
                                  $gr =  $registro[24];
                                   if ($gg == 9){$gg = "NO";}
                                    if ($gr == 9){$gr = "NO";}

                                $cab =  $registro[15];


                                 $teci =  $registro[21];
                                  $histo =  $registro[20];
                                if ($cab == "S"){$cab = "Sim";}
                                else if ($cab == "N"){$cab = "Não";}
                                 $pt =  $registro[8];
                                $empr =  $registro[2];
                                if ($empr == "JM"){$empr = "Jirau Montante";}
                                else if ($empr == "JS"){$empr = "Jirau Jusante";}
                                else if ($empr == "SM"){$empr = "Santo Antônio Montante";}
                                else if ($empr == "SJ"){$empr = "Santo Antônio Jusante";}
                                ?>
                                <tr>
                                <td align="left" ><?php echo "$reg"; ?></td>
                                <td align="left" ><?php echo "$ref"; ?></td>
                                <td align="left" ><?php echo "$mun1"; ?></td>
                                <td align="left" ><?php echo "$data"; ?></td>
                                <td align="left" ><?php echo "$categ1"; ?></td>
                                <td align="left" ><?php echo "$ct mm"; ?></td>
                                <td align="left" ><?php echo "$cp mm"; ?></td>
                                <td align="left" ><?php echo "$sexo"; ?></td>
                                <td align="left" ><?php echo "$ematur"; ?></td>
                                  <td align="left" ><?php echo "$gg"; ?></td>
                                    <td align="left" ><?php echo "$gr"; ?></td>
                                 <td align="left" ><?php echo "$teci"; ?></td>
                                  <td align="left" ><?php echo "$histo"; ?></td>
                                <td align="left" ><?php echo "$cab"; ?></td>
                                <td align="left" ><?php echo "$pt"; ?></td>
                                <td align="left" ><?php echo "$empr"; ?></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Biometria')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('../pesca/editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Biometria')" >
                                <img src='img/del.png' width='16' height='16' alt='Editar' border="0" /></a></td>
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
<?php
}





if ($pesca == "Familiar")
{

?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="16">Registros familiar do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>

                      <tr class="titulo">
                       <td title="" align="left" >Cod</td>
                      <td title="" align="left" >Empreendimento</td>
                       <td title="" align="left" >Data</td>
                        <td title="" align="left" >Localidade</td>
                        <td align="left" >Pescador</td>
                        <td align="left" >Situação</td>


                        <td title="" align="left" >Categoria</td>
                        <td title="" align="left" >Quantidade </td>


                        <td title="" align="left" >Peso biometria</td>
                        <td title="" align="left" >Peso geral</td>



                        <td title="" align="left" >Comprimento</td>
                        <td title="" align="left" >Quantidade venda</td>
                        <td title="" align="left" >Quantidade consumo</td>
                        <td title="" align="left" >Obs</td>

                         <td title="" align="left" >Edit</td>
                         <td title="" align="left" >Del</td>
                      </tr>

                      <?php
                      $nn = 1;


                     //    echo "$data_i---$data_f";

                        $sql = mysql_query("SELECT * FROM pesc_col_familiar WHERE data BETWEEN '$data_i' AND '$data_f' ORDER BY id_merc ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                            		$id =  $registro[0];
                                    $empr =  $registro[9];
                                      if ($empr == "JM"){$empr1 = "Jirau Montante";}
                                else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
                                else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
                                else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
                                    $data =  $registro[1];
                                    $loc =  $registro[2];
                                     $dado_fim = new ManipulateData();
                                     $dado_fim->setTable("pesc_localidade");
                                $dado_fim->setFieldId("id_locali ='$loc'");
                                $dado_fim->setFieldNr("1"); $mun1 = $dado_fim->data_filter();
                                    $pesc =  $registro[3];
                                      $dado_fim->setTable("pesc_pescador");
                                $dado_fim->setFieldId("id_pescador ='$pesc'");
                                $dado_fim->setFieldNr("1"); $pesc1 = $dado_fim->data_filter();

                                    $sit =  $registro[12];
                                    // echo "$sit";
                                     if ($sit == "SPE"){$sit1 = "Houve pesca";}
                                else if ($sit == "NPE"){$sit1 = "Não houve pesca";}
                                else if ($sit == "ZPE"){$sit1 = "Houve pesca nula";}
                                    $categ =  $registro[4];

                                      $dado_fim->setTable("pesc_especie");
                                $dado_fim->setFieldId("id_esp ='$categ'");
                                $dado_fim->setFieldNr("1"); $categ1 = $dado_fim->data_filter();

                                 $qtde =  $registro[13];
                                  $qtdv =  $registro[6];
                                      $qtdc =  $registro[7];
                                        $peso =  $registro[10];
                                          $peso_g =  $registro[14];
                                            $comp =  $registro[11];
                                             $obs =  $registro[8];


                                ?>
                                <tr>
                                <td align="left" ><?php echo "$id"; ?></td>
                                <td align="left" ><?php echo "$empr1"; ?></td>
                                <td align="left" ><?php echo "$data"; ?></td>
                                <td align="left" ><?php echo "$mun1"; ?></td>


                                <td align="left" ><?php echo "$pesc1"; ?></td>
                                <td align="left" ><?php echo "$sit1"; ?></td>
                                <td align="left" ><?php echo "$categ1"; ?></td>
                                <td align="left" ><?php echo "$qtde"; ?></td>

                                  <td align="left" ><?php echo "$peso g"; ?></td>
                                <td align="left" ><?php echo "$peso_g g "; ?></td>
                               <td align="left" ><?php echo "$comp mm"; ?></td>
                                <td align="left" ><?php echo "$qtdv g"; ?></td>
                                <td align="left" ><?php echo "$qtdc g"; ?></td>


                                <td align="left" ><?php echo "$obs"; ?></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Familiar')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('../pesca/editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Familiar')" >
                                <img src='img/del.png' width='16' height='16' alt='Editar' border="0" /></a></td>
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
<?php
}









if ($pesca == "Caderno")
{

?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="15">Registros do caderno do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>

                      <tr class="titulo">

                      <td title="" align="left" >Empreendimento</td>
                       <td title="" align="left" >Data</td>
                        <td title="" align="left" >Localidade</td>
                        <td align="left" >Função</td>
                        <td align="left" >Pescador</td>
                        <td align="left" >Taxa de 5%</td>
                        <td align="left" >Taxa de 100%</td>
                         <td align="left" >Rendimento</td>
                        <td title="" align="left" >Categoria</td>
                        <td title="" align="left" >Quantidade </td>
                        <td title="" align="left" >Origem</td>
                        <td title="" align="left" >Questionário</td>
                       <td title="" align="left" >Obs</td>
                      <td title="" align="left" >Edit</td>
                      <td title="" align="left" >Del</td>
                      </tr>

                      <?php
                      $nn = 1;


                     //    echo "$data_i---$data_f";

                        $sql = mysql_query("SELECT * FROM pesc_col_caderno WHERE data BETWEEN '$data_i' AND '$data_f' ORDER BY id_cad ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                            		$id =  $registro[0];
                                    $empr =  $registro[13];
                                      if ($empr == "JM"){$empr1 = "Jirau Montante";}
                                else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
                                else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
                                else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
                                    $data =  $registro[1];
                                    $loc =  $registro[2];
                                     $dado_fim = new ManipulateData();
                                     $dado_fim->setTable("pesc_localidade");
                                $dado_fim->setFieldId("id_locali ='$loc'");
                                $dado_fim->setFieldNr("1"); $mun1 = $dado_fim->data_filter();
                                 $func =  $registro[3];
                                   if ($func == "P"){$func1 = "Pescador";}
                                else if ($func == "A"){$func1 = "Atravessador";}
                                else if ($func == "PA"){$func1 = "Pescador/Atravessador";}
                                $pesc =  $registro[5];
                                 $dado_fim->setTable("pesc_pescador");
                                $dado_fim->setFieldId("id_pescador ='$pesc'");
                                $dado_fim->setFieldNr("1"); $pesc1 = $dado_fim->data_filter();
                                 $taxa =  $registro[6];
                                  $valor =  $registro[7];
                                   $rend =  $registro[8];
                                 $categ =  $registro[11];
                                   $dado_fim->setTable("pesc_especie");
                                $dado_fim->setFieldId("id_esp ='$categ'");
                                $dado_fim->setFieldNr("1"); $categ1 = $dado_fim->data_filter();
                                  $qtde =  $registro[15];
                                   $ori =  $registro[14];
                                     if ($ori == "P"){$ori1 = "Barco pescador";}
                                else if ($ori == "R"){$ori1 = "Barco recreio";}
                                else if ($ori == "CN"){$ori1 = "Canoa";}
                                 else if ($ori == "CR"){$ori1 = "Carro";}
                                 $quest =  $registro[9];
                                  if ($quest == "S"){$quest = "Sim";}
                                else if ($quest == "N"){$quest = "Não";}
                                 $obs =  $registro[12];


                                ?>
                                <tr>
                                <td align="left" ><?php echo "$empr1"; ?></td>
                                <td align="left" ><?php echo "$data"; ?></td>
                                <td align="left" ><?php echo "$mun1"; ?></td>
                               <td align="left" ><?php echo "$func1"; ?></td>
                                <td align="left" ><?php echo "$pesc1"; ?></td>
                                <td align="left" ><?php echo "$taxa"; ?></td>
                                <td align="left" ><?php echo "$valor"; ?></td>
                                <td align="left" ><?php echo "$rend"; ?></td>
                                 <td align="left" ><?php echo "$categ1"; ?></td>
                                <td align="left" ><?php echo "$qtde"; ?></td>
                                <td align="left" ><?php echo "$ori1"; ?></td>
                                <td align="left" ><?php echo "$quest"; ?></td>


                                <td align="left" ><?php echo "$obs"; ?></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Caderno')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                               <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('../pesca/editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Caderno')" >
                                <img src='img/del.png' width='16' height='16' alt='Editar' border="0" /></a></td>
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
<?php
}

?>

