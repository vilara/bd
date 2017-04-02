<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=950,height=700,scrollbars=YES")
}

</script>

<?php
 $aparelho = $_GET["aparelho"];
 $exc = $_GET["exc"];
?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">
<?php
// Início dos resultados para Arrasto de bentonico --------------------------------------------------------------------------
if ($aparelho == "Malhadeira")
{

if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno.lim_excursao = '0'";}
else {$excu = " AND tb_limno.lim_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">




      <td align="left" >Exc</td>
    <td align="left" >Código</td>
    <td align="left" >Padronizado</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
     <td title="Aparelho" align="" >Velocidade</td>
      <td title="Excursão" align="" >Profundidade</td>
      <td title="Registros" align="" >Transparência</td>
         <td title="Data" align="" >Condut</td>
     <td title="Aparelho" align="" >PH</td>
      <td title="Excursão" align="" >O2 Diss</td>
      <td title="Registros" align="" >O2 Sat</td>
       <td title="Data" align="" >Temp</td>
     <td title="Aparelho" align="" >Largura</td>
      <td title="Excursão" align="" >Turbidez</td>

       <td title="Excursão" align="" >Análise</td>

        <td title="Excursão" align="" >Obs</td>
        <td title="Excursão" align="" >Edit</td>
          <td title="Res" align="" >Res</td>
<!--<td>Total de espécies capturadas</td>    -->
</tr>




<?php
$nn = 1;

$res = mysql_query("SELECT * FROM tb_limno,tb_local WHERE tb_limno.lim_local = tb_local.id_tab_local AND tb_limno.lim_aparelho = 'Malhadeira' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

$sql_corr = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_lim = $id_lim[$nn]");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}

$exc =  $registro[1];
$cod[$nn] =  $registro[2];

$local[$nn] =  $registro[4];

$lat_g[$nn] =  $registro[7];
$long_g[$nn] =  $registro[8];
$veloc[$nn] =  $registro[11];
$prof[$nn] =  $registro[13];

$transp[$nn] =  $registro[14];
$turb[$nn] =  $registro[15];
$condut[$nn] =  $registro[18];
$ph[$nn] =  $registro[19];

$diss[$nn] =  $registro[20];
$sat[$nn] =  $registro[21];
$temp[$nn] =  $registro[22];

$larg[$nn] =  $registro[23];
$pad[$nn] =  $registro[27];
$lat_m[$nn] =  $registro[30];
$lat_s[$nn] =  $registro[31];

$long_m[$nn] =  $registro[32];
$long_s[$nn] =  $registro[33];
$ana[$nn] =  $registro[34];
$obs[$nn] =  $registro[35];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";
if ($veloc[$nn] == 0){$veloc[$nn] = " ";}
if ($prof[$nn] == 0){$prof[$nn] = " ";}
if ($transp[$nn] == 0){$transp[$nn] = " ";}
if ($turb[$nn] == 0){$turb[$nn] = " ";}
if ($condut[$nn] == 0){$condut[$nn] = " ";}
if ($ph[$nn] == 0){$ph[$nn] = " ";}
if ($diss[$nn] == 0){$diss[$nn] = " ";}
if ($sat[$nn] == 0){$sat[$nn] = " ";}
if ($temp[$nn] == 0){$temp[$nn] = " ";}
if ($larg[$nn] == 0){$larg[$nn] = " ";}

if ($lat_g[$nn] == 0 AND $lat_m[$nn] == 0 AND $lat_s[$nn] == 0){$lat = " ";}
if ($long_g[$nn] == 0 AND $long_m[$nn] == 0 AND $long_s[$nn] == 0){$long = " ";}
//       [$nn]
?>
  <tr>
   <td align="left" ><?php echo "$exc"; ?></td>
    <td align="left"  style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$pad[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
        <td title="Aparelho" align=""><?php echo "$veloc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$prof[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$transp[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$condut[$nn]"; ?></td>

            <td title="Excursão" align="" ><?php echo "$ph[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$diss[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$sat[$nn]"; ?></td>

            <td title="Excursão" align="" ><?php echo "$temp[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$larg[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$turb[$nn]"; ?></td>
           <td title="Excursão" align="" ><?php echo "$ana[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
             <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>



  <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_malh&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&exc=<?php echo"$exc";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
   </tr>
<?php

$nn++;
}
}
if ($aparelho == "Redinha")
{

if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno.lim_excursao = '0'";}
else {$excu = " AND tb_limno.lim_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">




      <td align="left" >Exc</td>
    <td align="left" >Código</td>
    <td align="left" >Padronizado</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
     <td title="Aparelho" align="" >Velocidade</td>
      <td title="Excursão" align="" >Profundidade</td>
      <td title="Registros" align="" >Transparência</td>
         <td title="Data" align="" >Condut</td>
     <td title="Aparelho" align="" >PH</td>
      <td title="Excursão" align="" >O2 Diss</td>
      <td title="Registros" align="" >O2 Sat</td>
       <td title="Data" align="" >Temp</td>
     <td title="Aparelho" align="" >Largura</td>
      <td title="Excursão" align="" >Turbidez</td>
      <td title="Análise" align="" >Análise</td>
      <td title="Excursão" align="" >Obs</td>
      <td title="Excursão" align="" >Edit</td>
      <td title="Excursão" align="" >Res</td>
<!--<td>Total de espécies capturadas</td>    -->
</tr>




<?php
$nn = 1;

$res = mysql_query("SELECT * FROM tb_limno,tb_local WHERE tb_limno.lim_local = tb_local.id_tab_local AND tb_limno.lim_aparelho = 'Redinha' $excu ORDER BY tb_limno.lim_excursao ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

// echo "$id_lim[$nn]";
$sql_corr = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE id_tb_redinha > '0' AND red_lim = $id_lim[$nn]");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}/**/

$exc =  $registro[1];
$cod[$nn] =  $registro[2];

$local[$nn] =  $registro[4];

$lat_g[$nn] =  $registro[7];
$long_g[$nn] =  $registro[8];
$veloc[$nn] =  $registro[11];
$prof[$nn] =  $registro[13];

$transp[$nn] =  $registro[14];
$turb[$nn] =  $registro[15];
$condut[$nn] =  $registro[18];
$ph[$nn] =  $registro[19];

$diss[$nn] =  $registro[20];
$sat[$nn] =  $registro[21];
$temp[$nn] =  $registro[22];

$larg[$nn] =  $registro[23];
$pad[$nn] =  $registro[27];
$lat_m[$nn] =  $registro[30];
$lat_s[$nn] =  $registro[31];

$long_m[$nn] =  $registro[32];
$long_s[$nn] =  $registro[33];
$ana[$nn] =  $registro[34];
$obs[$nn] =  $registro[35];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";


if ($veloc[$nn] == 0){$veloc[$nn] = " ";}
if ($prof[$nn] == 0){$prof[$nn] = " ";}
if ($transp[$nn] == 0){$transp[$nn] = " ";}
if ($turb[$nn] == 0){$turb[$nn] = " ";}
if ($condut[$nn] == 0){$condut[$nn] = " ";}
if ($ph[$nn] == 0){$ph[$nn] = " ";}
if ($diss[$nn] == 0){$diss[$nn] = " ";}
if ($sat[$nn] == 0){$sat[$nn] = " ";}
if ($temp[$nn] == 0){$temp[$nn] = " ";}
if ($larg[$nn] == 0){$larg[$nn] = " ";}

if ($lat_g[$nn] == 0 AND $lat_m[$nn] == 0 AND $lat_s[$nn] == 0){$lat = " ";}
if ($long_g[$nn] == 0 AND $long_m[$nn] == 0 AND $long_s[$nn] == 0){$long = " ";}
//                 $cod[$nn]
?>
  <tr>
       <td title="Excursão" align="" ><?php echo "$exc"; ?></td>
    <td align="left" style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>
    <td align="center" ><?php echo "$pad[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
        <td title="Aparelho" align=""><?php echo "$veloc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$prof[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$transp[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$condut[$nn]"; ?></td>

            <td title="Excursão" align="" ><?php echo "$ph[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$diss[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$sat[$nn]"; ?></td>

            <td title="Excursão" align="" ><?php echo "$temp[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$larg[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$turb[$nn]"; ?></td>
             <td title="Análise" align="" ><?php echo "$ana[$nn]"; ?></td>
              <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
             <td title="Editar" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


  <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_red&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&exc=<?php echo"$exc";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
   </tr>
<?php

$nn++;
}
}
if ($aparelho == "Arrasto de fundo")
{

if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno_arr.lim_arr_excursao = '0'";}
else {$excu = " AND tb_limno_arr.lim_arr_excursao = '$exc'";}
?>


<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo1">

           <td align="left" width="5" >exc</td>
    <td align="left" >Código</td>
    <td align="left" >Padron</td>
     <td title="Local" align="">Lat ini</td>
    <td title="Data" align="" >Long ini</td>
    <td title="Local" align="">Lat final</td>
    <td title="Data" align="" >Long final</td>
     <td title="Aparelho" align="" >Velocidade</td>
      <td title="Excursão" align="" >Profundidade (Média)</td>
      <td title="Registros" align="" >Transparência</td>
         <td title="Data" align="" >Condut Sup</td>
        <!-- <td title="Data" align="" >Condut 2 Sup</td> -->
         <td title="Data" align="" >Condut Fun</td>
        <!-- <td title="Data" align="" >Condut 2 Fun</td>   -->

     <td title="Aparelho" align="" >PH Sup</td>
     <td title="Aparelho" align="" >PH Fun</td>

      <td title="Excursão" align="" >O2 Diss Sup</td>
      <td title="Excursão" align="" >O2 Diss Fun</td>

      <td title="Registros" align="" >O2 Sat Sup</td>
      <td title="Registros" align="" >O2 Sat Fun</td>

       <td title="Data" align="" >Temp Sup</td>
       <td title="Data" align="" >Temp Fun</td>

     <td title="Aparelho" align="" >Largura</td>
      <td title="Excursão" align="" >Turbidez</td>
       <td title="Excursão" align="" >Ponto</td>
       <td title="Excursão" align="" >Obs</td>

      <td title="Excursão" align="" >Edit</td>
          <td title="Excursão" align="" >Res</td>
      </tr>
<?php
// echo "$excu";

$res = mysql_query("SELECT * FROM tb_limno_arr,tb_local WHERE tb_limno_arr.lim_arr_loc = tb_local.id_tab_local AND tb_limno_arr.id_tb_limno_arr > 0 $excu ORDER BY tb_local.loc_ordem,tb_limno_arr.lim_arr_ponto ASC");
while($registro = mysql_fetch_row($res))
{

$id_lim[$nn] =  $registro[0];

$sql_corr = mysql_query("SELECT arr_especie FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' AND arr_lim = $id_lim[$nn] GROUP BY arr_especie");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}

$excc =  $registro[2];
$cod[$nn] =  $registro[1];

$local[$nn] =  $registro[4];

$lat_gi[$nn] =  $registro[6];
$long_gi[$nn] =  $registro[8];

$lat_gf[$nn] =  $registro[7];
$long_gf[$nn] =  $registro[9];

$veloc[$nn] =  $registro[12];

$obs[$nn] =  $registro[11];

$prof1[$nn] =  $registro[14];
$prof2[$nn] =  $registro[15];
$prof3[$nn] =  $registro[16];
$prof4[$nn] =  $registro[17];
$prof5[$nn] =  $registro[18];
$prof6[$nn] =  $registro[19];
$prof7[$nn] =  $registro[20];
$prof8[$nn] =  $registro[21];
$prof9[$nn] =  $registro[22];
$prof10[$nn] =  $registro[23];
$prof11[$nn] =  $registro[24];
$prof[$nn] =  ($prof1[$nn] + $prof2[$nn] + $prof3[$nn] + $prof4[$nn] + $prof5[$nn] + $prof6[$nn] + $prof7[$nn] + $prof8[$nn] + $prof9[$nn] + $prof10[$nn] + $prof11[$nn])/11;
$prof[$nn] = round($prof[$nn],2);
$transp[$nn] =  $registro[25];
$turb[$nn] =  $registro[26];

$condut1_sup[$nn] =  $registro[30];
$pad[$nn] =  $registro[38];
$condut2_sup[$nn] =  $registro[41];

$condut1_fun[$nn] =  $registro[51];
$condut2_fun[$nn] =  $registro[52];

$ph_sup[$nn] =  $registro[27];
$ph_fun[$nn] =  $registro[53];

$diss_sup[$nn] =  $registro[28];
$diss_fun[$nn] =  $registro[54];

$sat_sup[$nn] =  $registro[29];
$sat_fun[$nn] =  $registro[55];

$temp_sup[$nn] =  $registro[31];
$temp_fun[$nn] =  $registro[56];

$larg[$nn] =  $registro[32];
$loc[$nn] =  $registro[58];

$lat_mi[$nn] =  $registro[42];
$lat_si[$nn] =  $registro[43];

$long_mi[$nn] =  $registro[46];
$long_si[$nn] =  $registro[47];

$lat_mf[$nn] =  $registro[44];
$lat_sf[$nn] =  $registro[45];

$long_mf[$nn] =  $registro[48];
$long_sf[$nn] =  $registro[49];

$lati = $lat_gi[$nn] . "º  " . $lat_mi[$nn]. "'  " .  $lat_si[$nn] . "''" . " S";
$longi = $long_gi[$nn] . "º" . $long_mi[$nn]. "'" .  $long_si[$nn] . "''" . " W";

$latf = $lat_gf[$nn] . "º  " . $lat_mf[$nn]. "'  " .  $lat_sf[$nn] . "''" . " S";
$longf = $long_gf[$nn] . "º" . $long_mf[$nn]. "'" .  $long_sf[$nn] . "''" . " W";


?>

    <tr>
    <td align="left" ><?php echo "$excc"; ?></td>
    <td align="left"  style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>

     <td align="left"><?php echo "$pad[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lati"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$longi"; ?></td>
     <td title="Lago Cunião" align="left"><?php echo "$latf"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$longf"; ?></td>
        <td title="Aparelho" align=""><?php echo "$veloc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$prof[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$transp[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$condut1_sup[$nn]"; ?></td>
            <!--<td title="Excursão" align="" ><?php echo "$condut2_fun[$nn]"; ?></td>  -->
            <td title="Excursão" align="" ><?php echo "$condut1_sup[$nn]"; ?></td>
           <!-- <td title="Excursão" align="" ><?php echo "$condut2_fun[$nn]"; ?></td>   -->

            <td title="Excursão" align="" ><?php echo "$ph_sup[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$ph_fun[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$diss_sup[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$diss_fun[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$sat_sup[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$sat_fun[$nn]"; ?></td>

            <td title="Excursão" align="" ><?php echo "$temp_sup[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$temp_fun[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$larg[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$turb[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>

              <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>

<td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

   <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_arr&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&exc=<?php echo"$exc";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


   </tr>

<?php
$nn++;
}
}




if ($aparelho == "Espinhel")
{
if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno_outr.lim_outr_excursao = '0'";}
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
<td align="left" >Exc</td>
    <td align="left" >Código</td>

    <td title="Local" align="">Latitude</td>
    <td title="Data" align="" >Longitude</td>
    <td title="Local" align="">Aparelho</td>
    <td title="Data" align="" >Padronizado</td>
    <td title="Excursão" align="" >Obs</td>
           <td title="Excursão" align="" >Edit</td>
            <td title="Excursão" align="" >Res</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND tb_limno_outr.lim_outr_aparelho = 'Espinhel' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];


$sql_corr = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE id_tb_espi > '0' AND espi_lim = $id_lim[$nn] ");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}

$cod[$nn] =  $registro[5];
$exc[$nn] =  $registro[1];
$aparelho =  $registro[2];
$local[$nn] =  $registro[3];

$lat_g[$nn] =  $registro[10];
$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_g[$nn] =  $registro[13];
$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$pad[$nn] =  $registro[16];
$obs[$nn] =  $registro[18];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
   <td title="Lago Cunião" align="" ><?php echo "$exc[$nn]"; ?></td>
    <td align="left" style="color: <?php echo "$corr"; ?>"  ><?php echo "$cod[$nn]"; ?></td>
   <!-- <td align="left" ><?php echo "$pad[$nn]"; ?></td> -->
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
         <td title="Aparelho" align="" ><?php echo "$aparelho"; ?></td>
            <td title="Excursão" align="" ><?php echo "$pad[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
                           <!-- <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td> -->
<td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

  <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_espi&lim=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo"$aparelho";?>&pad=<?php echo"$pad[$nn]";?>&exc=<?php echo"$exc";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

  </tr>
<?php
$nn++;
}
}




if ($aparelho == "Puça")
{
if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno_outr.lim_outr_excursao = '0'";}
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
 <td align="left" >Exc</td>
    <td align="left" >Código</td>

    <td title="Local" align="">Latitude</td>
    <td title="Data" align="" >Longitude</td>
    <td title="Local" align="">Aparelho</td>
    <td title="Data" align="" >Padronizado</td>   <td title="Excursão" align="" >Análise</td>
    <td title="Excursão" align="" >Obs</td>
           <td title="Excursão" align="" >Edit</td>
            <td title="Excursão" align="" >Res</td>

      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND lim_outr_aparelho = 'Puça' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

$sql_corr = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE id_tb_outros > '0' AND outr_lim = $id_lim[$nn]");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}


$cod[$nn] =  $registro[5];
$exc[$nn] =  $registro[1];
$aparelho =  $registro[2];
$local[$nn] =  $registro[3];

$lat_g[$nn] =  $registro[10];
$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_g[$nn] =  $registro[13];
$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$pad[$nn] =  $registro[16];
$ana[$nn] =  $registro[17];
$obs[$nn] =  $registro[18];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>   <td title="Excursão" align="" ><?php echo "$exc[$nn]"; ?></td>
    <td align="left" style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
         <td title="Aparelho" align="" ><?php echo "$aparelho"; ?></td>
            <td title="Excursão" align="" ><?php echo "$pad[$nn]"; ?></td>
             <td title="Análise" align="" ><?php echo "$ana[$nn]"; ?></td>
              <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
                            <!-- <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>   -->
<td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

   <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_outr&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&aparelho=<?php echo"$aparelho";?>&exc=<?php echo"$exc[$nn]";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

  </tr>
<?php
$nn++;
}
}



if ($aparelho == "Tarrafa")
{
if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno_outr.lim_outr_excursao = '0'";}
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
 <td align="left" >Exc</td>
    <td align="left" >Código</td>

    <td title="Local" align="">Latitude</td>
    <td title="Data" align="" >Longitude</td>
    <td title="Local" align="">Aparelho</td>
    <td title="Data" align="" >Padronizado</td>

            <td title="Excursão" align="" >Análise</td>
            <td title="Excursão" align="" >Obs</td>
             <td title="Excursão" align="" >Edit</td>

              <td title="Excursão" align="" >Res</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND lim_outr_aparelho = 'Tarrafa' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

$sql_corr = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE id_tb_outros > '0' AND outr_lim = $id_lim[$nn]");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}

$cod[$nn] =  $registro[5];
$excbb =  $registro[1];
$aparelho =  $registro[2];
$local[$nn] =  $registro[3];

$lat_g[$nn] =  $registro[10];
$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_g[$nn] =  $registro[13];
$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$pad[$nn] =  $registro[16];
$ana[$nn] =  $registro[17];
$obs[$nn] =  $registro[18];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
   <td title="Excursão" align="" ><?php echo "$excbb"; ?></td>
    <td align="left"  style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
         <td title="Aparelho" align="" ><?php echo "$aparelho"; ?></td>
            <td title="Excursão" align="" ><?php echo "$pad[$nn]"; ?></td>
             <td title="Análise" align="" ><?php echo "$ana[$nn]"; ?></td>
              <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
                            <!-- <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>   -->
<td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

    <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_outr&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&aparelho=<?php echo"$aparelho";?>&exc=<?php echo"$exc[$nn]";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
  </tr>
<?php
$nn++;
}
}



if ($aparelho == "Outros" )
{


if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Cheia")
{$excu = " AND bio_est = 'Cheia'";}
else if ($exc == "Geral")
{$excu = " AND tb_limno_outr.lim_outr_excursao = '0'";}
else if ($exc == "Seca")
{$excu = " AND bio_est = 'Seca'";}
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="30">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
  <td align="left" >Exc</td>
    <td align="left" >Código</td>

    <td title="Local" align="">Latitude</td>
    <td title="Data" align="" >Longitude</td>
    <td title="Local" align="">Aparelho</td>
    <td title="Data" align="" >Padronizado</td>
      <td title="Excursão" align="" >Análise</td>
       <td title="Excursão" align="" >Obs</td>
           <td title="Excursão" align="" >Edit</td>
         <td title="Excursão" align="" >Edit</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND lim_outr_aparelho != 'Tarrafa' AND lim_outr_aparelho != 'Puça' AND lim_outr_aparelho != 'Espinhel'  $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

$sql_corr = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE id_tb_outros > '0' AND outr_lim = $id_lim[$nn]");
$num_corr = mysql_num_rows($sql_corr);
if ($num_corr > 0){$corr = '#000000';}else{$corr = '#FF6600';}

$cod[$nn] =  $registro[5];
$excvv =  $registro[1];
$aparelho =  $registro[2];
$local[$nn] =  $registro[3];

$lat_g[$nn] =  $registro[10];
$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_g[$nn] =  $registro[13];
$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$pad[$nn] =  $registro[16];
$ana[$nn] =  $registro[17];
$obs[$nn] =  $registro[18];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>     <td title="Excursão" align="" ><?php echo "$excvv"; ?></td>
    <td align="left"  style="color: <?php echo "$corr"; ?>" ><?php echo "$cod[$nn]"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long"; ?></td>
         <td title="Aparelho" align="" ><?php echo "$aparelho"; ?></td>
            <td title="Excursão" align="" ><?php echo "$pad[$nn]"; ?></td>
             <td title="Análise" align="" ><?php echo "$ana[$nn]"; ?></td>
              <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
                            <!-- <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>   -->
<td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id_lim[$nn]";?>&lim_aparelho=<?php echo"$aparelho" ;?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

 <td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/resumo_outr&lim=<?php echo"$id_lim[$nn]";?>&pad=<?php echo"$pad[$nn]";?>&aparelho=<?php echo"$aparelho";?>&exc=<?php echo"$exc[$nn]";?>&lim_cod=<?php echo"$cod[$nn]";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
  </tr>
<?php
$nn++;
}
}









if ($aparelho == "Todos")
{
?>
<tr class="titulo">
<td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:<?php echo"$exc ";?></td>
</tr>

<tr class="titulo">
    <td align="left" >Código</td>
    <td title="Local" align="">Aparelho</td>
    <td title="Local" align="">Editar</td>
</tr>

<?php
$nn = 1;
$ss = 1;
while($ss <= 3)

{
if ($ss == 1){$tb = "tb_limno"; $reg = "lim_cod";$i="id_tb_limno";}
else if ($ss == 2){$tb = "tb_limno_outr"; $reg = "lim_outr_cod";$i="id_tb_limno_outr";}
else if ($ss == 3){$tb = "tb_limno_arr"; $reg = "lim_arr_cod";$i="id_tb_limno_arr";$apar="Arrasto de fundo";}

$res = mysql_query("SELECT * FROM $tb ");
while($registro = mysql_fetch_array($res))
{
$id =  $registro[$i];
$cod =  $registro[$reg];
if ($ss == 1){$apar =  $registro[lim_aparelho];}
if ($ss == 2){$apar =  $registro[lim_outr_aparelho];}
?>
  <tr>
    <td align="left" ><?php echo "$cod"; ?></td>
    <td align="left"><?php echo "$apar"; ?></td>
    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$id";?>&lim_aparelho=<?php echo"$apar" ;?>')" > <img src='img/edit.png' width='16' height='16' alt='Editar' /></a></td>
  </tr>
<?php $nn++;
}
$ss++;
}
}
?>

</table><br />
<div id="rodape_branco">TOTAL = <?php echo $nn - 1 ; ?></div>
    </div>
    </div>


