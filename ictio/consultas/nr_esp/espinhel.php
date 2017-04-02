<?php

if ($aparelho == "Espinhel")
{






$num_p = "-";
$sql1 = mysql_query("SELECT * FROM tb_local WHERE loc_aparelho = 'Malhadeira' OR  loc_aparelho = 'Malhadeira_exp' GROUP BY loc_codigo ORDER BY loc_ordem ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$id_loc =  $registro1[0];
$loc =  $registro1[1];

$malh_espp = " ";
$espp = " ";
$ee = " AND esp_catrof = '$esp_catrof'";
 if ($esp_catrof == 'Todas' OR $esp_catrof == " "){$ee = " ";}
$sqlc = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie >= 1 $ee ORDER BY esp_catrof ");
while($registroc = mysql_fetch_row($sqlc))
{$malh_espp =  $registroc[0];
$espp .= ' OR '.'espi_esp = '.$malh_espp;}

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE lim_outr_padronizado = 'SIM' AND lim_outr_an = 'Sim' AND id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{$outr_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$outr_lim;}
$sql_t = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE id_tb_espi >= 1  AND (espi_lim = '$outr_lim' $lim) AND (espi_esp = '$malh_espp' $espp) GROUP BY espi_esp");
$num_t = mysql_num_rows($sql_t);


$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE lim_outr_padronizado = 'SIM' AND lim_outr_an = 'Sim' AND  id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '$id_loc' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{$outr_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$outr_lim;}

$sql = mysql_query("SELECT espi_esp FROM tb_espinhel_biotico WHERE id_tb_espi >= 1  AND (espi_lim = '$outr_lim' $lim) AND (espi_esp = '$malh_espp' $espp) GROUP BY espi_esp");
$num = mysql_num_rows($sql);
if ($num == 0){$num = "-";}


$sql_n = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE id_tb_espi >= 1  AND (espi_lim = '$outr_lim' $lim) AND (espi_esp = '$malh_espp' $espp)");
// $num_n = mysql_num_rows($sql_n);

while($registro_n = mysql_fetch_row($sql_n))
{$num_n =  $registro_n[0];$num_p = "-";}
if ($outr_lim == " "){$num_n = "-";$num = "-";$num_p = "-";}
if ($num == 0){$num_n = "-";}
 echo "<tr><td align=\"left\">".$loc."</td><td>".$num."</td><td>".$num_n."</td><td>".$num_p."</td></tr>";

// $num_t += $num;
$num_n_t += $num_n;
$num_p_t += $num_p;
}
}




?>