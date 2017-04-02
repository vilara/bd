 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];


 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">
<?php
// Início dos resultados para Arrasto de fundo --------------------------------------------------------------------------
if ($aparelho == "Todos")
{
// Início dos resultados para Redinha --------------------------------------------------------------------------
?>
<tr class="titulo">

<td colspan="24">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
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



<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php





if ($exc == "Nova_Terra")
{$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";}
// echo "excu";
$l1 = 0;
$n = 1;
$nn = 0;
// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie > '0' AND esp_especie != '' ORDER BY esp_especie");
while($registro = mysql_fetch_row($sql))
{  $esp =  $registro[0];   $NomeEsp = $registro[3]; $NomeOrd = $registro[1]; $NomeFam = $registro[2];


//--------Cautário
//red------------Cau
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l1x[$n] = "X";}
//malh---------Cau
if ($l1x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l1x[$n] = "X";}
}
//Espi_outros---------Cau
if ($l1x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l1x[$n] = "X";}
 }
//Puca----------Cau
if ($l1x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l1x[$n] = "X";}
}
//Espi_espi----------Cau
 if ($l1x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '22' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l1x[$n] = "X";}
}





$excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Sotério */
//red------------Sot
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l2x[$n] = "X";}
//malh---------Sot
if ($l2x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l2x[$n] = "X";}
}
//Espi_outros---------Sot
if ($l2x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l2x[$n] = "X";}
 }
//Puca----------Sot
if ($l2x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l2x[$n] = "X";}
}
//Espi_espi----------Sot
 if ($l2x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '21' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l2x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Pacás */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l3x[$n] = "X";}
//malh---------Pacás
if ($l3x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l3x[$n] = "X";}
}
//Espi_outros---------Pacás
if ($l3x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l3x[$n] = "X";}
 }
//Puca----------Pacás
if ($l3x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l3x[$n] = "X";}
}
//Espi_espi----------Pacás
 if ($l3x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '20' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l3x[$n] = "X";}
}

 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Arara */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l4x[$n] = "X";}
//malh---------Ara
if ($l4x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l4x[$n] = "X";}
}
//Espi_outros---------Ara
if ($l4x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l4x[$n] = "X";}
 }
//Puca----------Ara
if ($l4x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l4x[$n] = "X";}
}
//Espi_espi---------Ara
 if ($l4x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '11' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l4x[$n] = "X";}
}

 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Mutumparaná */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l5x[$n] = "X";}
//malh--------Mut
if ($l5x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l5x[$n] = "X";}
}
//Espi_outros-------Mut
if ($l5x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l5x[$n] = "X";}
 }
//Puca--------Mut
if ($l5x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l5x[$n] = "X";}
}
//Espi_espi--------Mut
 if ($l5x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '10' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l5x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------São Lourenço */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l6x[$n] = "X";}
//malh--------Sao
if ($l6x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l6x[$n] = "X";}
}
//Espi_outros-------Sao
if ($l6x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l6x[$n] = "X";}
 }
//Puca--------Sao
if ($l6x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l6x[$n] = "X";}
}
//Espi_espi-------Sao
 if ($l6x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '7' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l6x[$n] = "X";}
}


  $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Karipunas montante */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l7x[$n] = "X";}
//malh--------Karipunas m
if ($l7x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l7x[$n] = "X";}
}
//Espi_outros-----Karipunas m
if ($l7x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l7x[$n] = "X";}
 }
//Puca--------Karipunas m
if ($l7x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l7x[$n] = "X";}
}
//Espi_espi------Karipunas m
 if ($l7x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '9' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l7x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Karipunas foz */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l8x[$n] = "X";}
//malh--------Karipunas f
if ($l8x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l8x[$n] = "X";}
}
//Espi_outros-----Karipunas f
if ($l8x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l8x[$n] = "X";}
 }
//Puca--------Karipunas f
if ($l8x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l8x[$n] = "X";}
}
//Espi_espi------Karipunas f
 if ($l8x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '8' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l8x[$n] = "X";}
}



 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Jaciparana montante */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l9x[$n] = "X";}
//malh---------Jaciparana m
if ($l9x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l9x[$n] = "X";}
}
//Espi_outros------Jaciparana m
if ($l9x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l9x[$n] = "X";}
 }
//Puca---------Jaciparana m
if ($l9x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l9x[$n] = "X";}
}
//Espi_espi-------Jaciparana m
 if ($l9x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '6' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l9x[$n] = "X";}
}



 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Jaciparana foz */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l10x[$n] = "X";}
//malh-------------Jaciparana f
if ($l10x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l10x[$n] = "X";}
}
//Espi_outros----------Jaciparana f
if ($l10x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l10x[$n] = "X";}
 }
//Puca-------------Jaciparana f
if ($l10x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l10x[$n] = "X";}
}
//Espi_espi-----------Jaciparana f
 if ($l10x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '5' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l10x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Jatuarana */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l11x[$n] = "X";}
//malh------------Jat
if ($l11x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l11x[$n] = "X";}
}
//Espi_outros----------Jat
if ($l11x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l11x[$n] = "X";}
 }
//Puca-------------Jat
if ($l11x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l11x[$n] = "X";}
}
//Espi_espi----------Jat
 if ($l11x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '4' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l11x[$n] = "X";}
}


  $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Belmont montante */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l12x[$n] = "X";}
//malh------------Belmont m
if ($l12x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l12x[$n] = "X";}
}
//Espi_outros----------Belmont m
if ($l12x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l12x[$n] = "X";}
 }
//Puca--------------Belmont m
if ($l12x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l12x[$n] = "X";}
}
//Espi_espi-----------Belmont m
 if ($l12x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '3' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l12x[$n] = "X";}
}


  $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Belmont foz */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l13x[$n] = "X";}
//malh---------------Belmont f
if ($l13x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l13x[$n] = "X";}
}
//Espi_outros-------------Belmont f
if ($l13x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l13x[$n] = "X";}
 }
//Puca-----------------Belmont f
if ($l13x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l13x[$n] = "X";}
}
//Espi_espi-------------Belmont f
 if ($l13x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '2' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l13x[$n] = "X";}
}

 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Cuniã */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l14x[$n] = "X";}
//malh----------------Cun
if ($l14x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l14x[$n] = "X";}
}
//Espi_outros--------------Cun
if ($l14x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l14x[$n] = "X";}
 }
//Puca------------------Cun
if ($l14x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l14x[$n] = "X";}
}
//Espi_espi--------------Cun
 if ($l14x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '1' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l14x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Puruzinho */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l15x[$n] = "X";}
//malh--------------------Pur
if ($l15x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l15x[$n] = "X";}
}
//Espi_outros-----------------Pur
if ($l15x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l15x[$n] = "X";}
 }
//Puca---------------------Pur
if ($l15x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l15x[$n] = "X";}
}
//Espi_espi-----------------Pur
 if ($l15x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '14' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l15x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Machado montante */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l16x[$n] = "X";}
//malh-------------------Machado m
if ($l16x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l16x[$n] = "X";}
}
//Espi_outros----------------Machado m
if ($l16x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l16x[$n] = "X";}
 }
//Puca---------------------Machado m
if ($l16x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l16x[$n] = "X";}
}
//Espi_espi-----------------Machado m
 if ($l16x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '13' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l16x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Machado jusante */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l17x[$n] = "X";}
//malh-------------------Machado j
if ($l17x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l17x[$n] = "X";}
}
//Espi_outros---------------Machado j
if ($l17x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l17x[$n] = "X";}
 }
//Puca---------------------Machado j
if ($l17x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l17x[$n] = "X";}
}
//Espi_espi-----------------Machado j
 if ($l17x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '12' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l17x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Manicoré */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l18x[$n] = "X";}
//malh-----------------Man
if ($l18x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l18x[$n] = "X";}
}
//Espi_outros------------Man
if ($l18x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l18x[$n] = "X";}
 }
//Puca---------------------Man
if ($l18x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l18x[$n] = "X";}
}
//Espi_espi---------------Man
 if ($l18x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '15' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l18x[$n] = "X";}
}


 $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Aripuanã */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l19x[$n] = "X";}
//malh----------------Ari
if ($l19x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l19x[$n] = "X";}
}
//Espi_outros-------------Ari
if ($l19x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l19x[$n] = "X";}
 }
//Puca---------------------Ari
if ($l19x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l19x[$n] = "X";}
}
//Espi_espi---------------Ari
 if ($l19x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '16' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l19x[$n] = "X";}
}


  $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";
/*--------Lago Sampaio */
$red_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$red_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql1 = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l20x[$n] = "X";}
//malh-----------------Lag
if ($l20x[$n] == ""){
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l20x[$n] = "X";}
}
//Espi_outros---------------Lag
if ($l20x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l20x[$n] = "X";}
 }
//Puca---------------------Lag
if ($l20x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$outr_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Puça' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$outr_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$outr_lim;}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l20x[$n] = "X";}
}
//Espi_espi----------------Lag
 if ($l20x[$n] == ""){
$excu = " AND (lim_outr_excursao != '1' OR lim_outr_excursao != '2')";
$espi_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '17' $excu ");
while($registroa = mysql_fetch_row($sqla)){$espi_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$espi_lim;}
$sql1 = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
$num1 = mysql_num_rows($sql1);if($num1 > 0){$l20x[$n] = "X";}
}



  $excu = " AND (lim_excursao != '1' OR lim_excursao != '2')";


$tott +=  $tot1[$n];

/*--------Linhas de resultados */

if ($l1x[$n] == "X"
 OR $l2x[$n] == "X"
 OR $l3x[$n] == "X"
 OR $l4x[$n] == "X"
 OR $l5x[$n] == "X"
 OR $l6x[$n] == "X"
  OR $l7x[$n] == "X"
 OR $l8x[$n] == "X"
 OR $l9x[$n] == "X"
 OR $l10x[$n] == "X"
  OR $l11x[$n] == "X"
 OR $l12x[$n] == "X"
 OR $l13x[$n] == "X"
 OR $l14x[$n] == "X"
  OR $l15x[$n] == "X"
 OR $l16x[$n] == "X"
 OR $l17x[$n] == "X"
 OR $l18x[$n] == "X"
  OR $l19x[$n] == "X"
 OR $l20x[$n] == "X" ){
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td title=\"Cutário\" align=\"center\">".$l1x[$n]."</td>
<td title=\"Sotério\" align=\"center\">".$l2x[$n]."</td>
<td title=\"Pacaás\" align=\"center\">".$l3x[$n]."</td>
<td title=\"Arara\" align=\"center\">".$l4x[$n]."</td>
<td title=\"Mutumparaná\" align=\"center\">".$l5x[$n]."</td>
<td title=\"São Lourenço\" align=\"center\">".$l6x[$n]."</td>
<td title=\"Karipunas (Montante)\" align=\"center\">".$l7x[$n]."</td>
<td title=\"Karipunas (Foz)\" align=\"center\">".$l8x[$n]."</td>
<td title=\"Jaciparaná (Montante)\" align=\"center\">".$l9x[$n]."</td>
<td title=\"Jaciparaná (Foz)\" align=\"center\">".$l10x[$n]."</td>
<td title=\"Jatuarana\" align=\"center\">".$l11x[$n]."</td>
<td title=\"Belmont (Montante)\" align=\"center\">".$l12x[$n]."</td>
<td title=\"Belmont (Foz)\" align=\"center\">".$l13x[$n]."</td>
<td title=\"Cuniã\" align=\"center\">".$l14x[$n]."</td>
<td title=\"Puruzinho\" align=\"center\">".$l15x[$n]."</td>
<td title=\"Machado (Montante)\" align=\"center\">".$l16x[$n]."</td>
<td title=\"Machado (Foz)\" align=\"center\">".$l17x[$n]."</td>
<td title=\"Manicoré\" align=\"center\">".$l18x[$n]."</td>
<td title=\"Aripuanã\" align=\"center\">".$l19x[$n]."</td>
<td title=\"Lago Sampaio\" align=\"center\">".$l20x[$n]."</td>
</tr>"; $nn++; } else
{}
$n++;}

}

?>
</table>

<br />

   <?php

  echo "Total de espécies identificadas: ".$nn;

   ?>
</div>
          </div>