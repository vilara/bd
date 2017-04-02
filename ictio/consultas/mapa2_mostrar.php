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

                                    <!-- background: #FFFF33  background: url(img/ponto_vp.png) no-repeat center;-->
</div>
<style>
#point { padding: 0px; margin: 0px; width: 8px; height: 8px; border: 0px solid; margin-left: -6px; margin-top: -6px; position: absolute;}
</style>
<br /><br />

<div style="width: 1150px; height: 960px; margin: 0 auto; border: 1px solid; position: relative; background: url(img/Mapa_Pontos.jpg) no-repeat center;" >


<?php
$g = 1.99;
$f = floor($g);
//echo "$f";
 $m2 = "px";
$ss = 1;
$sql33 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local < 23 $gg ");
while($registro33 = mysql_fetch_row($sql33))
{
$y = $registro33[6];

$y = (floor(((sprintf("%01.6f",$y)-3)*960)/10))+1;
$y = $y.$m2;
// echo "$y[$ss] - ";


$x = $registro33[7];
// echo "$x[$ss] -";
$x = (floor(((66-(sprintf("%01.6f",$x)))*1150)/12))+1;
$x = $x.$m2;
// echo "$x[$ss]  <br>";
$locc = $registro33[1];

echo "<div id='point' style=' left: $x; top: $y;'><img src='img/ponto_vp.png' title='$locc'  /></div>  ";
 $ss++;
}
/*$m1 = 100;
$mm = $m1.$m2;

$tt = 1;

echo "$ss<br>";
while ($tt < $ss)
{
echo "$x[$ss] - $y[$ss] - HHHSHSHSHS<BR>";

$tt++;
}
echo $res;*/
?>






</div>

</div>

