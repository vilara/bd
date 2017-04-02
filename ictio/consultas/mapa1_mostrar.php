 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
   $bio_nr = $_POST["bio_nr"];
    if ($l == "Todos"){$ll = " ";}
else if ($l == "Larva"){$ll = " AND arr_larva = 'L'";}
else if ($l == "Não larva"){$ll = " AND arr_larva = 'N'";}

 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<?php

include_once "mapa/arrasto.php";
include_once "mapa/malhadeira.php";
include_once "mapa/redinha.php";
include_once "mapa/outros.php";
include_once "mapa/tarrafa.php";
include_once "mapa/espinhel.php";

include_once "mapa/todos.php";

?>

</table>  <br />
<div><center>TOTAL DE INDIVÍDUOS CAPTURADOS:&nbsp;&nbsp;&nbsp;<b><?php echo"$ss";?></b></center></div>


 <br /><br /><br />











<!-- MAPA  background: url(img/mapa1.jpg) no-repeat center; -->


<style>
#tabb { width: 1150px; height: 960px; margin: 0 auto; border: 1px solid; background: url(img/Mapa_Pontos.jpg) no-repeat center;}
#tabb table {border-collapse: collapse;}
</style>
<div id="tabb">
<table cellspacing="0" cellpadding="0" align="center"  border="0" width="1150px" height="960px">
<?php
$g = 1.99;
$f = floor($g);
//echo "$f";
$ss = 1;
$sql33 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local < 23 $gg ");
while($registro33 = mysql_fetch_row($sql33))
{
$y[$ss] = $registro33[6];

$y[$ss] = (floor(((sprintf("%01.6f",$y[$ss])-3)*150)/10))+1;
$yy = $y[$ss];



$x[$ss] = $registro33[7];
// echo "$x[$ss] -";
$x[$ss] = (floor(((66-(sprintf("%01.6f",$x[$ss])))*150)/12))+1;
$xx = $x[$ss];
// echo "$x[$ss]  <br>";
$locc[$ss] = $registro33[1];
 $ss++;

}
 $y[$tt] = 20;
 $x[$tt] = 22;

$n = 1;
while ($n < 151){
echo "<tr>";
$nn = 1;
while ($nn < 151)
{
$c = "";
 $title = "";
 $tt = 1;



 // echo "$ss<br>";
while ($tt < $ss)
{
  if ($n == $y[$tt] AND $nn == $x[$tt])
{$c = "#990000";
$title = "$locc[$tt]" ;
// echo "$title - $tt<br>";
}
$tt++;
}
//   $nn - $x1[$tt] - $n - $y1[$tt]     title='$title'
echo "<td bgcolor='$c' title='$title'></td>";
$nn++;
}
echo "</tr>";
$n++;
}
echo $res;
?>




</table>
</div>





</div>
</div>
