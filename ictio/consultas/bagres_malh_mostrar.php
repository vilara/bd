<div id="tabelas">
<div id="tabela">

<table cellspacing="0" align="center" width="25%" class="bordasimples">
<tr class="titulo"><td colspan="14">Espécie: <?php echo"$espe ";?></td></tr>

<tr class="titulo">
<td>Registro</td>
<td>Cp</td>
<td>Pt</td>
</tr>
<?php
$n1 = 0;
$sql1 = mysql_query("SELECT * FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND malh_cp > 0 AND malh_pt > 0");
while($registro1 = mysql_fetch_row($sql1))
{
$reg =  $registro1[5];
$cp =  $registro1[7];
$pt =  $registro1[8];
 echo "<tr>
<td align=\"center\">".$reg."</td>
<td align=\"center\">".$cp."</td>
<td align=\"center\">".$pt."</td>
</tr>";
$n1++;
}
?>
</table>
<br /><br /><br />

<table cellspacing="0" align="center" width="20%" class="bordasimples">
<tr class="titulo"><td colspan="14"> Categ Cp da Espécie: <?php echo"$espe ";?> </td></tr>

<tr class="titulo">
<td>Código</td>
<td>Qtde</td>
</tr>

<?php
$sql = mysql_query("SELECT max(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira >= 1 AND malh_cp > 0 AND malh_especie = '$esp'");
while($registro = mysql_fetch_row($sql))
{$max =  $registro[0];}
$sql = mysql_query("SELECT min(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira >= 1 AND malh_cp > 0 AND malh_especie = '$esp'");
while($registro = mysql_fetch_row($sql))
{$min =  $registro[0];}



$f = 0; $n = 0;
while ($f <= $max){
$g = $f + 9;
$sql1 = mysql_query("SELECT malh_cp FROM tb_malhadeira_biotico WHERE malh_cp BETWEEN '$f' AND '$g' AND malh_cp > 0 AND malh_especie = '$esp'");
$num = mysql_num_rows($sql1);

 echo "<tr>
<td align=\"left\">".$f."mm"." a ".$g."mm"."</td>
<td align=\"center\">".$num."</td>
</tr>";
$n++;
$f = $f + 10;
}
?>
</table>
<br /><br /><br />
<table cellspacing="0" align="center" width="20%" class="bordasimples">
<tr class="titulo"><td colspan="14"> Categ Cp da Espécie: <?php echo"$espe ";?> </td></tr>
<tr class="titulo">
<td>Código</td>
<td>Qtde</td>
</tr>
<?php
$sql = mysql_query("SELECT max(malh_pt) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira >= 1 AND malh_pt > 0 AND malh_especie = '$esp'");
while($registro = mysql_fetch_row($sql))
{$maxp =  $registro[0];}

$sql = mysql_query("SELECT min(malh_pt) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira >= 1 AND malh_pt > 0 AND malh_especie = '$esp'");
while($registro = mysql_fetch_row($sql))
{$minp =  $registro[0];}

$f = 0; $n = 0;
while ($f <= $maxp){
$g = $f + 100;
$sql1 = mysql_query("SELECT malh_pt FROM tb_malhadeira_biotico WHERE malh_pt BETWEEN '$f' AND '$g' AND malh_pt > 0 AND malh_especie = '$esp'");
$num = mysql_num_rows($sql1);
echo "<tr>
<td align=\"left\">".$f."g"." a ".$g."g"."</td>
<td align=\"center\">".$num."</td>
</tr>";
$n++;
$f = $f + 101;
}
?>
</table>
<br /><br /><br />
<table cellspacing="0" align="center" width="30%" class="bordasimples">
<tr class="titulo">
<td colspan="2">RESUMO</td>
</tr>
<tr>
<td align="left">Qtde Indivíduos</td><td><?php echo "$n1"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Máximo</td><td><?php echo "$max"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Mínimo</td><td><?php echo "$min"; ?></td>
</tr>
<tr>
<td align="left">Peso Máximo</td><td><?php echo "$maxp"; ?></td>
</tr>
<tr>
<td align="left">Peso Mínimo</td><td><?php echo "$minp"; ?></td>
</tr>
<tr>
<td align="left"><b>TOTAL</b></td><td><b><?php echo "$cat_s"; ?></b></td>
</tr>
</table>
</div>
</div>