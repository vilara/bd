 <?php
 $tt = 0;
 ?>

<div id="tabelas">
<div id="tabela">

<?php
if ($t == "F"){
?>
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo"><td colspan="14">Aparelho: Malhadeira ---- Excursão: <?php echo"$exc ";?></td></tr>
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
</tr>

<?php

if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '16' OR lim_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14' OR lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Seca 1")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8' OR lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}

else if ($exc == "ANO I")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}

else if ($exc == "ANO II")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17'  OR lim_excursao = '18' OR lim_excursao = '19'
 OR lim_excursao = '20')";}

 else if ($exc == "2008")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}

 else if ($exc == "2009")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9'  OR lim_excursao = '10' OR lim_excursao = '11')";}

 else if ($exc == "2010")
{$excu = " AND (lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14'  OR lim_excursao = '15' OR lim_excursao = '16'
 OR lim_excursao = '17' OR lim_excursao = '18'  OR lim_excursao = '19')";}

  else if ($exc == "2011")
{$excu = " AND (lim_excursao = '20')";}

else if ($exc > 0)
{$excu = " AND (lim_excursao = '$exc')";}

if ($loc == "Todos"){$locc = " ";}else{$locc = " AND lim_local = '$loc'";}

$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_padronizado = 'Sim' $excu $locc ");
while($registroa = mysql_fetch_row($sqla))
{$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;}

$cat0 = 0;$cat1 = 0;$cat2 = 0;$cat3 = 0;
$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT malh_especie, count(malh_especie) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND (malh_sexo = 'Fêmea' OR malh_sexo = 'Macho') AND malh_lim = '$malh_lim' $lim  GROUP BY malh_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
        $lista = new ManipulateData1();
        $NomeEsp = $lista->NomeEspecie($esp);
        $NomeOrd = $lista->NomeOrd($esp);
        $NomeFam = $lista->NomeFam($esp);
$tot =  $registro[1];

$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '1' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);

$sql2 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '2' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num2 = mysql_num_rows($sql2);

$sql3 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '3' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num3 = mysql_num_rows($sql3);

$sql4 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '4' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num4 = mysql_num_rows($sql4);

$sql5 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '5' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num5 = mysql_num_rows($sql5);

$sql6 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_ematur = '6' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num6 = mysql_num_rows($sql6);

$sql7 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND malh_sexo = 'Macho' AND (malh_lim = '$malh_lim' $lim)");
$num7 = mysql_num_rows($sql7);

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
<td align=\"left\">".$NomeEsp."</td>
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
$n++;
}
$cat_s = $cat0 + $cat1 + $cat2 + $cat3;
if ($cat_s > 0){
$ir = (3*$cat3 + 2*$cat2 + 1*$cat1)/$cat_s;}
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
<?php }
else if($t == "GG"){
?>
<table cellspacing="0" align="center" width="70%" class="bordasimples">

<tr class="titulo"><td colspan="14">Aparelho: Malhadeira ---- Excursão: <?php echo"$exc ";?></td></tr>
<tr class="titulo">
<td>Espécie</td>
<td>GG 0</td>
<td>GG 1</td>
<td>GG 2</td>
<td>GG 3</td>
</tr>

<?php
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '16' OR lim_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14' OR lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Seca 1")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8' OR lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}

else if ($exc == "ANO I")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}

else if ($exc == "ANO II")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17'  OR lim_excursao = '18' OR lim_excursao = '19'
 OR lim_excursao = '20')";}

 else if ($exc == "2008")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}

 else if ($exc == "2009")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9'  OR lim_excursao = '10' OR lim_excursao = '11')";}

 else if ($exc == "2010")
{$excu = " AND (lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14'  OR lim_excursao = '15' OR lim_excursao = '16'
 OR lim_excursao = '17' OR lim_excursao = '18'  OR lim_excursao = '19')";}

  else if ($exc == "2011")
{$excu = " AND (lim_excursao = '20')";}

else if ($exc > 0)
{$excu = " AND (lim_excursao = '$exc')";}

if ($loc == "Todos"){$locc = " ";}else{$locc = " AND lim_local = '$loc'";}

$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_padronizado = 'Sim' $excu $locc ");
while($registroa = mysql_fetch_row($sqla))
{$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;}

$cat0 = 0;$cat1 = 0;$cat2 = 0;$cat3 = 0;
$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT malh_especie, count(malh_especie) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_lim = '$malh_lim' $lim  GROUP BY malh_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
        $lista = new ManipulateData1();
        $NomeEsp = $lista->NomeEspecie($esp);
        $NomeOrd = $lista->NomeOrd($esp);
        $NomeFam = $lista->NomeFam($esp);
$tot =  $registro[1];

$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gg = '0' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);

$sql2 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gg = '1' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num2 = mysql_num_rows($sql2);

$sql3 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gg = '2' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num3 = mysql_num_rows($sql3);

$sql4 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gg = '3' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num4 = mysql_num_rows($sql4);



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
<td align=\"left\">".$NomeEsp."</td>
<td align=\"center\">".$num1."</td>
<td align=\"center\">".$num2."</td>
<td align=\"center\">".$num3."</td>
<td align=\"center\">".$num4."</td>
</tr>";
}
$n++;
}
$cat_s = $cat0 + $cat1 + $cat2 + $cat3;
if ($cat_s > 0){
$ir = (3*$cat3 + 2*$cat2 + 1*$cat1)/$cat_s;}
$ir = number_format($ir, 2, ',', ' ');
?>
</table>

<?php }

else if($t == "GR"){
?>
<table cellspacing="0" align="center" width="70%" class="bordasimples">

<tr class="titulo"><td colspan="14">Aparelho: Malhadeira ---- Excursão: <?php echo"$exc ";?></td></tr>
<tr class="titulo">
<td>Espécie</td>
<td>GR 0</td>
<td>GR 1</td>
<td>GR 2</td>
<td>GR 3</td>
</tr>

<?php
if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '16' OR lim_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14' OR lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Seca 1")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8' OR lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}

else if ($exc == "ANO I")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}

else if ($exc == "ANO II")
{$excu = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17'  OR lim_excursao = '18' OR lim_excursao = '19'
 OR lim_excursao = '20')";}

 else if ($exc == "2008")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '2')";}

 else if ($exc == "2009")
{$excu = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9'  OR lim_excursao = '10' OR lim_excursao = '11')";}

 else if ($exc == "2010")
{$excu = " AND (lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14'  OR lim_excursao = '15' OR lim_excursao = '16'
 OR lim_excursao = '17' OR lim_excursao = '18'  OR lim_excursao = '19')";}

  else if ($exc == "2011")
{$excu = " AND (lim_excursao = '20')";}

else if ($exc > 0)
{$excu = " AND (lim_excursao = '$exc')";}

if ($loc == "Todos"){$locc = " ";}else{$locc = " AND lim_local = '$loc'";}

$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_padronizado = 'Sim' $excu $locc ");
while($registroa = mysql_fetch_row($sqla))
{$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;}

$cat0 = 0;$cat1 = 0;$cat2 = 0;$cat3 = 0;
$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT malh_especie, count(malh_especie) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_lim = '$malh_lim' $lim  GROUP BY malh_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
        $lista = new ManipulateData1();
        $NomeEsp = $lista->NomeEspecie($esp);
        $NomeOrd = $lista->NomeOrd($esp);
        $NomeFam = $lista->NomeFam($esp);
$tot =  $registro[1];

$sql1 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gr = '0' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num1 = mysql_num_rows($sql1);

$sql2 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gr = '1' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num2 = mysql_num_rows($sql2);

$sql3 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gr = '2' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num3 = mysql_num_rows($sql3);

$sql4 = mysql_query("SELECT malh_especie FROM tb_malhadeira_biotico WHERE malh_gr = '3' AND malh_especie = '$esp' AND malh_sexo = 'Fêmea' AND (malh_lim = '$malh_lim' $lim)");
$num4 = mysql_num_rows($sql4);



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
<td align=\"left\">".$NomeEsp."</td>
<td align=\"center\">".$num1."</td>
<td align=\"center\">".$num2."</td>
<td align=\"center\">".$num3."</td>
<td align=\"center\">".$num4."</td>
</tr>";
$num1t += $num1;$num2t += $num2;$num3t += $num3;$num4t += $num4;
}
$n++;
}
echo "<tr class=\"titulo\">
<td align=\"left\">"."Totais"."</td>
<td align=\"center\">".$num1t."</td>
<td align=\"center\">".$num2t."</td>
<td align=\"center\">".$num3t."</td>
<td align=\"center\">".$num4t."</td>
</tr>";
$gr_med = ($num2t+($num3t*2)+($num4t*3))/($num1t + $num2t + $num3t + $num4t);$gr_med1 = number_format($gr_med,2,'.','');


echo "<tr  class=\"titulo\">
<td align=\"left\">"."GR Médio"."</td>
<td align=\"center\" colspan=\"4\">".$gr_med1."</td>

</tr>";
$cat_s = $cat0 + $cat1 + $cat2 + $cat3;
if ($cat_s > 0){
$ir = (3*$cat3 + 2*$cat2 + 1*$cat1)/$cat_s;}
$ir = number_format($ir, 2, ',', ' ');
?>
</table>

<?php } ?>

</div>
</div>