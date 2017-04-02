 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];

// echo "$exc-$aparelho";
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<?php
// Início dos resultados para Arrasto de fundo --------------------------------------------------------------------------

if ($aparelho == "Todo")
{

// Início dos resultados para Malhadeira --------------------------------------------------------------------------
?>
<tr class="titulo">

<td colspan="24">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: Nova Terra </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>
<td title="Cutário">CAU</td><!--22-->
<td title="Sotério">SOT</td><!--21-->
<td title="Pacaás">PAC</td><!--20-->
<td title="Arara">ARA</td><!--11-->
<td title="Mutumparaná">MUT</td><!--10-->
<td title="São Lourenço">SLO</td><!--7-->
<td title="Karipunas (Montante)">KAM</td><!--9-->
<td title="Karipunas (Foz)">KAF</td><!--8-->
<td title="Jaciparaná (Montante)">JAM</td><!--6-->
<td title="Jaciparaná (Foz)">JAF</td><!--5-->
<td title="Jatuarana">JAT</td><!--4-->
<td title="Belmont (Montante)">BEM</td><!--3-->
<td title="Belmont (Foz)">BEF</td><!--2-->
<td title="Cuniã">CUN</td><!--1-->
<td title="Puruzinho">PUR</td><!--14-->
<td title="Machado (Montante)">MAM</td><!--13-->
<td title="Machado (Foz)">MAF</td><!--12-->
<td title="Manicoré">MAN</td><!--15-->
<td title="Aripuanã">ARI</td><!--16-->
<td title="Lago Sampaio">NON</td><!--17-->
<td>Total Capturado</td>


<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php
$l1 = 0;
$n = 1;
// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie > '0' AND esp_especie != '' ORDER BY esp_especie");
while($registro = mysql_fetch_row($sql))
{$esp =  $registro[0];   $NomeEsp = $registro[3]; $NomeOrd = $registro[1]; $NomeFam = $registro[2];

if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}
/*--------NÚMERO DE INDIVÍDUOS TOTAIS */
/*$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sqlx = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx)){$tot1_m[$n] =  $registrox[0];}

$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sqlx = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registrox = mysql_fetch_row($sqlx)){$tot1_r[$n] =  $registrox[0];}
$tot1[$n] = $tot1_r[$n] + $tot1_m[$n];*/



// --------Cautário


//red------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}
$red_lim = " ";$lim = " ";$num1_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '22' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num1_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num1_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num1_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num1_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '22' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num1_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num1_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '22' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num1_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num1_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '22' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num1_p =  $registro11_p[0];}





$num1 = $num1_r + $num1_m + $num1_e + $num1_ee + $num1_p;
if($num1 == 0){$num1="";}

//

/*--------Sotério */
//red------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}
$red_lim = " ";$lim = " ";$num2_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '21' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num2_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num2_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num2_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num2_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '21' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num2_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num2_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '21' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num2_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num2_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '21' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num2_p =  $registro11_p[0];}





$num2 = $num2_r + $num2_m + $num2_e + $num2_ee + $num2_p;
if($num2 == 0){$num2="";}



/*--------Pacás */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}

$red_lim = " ";$lim = " ";$num3_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '20' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num3_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num3_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num3_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num3_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '20' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num3_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num3_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '20' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num3_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num3_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '20' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num3_p =  $registro11_p[0];}





$num3 = $num3_r + $num3_m + $num3_e + $num3_ee + $num3_p;
if($num3 == 0){$num3="";}



/*--------Arara */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}


$red_lim = " ";$lim = " ";$num4_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '11' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num4_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num4_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num4_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num4_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '11' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num4_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num4_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '11' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num4_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num4_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '11' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num4_p =  $registro11_p[0];}





$num4 = $num4_r + $num4_m + $num4_e + $num4_ee + $num4_p;
if($num4 == 0){$num4="";}



/*--------Mutumparaná */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num5_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '10' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num5_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num5_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num5_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num5_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '10' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num5_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num5_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '10' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num5_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num5_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '10' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num5_p =  $registro11_p[0];}





$num5 = $num5_r + $num5_m + $num5_e + $num5_ee + $num5_p;
if($num5 == 0){$num5="";}



/*--------São Lourenço */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num6_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '7' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num6_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num6_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num6_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num6_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '7' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num6_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num6_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '7' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num6_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num6_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '7' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num6_p =  $registro11_p[0];}





$num6 = $num6_r + $num6_m + $num6_e + $num6_ee + $num6_p;
if($num6 == 0){$num6="";}



/*--------Karipunas montante */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num7_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '9' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num7_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num7_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num7_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num7_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '9' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num7_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num7_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '9' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num7_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num7_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '9' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num7_p =  $registro11_p[0];}





$num7 = $num7_r + $num7_m + $num7_e + $num7_ee + $num7_p;
if($num7 == 0){$num7="";}



/*--------Karipunas foz */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num8_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '8' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num8_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num8_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num8_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num8_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '8' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num8_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num8_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '8' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num8_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num8_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '8' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num8_p =  $registro11_p[0];}





$num8 = $num8_r + $num8_m + $num8_e + $num8_ee + $num8_p;
if($num8 == 0){$num8="";}


/*--------Jaciparana montante */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num9_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '6' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num9_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num9_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num9_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num9_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '6' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num9_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num9_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '6' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num9_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num9_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '6' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num9_p =  $registro11_p[0];}





$num9 = $num9_r + $num9_m + $num9_e + $num9_ee + $num9_p;
if($num9 == 0){$num9="";}



/*--------Jaciparana foz */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num10_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '5' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num10_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num10_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num10_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num10_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '5' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num10_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num10_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '5' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num10_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num10_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '5' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num10_p =  $registro11_p[0];}





$num10 = $num10_r + $num10_m + $num10_e + $num10_ee + $num10_p;
if($num10 == 0){$num10="";}



/*--------Jatuarana */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num11_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '4' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num11_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num11_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num11_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num11_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '4' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num11_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num11_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '4' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num11_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num11_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '4' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num11_p =  $registro11_p[0];}





$num11 = $num11_r + $num11_m + $num11_e + $num11_ee + $num11_p;
if($num11 == 0){$num11="";}


/*--------Belmont montante */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num12_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '3' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num12_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num12_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num12_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num12_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '3' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num12_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num12_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '3' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num12_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num12_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '3' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num12_p =  $registro11_p[0];}





$num12 = $num12_r + $num12_m + $num12_e + $num12_ee + $num12_p;
if($num12 == 0){$num12="";}



/*--------Belmont foz */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num13_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '2' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num13_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num13_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num13_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num13_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '2' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num13_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num13_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '2' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num13_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num13_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '2' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num13_p =  $registro11_p[0];}





$num13 = $num13_r + $num13_m + $num13_e + $num13_ee + $num13_p;
if($num13 == 0){$num13="";}



/*--------Cuniã */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num14_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '1' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num14_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num14_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num14_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num14_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '1' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num14_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num14_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '1' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num14_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num14_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '1' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num14_p =  $registro11_p[0];}





$num14 = $num14_r + $num14_m + $num14_e + $num14_ee + $num14_p;
if($num14 == 0){$num14="";}



/*--------Puruzinho */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num15_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '14' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num15_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num15_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num15_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num15_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '14' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num15_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num15_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '14' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num15_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num15_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '14' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num15_p =  $registro11_p[0];}





$num15 = $num15_r + $num15_m + $num15_e + $num15_ee + $num15_p;
if($num15 == 0){$num15="";}



/*--------Machado montante */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num16_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '13' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num16_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num16_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num16_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num16_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '13' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num16_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num16_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '13' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num16_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num16_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '13' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num16_p =  $registro11_p[0];}





$num16 = $num16_r + $num16_m + $num16_e + $num16_ee + $num16_p;
if($num16 == 0){$num16="";}



/*--------Machado jusante */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num17_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '12' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num17_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num17_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num17_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num17_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '12' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num17_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num17_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '12' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num17_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num17_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '12' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num17_p =  $registro11_p[0];}





$num17 = $num17_r + $num17_m + $num17_e + $num17_ee + $num17_p;
if($num17 == 0){$num17="";}



/*--------Manicoré */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num18_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '15' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num18_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num18_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num18_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num18_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '15' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num18_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num18_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '15' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num18_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num18_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '15' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num18_p =  $registro11_p[0];}





$num18 = $num18_r + $num18_m + $num18_e + $num18_ee + $num18_p;
if($num18 == 0){$num18="";}



/*--------Aripuanã */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num19_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '16' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num19_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num19_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num19_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num19_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '16' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num19_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num19_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '16' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num19_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num19_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '16' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num19_p =  $registro11_p[0];}





$num19 = $num19_r + $num19_m + $num19_e + $num19_ee + $num19_p;
if($num19 == 0){$num19="";}



/*--------Lago Sampaio */
if ($exc == "Nova_Terra"){$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}



$red_lim = " ";$lim = " ";$num20_r = 0;
$sqla_r = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '17' $excu ");
while($registroa_r = mysql_fetch_row($sqla_r)){$red_lim =  $registroa_r[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1_r = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) GROUP BY red_especie");
while($registro1_r = mysql_fetch_row($sql1_r)){$num20_r =  $registro1_r[0];}

//malh----------------cau
$malh_lim = " ";$lim = " ";$num20_m = 0;
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1)){$num20_m =  $registro1[0];}

//espi outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num20_e = 0;
$sqla1_e = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '17' $excu ");
while($registroa1_e = mysql_fetch_row($sqla1_e)){$outr_lim =  $registroa1_e[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_e = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_e = mysql_fetch_row($sql11_e)){$num20_e =  $registro11_e[0];}

//Espinhel_espi------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$espi_lim = " ";$lim = " ";$num20_ee = 0;
$sqla1_ee = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '17' $excu ");
while($registroa1_ee = mysql_fetch_row($sqla1_ee)){$espi_lim =  $registroa1_ee[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql11_ee = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) GROUP BY espi_esp");
while($registro11_ee = mysql_fetch_row($sql11_ee)){$num20_ee =  $registro11_ee[0];}

//Puça_outros------------------cau
if ($exc == "Nova_Terra"){$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";}
$outr_lim = " ";$lim = " ";$num20_p = 0;
$sqla1_p = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '17' $excu ");
while($registroa1_p = mysql_fetch_row($sqla1_p)){$outr_lim =  $registroa1_p[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql11_p = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) GROUP BY outr_especie");
while($registro11_p = mysql_fetch_row($sql11_p)){$num20_p =  $registro11_p[0];}





$num20 = $num20_r + $num20_m + $num20_e + $num20_ee + $num20_p;
if($num20 == 0){$num20="";}





$num_tt =  $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12 + $num13 + $num14 + $num15 + $num16 + $num17 + $num18 + $num19 + $num20;

/*--------Linhas de resultados */
if (
$num1 > 0 OR
$num2 > 0 OR
$num3 > 0 OR
$num4 > 0 OR
$num5 > 0 OR
$num6 > 0 OR
$num7 > 0 OR
$num8 > 0 OR
$num9 > 0 OR
$num10 > 0 OR
$num11 > 0 OR
$num12 > 0 OR
$num13 > 0 OR
$num14 > 0 OR
$num15 > 0 OR
$num16 > 0 OR
$num17 > 0 OR
$num18 > 0 OR
$num19 > 0 OR
$num20 > 0){
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td title=\"Cutário\" align=\"center\">".$num1."</td>
<td title=\"Sotério\" align=\"center\">".$num2."</td>
<td title=\"Pacaás\" align=\"center\">".$num3."</td>
<td title=\"Arara\" align=\"center\">".$num4."</td>
<td title=\"Mutumparaná\" align=\"center\">".$num5."</td>
<td title=\"São Lourenço\" align=\"center\">".$num6."</td>
<td title=\"Karipunas (Montante)\" align=\"center\">".$num7."</td>
<td title=\"Karipunas (Foz)\" align=\"center\">".$num8."</td>
<td title=\"Jaciparaná (Montante)\" align=\"center\">".$num9."</td>
<td title=\"Jaciparaná (Foz)\" align=\"center\">".$num10."</td>
<td title=\"Jatuarana\" align=\"center\">".$num11."</td>
<td title=\"Belmont (Montante)\" align=\"center\">".$num12."</td>
<td title=\"Belmont (Foz)\" align=\"center\">".$num13."</td>
<td title=\"Cuniã\" align=\"center\">".$num14."</td>
<td title=\"Puruzinho\" align=\"center\">".$num15."</td>
<td title=\"Machado (Montante)\" align=\"center\">".$num16."</td>
<td title=\"Machado (Foz)\" align=\"center\">".$num17."</td>
<td title=\"Manicoré\" align=\"center\">".$num18."</td>
<td title=\"Aripuanã\" align=\"center\">".$num19."</td>
<td title=\"Lago Sampaio\" align=\"center\">".$num20."</td>
<td><b>".$num_tt."</b></td>
</tr>";
$n++;

$num_ttt += $num_tt;
}
else {}

 }
?>

<!--<tr><td colspan="21" bgcolor="#CCCCCC"><b>TOTAL DE INDIVÍDUOS IDENTIFICADOS</b></td><td bgcolor="#CCCCCC"><b><?php echo"$tott";?></b>
</td></tr>-->

<?php
}




?>




































</table>  <br />
<div><center>TOTAL DE INDIVÍDUOS IDENTIFICADOS:&nbsp;&nbsp;&nbsp;<b><?php echo"$num_ttt";?></b></center></div>

</div>
</div>
<!--<td>"/*.$cp_max[$n].*/"</td>
<td>"/*.$cp_min[$n].*/"</td>
<td>"/*.$cod.*/"</td>
<td>"/*.$cp_base.*/"</td>-->