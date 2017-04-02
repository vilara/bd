
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
if ($esp != "Todas"){$espp = " AND (cat = $esp";}else {$espp = " AND (cat >= 0";}
if ($esp1 != "Todas"){$espp1 = " OR cat = $esp1"; $parenteses = " ";}else {$espp1 = ""; $parenteses = ")";}
if ($esp2 != "Todas"){$espp2 = " OR cat = $esp2"; $parenteses = " ";}else {$espp2 = ""; $parenteses = ")";}
if ($esp3 != "Todas"){$espp3 = " OR cat = $esp3"; $parenteses = " ";}else {$espp3 = ""; $parenteses = ")";}
/*if ($esp4 != "Todas"){$espp4 = " OR cat = $esp4)"; $parenteses = " ";}else { $parenteses = ")";}
*/$espp4 = "";
//  echo "$esp -- $esp1 -- $esp2 -- $esp3 -- $esp4<br>$espp $espp1 $espp2 $espp3 $espp4 $parenteses";
?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="25">Registros de Biometria do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>

                      <tr class="titulo">
                       <!-- <td align="left" >Registro</td> -->
                        <td align="left" >Referência</td>
                        <td title="" align="left" >Localidade</td>
                        <td title="" align="left" >Data</td>
                        <td title="" align="left" >Categoria</td>
                        <td title="" align="left" >Comprimento Total (cm)</td>
                        <td title="" align="left" >Comprimento Padrão (cm)</td>

                          <td title="" align="left" >Comprimento Furcal (cm)</td>
                        <td title="" align="left" >Comprimento Furcal corr (cm)</td>

                          <td title="" align="left" >pt</td>
                            <td title="" align="left" >cpc</td>
                              <td title="" align="left" >cptc</td>
                                <td title="" align="left" >cppc</td>

                         <td title="" align="left" >Sexo</td>
                          <td title="" align="left" >Ematur</td>
                           <td title="" align="left" >Teci</td>
                            <td title="" align="left" >GR</td>

                        <td title="" align="left" >Estômago</td>
                        <td title="" align="left" >Gônoda</td>
                        <td title="" align="left" >Cabeça</td>
                        <td title="" align="left" >Peso</td>
                        <td title="" align="left" >Empreendimento</td>
                         <td title="" align="left" >Edit</td>
                          <td title="" align="left" >Del</td>
                      </tr>

                      <?php
                      $nn = 1;


                     //    echo "$data_i---$data_f";

                        $sql = mysql_query("SELECT * FROM pesc_col_mercado WHERE data BETWEEN '$data_i' AND '$data_f'  $local $espp $espp1 $espp2 $espp3  $espp4 $parenteses ORDER BY id_familiar ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                            		$id =  $registro[0];
                                $reg =  $registro[1];
                                $ref =  $registro[17];
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
                                $ct =  $registro[6]; $ct=substr_replace($ct, ',', strpos($ct, "."), 1);   if ($ct == 0){$ct = "";}
                                $cp =  $registro[7]; $cp=substr_replace($cp, ',', strpos($cp, "."), 1); if ($cp == 0){$cp = "";}

                                $cf =  $registro[26]; $cf=substr_replace($cf, ',', strpos($cf, "."), 1);  if ($cf == 0){$cf = "";}
                                $cf_corr =  $registro[79]; $cf_corr=substr_replace($cf_corr, ',', strpos($cf_corr, "."), 1); if ($cf_corr == 0){$cf_corr = "";}

                                $pt =  $registro[8];  $pt=substr_replace($pt, ',', strpos($pt, "."), 1);  if ($pt == 0){$pt = "";}
                                $cpc =  $registro[9];  $cpc=substr_replace($cpc, ',', strpos($cpc, "."), 1);  if ($cpc == 0){$cpc = "";}
                                $cptc =  $registro[10]; $cptc=substr_replace($cptc, ',', strpos($cptc, "."), 1);  if ($cptc == 0){$cptc = "";}
                                $cppc =  $registro[11]; $cppc=substr_replace($cppc, ',', strpos($cppc, "."), 1);  if ($cppc == 0){$cppc = "";}
                                $esto =  $registro[12];    if ($esto == 0){$esto = "";}
                                $go =  $registro[13];   if ($go == 0){$go = "";}
                                $cab =  $registro[15];
                                 $sexo =  $registro[18];  if ($sexo == "#"){$sexo = "";}
                                  $ematur =  $registro[19]; if ($ematur == 0){$ematur = "";}
                                   $teci =  $registro[21];
                                    $gr =  $registro[24];
                                     if ($gr == 9){$gr =  " ";}
                                if ($cab == "S"){$cab = "Sim";}
                                else if ($cab == "N"){$cab = "Não";}
                                 $pt =  $registro[8];   if ($pt == 0){$pt = "";}
                                $empr =  $registro[2];
                                if ($empr == "JM"){$empr = "Jirau Montante";}
                                else if ($empr == "JS"){$empr = "Jirau Jusante";}
                                else if ($empr == "SM"){$empr = "Santo Antônio Montante";}
                                else if ($empr == "SJ"){$empr = "Santo Antônio Jusante";}
                                ?>
                                <tr>
                              <!--  <td align="left" ><?php echo "$reg"; ?></td>   -->
                                <td align="left" ><?php echo "$ref"; ?></td>
                                <td align="left" ><?php echo "$mun1"; ?></td>
                                <td align="left" ><?php echo "$data"; ?></td>
                                <td align="left" ><?php echo "$categ1"; ?></td>
                                <td align="left" ><?php echo "$ct"; ?></td>
                                <td align="left" ><?php echo "$cp"; ?></td>

                                 <td align="left" ><?php echo "$cf"; ?></td>
                                <td align="left" ><?php echo "$cf_corr"; ?></td>

                                 <td align="left" ><?php echo "$pt"; ?></td>
                                  <td align="left" ><?php echo "$cpc"; ?></td>
                                   <td align="left" ><?php echo "$cptc"; ?></td>
                                    <td align="left" ><?php echo "$cppc"; ?></td>

                                  <td align="left" ><?php echo "$sexo"; ?></td>
                                   <td align="left" ><?php echo "$ematur"; ?></td>
                                    <td align="left" ><?php echo "$teci"; ?></td>
                                     <td align="left" ><?php echo "$gr"; ?></td>

                                <td align="left" ><?php echo "$esto"; ?></td>
                                <td align="left" ><?php echo "$go"; ?></td>
                                <td align="left" ><?php echo "$cab"; ?></td>
                                <td align="left" ><?php echo "$pt"; ?></td>
                                <td align="left" ><?php echo "$empr"; ?></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Biometria&flag=1')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Biometria')" >
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
if ($loc != "Todos"){$local = " AND localidade = $loc";}else {$local = "";}

if ($esp != "Todas"){$espp = " AND (esp = $esp";}else {$espp = " AND (esp >= 0";}
if ($esp1 != "Todas"){$espp1 = " OR esp = $esp1"; $parenteses = " ";}else {$espp1 = ""; $parenteses = ")";}
if ($esp2 != "Todas"){$espp2 = " OR esp = $esp2"; $parenteses = " ";}else {$espp2 = ""; $parenteses = ")";}
if ($esp3 != "Todas"){$espp3 = " OR esp = $esp3"; $parenteses = " ";}else {$espp3 = ""; $parenteses = ")";}
//if ($esp4 != "Todas"){$espp4 = " OR esp = $esp4)"; $parenteses = " ";}else { = "" $parenteses = ")";}
$espp4;
?>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="120%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="20">Registros familiar do período entre&nbsp;&nbsp;<?php echo "  $data_i  "; ?> e <?php echo "   $data_f  "; ?></td>
                      </tr>

                      <tr class="titulo">
                       <td title="" align="left" >Cod</td>
                      <td title="" align="left" >Empreendimento</td>
                       <td title="" align="left" width="20" >Data</td>
                        <td title="" align="left" >Localidade</td>
                        <td align="left" >Pescador</td>
                        <td align="left" >Situação</td>


                        <td title="" align="left" >Categoria</td>
                        <td title="" align="left" >Quantidade </td>



                        <td title="" align="left" >Peso geral(Kg)</td>




                        <td title="" align="left" >Quantidade venda(Kg)</td>
                        <td title="" align="left" >Quantidade consumo(Kg)</td>

                         <td title="" align="left" >Peso maior(Kg)</td>
                          <td title="" align="left" >Peso menor(Kg)</td>
                           <td title="" align="left" >Comprimento maior(cm)</td>
                            <td title="" align="left" >Comprimento menor(cm)</td>


                        <td title="" align="left" >Obs</td>

                         <td title="" align="left" >Edit</td>
                         <td title="" align="left" >Del</td>
                      </tr>

                      <?php
                      $nn = 1;
                       $pg = 0;

                   // echo "$data_i---$data_f";
                    //  echo "$pescc";

                        $sql = mysql_query("SELECT * FROM pesc_col_familiar WHERE data BETWEEN '$data_i' AND '$data_f' $local  $espp $espp1 $espp2 $espp3  $espp4 $parenteses $pescc ORDER BY pescador,data ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                                $k = "Kg";
                                $c = "cm";
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
                                  $qtdv =  $registro[6];  if($qtdv ==  0){$qtdv = " ";}
                                      $qtdc =  $registro[7];   if($qtdc ==  0){$qtdc = " ";}
                                        $peso =  $registro[10];  if($peso ==  0){$peso = " ";}
                                         $peso_m =  $registro[16];  if($peso_m ==  0){$peso_m = " ";}
                                          $peso_g =  $registro[14];  if($peso_g ==  0){$peso_g = " ";}
                                            $comp =  $registro[11];  if($comp ==  0){$comp = " ";}
                                             $comp_m =  $registro[17];  if($comp_m ==  0){$comp_m = " ";}
                                             $obs =  $registro[8];
                                  $pg += $peso_g;

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


                                <td align="left" ><?php echo "$peso_g  "; ?></td>

                                <td align="left" ><?php echo "$qtdv "; ?></td>
                                <td align="left" ><?php echo "$qtdc "; ?></td>

                                  <td align="left" ><?php echo "$peso_m "; ?></td>
                                <td align="left" ><?php echo "$peso "; ?></td>
                                  <td align="left" ><?php echo "$comp_m "; ?></td>
                                <td align="left" ><?php echo "$comp "; ?></td>


                                <td align="left" ><?php echo "$obs"; ?></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Familiar')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Familiar')" >
                                <img src='img/del.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                            }

                         $pg1 = number_format($pg,2,",",".");
                      ?>
                 <tr>
                 <td><b>TOTAIS</b></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td align="left"><b><?php echo "$pg1 Kg "; ?></b></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>

                 </tr>
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

if ($esp != "Todas"){$espp = " AND (esp = $esp";
if ($esp1 != "Todas"){$espp1 = " OR esp = $esp1";}else {$espp1 = ""; $parenteses = ")";}
if ($esp2 != "Todas"){$espp2 = " OR esp = $esp2"; $parenteses = " ";}else {$espp2 = ""; $parenteses = ")";}
if ($esp3 != "Todas"){$espp3 = " OR esp = $esp3"; $parenteses = " ";}else {$espp3 = ""; $parenteses = ")";}
if ($esp4 != "Todas"){$espp4 = " OR esp = $esp4)"; $parenteses = " ";}else {$espp4 = ""; $parenteses = ")";}
}else {$espp = "";$parenteses = " ";}
//    echo "$local";
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

                      <td title="" align="left" >Empreendimentoo</td>
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


                         //       echo "$data_i---$data_f---$local---$espp-  -$parenteses";

                        $sql = mysql_query("SELECT * FROM pesc_col_caderno WHERE data BETWEEN '$data_i' AND '$data_f' $local $espp $espp1 $espp2 $espp3   $espp4  $parenteses  ORDER BY id_cad ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                            		$id =  $registro[0];
                                    $empr =  $registro[14];
                                      if ($empr == "JM"){$empr1 = "Jirau Montante";}
                                else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
                                else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
                                else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
                                    $data =  $registro[1];
                                    $loc =  "Porto Velho";
                                     $dado_fim = new ManipulateData();
                                     $dado_fim->setTable("pesc_localidade");
                                $dado_fim->setFieldId("id_locali ='$loc'");
                                $dado_fim->setFieldNr("1"); $mun1 = $dado_fim->data_filter();
                                 $func =  $registro[4];
                                   if ($func == "P"){$func1 = "Pescador";}
                                else if ($func == "A"){$func1 = "Atravessador";}
                                else if ($func == "PA"){$func1 = "Pescador/Atravessador";}
                                $pesc =  $registro[6];
                                 $dado_fim->setTable("pesc_pescador");
                                $dado_fim->setFieldId("id_pescador ='$pesc'");
                                $dado_fim->setFieldNr("1"); $pesc1 = $dado_fim->data_filter();
                                 $taxa =  $registro[7];
                                  $valor =  $registro[8];
                                   $rend =  $registro[9];
                                 $categ =  $registro[12];
                                   $dado_fim->setTable("pesc_especie");
                                $dado_fim->setFieldId("id_esp ='$categ'");
                                $dado_fim->setFieldNr("1"); $categ1 = $dado_fim->data_filter();
                               $qtde =  $registro[16];
                                   $ori =  $registro[15];
                                     if ($ori == "P"){$ori1 = "Barco pescador";}
                                else if ($ori == "R"){$ori1 = "Barco recreio";}
                                else if ($ori == "CN"){$ori1 = "Canoa";}
                                 else if ($ori == "CR"){$ori1 = "Carro";}
                                 $quest =  $registro[10];
                                  if ($quest == "S"){$quest = "Sim";}
                                else if ($quest == "N"){$quest = "Não";}
                                 $obs =  $registro[13];


                                ?>
                                <tr>
                                <td align="left" ><?php echo "$empr1"; ?></td>
                                <td align="left" ><?php echo "$data"; ?></td>
                                <td align="left" ><?php echo "$loc"; ?></td>
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

                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_merc_inserir&idd=<?php echo"$id";?>&aparelho=Caderno')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                               <td title="Excursão" align="" ><a href="javascript:janelaSecundaria1('editar/index.php?secoes=edit/del_merc_inserir&idd=<?php echo"$id";?>&aparelho=Caderno')" >
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

