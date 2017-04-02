
<?php
if ($aparelho == "Arrasto de fundo")
{

$malh_espp = " ";
$espp = " ";
$ee = " AND esp_catrof = '$esp_catrof'";
 if ($esp_catrof == 'Todas' OR $esp_catrof == " "){$ee = " ";}
$sqlc = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie >= 1 $ee ORDER BY esp_catrof ");
while($registroc = mysql_fetch_row($sqlc))
{$malh_espp =  $registroc[0];
$espp .= ' OR '.'arr_especie = '.$malh_espp;}

if ($l == "Todos"){$ll = " ";}
else if ($l == "Larva"){$ll = " AND arr_larva = 'L'";}
else if ($l == "Não larva"){$ll = " AND arr_larva = 'N'";}


if ($ponto == "Agrupados")
{

 //
$num_p = "-";
$sql1 = mysql_query("SELECT * FROM tb_local  WHERE loc_aparelho = 'Arrasto' GROUP BY loc_descricao ORDER BY id_tab_local ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$id_loc =  $registro1[0];
$loc =  $registro1[1];

$num = 0;
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_padronizado = 'SIM'  AND lim_arr_ponto != 'N' AND lim_arr_loc = '$id_loc' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{$arr_lim =  $registroa[0];
$arr_p =  $registroa[38];
$lim .= ' OR '.'arr_lim = '.$arr_lim;}


$sql = mysql_query("SELECT arr_especie FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1 AND (arr_lim = '$arr_lim' $lim) AND arr_lim > 0  AND (arr_especie = '$malh_espp' $espp)  $ll GROUP BY arr_especie");
$num = mysql_num_rows($sql);
 if ($num == 0){$num = "-";}


$sql_n = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1  AND (arr_lim = '$arr_lim' $lim) AND arr_lim > 0  AND (arr_especie = '$malh_espp' $espp) $ll");
while($registro_n = mysql_fetch_row($sql_n))
{$num_n =  $registro_n[0];}
if ($arr_lim == " "){$num_n = "-";$num = "-";}
if ($num_n == 0){$num_n = "-";}
if ($num_p == 0){$num_p = "-";} /* */
echo "<tr><td align=\"left\">".$loc."</td><td>".$num."</td><td>".$num_n."</td><td>"."-"."</td></tr>";
}
//  echo "$lim";
 // echo $lim;  // echo "";
//  echo "<br><br><br><br><br>$lim---$arr_lim--$ll<br>";   // echo "$num";
}


else if ($ponto == "Separados")
{
//  echo "Brasil";
$num_p = "-";
$sql1 = mysql_query("SELECT * FROM tb_local  WHERE loc_aparelho = 'Arrasto' GROUP BY loc_descricao ORDER BY id_tab_local ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$id_loc =  $registro1[0];
$loc =  $registro1[1];


$sql_po = mysql_query("SELECT * FROM tb_limno_arr WHERE lim_arr_padronizado = 'SIM' AND  lim_arr_loc = '$id_loc' AND lim_arr_ponto != 'N' $excu ");
while($registro_po = mysql_fetch_row($sql_po))
{
$loc_po =  $registro_po[58];
$e =  $registro_po[2];
$codi =  $registro_po[2];
// $r = 1;

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE lim_arr_padronizado = 'SIM' AND  id_tb_limno_arr >= 1 AND lim_arr_ponto = '$loc_po' AND lim_arr_excursao = '$e' ");
while($registroa = mysql_fetch_row($sqla))
{$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;}


$sql = mysql_query("SELECT arr_especie FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1 AND (arr_lim = '$arr_lim' $lim)  AND (arr_especie = '$malh_espp' $espp) $ll  GROUP BY arr_especie");
$num = mysql_num_rows($sql);
 if ($num == 0){$num = "-";}

$sql_n = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1 AND (arr_lim = '$arr_lim' $lim)  AND (arr_especie = '$malh_espp' $espp)  $ll");
while($registro_n = mysql_fetch_row($sql_n))
{$num_n =  $registro_n[0];$limm =  $registro_n[2];}
if ($arr_lim == " "){$num_n = "-";$num = "-";}if ($num_n == " "){$num_n = 0;}
if ($num_n == 0){$num_n = "-";}
if ($num_p == 0){$num_p = "-";}
$sql_cod = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = '$arr_lim'");
while($registro_cod = mysql_fetch_row($sql_cod))
{$cod_cod =  $registro_cod[1];}/* */

echo "<tr><td align=\"left\">".$loc."-".$cod_cod."-".$e."</td><td align=\"center\">".$loc_po."</td><td>".$num."</td><td>".$num_n."</td></tr>";




}

}

}



else if ($ponto == "Consolidados")
{

$num_p = "-";
$sql1 = mysql_query("SELECT * FROM tb_local  WHERE loc_aparelho = 'Arrasto' GROUP BY loc_descricao ORDER BY id_tab_local ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$id_loc =  $registro1[0];
$loc =  $registro1[1];


$sql_po = mysql_query("SELECT * FROM tb_limno_arr WHERE lim_arr_padronizado = 'SIM' AND  lim_arr_loc = '$id_loc' AND lim_arr_ponto != 'N' $excu GROUP BY lim_arr_ponto  ORDER BY lim_arr_ponto ASC");
while($registro_po = mysql_fetch_row($sql_po))
{
$loc_po =  $registro_po[58];
$e =  $registro_po[2];
$codi =  $registro_po[2];
// $r = 1;
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE lim_arr_padronizado = 'SIM' AND  id_tb_limno_arr >= 1 AND lim_arr_ponto = '$loc_po'  $excu");
while($registroa = mysql_fetch_row($sqla))
{$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;}
// echo "$loc_po--$e--$lim<br>";

$sql = mysql_query("SELECT arr_especie FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1 AND (arr_lim = '$arr_lim' $lim)  AND (arr_especie = '$malh_espp' $espp) $ll  GROUP BY arr_especie");
$num = mysql_num_rows($sql);
 if ($num == 0){$num = "-";}

$sql_n = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo >= 1 AND (arr_lim = '$arr_lim' $lim)  AND (arr_especie = '$malh_espp' $espp)  $ll");
while($registro_n = mysql_fetch_row($sql_n))
{$num_n =  $registro_n[0];$limm =  $registro_n[2];}
if ($arr_lim == " "){$num_n = "-";$num = "-";}if ($num_n == " "){$num_n = 0;}
if ($num_n == 0){$num_n = "-";}
if ($num_p == 0){$num_p = "-";}

$sql_cod = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = '$arr_lim'  $excu");
while($registro_cod = mysql_fetch_row($sql_cod))
{$cod_cod =  $registro_cod[1];}
/*if ($excu != " ")
{
echo "<tr><td align=\"left\">".$cod_cod."</td><td align=\"left\">".$e."-".$cod_cod."</td><td align=\"left\">".$loc."-".$cod_cod."</td><td align=\"center\">".$loc_po."</td><td>".$num."</td><td>".$num_n."</td></tr>";
} else{*/
echo "<tr><td align=\"left\">".$loc."</td><td align=\"center\">".$loc_po."</td><td>".$num."</td><td>".$num_n."</td></tr>";


// }

}

}

}


}
?>