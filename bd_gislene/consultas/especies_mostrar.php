 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
  $loc = $_POST["loc"];
     $bio_nr = $_POST["bio_nr"];

      $ord = $_POST["ord"];
  $fam = $_POST["fam"];
     $esp = $_POST["esp"];
     $sexo = $_POST["sexo"];

   $tt = 0;
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="3">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>


</tr>
<tr class="titulo">

<td>Local de captura</td>

<td>Total de espécies capturadas</td>
<td>Total de exemplares capturados</td>

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






if ($sexo == "Todos")
{
$sex = " ";
}
else if ($sexo == "Macho")
{
$sex = " AND bio_sexo = 'M'";
}
else if ($sexo == "Fêmea")
{
$sex = " AND bio_sexo = 'F'";
}
else
{
$sex = " AND bio_sexo = ' '";
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
$pp = 1 ;
$sql1 = mysql_query("SELECT bio_local FROM tb_biotico1 GROUP BY bio_local ORDER BY bio_local ASC");
while($registro1 = mysql_fetch_row($sql1))


{

$loc[$pp] =  $registro1[0];

$num = 0;


$sql22 = mysql_query("SELECT * FROM tb_biotico1 WHERE bio_local = '$loc[$pp]' $apare $excu $bio GROUP BY bio_especie");
while($registro22 = mysql_fetch_row($sql22))
{
$id =  $registro22[14];

$sql22_e = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = '$id'");
while($registro22_e = mysql_fetch_row($sql22_e))
{
$ord_e =  $registro22_e[1];
$fam_e =  $registro22_e[2];
$esp_e =  $registro22_e[3];
}

if ($esp != "Todos")
{
    if($esp_e == $esp){$num++;}else{}
}

else {
		if ($fam != "Todos")
		{
        if($fam_e == $fam){$num++;}else{}
		}
        else
        {

            if ($ord != "Todos")
		    {
            if($ord_e == $ord){$num++;}else{}
		    }
            else
            {
            $num++;
            }

        }

}
}


















$num_n = 0;
$sql_n = mysql_query("SELECT * FROM tb_biotico1 WHERE bio_local = '$loc[$pp]' $apare $excu $bio");
// $num_n = mysql_num_rows($sql_n);

while($registro_n = mysql_fetch_row($sql_n))
{
$id_n =  $registro_n[14];


$sql22_n = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = '$id_n'");
while($registro22_n = mysql_fetch_row($sql22_n))
{
$ord_n =  $registro22_n[1];
$fam_n =  $registro22_n[2];
$esp_n =  $registro22_n[3];
}

if ($esp != "Todos")
{
    if($esp_n == $esp){$num_n++;}else{}
}

else {
		if ($fam != "Todos")
		{
        if($fam_n == $fam){$num_n++;}else{}
		}
        else
        {

            if ($ord != "Todos")
		    {
            if($ord_n == $ord){$num_n++;}else{}
		    }
            else
            {
            $num_n++;
            }

        }

}
}

if($erro1 == 1)
{
 echo "<center><h4>Falha de parâmetros!</h4></center>";
 break;
}

 echo "<tr>
<td align=\"left\">".$loc[$pp]."</td>
<td>".$num."</td>
<td>".$num_n."</td>
</tr>";
$hh = $loc[$pp];
$pp++;

/*if ($num == 0);
{
$parametro1 = " AND loc != '$loc[$pp]' ";
}

$parametro1 = " ";

$parametro .= $parametro1;*/
 $ff ="";
if ($num < 1)
{
 $ff = " AND loc != '$hh' ";
}
$gg .= $ff;
// echo "$num--$ff / ";

}


// echo "<br />$gg";

?>
</table>

</div>
          </div>








<style>
#tabb { width: 1102px; height: 837px; margin: 0 auto; border: 1px solid #ccc; background: url(img/mapa1.jpg) no-repeat center;}
#tabb table {border-collapse: collapse;}
</style>
<div id="tabb">
<table cellspacing="0" align="center" width="100%" height="100%">
<?php
$g = 1.99;
$f = floor($g);
//echo "$f";
$ss = 1;
$sql33 = mysql_query("SELECT * FROM teste WHERE id > '0' $gg ");
while($registro33 = mysql_fetch_row($sql33))
{
$y[$ss] = $registro33[1];
//$y[$ss] = floor((96374-floor($y[$ss]/100))/106.38);
$y[$ss] = floor((-3.34-(-sprintf("%01.2f",$y[$ss])))/0.0956);
$yy = $y[$ss];

$x[$ss] = $registro33[2];

//$x[$ss] = floor(-(round($x[$ss],2)-(-69)/0.126));
$x[$ss] = floor((-(sprintf("%01.2f",$x[$ss]))-(-69))/0.126);
$xx = $x[$ss];
/*$zz = $yy - 19500;

$rr = floor($zz / 21.79) + 1;*/

$locc[$ss] = $registro33[3];

$ss++;
}
// echo $yy;
$n = 0;
while ($n < 100)
{
echo "<tr>";

$nn = 0;
while ($nn < 100)
{


$c = "";
$title = "";
$tt = 1;

while ($tt < $ss)
{
if ($n == $y[$tt] AND $nn == $x[$tt])
{
$c = "#990000";
$title = $locc[$tt];

}
$tt++;
}
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