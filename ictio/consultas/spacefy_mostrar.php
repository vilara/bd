<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
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
else {$excu = " AND tb_limno.lim_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="18">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">





    <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
      <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>

<!--<td>Total de espécies capturadas</td>    -->
</tr>




<?php
$nn = 1;

$res = mysql_query("SELECT * FROM tb_limno,tb_local WHERE tb_limno.lim_local = tb_local.id_tab_local AND tb_limno.lim_aparelho = 'Malhadeira' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];
$exc[$nn] =  $registro[1];
$cod[$nn] =  $registro[2];
$data[$nn] =  $registro[5];
$local[$nn] =  $registro[40];
$cida[$nn] =  $registro[41];
$esta[$nn] =  $registro[42];

$substr[$nn] =  $registro[24];

$habitat[$nn] =  $registro[26];
$col[$nn] =  $registro[9];
 $obs[$nn] =  $registro[35];
$lat_g[$nn] =  $registro[7];
$long_g[$nn] =  $registro[8];
$loc[$nn] =  $registro[25];
$lat_m[$nn] =  $registro[30];
$lat_s[$nn] =  $registro[31];

$long_m[$nn] =  $registro[32];
$long_s[$nn] =  $registro[33];
$ana[$nn] =  $registro[34];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
    <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "$aparelho"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat S"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long W"; ?></td>
        <td title="Aparelho" align=""><?php echo "$substr[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>


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
else {$excu = " AND tb_limno.lim_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="18">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">





    <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
         <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>
<!--<td>Total de espécies capturadas</td>    -->
</tr>




<?php
$nn = 1;

$res = mysql_query("SELECT * FROM tb_limno,tb_local WHERE tb_limno.lim_local = tb_local.id_tab_local AND tb_limno.lim_aparelho = 'Redinha' $excu ORDER BY tb_limno.lim_excursao ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];
$exc[$nn] =  $registro[1];
$cod[$nn] =  $registro[2];
$data[$nn] =  $registro[5];
$local[$nn] =  $registro[40];
$cida[$nn] =  $registro[41];
$esta[$nn] =  $registro[42];

$substr[$nn] =  $registro[24];
$loc[$nn] =  $registro[25];
$habitat[$nn] =  $registro[26];
$col[$nn] =  $registro[9];
 $obs[$nn] =  $registro[35];
$lat_g[$nn] =  $registro[7];
$long_g[$nn] =  $registro[8];

$lat_m[$nn] =  $registro[30];
$lat_s[$nn] =  $registro[31];

$long_m[$nn] =  $registro[32];
$long_s[$nn] =  $registro[33];
$ana[$nn] =  $registro[34];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
    <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "$aparelho"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat S"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long W"; ?></td>
        <td title="Aparelho" align=""><?php echo "$substr[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
               <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>

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
else {$excu = " AND tb_limno_arr.lim_arr_excursao = '$exc'";}
?>


<tr class="titulo">

<td colspan="26">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo1">

           <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat I</td>
    <td title="Data" align="" >Long I</td>

     <td title="Local" align="">Lat II</td>
    <td title="Data" align="" >Long II</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
      <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>
      </tr>
<?php
$res = mysql_query("SELECT * FROM tb_limno_arr,tb_local WHERE tb_limno_arr.lim_arr_loc = tb_local.id_tab_local AND tb_limno_arr.id_tb_limno_arr > 0 $excu ORDER BY tb_local.loc_ordem,tb_limno_arr.lim_arr_ponto ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];

$cod[$nn] =  $registro[1];
$data[$nn] =  $registro[34];
$local[$nn] =  $registro[64];
$cida[$nn] =  $registro[65];
$esta[$nn] =  $registro[66];

// $substr[$nn] =  $registro[24];
$loc[$nn] =  $registro[36];
$habitat[$nn] =  $registro[37];
$col[$nn] =  $registro[10];
 $obs[$nn] =  $registro[59];

 $lat_gi[$nn] =  $registro[6];
$lat_gf[$nn] =  $registro[7];

$long_gi[$nn] =  $registro[8];
$long_gf[$nn] =  $registro[9];


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
   <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "Arrasto Bentônico"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lati "; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$longi "; ?></td>
     <td title="Lago Cunião" align="left"><?php echo "$latf "; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$longf "; ?></td>
        <td title="Aparelho" align=""><?php echo "-"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
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
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="17">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
    <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
       <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND tb_limno_outr.lim_outr_aparelho = 'Espinhel' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];
$exc[$nn] =  $registro[1];
$cod[$nn] =  $registro[5];
$data[$nn] =  $registro[4];
$loc[$nn] =  $registro[8];
$local[$nn] =  $registro[23];
$cida[$nn] =  $registro[24];
$esta[$nn] =  $registro[25];

$substr[$nn] =  $registro[24];

$habitat[$nn] =  $registro[9];
$col[$nn] =  $registro[6];
 $obs[$nn] =  $registro[18];
$lat_g[$nn] =  $registro[10];
$long_g[$nn] =  $registro[13];

$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$ana[$nn] =  $registro[34];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
   <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "$aparelho"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat S"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long W"; ?></td>
        <td title="Aparelho" align=""><?php echo "-"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
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
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="27">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
  <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
         <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND lim_outr_aparelho = 'Puça' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];
$exc[$nn] =  $registro[1];
$cod[$nn] =  $registro[5];
$data[$nn] =  $registro[4];
$loc[$nn] =  $registro[8];
$local[$nn] =  $registro[23];
$cida[$nn] =  $registro[24];
$esta[$nn] =  $registro[25];

$substr[$nn] =  $registro[24];

$habitat[$nn] =  $registro[9];
$col[$nn] =  $registro[6];
 $obs[$nn] =  $registro[18];
$lat_g[$nn] =  $registro[10];
$long_g[$nn] =  $registro[13];

$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$ana[$nn] =  $registro[34];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
   <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "$aparelho"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat S"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long W"; ?></td>
        <td title="Aparelho" align=""><?php echo "-"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
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
else {$excu = " AND tb_limno_outr.lim_outr_excursao = '$exc'";}
?>
<tr class="titulo">

<td colspan="27">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">
     <td align="left" >Código</td>
    <td align="left" >Data</td>
      <td title="Aparelho" align="">Aparelho</td>
        <td title="Localidade" align="">Localidade</td>
          <td title="Cidade" align="">Cidade</td>
            <td title="Estado" align="">Estado</td>
              <td title="Estado" align="">País</td>
              <td title="Estado" align="">Continente</td>
    <td title="Local" align="">Lat</td>
    <td title="Data" align="" >Long</td>
       <td title="Data" align="left" >Substrato</td>
     <td title="Aparelho" align="" >Habitat</td>
      <td title="Excursão" align="" >Coletor</td>
      <td title="Excursão" align="" >Localidade</td>
      <td title="Registros" align="" >Obs</td>
      </tr>




<?php
$res = mysql_query("SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND lim_outr_aparelho = 'Tarrafa' $excu ORDER BY tb_local.loc_ordem ASC");
while($registro = mysql_fetch_row($res))
{
$id_lim[$nn] =  $registro[0];
$exc[$nn] =  $registro[1];
$cod[$nn] =  $registro[5];
$data[$nn] =  $registro[4];
$loc[$nn] =  $registro[8];
$local[$nn] =  $registro[23];
$cida[$nn] =  $registro[24];
$esta[$nn] =  $registro[25];

$substr[$nn] =  $registro[24];

$habitat[$nn] =  $registro[9];
$col[$nn] =  $registro[6];
 $obs[$nn] =  $registro[18];
$lat_g[$nn] =  $registro[10];
$long_g[$nn] =  $registro[13];

$lat_m[$nn] =  $registro[11];
$lat_s[$nn] =  $registro[12];

$long_m[$nn] =  $registro[14];
$long_s[$nn] =  $registro[15];
$ana[$nn] =  $registro[34];
$lat = $lat_g[$nn] . "º  " . $lat_m[$nn]. "'  " .  $lat_s[$nn] . "''";
$long = $long_g[$nn] . "º" . $long_m[$nn]. "'" .  $long_s[$nn] . "''";

?>
  <tr>
   <td align="left" ><?php echo "$cod[$nn]"; ?></td>
     <td align="center" ><?php echo "$data[$nn]"; ?></td>
     <td align="center" ><?php echo "$aparelho"; ?></td>
      <td align="left" ><?php echo "$local[$nn]"; ?></td>
        <td align="left" ><?php echo "$cida[$nn]"; ?></td>
         <td align="left" ><?php echo "$esta[$nn]"; ?></td>
          <td align="left" ><?php echo "Brasil"; ?></td>
            <td align="left" ><?php echo "América do Sul"; ?></td>
    <td title="Lago Cunião" align="left"><?php echo "$lat S"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$long W"; ?></td>
        <td title="Aparelho" align=""><?php echo "-"; ?></td>
            <td title="Excursão" align="" ><?php echo "$habitat[$nn]"; ?></td>
            <td title="Excursão" align="" ><?php echo "$col[$nn]"; ?></td>
             <td title="Excursão" align="" ><?php echo "$loc[$nn]"; ?></td>  
            <td title="Excursão" align="" ><?php echo "$obs[$nn]"; ?></td>
  </tr>
<?php
$nn++;
}
}




if ($aparelho == "Todos")
{
?>
<tr class="titulo">
<td colspan="3">Aparelho: <?php echo"$aparelho ";?>---- Excursão:<?php echo"$exc ";?></td>
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


