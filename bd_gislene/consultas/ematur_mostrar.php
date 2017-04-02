 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
    $loc = $_POST["loc"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="12">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?>---- Local: <?php echo"$loc ";?> </td>


</tr>
<tr class="titulo">



<td>Espécie</td>
<td>F1</td>
<td>F2</td>
<td>F3</td>
<td>F4</td>
<td>F5</td>
<td>F6</td>
<td>Tot F</td>
<td>Tot M</td>
<td>N(F3+F4)</td>
<td>%(F3+F4)</td>
<td>Categ</td>









<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php






if ($exc == "Todas")
{
$excu = " ";
}
else if ($exc == "Cheia")
{
$excu = " AND bio_est = 'Cheia'";
}
else if ($exc == "Seca")
{
$excu = " AND bio_est = 'Seca'";
}
else
{
$excu = " AND bio_excursao = '$exc'";
}


if ($loc == "Todos")
{
$locc = " ";
}
else
{
$locc = " AND bio_local = '$loc'";
}

$cat0 = 0;$cat1 = 0;$cat2 = 0;$cat3 = 0;
$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT bio_especie, count(bio_especie) FROM tb_biotico1 WHERE id_tb_biotico > '0' AND bio_aparelho = 'Malhadeira' AND (bio_sexo = 'M' OR bio_sexo = 'F') GROUP BY bio_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];

$sql1 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 1 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num1 = mysql_num_rows($sql1);

$sql2 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 2 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num2 = mysql_num_rows($sql2);

$sql3 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 3 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num3 = mysql_num_rows($sql3);


$sql4 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 4 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num4 = mysql_num_rows($sql4);

$sql5 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 5 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num5 = mysql_num_rows($sql5);

$sql6 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_ematur = 6 AND bio_especie = '$esp' AND bio_sexo = 'F' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num6 = mysql_num_rows($sql6);

$sql7 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_especie = '$esp' AND bio_sexo = 'M' AND bio_aparelho = 'Malhadeira' $excu $locc");
$num7 = mysql_num_rows($sql7);


/*$sql2 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Cachoeira do Arara' AND bio_especie = '$esp' $apare $excu $bio");
$num2 = mysql_num_rows($sql2);
if($num2 > 0)
{
$l2x[$n] = "X";
}

$sql3 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Fortaleza do Abunã' AND bio_especie = '$esp' $apare $excu $bio");
$num3 = mysql_num_rows($sql3);
if($num3 > 0)
{
$l3x[$n] = "X";
}

$sql4 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Jaciparana' AND bio_especie = '$esp' $apare $excu $bio");
$num4 = mysql_num_rows($sql4);
if($num4 > 0)
{
$l4x[$n] = "X";
}

$sql5 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Jatuarana' AND bio_especie = '$esp' $apare $excu $bio");
$num5 = mysql_num_rows($sql5);
if($num5 > 0)
{
$l5x[$n] = "X";
}

$sql6 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Karipuna' AND bio_especie = '$esp' $apare $excu $bio");
$num6 = mysql_num_rows($sql6);
if($num6 > 0)
{
$l6x[$n] = "X";
}

$sql7 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Mutum Paraná' AND bio_especie = '$esp' $apare $excu $bio");
$num7 = mysql_num_rows($sql7);
if($num7 > 0)
{
$l7x[$n] = "X";
}

$sql8 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'São Lourenço' AND bio_especie = '$esp' $apare $excu $bio");
$num8 = mysql_num_rows($sql8);
if($num8 > 0)
{
$l8x[$n] = "X";
}

$sql9 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Simão Grande' AND bio_especie = '$esp' $apare $excu $bio");
$num9 = mysql_num_rows($sql9);
if($num9 > 0)
{
$l9x[$n] = "X";
}

$sql10 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Teotônio' AND bio_especie = '$esp' $apare $excu $bio");
$num10 = mysql_num_rows($sql10);
if($num10 > 0)
{
$l10x[$n] = "X";
}       round(1.95583, 2)
*/
  $r = "-";
  $num_f = $num1 + $num2 + $num3 + $num4 + $num5 + $num6;
  $n34 = $num3 + $num4;
  if ($num_f > 0){
  $pn34 = ($n34*100)/$num_f;
  $pn34 = round($pn34,0);
  }else{$pn34 = "-";}
    if ($num1 == 0){$num1 = " ";}
  if ($num2 == 0){$num2 = " ";}
  if ($num4 == 0){$num4 = " ";}
 if ($num3 == 0){$num3 = " ";}
  if ($num5 == 0){$num5 = " ";}
  if ($num6 == 0){$num6 = " ";}
   if ($num7 == 0){$num7 = " ";}
   if ($num_f > 0){
 if ($pn34 >= 25){$categ = 3;}

  else if ($pn34 >= 10){$categ = 2;}
  else if ($pn34 >= 1){$categ = 1;}
  else {$categ = 0;}


if ($categ == 0){$cat0++;}
if ($categ == 1){$cat1++;}
if ($categ == 2){$cat2++;}
if ($categ == 3){$cat3++;}


 echo "<tr>
<td align=\"left\">".$esp."</td>
<td align=\"center\">".$num1."</td>
<td align=\"center\">".$num2."</td>
<td align=\"center\">".$num3."</td>
<td align=\"center\">".$num4."</td>
<td align=\"center\">".$num5."</td>
<td align=\"center\">".$num6."</td>
<td align=\"center\">".$num_f."</td>
<td align=\"center\">".$num7."</td>
<td align=\"center\">".$n34."</td>
<td align=\"center\">".$pn34."%</td>
<td align=\"center\">".$categ."</td>
</tr>";
  }
/*echo "<tr>
<td align=\"left\">".$esp."</td>

<td align=\"center\">".$l1x[$n].$num1."</td>
<td align=\"center\">".$l2x[$n].$num2."</td>
<td align=\"center\">".$l3x[$n].$num3."</td>
<td align=\"center\">".$l4x[$n].$num4."</td>
<td align=\"center\">".$l5x[$n].$num5."</td>
<td align=\"center\">".$l6x[$n].$num6."</td>
<td align=\"center\">".$l7x[$n].$num7."</td>
<td align=\"center\">".$l8x[$n].$num8."</td>
<td align=\"center\">".$l9x[$n].$num9."</td>
<td align=\"center\">".$l10x[$n].$num10."</td>
<td>".$tot."</td>
</tr>";*/

$n++;
}
$cat_s = $cat0 + $cat1 + $cat2 + $cat3;

$ir = (3*$cat3 + 2*$cat2 + 1*$cat1)/$cat_s;
$ir = number_format($ir, 2, ',', ' ');
?>
</table>

<br /><br /><br />

<table cellspacing="0" align="center" width="10%" class="bordasimples">


<tr class="titulo">
<td colspan="2">RESUMO</td>
</tr>
<tr>
<td align="left">Categ 0</td><td><?php echo "$cat0"; ?></td>
</tr>

<tr>
<td align="left">Categ 1</td><td><?php echo "$cat1"; ?></td>
</tr>

<tr>
<td align="left">Categ 2</td><td><?php echo "$cat2"; ?></td>
</tr>

<tr>
<td align="left">Categ 3</td><td><?php echo "$cat3"; ?></td>
</tr>

<tr>
<td align="left"><b>TOTAL</b></td><td><b><?php echo "$cat_s"; ?></b></td>
</tr>
<tr class="titulo">
<td align="center"><b>IR</b></td><td><b><?php echo "$ir"; ?></b></td>
</tr>

</table>

</div>
          </div>