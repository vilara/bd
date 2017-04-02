 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
    $catrof = $_POST["catrof"];
     $bio_nr = $_POST["bio_nr"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="13">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">

<td>Local de captura</td>

<td>Herbívoro</td>
<td>Iliófago</td>
<td>Carnívoro</td>
<td>Piscívoro</td>
<td>Onívoro</td>
<td>Insetívoro</td>
<td>Planctófago</td>
<td>Detritívoro</td>
<td>Lepidófago</td>
<td>Necrófago</td>
<td>Frugívoro</td>
<td>Hematófago</td>


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




$sql1 = mysql_query("SELECT bio_local FROM tb_biotico1 GROUP BY bio_local ORDER BY bio_local ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$loc =  $registro1[0];

$bb1 = 0;$b1 = 0;$b2 = 0;$b3 = 0;$b4 = 0;$b5 = 0;$b6= 0;$b7 = 0;$b8 = 0;$b9 = 0;$b10 = 0;$b11 = 0;$b12 = 0;
/*$sql3 = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = '$loc' $apare $excu GROUP BY bio_especie");
$num3 = mysql_num_rows($sql3);*/

$sql = mysql_query("SELECT bio_esp_id FROM tb_biotico1 WHERE bio_local = '$loc' $apare $excu $bio GROUP BY bio_esp_id ORDER BY bio_esp_id");
while($registro2 = mysql_fetch_row($sql))
{
$idd = $registro2[0];
//echo "$idd <br>";


$sql3 = mysql_query("SELECT esp_catrof FROM tb_especies WHERE id_tab_especie = '$idd'");
while($registro3 = mysql_fetch_row($sql3))
{
$cat = $registro3[0];
}
if ($cat == "Herbívoro"){$b1++;}
if ($cat == "Iliófago"){$b2++;}
if ($cat == "Carnívoro"){$b3++;}
if ($cat == "Piscívoro"){$b4++;}
if ($cat == "Onívoro"){$b5++;}
if ($cat == "Insetívoro"){$b6++;}
if ($cat == "Planctófago"){$b7++;}
if ($cat == "Detritívoro"){$b8++;}
if ($cat == "Lepidófago"){$b9++;}
if ($cat == "Necrófago"){$b10++;}
if ($cat == "Frugívoro"){$b11++;}
if ($cat == "Hematófago"){$b12++;}


/*$bb1 += $b1;
$bb2 += $b2;
$bb3 += $b3;
$bb4 += $b4;
$bb5 += $b5;
$bb6 += $b6;
$bb7 += $b7;
$bb8 += $b8;
$bb9 += $b9;
$bb10 += $b10;
$bb11 += $b11;
$bb12 += $b12;*/
}
echo "<tr>
<td align=\"left\">".$loc."</td>
<td align=\"center\">".$b1."</td>
<td align=\"center\">".$b2."</td>
<td align=\"center\">".$b3."</td>
<td align=\"center\">".$b4."</td>
<td align=\"center\">".$b5."</td>
<td align=\"center\">".$b6."</td>
<td align=\"center\">".$b7."</td>
<td align=\"center\">".$b8."</td>
<td align=\"center\">".$b9."</td>
<td align=\"center\">".$b10."</td>
<td align=\"center\">".$b11."</td>
<td align=\"center\">".$b12."</td>

</tr>";
}
/*echo "<tr>
<td align=\"left\">".Totais."</td>
<td align=\"center\">".$bb1."</td>
<td align=\"center\">".$bb2."</td>
<td align=\"center\">".$bb3."</td>
<td align=\"center\">".$bb4."</td>
<td align=\"center\">".$bb5."</td>
<td align=\"center\">".$bb6."</td>
<td align=\"center\">".$bb7."</td>
<td align=\"center\">".$bb8."</td>
<td align=\"center\">".$bb9."</td>
<td align=\"center\">".$bb10."</td>
<td align=\"center\">".$bb11."</td>
<td align=\"center\">".$bb12."</td>
<td>".tot1."</td>
</tr>";*/

?>
</table>

</div>
          </div>