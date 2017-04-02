<?php
if ($aparelho == "Malhadeira")
{
// Início dos resultados para Malhadeira --------------------------------------------------------------------------
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
<!--<td>Cp Max</td>
<td>Cp Min</td>-->
<!--<td>Código</td>
<td>Cp Base</td>-->

<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php

$l1 = 0;
$n = 1;



// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT malh_especie, count(malh_especie) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' GROUP BY malh_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];
   $lista = new ManipulateData1();
   $NomeEsp = $lista->NomeEspecie($esp);
   $NomeOrd = $lista->NomeOrd($esp);
  $NomeFam = $lista->NomeFam($esp);


/*--------Cautário */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '22' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l1x[$n] = "X";}


/*--------Sotério */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '21' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l2x[$n] = "X";}



/*--------Pacás */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '20' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l3x[$n] = "X";}



/*--------Arara */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '11' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l4x[$n] = "X";}



/*--------Mutumparaná */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '10' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l5x[$n] = "X";}



/*--------São Lourenço */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '7' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l6x[$n] = "X";}



/*--------Karipunas montante */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '9' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l7x[$n] = "X";}



/*--------Karipunas foz */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '8' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l8x[$n] = "X";}



/*--------Jaciparana montante */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '6' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l9x[$n] = "X";}



/*--------Jaciparana foz */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '5' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l10x[$n] = "X";}



/*--------Jatuarana */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '4' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l11x[$n] = "X";}



/*--------Belmont montante */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '3' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l12x[$n] = "X";}



/*--------Belmont foz */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '2' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l13x[$n] = "X";}



/*--------Cuniã */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '1' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l14x[$n] = "X";}



/*--------Puruzinho */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '14' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l15x[$n] = "X";}



/*--------Machado montante */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '13' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l16x[$n] = "X";}



/*--------Machado jusante */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '12' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l17x[$n] = "X";}



/*--------Manicoré */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '15' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l18x[$n] = "X";}



/*--------Aripuanã */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '16' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l19x[$n] = "X";}



/*--------Lago Sampaio */
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'malhadeira' AND lim_local = '17' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l20x[$n] = "X";}





$tott +=  $tot1[$n];

/*--------Linhas de resultados */
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
</tr>";
$n++;}
?>

<!--<tr><td colspan="21" bgcolor="#CCCCCC"><b>TOTAL DE INDIVÍDUOS IDENTIFICADOS</b></td><td bgcolor="#CCCCCC"><b><?php echo"$tott";?></b>
</td></tr>-->

<?php
}


?>