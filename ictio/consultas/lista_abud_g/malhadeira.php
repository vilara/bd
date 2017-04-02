<?php

if ($aparelho == "Malhadeira")
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

// Listagem das espécies capturadas de Malhadeira
$sql = mysql_query("SELECT malh_especie, count(malh_especie) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' GROUP BY malh_especie");
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
{$loc =  $registrocc[0];$locc .= ' OR '.'lim_local = '.$loc;}
//  Definicao dos parametros de limnologia
$malh_lim = " ";$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND (lim_local = $loc $locc) $excu1 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'malh_lim = '.$malh_lim;}
//  Contagem das espécies
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp[$g]' AND (malh_lim = '$malh_lim' $lim) ");
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
