
<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">


<tr class="titulo">

<td>Espécie</td>

<td>id</td>

</tr>
<?php

$sql1 = mysql_query("SELECT * FROM tb_biotico1 ORDER BY id_tb_biotico ASC");
while($registro1 = mysql_fetch_row($sql1))
{
$esp =  $registro1[6];

$sql2 = mysql_query("SELECT * FROM tb_especies WHERE esp_especie = '$esp'");
while($registro2 = mysql_fetch_row($sql2))
{$id =  $registro2[0];}






 echo "<tr>
<td align=\"left\">".$esp."</td>
<td>".$id."</td>

</tr>";


}
?>
</table>

</div>
          </div>