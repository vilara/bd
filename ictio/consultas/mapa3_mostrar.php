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

include_once "mapa/todos1.php";

?>

</table>  <br />
<div><center>TOTAL DE INDIVÍDUOS CAPTURADOS:&nbsp;&nbsp;&nbsp;<b><?php echo"$ss_t";?></b></center></div>


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

 $m2 = "px";
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

}



$sql333 = mysql_query("SELECT * FROM tb_local WHERE loc_aparelho = 'Arrasto' $gg1 ");
while($registro333 = mysql_fetch_row($sql333))
{
$y1 = $registro333[6];

$y1 = (floor(((sprintf("%01.6f",$y1)-3)*960)/10))+1;
$y1 = $y1.$m2;
 //  echo "$y1 - ";


$x1 = $registro333[7];
// echo "$x[$ss] -";
$x1 = (floor(((66-(sprintf("%01.6f",$x1)))*1150)/12))+1;
$x1 = $x1.$m2;
//  echo "$x1  <br>";
$locc = $registro333[1];

echo "<div id='point' style=' left: $x1; top: $y1;'><img src='img/ponto_vp1.png' title='$locc'  /></div>  ";

}



?>






</div>

</div>

