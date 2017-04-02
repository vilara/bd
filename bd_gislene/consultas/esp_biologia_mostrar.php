 <?php
 $aparelho = "Malhadeira";
  $exc = $_POST["exc"];
   $bio_nr = $_POST["bio_nr"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="3">Aparelho: Malhadeira

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">

<td>Espécie</td>
<td>Cp</td>
<td>Pt</td>


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
$sql = mysql_query("SELECT bio_especie, bio_cp, bio_pt FROM tb_biotico1 WHERE bio_aparelho = 'Malhadeira' $excu ORDER BY bio_especie ASC");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$cp =  $registro[1];
$pt =  $registro[2];


echo "<tr>
<td align=\"left\">".$esp."</td>
<td>".$cp."</td>
<td>".$pt."</td>
</tr>";

$n++;
}
?>
</table>

</div>
          </div>