 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
    $bio_nr = $_POST["bio_nr"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="11">Aparelho: <?php echo"$aparelho ";?>

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

if ($bio_nr == "Todos")
{
$bio = " ";
}
else
{
$bio = " AND bio_nr = '$bio_nr'";
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
}


 echo "<tr>
<td align=\"left\">".$esp."</td>
<td align=\"center\">".$l3x[$n]."</td>
<td align=\"center\">".$l2x[$n]."</td>
<td align=\"center\">".$l9x[$n]."</td>
<td align=\"center\">".$l7x[$n]."</td>
<td align=\"center\">".$l8x[$n]."</td>
<td align=\"center\">".$l6x[$n]."</td>
<td align=\"center\">".$l4x[$n]."</td>
<td align=\"center\">".$l10x[$n]."</td>
<td align=\"center\">".$l5x[$n]."</td>
<td align=\"center\">".$l1x[$n]."</td>
</tr>";

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
?>
</table>

</div>
          </div>