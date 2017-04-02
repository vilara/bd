 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
   $bio_nr = $_POST["bio_nr"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="16">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">

<td>Espécie</td>
<td>Fortaleza do Abunã</td>
<td>Cachoeira do Arara</td>
<td>Simão Grande</td>
<td>Mutum Paraná</td>
<td>São Lourenço</td>
<td>Karipuna</td>
<td>Jaciparana</td>
<td>Teotônio</td>
<td>Jatuarana</td>
<td>Belmont</td>
<td>Total Capturado</td>
<td>Cp Max</td>
<td>Cp Min</td>
<td>Código</td>
<td>Cp Base</td>

<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php

if ($aparelho == "Todos")
{
$apare = " ";
}
else if ($aparelho == "Malha + Rede")
{
$apare = " AND bio_val = 'mr'";}
else
{
$apare = " AND bio_aparelho = '$aparelho'";
}

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

if ($bio_nr == "Todos")
{
$bio = " ";
}
else
{
$bio = " AND bio_nr = '$bio_nr'";
$apare = " AND bio_aparelho = 'Rede de cerco'";
}


$l1 = 0;
$n = 1;
$sql = mysql_query("SELECT bio_especie, count(bio_especie) FROM tb_biotico1 WHERE id_tb_biotico > '0' GROUP BY bio_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];

$sql99 = mysql_query("SELECT * FROM tb_especies WHERE esp_especie = '$esp'");
while($registro99 = mysql_fetch_row($sql99))
{
$cod =  $registro99[5];
$cp_base =  $registro99[6];
}




$sqlx = mysql_query("SELECT bio_especie, count(bio_especie), MAX(bio_cp), MIN(bio_cp) FROM tb_biotico1 WHERE bio_especie = '$esp' $apare $excu $bio GROUP BY bio_especie");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1[$n] =  $registrox[1];
$cp_max[$n] =  $registrox[2];
$cp_min[$n] =  $registrox[3];
}

$sql1 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Belmont' AND bio_especie = '$esp' $apare $excu $bio");
$num1 = mysql_num_rows($sql1);
if($num1 > 0)
{
$l1x[$n] = "X";
}

$sql2 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Cachoeira do Arara' AND bio_especie = '$esp' $apare $excu $bio");
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

$sql4 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = 'Jaciparana' AND bio_especie = '$esp' $apare $excu  $bio");
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
}

if($num1 == 0){$num1 = "";}
if($num2 == 0){$num2 = "";}
if($num3 == 0){$num3 = "";}
if($num4 == 0){$num4 = "";}
if($num5 == 0){$num5 = "";}
if($num6 == 0){$num6 = "";}
if($num7 == 0){$num7 = "";}
if($num8 == 0){$num8 = "";}
if($num9 == 0){$num9 = "";}
if($num10 == 0){$num10 = "";}

echo "<tr>
<td align=\"left\">".$esp."</td>
<td align=\"center\">".$num3."</td>
<td align=\"center\">".$num2."</td>
<td align=\"center\">".$num9."</td>
<td align=\"center\">".$num7."</td>
<td align=\"center\">".$num8."</td>
<td align=\"center\">".$num6."</td>
<td align=\"center\">".$num4."</td>
<td align=\"center\">".$num10."</td>
<td align=\"center\">".$num5."</td>
<td align=\"center\">".$num1."</td>

<td>".$tot1[$n]."</td>
<td>".$cp_max[$n]."</td>
<td>".$cp_min[$n]."</td>
<td>".$cod."</td>
<td>".$cp_base."</td>
</tr>";

$n++;
}
?>
</table>

</div>
          </div>