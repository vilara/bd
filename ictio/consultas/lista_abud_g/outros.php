<?php

if ($aparelho == "Tarrafa" OR $aparelho == "Pu�a" OR $aparelho == "Cani�o" OR $aparelho == "Manual")
{

// In�cio dos resultados para Arrasto de fundo------------------------------------------------------------------------
?>
<tr class="titulo">

<td colspan="64">Aparelho: <?php echo"$aparelho ";?>

 ---- Excurs�o: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Fam�lia</td>
<td>Esp�cie</td>

<?php
$f = 1;
$sql = mysql_query("SELECT * FROM tb_local WHERE id_tab_local > 0 GROUP BY sub_bacia");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
  $rr =  $registro[0];
$desc =  $registro[1];
$sub_bacia[$f] =  $registro[11];
echo "<td align=\"left\">".$sub_bacia[$f]."</td>";
$f++;
}
?>

<td>Total Capturado</td></tr>


<?php
$g = 1;

// Listagem das esp�cies capturadas de Malhadeira
$sql = mysql_query("SELECT outr_especie, count(outr_especie) FROM tb_outros_biotico WHERE id_tb_outros > '0' GROUP BY outr_especie");
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
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho'  AND (lim_local = $loc $locc) $excu2 ");
while($registroa = mysql_fetch_row($sqla)){$malh_lim =  $registroa[0];$lim .= ' OR '.'outr_lim = '.$malh_lim;}
//  Contagem das esp�cies
$sql1 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp[$g]' AND (outr_lim = '$malh_lim' $lim) ");
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
