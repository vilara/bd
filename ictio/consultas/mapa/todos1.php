<?php

if ($aparelho == "Todos")
{

$n = 1;

// Listagem das espécies capturadas
/*$sql = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie > '0' GROUP BY esp_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{*/

   $lista = new ManipulateData1();
    $NrEsp = $lista->NrEspecie($esp);
    $NomeEsp = $lista->NomeEspecie($esp);
    $NomeOrd = $lista->NomeOrd($esp);
    $NomeFam = $lista->NomeFam($esp);


/*--------NÚMERO DE INDIVÍDUOS TOTAIS */

// redinha
//echo "$exc--";

if ($exc == "Todas")
{$excu1 = " ";}
else if ($exc == "Expandidas")
{$excu1 = " AND (lim_excursao = '1' OR lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '16' OR lim_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu1 = " AND (lim_excursao = '1' OR lim_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu1 = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu1 = " AND (lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
else if ($exc == "Cheias")
{$excu1 = " AND (lim_excursao = '1' OR lim_excursao = '2' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14' OR lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Seca 1")
{$excu1 = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu1 = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
else if ($exc == "Secas")
{$excu1 = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8' OR lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}



else if ($exc == "Expandidas Cheia")
{$excu = " AND (lim_excursao = '1' OR lim_excursao = '12' OR lim_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu = " AND (lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '16')";}


else if ($exc == "ANO I")
{$excu1 = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}

else if ($exc == "ANO II")
{$excu1 = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17'  OR lim_excursao = '18' OR lim_excursao = '19'
 OR lim_excursao = '20')";}

 else if ($exc == "2008")
{$excu1 = " AND (lim_excursao = '1' OR lim_excursao = '2')";}

 else if ($exc == "2009")
{$excu1 = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9'  OR lim_excursao = '10' OR lim_excursao = '11')";}

 else if ($exc == "2010")
{$excu1 = " AND (lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14'  OR lim_excursao = '15' OR lim_excursao = '16'
 OR lim_excursao = '17' OR lim_excursao = '18'  OR lim_excursao = '19')";}

  else if ($exc == "2011")
{$excu1 = " AND (lim_excursao = '20')";}

else if ($exc > 0)
{$excu1 = " AND (lim_excursao = '$exc')";}


//  echo "--$exc";
if ($exc == "Todas")
{$excu2 = " ";}
else if ($exc == "Expandidas")
{$excu2 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '6' OR lim_outr_excursao = '9' OR lim_outr_excursao = '12' OR lim_outr_excursao = '16' OR lim_outr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu2 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu2 = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu2 = " AND (lim_outr_excursao = '18' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu2 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2' OR lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14' OR lim_outr_excursao = '18' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20')";}
else if ($exc == "Seca 1")
{$excu2 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu2 = " AND (lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17')";}
else if ($exc == "Secas")
{$excu2 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8' OR lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17')";}

else if ($exc == "Expandida seca")
{$excu = " AND (lim_outr_excursao = '6' OR lim_outr_excursao = '9' OR lim_outr_excursao = '16')";}
else if ($exc == "Expandida cheia")
{$excu = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '12' OR lim_outr_excursao = '19')";}


else if ($exc == "ANO I")
{$excu2 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5'  OR lim_outr_excursao = '6' OR lim_outr_excursao = '7'
 OR lim_outr_excursao = '8' OR lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}



else if ($exc == "ANO II")
{$excu2 = " AND (lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17'  OR lim_outr_excursao = '18' OR lim_outr_excursao = '19'
 OR lim_outr_excursao = '20')";}

 else if ($exc == "2008")
{$excu2 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2')";}

 else if ($exc == "2009")
{$excu2 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5'  OR lim_outr_excursao = '6' OR lim_outr_excursao = '7'
 OR lim_outr_excursao = '8' OR lim_outr_excursao = '9'  OR lim_outr_excursao = '10' OR lim_outr_excursao = '11')";}

 else if ($exc == "2010")
{$excu2 = " AND (lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14'  OR lim_outr_excursao = '15' OR lim_outr_excursao = '16'
 OR lim_outr_excursao = '17' OR lim_outr_excursao = '18'  OR lim_outr_excursao = '19')";}

  else if ($exc == "2011")
{$excu2 = " AND (lim_outr_excursao = '20')";}




else if ($exc > 0)
{$excu2 = " AND (lim_outr_excursao = '$exc')";}





if ($exc == "Todas")
{$excu3 = " ";}
else if ($exc == "Expandidas")
{$excu3 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '16' OR lim_arr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu3 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu3 = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu3 = " AND (lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu3 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Seca 1")
{$excu3 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu3 = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Secas")
{$excu3 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}

else if ($exc == "Expandida seca")
{$excu = " AND (lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '16')";}
else if ($exc == "Expandida cheia")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '12' OR lim_arr_excursao = '19')";}


else if ($exc == "ANO I")
{$excu3 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}



else if ($exc == "ANO II")
{$excu3 = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17'  OR lim_arr_excursao = '18' OR lim_arr_excursao = '19'
 OR lim_arr_excursao = '20')";}

 else if ($exc == "2008")
{$excu3 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}

 else if ($exc == "2009")
{$excu3 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9'  OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}

 else if ($exc == "2010")
{$excu3 = " AND (lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14'  OR lim_arr_excursao = '15' OR lim_arr_excursao = '16'
 OR lim_arr_excursao = '17' OR lim_arr_excursao = '18'  OR lim_arr_excursao = '19')";}

  else if ($exc == "2011")
{$excu3 = " AND (lim_arr_excursao = '20')";}




else if ($exc > 0)
{$excu3 = " AND (lim_arr_excursao = '$exc')";}

?>


 <table cellspacing="0" align="center" width="40%" class="bordasimples">
<tr class="titulo"><td colspan="4"><b><?php echo"$NomeEsp";?></b></td></tr>
<tr class="titulo" bgcolor="#F8F8F8">
          <td>Local</td>
          <td>Total Capturado</td>

    </tr>

<?php

$sql1 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local <= 22 OR id_tab_local = 34  ORDER BY loc_ordem ASC");
while($registro1 = mysql_fetch_row($sql1))
{

$id_loc =  $registro1[0];
$loc =  $registro1[2];
$loc1 =  $registro1[1];
$color = "";



// redinha

if ($gen == "s"){$genn_r = "AND (red_teci != 'Não' AND red_teci !=  '')";}else{$genn_r = "";}

$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '$id_loc' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql58 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim) $genn");
while($registro58 = mysql_fetch_row($sql58))
{$num58_r =  $registro58[0];}
if($num58_r == 0){$num58_r="";}

// malhadeira
if ($gen == "s"){$genn_m = "AND (malh_teci != 'Não' AND malh_teci !=  '')";}else{$genn_m = "";}

$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '$id_loc' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql58 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim) $genn_m");
while($registro58 = mysql_fetch_row($sql58))
{$num58_m =  $registro58[0];}
if($num58_m == 0){$num58_m="";}


// puça, espinhel e tarrafa
if ($gen == "s"){$genn_o = "AND (outr_teci != 'Não' AND outr_teci !=  '')";}else{$genn_o = "";}
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '$id_loc' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql58 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim) $genn_o");
while($registro58 = mysql_fetch_row($sql58))
{$num58_o =  $registro58[0];}
if($num58_o == 0){$num58_o="";}

//Espinhel ------------------------------
if ($gen == "s"){$genn_e = "AND (espi_teci != 'Não' AND espi_teci !=  '')";}else{$genn_e = "";}
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '$id_loc'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql58 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim) $genn_e");
while($registro58 = mysql_fetch_row($sql58))
{$num58_e =  $registro58[0];}
if($num58_e == 0){$num58_e="";}









$nu[$id_loc] = $num58_r + $num58_m + $num58_o + $num58_e;
// if($nu[$id_loc] == 0){$nu[$id_loc] ="";}

if ($nu[$id_loc] > 0){

$color = "#F8F8F8";
}
// if ( $nu[$id_loc] > 0){

echo "<tr bgcolor=\"".$color."\"><td align=\"left\" >".$loc1."</td><td>".$nu[$id_loc]."</td></tr>";


$hh = $loc;
//$pp++;

// echo "$hh</br>";

$ff ="";
if ($nu[$id_loc] < 1)
{
 $ff = " AND loc_codigo != '$hh' ";
}
$gg .= $ff;


// }
$ss +=   $nu[$id_loc]   ;
}



$sql1 = mysql_query("SELECT * FROM tb_local WHERE loc_aparelho = 'Arrasto' ORDER BY loc_ordem ASC");
while($registro1 = mysql_fetch_row($sql1))
{

$id_loc =  $registro1[0];
$loc =  $registro1[2];
$loc1 =  $registro1[1];
$color = "";

//Arrasto ------------------------------
if ($gen == "s"){$genn_a = "AND (arr_teci != 'Não' AND arr_teci !=  '')";}else{$genn_a = "";}
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '$id_loc'  $excu3 ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql58 = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $genn_a");
while($registro58 = mysql_fetch_row($sql58))
{$num58_a =  $registro58[0];}
if($num58_a == 0){$num58_a="0";}

if ($num58_a > 0){

$color = "#F8F8F8";
}
echo "<tr bgcolor=\"".$color."\"><td align=\"left\" >".$loc1."</td><td>".$num58_a."</td></tr>";
$num58_a_t +=  $num58_a;

$hh1 = $id_loc;
$ff ="";
if ($num58_a < 1)
{
 $ff = " AND id_tab_local != '$hh1' ";
}
$gg1 .= $ff;



}
$ss_t = $ss +  $num58_a_t;
//  echo "$gg1";



?>

</table>

<?php
  }
?>



<!-- MAPA -->

