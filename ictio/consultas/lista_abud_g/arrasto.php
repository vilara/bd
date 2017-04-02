<?php

if ($aparelho == "Arrasto de fundo")
{

// Início dos resultados para Arrasto de fundo------------------------------------------------------------------------
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

// Listagem das espécies capturadas de Malhadeira
$sql = mysql_query("SELECT arr_especie, count(arr_especie) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' GROUP BY arr_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp[$g] =  $registro[0];
$tot =  $registro[1];
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
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_arr_loc = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND (lim_arr_loc = $loc $locc) $excu2 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'arr_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp[$g]' AND (arr_lim = '$malh_lim' $lim) ");
while($registro1 = mysql_fetch_row($sql1))
{$num1 =  $registro1[0];}if($num1 == 0){$num1="";}

echo "<td>".$num1."</td>";


$tot += $num1 ;

$ff++;
}

echo "<td><b>".$tot."</b></td></tr>";

$tott +=  $tot;
$g++;
}
}

?>
