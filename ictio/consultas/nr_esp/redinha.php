<?php

if ($aparelho == "Redinha")
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
 $numc = mysql_num_rows($sqlc);
while($registroc = mysql_fetch_row($sqlc))
{$malh_espp =  $registroc[0];
$espp .= ' OR '.'red_especie = '.$malh_espp;}

$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE lim_aparelho = 'Redinha' AND  id_tb_limno >= 1 AND lim_padronizado = 'Sim' AND lim_an = 'Sim' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;}
$sql_t = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE id_tb_redinha >= 1  AND (red_lim = '$red_lim' $lim) AND (red_especie = '$malh_espp' $espp) GROUP BY red_especie");
$num_t = mysql_num_rows($sql_t);


$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE lim_aparelho = 'Redinha' AND  id_tb_limno >= 1 AND lim_padronizado = 'Sim' AND lim_an = 'Sim' AND lim_local = '$id_loc' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{$red_lim =  $registroa[0];
$lim .= " OR " ."red_lim = ".$red_lim;}

$sql = mysql_query("SELECT red_especie FROM tb_redinha_biotico WHERE id_tb_redinha >= 1 AND (red_lim = '$red_lim' $lim) AND (red_especie = '$malh_espp' $espp) GROUP BY red_especie");
 $num = mysql_num_rows($sql);
 if ($num == 0){$num = "-";}


$sql_n = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE id_tb_redinha >= 1 AND (red_lim = '$red_lim' $lim) AND (red_especie = '$malh_espp' $espp)");


while($registro_n = mysql_fetch_row($sql_n))
{$num_n =  $registro_n[0];$num_p = "-";}
if ($red_lim == " "){$num_n = "-";$num = "-";$num_p = "-";}
if ($num_n == 0){$num_n = "-";}
if ($num_p == 0){$num_p = "-";} 

 echo "<tr><td align=\"left\">".$loc."</td><td>".$num."</td><td>".$num_n."</td><td>".$num_p."</td></tr>";


$num_n_t += $num_n;
$num_p_t += $num_p;
}
}

?>