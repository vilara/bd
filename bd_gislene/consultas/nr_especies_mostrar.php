 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
  $loc = $_POST["loc"];
     $bio_nr = $_POST["bio_nr"];
   $tt = 0;
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="4">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">

<td>Local de captura</td>

<td>Total de espécies capturadas</td>
<td>Total de exemplares capturados</td>
<td>Peso total em gramas</td>
</tr>
<?php

if ($aparelho == "Todos")
{
$apare = " ";
}
else if ($aparelho == "Malha + Rede")
{
$apare = " AND bio_val = 'mr'";
}
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

/*
if (empty($peso_c))
{
$peso = " ";
}
else
{
$peso = " AND bio_pt > 0";

if(empty($peso_o) OR empty($peso_v1))
{$erro1 = 1;}

}*/

$sql1 = mysql_query("SELECT bio_local FROM tb_biotico1 GROUP BY bio_local ORDER BY bio_local ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$loc =  $registro1[0];

$sql = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = '$loc' $apare $excu $bio GROUP BY bio_especie");
$num = mysql_num_rows($sql);

$sql_n = mysql_query("SELECT bio_especie FROM tb_biotico1 WHERE bio_local = '$loc' $apare $excu $bio ");
$num_n = mysql_num_rows($sql_n);

$sql_p = mysql_query("SELECT sum(bio_pt) FROM tb_biotico1 WHERE bio_local = '$loc' $apare $excu $bio AND bio_pt > 0");
while($registro_p = mysql_fetch_row($sql_p))
{
$num_p =  $registro_p[0];
}


/*if($erro1 == 1)
{
 echo "<center><h4>Falha de parâmetros!</h4></center>";
 break;
}
*/
 echo "<tr>
<td align=\"left\">".$loc."</td>
<td>".$num."</td>
<td>".$num_n."</td>
<td>".$num_p."</td>
</tr>";


}
?>
</table>

</div>
          </div>