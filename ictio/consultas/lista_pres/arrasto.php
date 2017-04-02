<?php
 if ($aparelho == "Arrasto de fundo")
{
?>
<tr class="titulo">

<td colspan="23">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">


<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>

<td>Rio Guaporé ACM 46_50</td>
<td>Rio Guaporé ACM 51_55</td>
<td>Rio Guaporé ACM 56_60</td>
<td>Rio Guaporé ACM 61_65</td>

<td>Rio Guaporé ACM 16_20</td>
<td>Rio Mamoré ACM 21_25</td>
<td>Rio Mamoré ACM 26_30</td>
<td>Rio Madeira COR 1_5</td>
<td>Rio Madeira COR 6_10</td>
<td>Rio Madeira COR 11_15</td>
<td>Rio Madeira ACJ 31_35</td>
<td>Rio Madeira ACJ 36_40</td>
<td>Rio Madeira ACJ 41_45</td>

<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php













$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT arr_especie, count(arr_especie) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' GROUP BY arr_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];

   $lista = new ManipulateData1();
  $NomeEsp = $lista->NomeEspecie($esp);
  $NomeOrd = $lista->NomeOrd($esp);
  $NomeFam = $lista->NomeFam($esp);


/*--------Rio Guaporé ACM 46_50 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '37' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l20x[$n] = "X";}

/*--------Rio Guaporé ACM 51_55 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '38' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l30x[$n] = "X";}

/*--------Rio Guaporé ACM 56_60 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '39' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l40x[$n] = "X";}

/*--------Rio Guaporé ACM 61_65 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '40' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l50x[$n] = "X";}




/*--------Rio Guaporé ACM 16_20 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l1x[$n] = "X";}


/*--------Rio Mamoré ACM 21_25 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l2x[$n] = "X";}


/*--------Rio Mamoré ACM 26_30 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l3x[$n] = "X";}


/*--------Rio Madeira COR 1_5 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l4x[$n] = "X";}



/*--------Rio Madeira COR 6_10 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l5x[$n] = "X";}



/*--------Rio Madeira COR 11_15 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l6x[$n] = "X";}

/*--------Rio Madeira ACJ 31_35 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l7x[$n] = "X";}

/*--------Rio Madeira ACJ 36_40 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l8x[$n] = "X";}


/*--------Rio Madeira ACJ 41_45 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sqlff = mysql_query("SELECT id_tb_arrastofundo FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
$numff = mysql_num_rows($sqlff);
if($numff > 0){$l9x[$n] = "X";}
 echo "<tr>
 <td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td align=\"center\">".$l20x[$n]."</td>
<td align=\"center\">".$l30x[$n]."</td>
<td align=\"center\">".$l40x[$n]."</td>
<td align=\"center\">".$l50x[$n]."</td>
<td align=\"center\">".$l1x[$n]."</td>
<td align=\"center\">".$l2x[$n]."</td>
<td align=\"center\">".$l3x[$n]."</td>
<td align=\"center\">".$l4x[$n]."</td>
<td align=\"center\">".$l5x[$n]."</td>
<td align=\"center\">".$l6x[$n]."</td>
<td align=\"center\">".$l7x[$n]."</td>
<td align=\"center\">".$l8x[$n]."</td>
<td align=\"center\">".$l9x[$n]."</td>
</tr>";

$n++;
}
?>


<?php
}


?>