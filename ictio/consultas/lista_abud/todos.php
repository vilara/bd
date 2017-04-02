<?php

if ($aparelho == "Todos")
{
// Início dos resultados para Redinha --------------------------------------------------------------------------
?>
<tr class="titulo">

<td colspan="80">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>
<td title="Cautário">CAU</td><!--22-->
<td title="Sotério">SOT</td><!--21-->
<td title="Pacaás">PAC</td><!--20-->
<td title="Arara">ARA</td><!--11-->
<td title="Mutumparaná">MUT</td><!--10-->
<td title="São Lourenço">SLO</td><!--7-->
<td title="Karipunas (Montante)">KAM</td><!--9-->
<td title="Karipunas (Foz)">KAF</td><!--8-->
<td title="Jaciparaná (Montante)">JAM</td><!--6-->
<td title="Jaciparaná (Foz)">JAF</td><!--5-->
<td title="Jatuarana">JAT</td><!--4-->
<td title="Belmont (Montante)">BEM</td><!--3-->
<td title="Belmont (Foz)">BEF</td><!--2-->
<td title="Cuniã">CUN</td><!--1-->
<td title="Puruzinho">PUR</td><!--14-->
<td title="Machado (Montante)">MAM</td><!--13-->
<td title="Machado (Foz)">MAF</td><!--12-->
<td title="Manicoré">MAN</td><!--15-->
<td title="Aripuanã">ARI</td><!--16-->
<td title="Lago Sampaio">NON</td><!--17-->

<td title="Lago Sampaio">JFF</td><!--33-->

<td title="Abuna">ABU</td><!--35-->
<td title="Simao Grande">SIM</td><!--36-->
<td title="Igarape da cachoeirinha">BCA</td><!--41-->

<td title="Abuna">TIL</td><!--35-->
<td title="Simao Grande">SAT</td><!--36-->
<td title="Igarape da cachoeirinha">ESE</td><!--41-->

<td title="Abuna">CAR</td><!--35-->
<td title="Simao Grande">IGU</td><!--36-->
<td title="Igarape da cachoeirinha">IMT</td><!--41-->

<td title="Abuna">CAB</td><!--35-->
<td title="Simao Grande">CRB</td><!--36-->
<td title="Igarape da cachoeirinha">MEQ</td><!--41-->

<td title="Igarape da cachoeirinha">BRA</td><!--41-->

<td title="Abuna">MIG</td><!--35-->
<td title="Simao Grande">OUR</td><!--36-->
<td title="Igarape da cachoeirinha">BAT</td><!--41-->

<td title="Abuna">IGP</td><!--35-->
<td title="Simao Grande">RIR</td><!--36-->
<td title="Igarape da cachoeirinha">LGA</td><!--41-->

<td title="Abuna">IGB</td><!--35-->
<td title="Simao Grande">IGV</td><!--36-->
<td title="Igarape da cachoeirinha">IGC</td><!--41-->
<td title="Rio Guapore">GUA</td><!--41-->
<td title="Rio Madeira CORR 66">COR</td><!--41-->
<td title="Cachoeira Guajara">CGM</td><!--36-->
<td title="Cachoeira do Iata">CIT</td><!--35-->
<td title="Cachoeira da Laje">CML</td><!--41-->
<td title="Cachoeira Madeira">CMD</td><!--36-->
<td title="Cachoeira Paredao">CPR</td><!--35-->
<td title="Cachoeira Pederneira">CPD</td><!--41-->
<td title="Cachoeira Morrinhos">CMR</td><!--36-->
<td title="Cachoeira Pedral Bejarana">CPB</td><!--35-->
<td title="Cachoeira Teotonio">TEO</td><!--41-->
<td title="Cachoeira do Macaco">CMC</td><!--36-->

<td title="Cachoeira Santo Antonio">STO</td><!--35-->

<td>Total Capturado</td>
<!--<td>Cp Max</td>
<td>Cp Min</td>-->
<!--<td>Código</td>
<td>Cp Base</td>-->

<!--<td>Total de espécies capturadas</td>    -->
</tr>
<?php
$l1 = 0;
$n = 1;
//echo "$excu1<br><br><br><br><br><br>$excu2";
// Listagem das espécies capturadas
$sql = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie > '0' GROUP BY esp_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
   $lista = new ManipulateData1();
    $NrEsp = $lista->NrEspecie($esp);
    $NomeEsp = $lista->NomeEspecie($esp);
    $NomeOrd = $lista->NomeOrd($esp);
    $NomeFam = $lista->NomeFam($esp);





/*--------NÚMERO DE INDIVÍDUOS TOTAIS */

// redinha
//echo "$exc--";



$red_lim = " ";
//echo "$excu1";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local != '0'  $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
} //  echo "----$lim";
$sqlx = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1_r =  $registrox[0];
}
//  echo "$excu2 ----";

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira'  AND lim_local != '0'  $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
} //  echo "<br><br><br><br><br><br>$lim";

$sqlx = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1_m =  $registrox[0];
}

// puça, tarrafa, manual, caniço

$outr_lim = " ";

// echo "--$excu2";

$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel' AND lim_local != '0'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}  //  echo "<br><br><br><br><br><br>---$lim";
// echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br> $lim";
$sqlx = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1_o =  $registrox[0];
}

// Espinhel

$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local != '0'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}  //  echo "<br><br><br><br><br><br>---$lim";
// echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br> $lim";
$sqlx = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1_e =  $registrox[0];
}

$tot1[$n] = $tot1_m + $tot1_r + $tot1_o + $tot1_e;









/*--------Cautário */
// redinha
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Redinha' AND lim_local = '22' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql1 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1))
{$num1_r =  $registro1[0];}
if($num1_r == 0){$num1_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '22' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql1 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1))
{$num1_m =  $registro1[0];}
if($num1_m == 0){$num1_m="";}

// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '22' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1))
{$num1_o =  $registro1[0];}
if($num1_o == 0){$num1_o="";}


//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '22'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql1 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1))
{$num1_e =  $registro1[0];}
if($num1_e == 0){$num1_e="";}

$num1 = $num1_r + $num1_m + $num1_o + $num1_e ;
if($num1 == 0){$num1 ="";}






















/*--------Sotério */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '21' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql2 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro2 = mysql_fetch_row($sql2))
{$num2_r =  $registro2[0];}
if($num2_r == 0){$num2_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '21' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql2 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro2 = mysql_fetch_row($sql2))
{$num2_m =  $registro2[0];}
if($num2_m == 0){$num2_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel' AND lim_local = '21' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql2 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro2 = mysql_fetch_row($sql2))
{$num2_o =  $registro2[0];}
if($num2_o == 0){$num2_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '21'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql2 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro2 = mysql_fetch_row($sql2))
{$num2_e =  $registro2[0];}
if($num2_e == 0){$num2_e="";}

$num2 = $num2_r + $num2_m + $num2_o + $num2_e ;
if($num2 == 0){$num2 ="";}



/*--------Pacás */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '20' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
// echo "$lim ------";
$sql3 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro3 = mysql_fetch_row($sql3))
{$num3_r =  $registro3[0];}
if($num3_r == 0){$num3_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '20' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql3 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro3 = mysql_fetch_row($sql3))
{$num3_m =  $registro3[0];}
if($num3_m == 0){$num3_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '20' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql3 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro3 = mysql_fetch_row($sql3))
{$num3_o =  $registro3[0];}
if($num3_o == 0){$num3_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '20'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql3 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro3 = mysql_fetch_row($sql3))
{$num3_e =  $registro3[0];}
if($num3_e == 0){$num3_e="";}

$num3 = $num3_r + $num3_m + $num3_o + $num3_e ;
if($num3 == 0){$num3 ="";}



/*--------Arara */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '11' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql4 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro4 = mysql_fetch_row($sql4))
{$num4_r =  $registro4[0];}
if($num4_r == 0){$num4_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '11' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql4 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro4 = mysql_fetch_row($sql4))
{$num4_m =  $registro4[0];}
if($num4_m == 0){$num4_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '11' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql4 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro4 = mysql_fetch_row($sql4))
{$num4_o =  $registro4[0];}
if($num4_o == 0){$num4_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '11'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql4 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro4 = mysql_fetch_row($sql4))
{$num4_e =  $registro4[0];}
if($num4_e == 0){$num4_e="";}

$num4 = $num4_r + $num4_m + $num4_o + $num4_e ;
if($num4 == 0){$num4 ="";}



/*--------Mutumparaná */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '10' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql5 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro5 = mysql_fetch_row($sql5))
{$num5_r =  $registro5[0];}
if($num5_r == 0){$num5_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '10' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql5 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro5 = mysql_fetch_row($sql5))
{$num5_m =  $registro5[0];}
if($num5_m == 0){$num5_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '10' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql5 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro5 = mysql_fetch_row($sql5))
{$num5_o =  $registro5[0];}
if($num5_o == 0){$num5_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '10'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql5 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro5 = mysql_fetch_row($sql5))
{$num5_e =  $registro5[0];}
if($num5_e == 0){$num5_e="";}

$num5 = $num5_r + $num5_m + $num5_o + $num5_e ;
if($num5 == 0){$num5 ="";}



/*--------São Lourenço */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '7' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql6 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro6 = mysql_fetch_row($sql6))
{$num6_r =  $registro6[0];}
if($num6_r == 0){$num6_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '7' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql6 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro6 = mysql_fetch_row($sql6))
{$num6_m =  $registro6[0];}
if($num6_m == 0){$num6_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '7' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql6 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro6 = mysql_fetch_row($sql6))
{$num6_o =  $registro6[0];}
if($num6_o == 0){$num6_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '7'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql6 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro6 = mysql_fetch_row($sql6))
{$num6_e =  $registro6[0];}
if($num6_e == 0){$num6_e="";}

$num6 = $num6_r + $num6_m + $num6_o + $num6_e ;
if($num6 == 0){$num6 ="";}


/*--------Karipunas montante */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '9' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql7 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro7 = mysql_fetch_row($sql7))
{$num7_r =  $registro7[0];}
if($num7_r == 0){$num7_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '9' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql7 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro7 = mysql_fetch_row($sql7))
{$num7_m =  $registro7[0];}
if($num7_m == 0){$num7_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '9' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql7 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro7 = mysql_fetch_row($sql7))
{$num7_o =  $registro7[0];}
if($num7_o == 0){$num7_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '9'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql7 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro7 = mysql_fetch_row($sql7))
{$num7_e =  $registro7[0];}
if($num7_e == 0){$num7_e="";}

$num7 = $num7_r + $num7_m + $num7_o + $num7_e ;
if($num7 == 0){$num7 ="";}



/*--------Karipunas foz */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '8' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql8 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro8 = mysql_fetch_row($sql8))
{$num8_r =  $registro8[0];}
if($num8_r == 0){$num8_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '8' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql8 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro8 = mysql_fetch_row($sql8))
{$num8_m =  $registro8[0];}
if($num8_m == 0){$num8_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '8' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql8 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro8 = mysql_fetch_row($sql8))
{$num8_o =  $registro8[0];}
if($num8_o == 0){$num8_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '8'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql8 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro8 = mysql_fetch_row($sql8))
{$num8_e =  $registro8[0];}
if($num8_e == 0){$num8_e="";}

$num8 = $num8_r + $num8_m + $num8_o + $num8_e ;
if($num8 == 0){$num8 ="";}



/*--------Jaciparana montante */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '6' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql9 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro9 = mysql_fetch_row($sql9))
{$num9_r =  $registro9[0];}
if($num9_r == 0){$num9_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '6' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql9 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro9 = mysql_fetch_row($sql9))
{$num9_m =  $registro9[0];}
if($num9_m == 0){$num9_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '6' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql9 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro9 = mysql_fetch_row($sql9))
{$num9_o =  $registro9[0];}
if($num9_o == 0){$num9_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '6'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql9 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro9 = mysql_fetch_row($sql9))
{$num9_e =  $registro9[0];}
if($num9_e == 0){$num9_e="";}

$num9 = $num9_r + $num9_m + $num9_o + $num9_e ;
if($num9 == 0){$num9 ="";}



/*--------Jaciparana foz */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '5' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql10 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro10 = mysql_fetch_row($sql10))
{$num10_r =  $registro10[0];}
if($num10_r == 0){$num10_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '5' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql10 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro10 = mysql_fetch_row($sql10))
{$num10_m =  $registro10[0];}
if($num10_m == 0){$num10_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '5' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql10 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro10 = mysql_fetch_row($sql10))
{$num10_o =  $registro10[0];}
if($num10_o == 0){$num10_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '5'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql10 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro10 = mysql_fetch_row($sql10))
{$num10_e =  $registro10[0];}
if($num10_e == 0){$num10_e="";}

$num10 = $num10_r + $num10_m + $num10_o + $num10_e ;
if($num10 == 0){$num10 ="";}



/*--------Jatuarana */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '4' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql11 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro11 = mysql_fetch_row($sql11))
{$num11_r =  $registro11[0];}
if($num11_r == 0){$num11_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '4' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql11 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro11 = mysql_fetch_row($sql11))
{$num11_m =  $registro11[0];}
if($num11_m == 0){$num11_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '4' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql11 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro11 = mysql_fetch_row($sql11))
{$num11_o =  $registro11[0];}
if($num11_o == 0){$num11_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '4'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql11 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro11 = mysql_fetch_row($sql11))
{$num11_e =  $registro11[0];}
if($num11_e == 0){$num11_e="";}

$num11 = $num11_r + $num11_m + $num11_o + $num11_e ;
if($num11 == 0){$num11 ="";}



/*--------Belmont montante */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '3' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql12 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro12 = mysql_fetch_row($sql12))
{$num12_r =  $registro12[0];}
if($num12_r == 0){$num12_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '3' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql12 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro12 = mysql_fetch_row($sql12))
{$num12_m =  $registro12[0];}
if($num12_m == 0){$num12_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '3' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql12 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro12 = mysql_fetch_row($sql12))
{$num12_o =  $registro12[0];}
if($num12_o == 0){$num12_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '3'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql12 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro12 = mysql_fetch_row($sql12))
{$num12_e =  $registro12[0];}
if($num12_e == 0){$num12_e="";}

$num12 = $num12_r + $num12_m + $num12_o + $num12_e ;
if($num12 == 0){$num12 ="";}



/*--------Belmont foz */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '2' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql13 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro13 = mysql_fetch_row($sql13))
{$num13_r =  $registro13[0];}
if($num13_r == 0){$num13_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '2' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql13 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro13 = mysql_fetch_row($sql13))
{$num13_m =  $registro13[0];}
if($num13_m == 0){$num13_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '2' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql13 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro13 = mysql_fetch_row($sql13))
{$num13_o =  $registro13[0];}
if($num13_o == 0){$num13_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '2'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql13 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro13 = mysql_fetch_row($sql13))
{$num13_e =  $registro13[0];}
if($num13_e == 0){$num13_e="";}

$num13 = $num13_r + $num13_m + $num13_o + $num13_e ;
if($num13 == 0){$num13 ="";}



/*--------Cuniã */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '1' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql14 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro14 = mysql_fetch_row($sql14))
{$num14_r =  $registro14[0];}
if($num14_r == 0){$num14_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '1' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql14 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro14 = mysql_fetch_row($sql14))
{$num14_m =  $registro14[0];}
if($num14_m == 0){$num14_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '1' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql14 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro14 = mysql_fetch_row($sql14))
{$num14_o =  $registro14[0];}
if($num14_o == 0){$num14_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '1'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql14 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro14 = mysql_fetch_row($sql14))
{$num14_e =  $registro14[0];}
if($num14_e == 0){$num14_e="";}

$num14 = $num14_r + $num14_m + $num14_o + $num14_e ;
if($num14 == 0){$num14 ="";}



/*--------Puruzinho */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '14' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql15 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro15 = mysql_fetch_row($sql15))
{$num15_r =  $registro15[0];}
if($num15_r == 0){$num15_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '14' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql15 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro15 = mysql_fetch_row($sql15))
{$num15_m =  $registro15[0];}
if($num15_m == 0){$num15_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '14' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql15 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro15 = mysql_fetch_row($sql15))
{$num15_o =  $registro15[0];}
if($num15_o == 0){$num15_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '14'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql15 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro15 = mysql_fetch_row($sql15))
{$num15_e =  $registro15[0];}
if($num15_e == 0){$num15_e="";}

$num15 = $num15_r + $num15_m + $num15_o + $num15_e ;
if($num15 == 0){$num15 ="";}



/*--------Machado montante */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '13' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql16 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro16 = mysql_fetch_row($sql16))
{$num16_r =  $registro16[0];}
if($num16_r == 0){$num16_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '13' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql16 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro16 = mysql_fetch_row($sql16))
{$num16_m =  $registro16[0];}
if($num16_m == 0){$num16_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '13' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql16 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro16 = mysql_fetch_row($sql16))
{$num16_o =  $registro16[0];}
if($num16_o == 0){$num16_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '13'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql16 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro16 = mysql_fetch_row($sql16))
{$num16_e =  $registro16[0];}
if($num16_e == 0){$num16_e="";}

$num16 = $num16_r + $num16_m + $num16_o + $num16_e ;
if($num16 == 0){$num16 ="";}



/*--------Machado jusante */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '12' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql17 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro17 = mysql_fetch_row($sql17))
{$num17_r =  $registro17[0];}
if($num17_r == 0){$num17_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '12' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql17 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro17 = mysql_fetch_row($sql17))
{$num17_m =  $registro17[0];}
if($num17_m == 0){$num17_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '12' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql17 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro17 = mysql_fetch_row($sql17))
{$num17_o =  $registro17[0];}
if($num17_o == 0){$num17_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '12'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql17 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro17 = mysql_fetch_row($sql17))
{$num17_e =  $registro17[0];}
if($num17_e == 0){$num17_e="";}

$num17 = $num17_r + $num17_m + $num17_o + $num17_e ;
if($num17 == 0){$num17 ="";}



/*--------Manicoré */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '15' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql18 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro18 = mysql_fetch_row($sql18))
{$num18_r =  $registro18[0];}
if($num18_r == 0){$num18_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '15' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql18 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro18 = mysql_fetch_row($sql18))
{$num18_m =  $registro18[0];}
if($num18_m == 0){$num18_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '15' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql18 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro18 = mysql_fetch_row($sql18))
{$num18_o =  $registro18[0];}
if($num18_o == 0){$num18_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '15'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql18 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro18 = mysql_fetch_row($sql18))
{$num18_e =  $registro18[0];}
if($num18_e == 0){$num18_e="";}

$num18 = $num18_r + $num18_m + $num18_o + $num18_e ;
if($num18 == 0){$num18 ="";}



/*--------Aripuanã */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '16' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql19 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro19 = mysql_fetch_row($sql19))
{$num19_r =  $registro19[0];}
if($num19_r == 0){$num19_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '16' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql19 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro19 = mysql_fetch_row($sql19))
{$num19_m =  $registro19[0];}
if($num19_m == 0){$num19_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '16' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql19 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro19 = mysql_fetch_row($sql19))
{$num19_o =  $registro19[0];}
if($num19_o == 0){$num19_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '16'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql19 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro19 = mysql_fetch_row($sql19))
{$num19_e =  $registro19[0];}
if($num19_e == 0){$num19_e="";}

$num19 = $num19_r + $num19_m + $num19_o + $num19_e ;
if($num19 == 0){$num19 ="";}



/*--------Lago Sampaio */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '17' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql20 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro20 = mysql_fetch_row($sql20))
{$num20_r =  $registro20[0];}
if($num20_r == 0){$num20_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '17' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql20 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro20 = mysql_fetch_row($sql20))
{$num20_m =  $registro20[0];}
if($num20_m == 0){$num20_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '17' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql20 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro20 = mysql_fetch_row($sql20))
{$num20_o =  $registro20[0];}
if($num20_o == 0){$num20_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '17'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql20 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro20 = mysql_fetch_row($sql20))
{$num20_e =  $registro20[0];}
if($num20_e == 0){$num20_e="";}

$num20 = $num20_r + $num20_m + $num20_o + $num20_e ;
if($num20 == 0){$num20 ="";}








/*--------Jaci Parana Foz_Foz */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '34' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql22 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro22 = mysql_fetch_row($sql22))
{$num22_r =  $registro22[0];}
if($num22_r == 0){$num22_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '34' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql22 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro22 = mysql_fetch_row($sql22))
{$num22_m =  $registro22[0];}
if($num22_m == 0){$num22_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '34' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql22 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro22 = mysql_fetch_row($sql22))
{$num22_o =  $registro22[0];}
if($num22_o == 0){$num22_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '34'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql22 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro22 = mysql_fetch_row($sql22))
{$num22_e =  $registro22[0];}
if($num22_e == 0){$num22_e="";}

$num22 = $num22_r + $num22_m + $num22_o + $num22_e ;
if($num22 == 0){$num22 ="";}



/*--------Fortaleza do Abuna */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '35' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql23 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro23 = mysql_fetch_row($sql23))
{$num23_r =  $registro23[0];}
if($num23_r == 0){$num23_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '35' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql23 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro23 = mysql_fetch_row($sql23))
{$num23_m =  $registro23[0];}
if($num23_m == 0){$num23_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '35' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql23 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro23 = mysql_fetch_row($sql23))
{$num23_o =  $registro23[0];}
if($num23_o == 0){$num23_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '35'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql23 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro23 = mysql_fetch_row($sql23))
{$num23_e =  $registro23[0];}
if($num23_e == 0){$num23_e="";}

$num23 = $num23_r + $num23_m + $num23_o + $num23_e ;
if($num23 == 0){$num23 ="";}



/*--------Simao Grande */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '36' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql24 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro24 = mysql_fetch_row($sql24))
{$num24_r =  $registro24[0];}
if($num24_r == 0){$num24_r=" ";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '36' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql24 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro24 = mysql_fetch_row($sql24))
{$num24_m =  $registro24[0];}
if($num24_m == 0){$num24_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '36' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql24 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro24 = mysql_fetch_row($sql24))
{$num24_o =  $registro24[0];}
if($num24_o == 0){$num24_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '36'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql24 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro24 = mysql_fetch_row($sql24))
{$num24_e =  $registro24[0];}
if($num24_e == 0){$num24_e="";}

$num24 = $num24_r + $num24_m + $num24_o + $num24_e ;
if($num24 == 0){$num24 ="";}
/*

/*--------Igarape cachoeirinha */
$red_lim = " "; $ee = 1;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '41' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql25 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro25 = mysql_fetch_row($sql25))
{$num25_r =  $registro25[0];}
if($num25_r == 0){$num25_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '41' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql25 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro25 = mysql_fetch_row($sql25))
{$num25_m =  $registro25[0];}
if($num25_m == 0){$num25_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 2;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '41' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql25 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro25 = mysql_fetch_row($sql25))
{$num25_o =  $registro25[0];}
if($num25_o == 0){$num25_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '41'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql25 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro25 = mysql_fetch_row($sql25))
{$num25_e =  $registro25[0];}
if($num25_e == 0){$num25_e="";}

$num25 = $num25_r + $num25_m + $num25_o + $num25_e ;
if($num25 == 0){$num25 ="";}




/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '42' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql26 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro26 = mysql_fetch_row($sql26))
{$num26_r =  $registro26[0];}
if($num26_r == 0){$num26_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '42' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql26 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro26 = mysql_fetch_row($sql26))
{$num26_m =  $registro26[0];}
if($num26_m == 0){$num26_m="";}


// puça, espinhel e tarrafa

$outr_lim = " "; $ee = 26;
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '42' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql26 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro26 = mysql_fetch_row($sql26))
{$num26_o =  $registro26[0];}
if($num26_o == 0){$num26_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '42'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql26 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro26 = mysql_fetch_row($sql26))
{$num26_e =  $registro26[0];}
if($num26_e == 0){$num26_e="";}

$num26 = $num26_r + $num26_m + $num26_o + $num26_e ;
if($num26 == 0){$num26 ="";}



/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '43' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql27 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro27 = mysql_fetch_row($sql27))
{$num27_r =  $registro27[0];}
if($num27_r == 0){$num27_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '43' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql27 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro27 = mysql_fetch_row($sql27))
{$num27_m =  $registro27[0];}
if($num27_m == 0){$num27_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '43' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql27 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro27 = mysql_fetch_row($sql27))
{$num27_o =  $registro27[0];}
if($num27_o == 0){$num27_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '43'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql27 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro27 = mysql_fetch_row($sql27))
{$num27_e =  $registro27[0];}
if($num27_e == 0){$num27_e="";}

$num27 = $num27_r + $num27_m + $num27_o + $num27_e ;
if($num27 == 0){$num27 ="";}

/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '44' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql28 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro28 = mysql_fetch_row($sql28))
{$num28_r =  $registro28[0];}
if($num28_r == 0){$num28_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '44' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql28 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro28 = mysql_fetch_row($sql28))
{$num28_m =  $registro28[0];}
if($num28_m == 0){$num28_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '44' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql28 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro28 = mysql_fetch_row($sql28))
{$num28_o =  $registro28[0];}
if($num28_o == 0){$num28_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '44'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql28 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro28 = mysql_fetch_row($sql28))
{$num28_e =  $registro28[0];}
if($num28_e == 0){$num28_e="";}

$num28 = $num28_r + $num28_m + $num28_o + $num28_e ;
if($num28 == 0){$num28 ="";}





 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '45' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql29 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro29 = mysql_fetch_row($sql29))
{$num29_r =  $registro29[0];}
if($num29_r == 0){$num29_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '45' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql29 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro29 = mysql_fetch_row($sql29))
{$num29_m =  $registro29[0];}
if($num29_m == 0){$num29_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '45' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql29 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro29 = mysql_fetch_row($sql29))
{$num29_o =  $registro29[0];}
if($num29_o == 0){$num29_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '45'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql29 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro29 = mysql_fetch_row($sql29))
{$num29_e =  $registro29[0];}
if($num29_e == 0){$num29_e="";}

$num29 = $num29_r + $num29_m + $num29_o + $num29_e ;
if($num29 == 0){$num29 ="";}




   /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '46' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql30 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro30 = mysql_fetch_row($sql30))
{$num30_r =  $registro30[0];}
if($num30_r == 0){$num30_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '46' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql30 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro30 = mysql_fetch_row($sql30))
{$num30_m =  $registro30[0];}
if($num30_m == 0){$num30_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '46' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql30 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro30 = mysql_fetch_row($sql30))
{$num30_o =  $registro30[0];}
if($num30_o == 0){$num30_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '46'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql30 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro30 = mysql_fetch_row($sql30))
{$num30_e =  $registro30[0];}
if($num30_e == 0){$num30_e="";}

$num30 = $num30_r + $num30_m + $num30_o + $num30_e ;
if($num30 == 0){$num30 ="";}



/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '47' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql31 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro31 = mysql_fetch_row($sql31))
{$num31_r =  $registro31[0];}
if($num31_r == 0){$num31_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '47' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql31 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro31 = mysql_fetch_row($sql31))
{$num31_m =  $registro31[0];}
if($num31_m == 0){$num31_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '47' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql31 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro31 = mysql_fetch_row($sql31))
{$num31_o =  $registro31[0];}
if($num31_o == 0){$num31_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '47'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql31 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro31 = mysql_fetch_row($sql31))
{$num31_e =  $registro31[0];}
if($num31_e == 0){$num31_e="";}

$num31 = $num31_r + $num31_m + $num31_o + $num31_e ;
if($num31 == 0){$num31 ="";}


 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '48' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql32 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro32 = mysql_fetch_row($sql32))
{$num32_r =  $registro32[0];}
if($num32_r == 0){$num32_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '48' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql32 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro32 = mysql_fetch_row($sql32))
{$num32_m =  $registro32[0];}
if($num32_m == 0){$num32_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '48' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql32 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro32 = mysql_fetch_row($sql32))
{$num32_o =  $registro32[0];}
if($num32_o == 0){$num32_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '48'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql32 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro32 = mysql_fetch_row($sql32))
{$num32_e =  $registro32[0];}
if($num32_e == 0){$num32_e="";}

$num32 = $num32_r + $num32_m + $num32_o + $num32_e ;
if($num32 == 0){$num32 ="";}


 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '49' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql33 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro33 = mysql_fetch_row($sql33))
{$num33_r =  $registro33[0];}
if($num33_r == 0){$num33_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '49' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql33 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro33 = mysql_fetch_row($sql33))
{$num33_m =  $registro33[0];}
if($num33_m == 0){$num33_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '49' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql33 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro33 = mysql_fetch_row($sql33))
{$num33_o =  $registro33[0];}
if($num33_o == 0){$num33_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '49'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql33 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro33 = mysql_fetch_row($sql33))
{$num33_e =  $registro33[0];}
if($num33_e == 0){$num33_e="";}

$num33 = $num33_r + $num33_m + $num33_o + $num33_e ;
if($num33 == 0){$num33 ="";}



/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '50' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql34 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro34 = mysql_fetch_row($sql34))
{$num34_r =  $registro34[0];}
if($num34_r == 0){$num34_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '50' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql34 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro34 = mysql_fetch_row($sql34))
{$num34_m =  $registro34[0];}
if($num34_m == 0){$num34_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '50' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql34 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro34 = mysql_fetch_row($sql34))
{$num34_o =  $registro34[0];}
if($num34_o == 0){$num34_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '50'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql34 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro34 = mysql_fetch_row($sql34))
{$num34_e =  $registro34[0];}
if($num34_e == 0){$num34_e="";}

$num34 = $num34_r + $num34_m + $num34_o + $num34_e ;
if($num34 == 0){$num34 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '51' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql35 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro35 = mysql_fetch_row($sql35))
{$num35_r =  $registro35[0];}
if($num35_r == 0){$num35_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '51' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql35 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro35 = mysql_fetch_row($sql35))
{$num35_m =  $registro35[0];}
if($num35_m == 0){$num35_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '51' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql35 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro35 = mysql_fetch_row($sql35))
{$num35_o =  $registro35[0];}
if($num35_o == 0){$num35_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '51'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql35 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro35 = mysql_fetch_row($sql35))
{$num35_e =  $registro35[0];}
if($num35_e == 0){$num35_e="";}

$num35 = $num35_r + $num35_m + $num35_o + $num35_e ;
if($num35 == 0){$num35 ="";}

/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '52' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql36 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro36 = mysql_fetch_row($sql36))
{$num36_r =  $registro36[0];}
if($num36_r == 0){$num36_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '52' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql36 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro36 = mysql_fetch_row($sql36))
{$num36_m =  $registro36[0];}
if($num36_m == 0){$num36_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '52' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql36 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro36 = mysql_fetch_row($sql36))
{$num36_o =  $registro36[0];}
if($num36_o == 0){$num36_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '52'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql36 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro36 = mysql_fetch_row($sql36))
{$num36_e =  $registro36[0];}
if($num36_e == 0){$num36_e="";}

$num36 = $num36_r + $num36_m + $num36_o + $num36_e ;
if($num36 == 0){$num36 ="";}


/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '53' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql37 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro37 = mysql_fetch_row($sql37))
{$num37_r =  $registro37[0];}
if($num37_r == 0){$num37_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '53' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql37 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro37 = mysql_fetch_row($sql37))
{$num37_m =  $registro37[0];}
if($num37_m == 0){$num37_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '53' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql37 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro37 = mysql_fetch_row($sql37))
{$num37_o =  $registro37[0];}
if($num37_o == 0){$num37_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '53'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql37 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro37 = mysql_fetch_row($sql37))
{$num37_e =  $registro37[0];}
if($num37_e == 0){$num37_e="";}

$num37 = $num37_r + $num37_m + $num37_o + $num37_e ;
if($num37 == 0){$num37 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '54' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql38 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro38 = mysql_fetch_row($sql38))
{$num38_r =  $registro38[0];}
if($num38_r == 0){$num38_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '54' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql38 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro38 = mysql_fetch_row($sql38))
{$num38_m =  $registro38[0];}
if($num38_m == 0){$num38_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '54' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql38 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro38 = mysql_fetch_row($sql38))
{$num38_o =  $registro38[0];}
if($num38_o == 0){$num38_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '54'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql38 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro38 = mysql_fetch_row($sql38))
{$num38_e =  $registro38[0];}
if($num38_e == 0){$num38_e="";}

$num38 = $num38_r + $num38_m + $num38_o + $num38_e ;
if($num38 == 0){$num38 ="";}


/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '55' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql39 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro39 = mysql_fetch_row($sql39))
{$num39_r =  $registro39[0];}
if($num39_r == 0){$num39_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '55' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql39 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro39 = mysql_fetch_row($sql39))
{$num39_m =  $registro39[0];}
if($num39_m == 0){$num39_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '55' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql39 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro39 = mysql_fetch_row($sql39))
{$num39_o =  $registro39[0];}
if($num39_o == 0){$num39_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '55'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql39 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro39 = mysql_fetch_row($sql39))
{$num39_e =  $registro39[0];}
if($num39_e == 0){$num39_e="";}

$num39 = $num39_r + $num39_m + $num39_o + $num39_e ;
if($num39 == 0){$num39 ="";}


/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '56' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql40 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro40 = mysql_fetch_row($sql40))
{$num40_r =  $registro40[0];}
if($num40_r == 0){$num40_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '56' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql40 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro40 = mysql_fetch_row($sql40))
{$num40_m =  $registro40[0];}
if($num40_m == 0){$num40_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '56' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql40 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro40 = mysql_fetch_row($sql40))
{$num40_o =  $registro40[0];}
if($num40_o == 0){$num40_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '56'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql40 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro40 = mysql_fetch_row($sql40))
{$num40_e =  $registro40[0];}
if($num40_e == 0){$num40_e="";}

$num40 = $num40_r + $num40_m + $num40_o + $num40_e ;
if($num40 == 0){$num40 ="";}



/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '57' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql41 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro41 = mysql_fetch_row($sql41))
{$num41_r =  $registro41[0];}
if($num41_r == 0){$num41_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '57' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql41 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro41 = mysql_fetch_row($sql41))
{$num41_m =  $registro41[0];}
if($num41_m == 0){$num41_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '57' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql41 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro41 = mysql_fetch_row($sql41))
{$num41_o =  $registro41[0];}
if($num41_o == 0){$num41_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '57'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql41 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro41 = mysql_fetch_row($sql41))
{$num41_e =  $registro41[0];}
if($num41_e == 0){$num41_e="";}

$num41 = $num41_r + $num41_m + $num41_o + $num41_e ;
if($num41 == 0){$num41 ="";}


/*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '58' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql42 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro42 = mysql_fetch_row($sql42))
{$num42_r =  $registro42[0];}
if($num42_r == 0){$num42_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '58' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql42 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro42 = mysql_fetch_row($sql42))
{$num42_m =  $registro42[0];}
if($num42_m == 0){$num42_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '58' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql42 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro42 = mysql_fetch_row($sql42))
{$num42_o =  $registro42[0];}
if($num42_o == 0){$num42_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '58'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql42 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro42 = mysql_fetch_row($sql42))
{$num42_e =  $registro42[0];}
if($num42_e == 0){$num42_e="";}

$num42 = $num42_r + $num42_m + $num42_o + $num42_e ;
if($num42 == 0){$num42 ="";}

  /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '59' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql43 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro43 = mysql_fetch_row($sql43))
{$num43_r =  $registro43[0];}
if($num43_r == 0){$num43_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '59' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql43 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro43 = mysql_fetch_row($sql43))
{$num43_m =  $registro43[0];}
if($num43_m == 0){$num43_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '59' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql43 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro43 = mysql_fetch_row($sql43))
{$num43_o =  $registro43[0];}
if($num43_o == 0){$num43_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '59'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql43 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro43 = mysql_fetch_row($sql43))
{$num43_e =  $registro43[0];}
if($num43_e == 0){$num43_e="";}

$num43 = $num43_r + $num43_m + $num43_o + $num43_e ;
if($num43 == 0){$num43 ="";}


 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '60' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql44 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro44 = mysql_fetch_row($sql44))
{$num44_r =  $registro44[0];}
if($num44_r == 0){$num44_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '60' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql44 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro44 = mysql_fetch_row($sql44))
{$num44_m =  $registro44[0];}
if($num44_m == 0){$num44_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '60' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql44 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro44 = mysql_fetch_row($sql44))
{$num44_o =  $registro44[0];}
if($num44_o == 0){$num44_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '60'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql44 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro44 = mysql_fetch_row($sql44))
{$num44_e =  $registro44[0];}
if($num44_e == 0){$num44_e="";}

$num44 = $num44_r + $num44_m + $num44_o + $num44_e ;
if($num44 == 0){$num44 ="";}




 /*--------CORREDEIRAS   CORREDEIRAS  CORREDEIRAS  CORREDEIRAS  CORREDEIRAS  CORREDEIRAS  CORREDEIRAS                                             */
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '61' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql45 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro45 = mysql_fetch_row($sql45))
{$num45_r =  $registro45[0];}
if($num45_r == 0){$num45_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '61' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql45 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro45 = mysql_fetch_row($sql45))
{$num45_m =  $registro45[0];}
if($num45_m == 0){$num45_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '61' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql45 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro45 = mysql_fetch_row($sql45))
{$num45_o =  $registro45[0];}
if($num45_o == 0){$num45_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '61'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql45 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro45 = mysql_fetch_row($sql45))
{$num45_e =  $registro45[0];}
if($num45_e == 0){$num45_e="";}

$num45 = $num45_r + $num45_m + $num45_o + $num45_e ;
if($num45 == 0){$num45 ="";}






 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '62' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql46 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro46 = mysql_fetch_row($sql46))
{$num46_r =  $registro46[0];}
if($num46_r == 0){$num46_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '62' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql46 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro46 = mysql_fetch_row($sql46))
{$num46_m =  $registro46[0];}
if($num46_m == 0){$num46_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '62' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql46 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro46 = mysql_fetch_row($sql46))
{$num46_o =  $registro46[0];}
if($num46_o == 0){$num46_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '62'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql46 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro46 = mysql_fetch_row($sql46))
{$num46_e =  $registro46[0];}
if($num46_e == 0){$num46_e="";}

$num46 = $num46_r + $num46_m + $num46_o + $num46_e ;
if($num46 == 0){$num46 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '63' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql47 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro47 = mysql_fetch_row($sql47))
{$num47_r =  $registro47[0];}
if($num47_r == 0){$num47_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '63' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql47 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro47 = mysql_fetch_row($sql47))
{$num47_m =  $registro47[0];}
if($num47_m == 0){$num47_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '63' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql47 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro47 = mysql_fetch_row($sql47))
{$num47_o =  $registro47[0];}
if($num47_o == 0){$num47_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '63'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql47 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro47 = mysql_fetch_row($sql47))
{$num47_e =  $registro47[0];}
if($num47_e == 0){$num47_e="";}

$num47 = $num47_r + $num47_m + $num47_o + $num47_e ;
if($num47 == 0){$num47 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '64' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql48 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro48 = mysql_fetch_row($sql48))
{$num48_r =  $registro48[0];}
if($num48_r == 0){$num48_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '64' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql48 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro48 = mysql_fetch_row($sql48))
{$num48_m =  $registro48[0];}
if($num48_m == 0){$num48_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '64' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql48 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro48 = mysql_fetch_row($sql48))
{$num48_o =  $registro48[0];}
if($num48_o == 0){$num48_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '64'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql48 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro48 = mysql_fetch_row($sql48))
{$num48_e =  $registro48[0];}
if($num48_e == 0){$num48_e="";}

$num48 = $num48_r + $num48_m + $num48_o + $num48_e ;
if($num48 == 0){$num48 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '65' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql49 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro49 = mysql_fetch_row($sql49))
{$num49_r =  $registro49[0];}
if($num49_r == 0){$num49_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '65' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql49 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro49 = mysql_fetch_row($sql49))
{$num49_m =  $registro49[0];}
if($num49_m == 0){$num49_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '65' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql49 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro49 = mysql_fetch_row($sql49))
{$num49_o =  $registro49[0];}
if($num49_o == 0){$num49_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '65'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql49 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro49 = mysql_fetch_row($sql49))
{$num49_e =  $registro49[0];}
if($num49_e == 0){$num49_e="";}

$num49 = $num49_r + $num49_m + $num49_o + $num49_e ;
if($num49 == 0){$num49 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '66' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql50 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro50 = mysql_fetch_row($sql50))
{$num50_r =  $registro50[0];}
if($num50_r == 0){$num50_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '66' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql50 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro50 = mysql_fetch_row($sql50))
{$num50_m =  $registro50[0];}
if($num50_m == 0){$num50_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '66' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql50 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro50 = mysql_fetch_row($sql50))
{$num50_o =  $registro50[0];}
if($num50_o == 0){$num50_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '66'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql50 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro50 = mysql_fetch_row($sql50))
{$num50_e =  $registro50[0];}
if($num50_e == 0){$num50_e="";}

$num50 = $num50_r + $num50_m + $num50_o + $num50_e ;
if($num50 == 0){$num50 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '67' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql51 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro51 = mysql_fetch_row($sql51))
{$num51_r =  $registro51[0];}
if($num51_r == 0){$num51_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '67' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql51 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro51 = mysql_fetch_row($sql51))
{$num51_m =  $registro51[0];}
if($num51_m == 0){$num51_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '67' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql51 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro51 = mysql_fetch_row($sql51))
{$num51_o =  $registro51[0];}
if($num51_o == 0){$num51_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '67'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql51 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro51 = mysql_fetch_row($sql51))
{$num51_e =  $registro51[0];}
if($num51_e == 0){$num51_e="";}

$num51 = $num51_r + $num51_m + $num51_o + $num51_e ;
if($num51 == 0){$num51 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '68' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql52 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro52 = mysql_fetch_row($sql52))
{$num52_r =  $registro52[0];}
if($num52_r == 0){$num52_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '68' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql52 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro52 = mysql_fetch_row($sql52))
{$num52_m =  $registro52[0];}
if($num52_m == 0){$num52_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '68' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql52 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro52 = mysql_fetch_row($sql52))
{$num52_o =  $registro52[0];}
if($num52_o == 0){$num52_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '68'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql52 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro52 = mysql_fetch_row($sql52))
{$num52_e =  $registro52[0];}
if($num52_e == 0){$num52_e="";}

$num52 = $num52_r + $num52_m + $num52_o + $num52_e ;
if($num52 == 0){$num52 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '69' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql53 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro53 = mysql_fetch_row($sql53))
{$num53_r =  $registro53[0];}
if($num53_r == 0){$num53_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '69' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql53 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro53 = mysql_fetch_row($sql53))
{$num53_m =  $registro53[0];}
if($num53_m == 0){$num53_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '69' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql53 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro53 = mysql_fetch_row($sql53))
{$num53_o =  $registro53[0];}
if($num53_o == 0){$num53_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '69'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql53 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro53 = mysql_fetch_row($sql53))
{$num53_e =  $registro53[0];}
if($num53_e == 0){$num53_e="";}

$num53 = $num53_r + $num53_m + $num53_o + $num53_e ;
if($num53 == 0){$num53 ="";}


 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '70' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql54 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro54 = mysql_fetch_row($sql54))
{$num54_r =  $registro54[0];}
if($num54_r == 0){$num54_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '70' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql54 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro54 = mysql_fetch_row($sql54))
{$num54_m =  $registro54[0];}
if($num54_m == 0){$num54_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '70' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql54 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro54 = mysql_fetch_row($sql54))
{$num54_o =  $registro54[0];}
if($num54_o == 0){$num54_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '70'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql54 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro54 = mysql_fetch_row($sql54))
{$num54_e =  $registro54[0];}
if($num54_e == 0){$num54_e="";}

$num54 = $num54_r + $num54_m + $num54_o + $num54_e ;
if($num54 == 0){$num54 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '71' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql55 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro55 = mysql_fetch_row($sql55))
{$num55_r =  $registro55[0];}
if($num55_r == 0){$num55_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '71' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql55 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro55 = mysql_fetch_row($sql55))
{$num55_m =  $registro55[0];}
if($num55_m == 0){$num55_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '71' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql55 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro55 = mysql_fetch_row($sql55))
{$num55_o =  $registro55[0];}
if($num55_o == 0){$num55_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '71'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql55 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro55 = mysql_fetch_row($sql55))
{$num55_e =  $registro55[0];}
if($num55_e == 0){$num55_e="";}

$num55 = $num55_r + $num55_m + $num55_o + $num55_e ;
if($num55 == 0){$num55 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '72' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql56 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro56 = mysql_fetch_row($sql56))
{$num56_r =  $registro56[0];}
if($num56_r == 0){$num56_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '72' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql56 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro56 = mysql_fetch_row($sql56))
{$num56_m =  $registro56[0];}
if($num56_m == 0){$num56_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '72' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql56 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro56 = mysql_fetch_row($sql56))
{$num56_o =  $registro56[0];}
if($num56_o == 0){$num56_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '72'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql56 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro56 = mysql_fetch_row($sql56))
{$num56_e =  $registro56[0];}
if($num56_e == 0){$num56_e="";}

$num56 = $num56_r + $num56_m + $num56_o + $num56_e ;
if($num56 == 0){$num56 ="";}



 /*--------*/
$red_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'redinha' AND lim_local = '73' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$red_lim =  $registroa[0];
$lim .= ' OR '.'red_lim = '.$red_lim;
}
$sql57 = mysql_query("SELECT sum(red_qtde) FROM tb_redinha_biotico WHERE red_especie = '$esp' AND (red_lim = '$red_lim' $lim)");
while($registro57 = mysql_fetch_row($sql57))
{$num57_r =  $registro57[0];}
if($num57_r == 0){$num57_r="";}

// malhadeira
$malh_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno FROM tb_limno WHERE id_tb_limno >= 1 AND lim_aparelho = 'Malhadeira' AND lim_local = '73' $excu1 ");
while($registroa = mysql_fetch_row($sqla))
{
$malh_lim =  $registroa[0];
$lim .= ' OR '.'malh_lim = '.$malh_lim;
}
$sql57 = mysql_query("SELECT count(malh_especie) FROM tb_malhadeira_biotico WHERE malh_especie = '$esp' AND (malh_lim = '$malh_lim' $lim)");
while($registro57 = mysql_fetch_row($sql57))
{$num57_m =  $registro57[0];}
if($num57_m == 0){$num57_m="";}


// puça, espinhel e tarrafa

$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho != '' AND lim_outr_aparelho != 'Espinhel'  AND lim_local = '73' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql57 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro57 = mysql_fetch_row($sql57))
{$num57_o =  $registro57[0];}
if($num57_o == 0){$num57_o="";}

//Espinhel ------------------------------
$espi_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = 'Espinhel' AND lim_local = '73'  $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$espi_lim =  $registroa[0];
$lim .= ' OR '.'espi_lim = '.$espi_lim;
}
$sql57 = mysql_query("SELECT sum(espi_qtde) FROM tb_espinhel_biotico WHERE espi_esp = '$esp' AND (espi_lim = '$espi_lim' $lim)");
while($registro57 = mysql_fetch_row($sql57))
{$num57_e =  $registro57[0];}
if($num57_e == 0){$num57_e="";}

$num57 = $num57_r + $num57_m + $num57_o + $num57_e ;
if($num57 == 0){$num57 ="";}
















$tott +=  $tot1[$n];
if ($tot1[$n] > 0){
/*--------Linhas de resultados */
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td title=\"Cutário\" align=\"center\">".$num1."</td>
<td title=\"Sotério\" align=\"center\">".$num2."</td>
<td title=\"Pacaás\" align=\"center\">".$num3."</td>
<td title=\"Arara\" align=\"center\">".$num4."</td>
<td title=\"Mutumparaná\" align=\"center\">".$num5."</td>
<td title=\"São Lourenço\" align=\"center\">".$num6."</td>
<td title=\"Karipunas (Montante)\" align=\"center\">".$num7."</td>
<td title=\"Karipunas (Foz)\" align=\"center\">".$num8."</td>
<td title=\"Jaciparaná (Montante)\" align=\"center\">".$num9."</td>
<td title=\"Jaciparaná (Foz)\" align=\"center\">".$num10."</td>
<td title=\"Jatuarana\" align=\"center\">".$num11."</td>
<td title=\"Belmont (Montante)\" align=\"center\">".$num12."</td>
<td title=\"Belmont (Foz)\" align=\"center\">".$num13."</td>
<td title=\"Cuniã\" align=\"center\">".$num14."</td>
<td title=\"Puruzinho\" align=\"center\">".$num15."</td>
<td title=\"Machado (Montante)\" align=\"center\">".$num16."</td>
<td title=\"Machado (Foz)\" align=\"center\">".$num17."</td>
<td title=\"Manicoré\" align=\"center\">".$num18."</td>
<td title=\"Aripuanã\" align=\"center\">".$num19."</td>
<td title=\"Lago Sampaio\" align=\"center\">".$num20."</td>

<td title=\"Foz extrema do Jaci-Parana\" align=\"center\">".$num22."</td>
<td title=\"Fortaleza do Abuna\" align=\"center\">".$num23."</td>
<td title=\"Simao Grande\" align=\"center\">".$num24."</td>
<td title=\"Igarape Cachoeirinha\" align=\"center\">".$num25."</td>
<td title=\"Terra Indigena de Lourdes\" align=\"center\">".$num26."</td>
<td title=\"Cachoeira de Santo Antonio\" align=\"center\">".$num27."</td>
<td title=\"Estacao Ecologica do Cunia\" align=\"center\">".$num28."</td>
<td title=\"Caracol\" align=\"center\">".$num29."</td>
<td title=\"Igarape da UNIR\" align=\"center\">".$num30."</td>
<td title=\"Igarape Matogrosso\" align=\"center\">".$num31."</td>
<td title=\"Rio Cabixi\" align=\"center\">".$num32."</td>
<td title=\"Corumbiara\" align=\"center\">".$num33."</td>
<td title=\"Mequens\" align=\"center\">".$num34."</td>
<td title=\"Branco\" align=\"center\">".$num35."</td>
<td title=\"Sao Miguel\" align=\"center\">".$num36."</td>
<td title=\"Rio Ouro Preto\" align=\"center\">".$num37."</td>
<td title=\"Igarape Bate Estacas\" align=\"center\">".$num38."</td>
<td title=\"Igarape Presidente Medice\" align=\"center\">".$num39."</td>
<td title=\"Rio Riozinho\" align=\"center\">".$num40."</td>
<td title=\"Lagoa Azul\" align=\"center\">".$num41."</td>
<td title=\"Igarape do Banhado\" align=\"center\">".$num42."</td>
<td title=\"Igarape Vilhena\" align=\"center\">".$num43."</td>
<td title=\"Igarape Colorado do Oeste\" align=\"center\">".$num44."</td>
<td title=\"Rio Guapore\" align=\"center\">".$num45."</td>
<td title=\"Rio Madeira COR 66\" align=\"center\">".$num46."</td>
<td title=\"Cachoeira Guajara\" align=\"center\">".$num47."</td>
<td title=\"Cachoeira do Iata\" align=\"center\">".$num48."</td>
<td title=\"Cachoeira da Laje\" align=\"center\">".$num49."</td>
<td title=\"Cachoeira Madeira\" align=\"center\">".$num50."</td>
<td title=\"Cachoeira Paredao\" align=\"center\">".$num51."</td>
<td title=\"Cachoeira Pederneira\" align=\"center\">".$num52."</td>
<td title=\"Cachoeira Morrinhos\" align=\"center\">".$num53."</td>
<td title=\"Cachoeira Pedral Bejarana\" align=\"center\">".$num54."</td>
<td title=\"Cachoeira Teotonio\" align=\"center\">".$num55."</td>
<td title=\"Cachoeira do Macaco\" align=\"center\">".$num56."</td>
<td title=\"Cachoeira Santo Antonio\" align=\"center\">".$num57."</td>

<td><b>".$tot1[$n]."</b></td>
</tr>";
}else{}

$n++;}








}


?>