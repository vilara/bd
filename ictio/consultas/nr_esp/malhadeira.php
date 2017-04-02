<?php
if ($aparelho == "Malhadeira")
{

$malh_espp = " ";
$espp = " ";
$ee = " AND tb_especies.esp_catrof = '$esp_catrof'";
 if ($esp_catrof == 'Todas' OR $esp_catrof == " "){$ee = " ";}

$sql_inn = mysql_query("SELECT * FROM tb_malhadeira_biotico INNER JOIN tb_limno ON
 tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno
 INNER JOIN tb_especies ON tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie
 WHERE tb_limno.lim_aparelho = 'Malhadeira' AND tb_limno.lim_padronizado = 'Sim' $excu1
  $ee GROUP BY tb_malhadeira_biotico.malh_especie");
$num_t = mysql_num_rows($sql_inn);

$num_p = "-";
$sql1 = mysql_query("SELECT * FROM tb_local WHERE loc_aparelho = 'Malhadeira' OR loc_aparelho = 'Malhadeira_exp' GROUP BY loc_codigo ORDER BY loc_ordem ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$id_loc =  $registro1[0];
$loc =  $registro1[1];
$num_p = 0;
$num_n = 0;
$num = 0;
$sql_inn_1 = mysql_query("SELECT * FROM tb_malhadeira_biotico INNER JOIN tb_limno ON
 tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno
 INNER JOIN tb_especies ON tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie
 WHERE tb_limno.lim_aparelho = 'Malhadeira' AND tb_limno.lim_padronizado = 'Sim' $excu1
 AND tb_limno.lim_local = '$id_loc'
  $ee GROUP BY tb_malhadeira_biotico.malh_especie");
$num = mysql_num_rows($sql_inn_1);

if ($num == 0){$num = "-";}

$sql_inn_2 = mysql_query("SELECT count(tb_malhadeira_biotico.malh_especie), sum(tb_malhadeira_biotico.malh_pt) FROM tb_malhadeira_biotico INNER JOIN tb_limno ON
 tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno
 INNER JOIN tb_especies ON tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie
 WHERE tb_limno.lim_aparelho = 'Malhadeira' AND tb_limno.lim_padronizado = 'Sim' $excu1
 AND tb_limno.lim_local = '$id_loc'
  $ee");

while($registro_n = mysql_fetch_row($sql_inn_2))
{$num_n =  $registro_n[0];$num_p =  $registro_n[1];}
if ($malh_lim == " "){$num_n = "-";$num = "-";$num_p = "-";}
if ($num_n == 0){$num_n = "-";}
if ($num_p == 0){$num_p = "-";}


 echo "<tr><td align=\"left\">".$loc."</td><td>".$num."</td><td>".$num_n."</td><td>".$num_p."</td></tr>";


$num_n_t += $num_n;
$num_p_t += $num_p;
}



}


?>