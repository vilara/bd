<?php
$ne = 0;
if ($aparelho == "Todos")
{

// Início dos resultados para Malhadeira --------------------------------------------------------------------------
?>
<tr class="titulo">

<td colspan="64">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>

<?php
$f = 1;
$sql = mysql_query("SELECT * FROM tb_local WHERE id_tab_local > 0 GROUP BY sub_bacia");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$desc =  $registro[1];
$sub_bacia[$f] =  $registro[11];
echo "<td align=\"left\">".$sub_bacia[$f]."</td>";
$f++;
}
?>

<td>Total Capturado</td></tr>


<?php
$g = 1;

// Listagem das espécies capturadas de Malhadeira      WHERE id_tab_especie < 10
$sql = mysql_query("SELECT id_tab_especie FROM tb_especies GROUP BY esp_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp[$g] =  $registro[0];

$lista = new ManipulateData1();
$NomeEsp = $lista->NomeEspecie($esp[$g]);
$NomeOrd = $lista->NomeOrd($esp[$g]);
$NomeFam = $lista->NomeFam($esp[$g]);


/*--------Linhas de resultados */
echo "<tr><td align=\"left\">".$NomeOrd."</td><td align=\"left\">".$NomeFam."</td><td align=\"left\">".$NomeEsp.$NrEsp."</td>";

$ff = 1;
$num1 = 0;
$tot = 0;
while($ff < $f)
{
// Malhadeira ---------------------------------------------------------------------------------------------
//  Definicao dos parametros de locais
$locc = " ";$loc = " ";
$sqlcc = mysql_query("SELECT id_tab_local FROM tb_local WHERE id_tab_local >= 0 AND sub_bacia = '$sub_bacia[$ff]'");
while($registrocc = mysql_fetch_row($sqlcc))
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_local = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND (lim_local = $loc $locc) $excu1 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp[$g]' AND (malh_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num1 =  $registro1[0];}if($num1 == 0){$num1="";}


//Redinha ---------------------------------------------------------------------------------------------

$locc = " ";$loc = " ";
$sqlcc = mysql_query("SELECT id_tab_local FROM tb_local WHERE id_tab_local >= 0 AND sub_bacia = '$sub_bacia[$ff]'");
while($registrocc = mysql_fetch_row($sqlcc))
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_local = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND (lim_local = $loc $locc) $excu1 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'red_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp[$g]' AND (red_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num2 =  $registro1[0];}if($num2 == 0){$num2="";}

// Arrasto ---------------------------------------------------------------------------------------------

$locc = " ";$loc = " ";
$sqlcc = mysql_query("SELECT id_tab_local FROM tb_local WHERE id_tab_local >= 0 AND sub_bacia = '$sub_bacia[$ff]'");
while($registrocc = mysql_fetch_row($sqlcc))
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_arr_loc = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND (lim_arr_loc = $loc $locc) $excu3 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'arr_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp[$g]' AND (arr_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num3 =  $registro1[0];}if($num3 == 0){$num3="";}



// Outros ---------------------------------------------------------------------------------------------
$locc = " ";$loc = " ";
$sqlcc = mysql_query("SELECT id_tab_local FROM tb_local WHERE id_tab_local >= 0 AND sub_bacia = '$sub_bacia[$ff]'");
while($registrocc = mysql_fetch_row($sqlcc))
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_local = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '$Espinhel'  AND (lim_local = $loc $locc) $excu2 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp[$g]' AND (outr_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num5 =  $registro1[0];}if($num5 == 0){$num5="";}



// Espinhel ---------------------------------------------------------------------------------------------

$sqlcc = mysql_query("SELECT id_tab_local FROM tb_local WHERE id_tab_local >= 0 AND sub_bacia = '$sub_bacia[$ff]'");
while($registrocc = mysql_fetch_row($sqlcc))
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_local = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel'  AND (lim_local = $loc $locc) $excu2 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'espi_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp[$g]' AND (espi_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num4 =  $registro1[0];}if($num4 == 0){$num4="";}


 $num_tt = $num1 + $num2 + $num3 + $num4 + $num5;
 if($num_tt == 0){$num_tt="";}






echo "<td>".$num_tt."</td>";


$tot += $num_tt ;

$ff++;
}

echo "<td><b>".$tot."</b></td></tr>";

if ($tot > 0)
{
  $ne++;
}

$tott +=  $tot;
$g++;
}
}

?>
