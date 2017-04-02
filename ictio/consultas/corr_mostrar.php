
<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}
</script>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
        <?php

        if ($aparelho == "Todos")
        {$apare = " ";}
        else{$apare = " AND lim_corr_aparelho = '$aparelho'";}

         if ($cod == "Todos")
        {$lim = " ";}
        else{$lim = " AND id_tb_limno = '$cod'";}


            $codd = " AND corr_lim = '$cod'";
            $sql11 = mysql_query("SELECT * FROM tb_limno_corr WHERE id_tb_limno > 0 $lim $apare");
            $num11 = mysql_num_rows($sql11);
            while($registro11 = mysql_fetch_row($sql11))
            {
            $cod1 =  $registro11[0];
            $codd .= " OR corr_lim = $cod1";
            }
          //  echo $codd;
        ?>




        <tr class="titulo">
        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: Geral</td>
        </tr>

        <tr class="titulo">

        <td title="Excursão">Qtde</td>
        <td  title="Código">Código</td><td  title="Aparelho">Aparelho</td>
        <td title="Data">Data</td>
        <td title="Hora">Hora</td>
        <td title="Nr">Nr</td>
        <td title="left" >Espécie</td>
        <td title="Teci">Teci</td>
        <td title="Foto">Foto</td>
        <td title="Foto">Col</td>
        <td title="Voucher">Voucher</td>
        <td title="obs">Obs</td>
        <td title="det">Det</td>
        <td title="data det">Data Det</td>
        <td title="analise">Análise</td>
        <td title="cpp">Cpp</td>
        <td title="cpt">Cpt</td>
        <td title="cpc">Cpc</td>
        <td title="ptt">Ptt</td>
        <td title="ptc">Ptc</td>
        <td title="pte">Pte</td>
        <td title="gg">GG</td>
        <td title="gr">GR</td>
        <td title="sexo">Sexo</td>
        <td title="ematur">Ematur</td>
        <td title="ematur">Histo</td>
        <td title="cresc">Cresc</td>
        <!--<td title="Excursão" align="" >Edit</td>-->

        </tr>

                      <?php

                      // Listagem das espécies capturadas de Redinha
                      $sql = mysql_query("SELECT * FROM tb_corr_biotico WHERE id_tb_corr > '0' $codd ORDER BY id_tb_corr ASC");
                      $num = mysql_num_rows($sql);
                      while($registro = mysql_fetch_row($sql))
                      {
                      $id =  $registro[0];
                      $qtde =  $registro[1];
                      $codigo  =  $registro[2];
                                              $login->setTable("tb_limno_corr");
                                              $login->setFieldId("id_tb_limno ='$codigo'");
                                              $login->setFieldNr("2"); $NomeCod = $login->data_filter();
                                              $login->setFieldNr("3"); $aparr = $login->data_filter();
                      $data  =  $registro[3];
                      $hora  =  $registro[4];
                      $nr   =  $registro[5];
                      $esp  =  $registro[6]; $lista = new ManipulateData1();$NomeEsp = $lista->NomeEspecie($esp);
                      $teci  =  $registro[7];
                      $foto  =  $registro[8];
                      $col  =  $registro[9];
                      $voucher  =  $registro[10];
                      $obs  =  $registro[11];
                      $det  =  $registro[12];
                      $data_det =  $registro[13];
                      $analise  =  $registro[14];
                      $cpp  =  $registro[15];
                      $cpt  =  $registro[16];
                      $cpc  =  $registro[17];
                      $ptt  =  $registro[18];
                      $ptc   =  $registro[19];
                      $pte   =  $registro[20];
                      $gg   =  $registro[21];
                      $gr   =  $registro[22];
                      $sexo  =  $registro[23];
                      $ematur  =  $registro[24];
                      $histo   =  $registro[25];
                      $cresc   =  $registro[26];

/*

$qtde =  $registro[];
$codigo  =  $registro[];
$data  =  $registro[];
$hora  =  $registro[];
$nr   =  $registro[];
$especie  =  $registro[];
$teci  =  $registro[];
$foto  =  $registro[];
$col  =  $registro[];
$voucher  =  $registro[];
$obs  =  $registro[];
$det  =  $registro[];
$data_det =  $registro[];
$analise  =  $registro[];
$cpp  =  $registro[];
$cpt  =  $registro[];
$cpc  =  $registro[];
$ptt  =  $registro[];
$ptc   =  $registro[];
$pte   =  $registro[];
$gg   =  $registro[];
$gr   =  $registro[];
$sexo  =  $registro[];
$ematur  =  $registro[];
$histo   =  $registro[];
$cresc   =  $registro[];


qtde
codigo
data
hora
nr
especie
teci
foto
col
voucher
obs
det
data_det
analise
cpp
cpt
cpc
ptt
ptc
pte
gg
gr
sexo
ematur
histo
cresc
 */


                    /*  $id_lim[$nn]  =  $registro[0];
                      $id_lim1 =  $registro[2];

                      $login = new ManipulateData();
                      $login->setTable("tb_limno_outr");
                      $login->setFieldId("id_tb_limno_outr ='$id_lim1'");
                      $login->setFieldNr("1"); $excur = $login->data_filter();
                      $login->setFieldNr("5"); $NomeCod = $login->data_filter();
                      $login->setFieldNr("3"); $locc = $login->data_filter();
                      $login->setFieldNr("16"); $padd4 = $login->data_filter();
                      $login->setTable("tb_local");
                      $login->setFieldId("id_tab_local ='$locc'");
                      $login->setFieldNr("2"); $cod_loc = $login->data_filter();
                      $login->setFieldNr("3"); $locc4 = $login->data_filter();

                      $hora =  $registro[4];
                      $num =  $registro[5];
                      $esp =  $registro[6];
                      $lista = new ManipulateData1();
                      $NomeEsp = $lista->NomeEspecie($esp);
                      $NomeOrd = $lista->NomeOrd($esp);
                      $NomeFam = $lista->NomeFam($esp);
                      $hora =  $registro[4];
                      $data =  $registro[3];
                      $qtde =  $registro[1];
                      $teci =  $registro[7];
                      $voucher =  $registro[10];
                      $det =  $registro[12];
                      $anaa =  $registro[14];$ooobs =  $registro[11];*/
                      ?>
                      <tr>

<td title=""><?php echo "$qtde"; ?></td>
<td title=""><?php echo "$NomeCod "; ?></td><td title=""><?php echo "$aparr "; ?></td>
<td title=""><?php echo "$data "; ?></td>
<td title=""><?php echo "$hora "; ?></td>
<td title=""><?php echo "$nr  "; ?></td>
<td title=""><?php echo "$NomeEsp"; ?></td>
<td title=""><?php echo "$teci "; ?></td>
<td title=""><?php echo "$foto "; ?></td>
<td title=""><?php echo "$col "; ?></td>
<td title=""><?php echo "$voucher "; ?></td>
<td title=""><?php echo "$obs "; ?></td>
<td title=""><?php echo "$det "; ?></td>
<td title=""><?php echo "$data_det"; ?></td>
<td title=""><?php echo "$analise "; ?></td>
<td title=""><?php echo "$cpp "; ?></td>
<td title=""><?php echo "$cpt "; ?></td>
<td title=""><?php echo "$cpc "; ?></td>
<td title=""><?php echo "$ptt "; ?></td>
<td title=""><?php echo "$ptc  "; ?></td>
<td title=""><?php echo "$pte  "; ?></td>
<td title=""><?php echo "$gg  "; ?></td>
<td title=""><?php echo "$gr  "; ?></td>
<td title=""><?php echo "$sexo "; ?></td>
<td title=""><?php echo "$ematur "; ?></td>
<td title=""><?php echo "$histo  "; ?></td>
<td title=""><?php echo "$cresc  "; ?></td>

<!--                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
-->                      </tr>
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


