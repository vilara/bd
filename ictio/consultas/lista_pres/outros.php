<?php

if ($aparelho == "Pu�a" OR $aparelho == "Cani�o" OR $aparelho == "Tarrafa")
{
// In�cio dos resultados para outros --------------------------------------------------------------------------
?>

<tr class="titulo">

<td colspan="24">Aparelho: <?php echo"$aparelho ";?>

 ---- Excurs�o: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Fam�lia</td>
<td>Esp�cie</td>
<td title="Cut�rio">CAU</td><!--22-->
<td title="Sot�rio">SOT</td><!--21-->
<td title="Paca�s">PAC</td><!--20-->
<td title="Arara">ARA</td><!--11-->
<td title="Mutumparan�">MUT</td><!--10-->
<td title="S�o Louren�o">SLO</td><!--7-->
<td title="Karipunas (Montante)">KAM</td><!--9-->
<td title="Karipunas (Foz)">KAF</td><!--8-->
<td title="Jaciparan� (Montante)">JAM</td><!--6-->
<td title="Jaciparan� (Foz)">JAF</td><!--5-->
<td title="Jatuarana">JAT</td><!--4-->
<td title="Belmont (Montante)">BEM</td><!--3-->
<td title="Belmont (Foz)">BEF</td><!--2-->
<td title="Cuni�">CUN</td><!--1-->
<td title="Puruzinho">PUR</td><!--14-->
<td title="Machado (Montante)">MAM</td><!--13-->
<td title="Machado (Foz)">MAF</td><!--12-->
<td title="Manicor�">MAN</td><!--15-->
<td title="Aripuan�">ARI</td><!--16-->
<td title="Lago Sampaio">NON</td><!--17-->

<!--<td>Cp Max</td>
<td>Cp Min</td>-->
<!--<td>C�digo</td>
<td>Cp Base</td>-->

<!--<td>Total de esp�cies capturadas</td>    -->
</tr>
<?php



$l1 = 0;
$n = 1;



// Listagem das esp�cies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT outr_especie, count(outr_especie) FROM tb_outros_biotico WHERE id_tb_outros > '0' GROUP BY outr_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];
   $lista = new ManipulateData1();
   $NomeEsp = $lista->NomeEspecie($esp);
   $NomeOrd = $lista->NomeOrd($esp);
  $NomeFam = $lista->NomeFam($esp);


/*--------Caut�rio */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '22' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l1x[$n] = "X";}


/*--------Sot�rio */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '21' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l2x[$n] = "X";}



/*--------Pac�s */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '20' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l3x[$n] = "X";}



/*--------Arara */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '11' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l4x[$n] = "X";}



/*--------Mutumparan� */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '10' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l5x[$n] = "X";}



/*--------S�o Louren�o */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '7' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l6x[$n] = "X";}



/*--------Karipunas montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '9' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l7x[$n] = "X";}



/*--------Karipunas foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '8' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l8x[$n] = "X";}



/*--------Jaciparana montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '6' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l9x[$n] = "X";}



/*--------Jaciparana foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '5' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l10x[$n] = "X";}



/*--------Jatuarana */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '4' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l11x[$n] = "X";}



/*--------Belmont montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '3' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l12x[$n] = "X";}



/*--------Belmont foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '2' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l13x[$n] = "X";}



/*--------Cuni� */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '1' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l14x[$n] = "X";}



/*--------Puruzinho */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '14' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l15x[$n] = "X";}



/*--------Machado montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '13' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l16x[$n] = "X";}



/*--------Machado jusante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '12' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l17x[$n] = "X";}



/*--------Manicor� */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '15' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l18x[$n] = "X";}



/*--------Aripuan� */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '16' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l19x[$n] = "X";}



/*--------Lago Sampaio */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '17' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT outr_especie FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
$num1 = mysql_num_rows($sql1);
if($num1 > 0){$l20x[$n] = "X";}





$tott +=  $tot1[$n];

/*--------Linhas de resultados */
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td title=\"Cut�rio\" align=\"center\">".$l1x[$n]."</td>
<td title=\"Sot�rio\" align=\"center\">".$l2x[$n]."</td>
<td title=\"Paca�s\" align=\"center\">".$l3x[$n]."</td>
<td title=\"Arara\" align=\"center\">".$l4x[$n]."</td>
<td title=\"Mutumparan�\" align=\"center\">".$l5x[$n]."</td>
<td title=\"S�o Louren�o\" align=\"center\">".$l6x[$n]."</td>
<td title=\"Karipunas (Montante)\" align=\"center\">".$l7x[$n]."</td>
<td title=\"Karipunas (Foz)\" align=\"center\">".$l8x[$n]."</td>
<td title=\"Jaciparan� (Montante)\" align=\"center\">".$l9x[$n]."</td>
<td title=\"Jaciparan� (Foz)\" align=\"center\">".$l10x[$n]."</td>
<td title=\"Jatuarana\" align=\"center\">".$l11x[$n]."</td>
<td title=\"Belmont (Montante)\" align=\"center\">".$l12x[$n]."</td>
<td title=\"Belmont (Foz)\" align=\"center\">".$l13x[$n]."</td>
<td title=\"Cuni�\" align=\"center\">".$l14x[$n]."</td>
<td title=\"Puruzinho\" align=\"center\">".$l15x[$n]."</td>
<td title=\"Machado (Montante)\" align=\"center\">".$l16x[$n]."</td>
<td title=\"Machado (Foz)\" align=\"center\">".$l17x[$n]."</td>
<td title=\"Manicor�\" align=\"center\">".$l18x[$n]."</td>
<td title=\"Aripuan�\" align=\"center\">".$l19x[$n]."</td>
<td title=\"Lago Sampaio\" align=\"center\">".$l20x[$n]."</td>
</tr>";
$n++;}
?>


<?php
}

?>