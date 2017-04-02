<?php

if ($aparelho == "Puça")
{
// Início dos resultados para Outros aparelhos --------------------------------------------------------------------------
?>

<tr class="titulo">

<td colspan="64">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>
<td title="Cutário">CAU</td><!--22-->
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

if ($aparelho == "Todos")
{$apare = " ";}
else if ($aparelho == "Malha + Rede")
{$apare = " AND bio_val = 'mr'";}
else{$apare = " AND bio_aparelho = '$aparelho'";}

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


$l1 = 0;
$n = 1;



// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT outr_especie, count(outr_especie) FROM tb_outros_biotico WHERE id_tb_outros > '0' GROUP BY outr_especie");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
$esp =  $registro[0];
$tot =  $registro[1];
   $lista = new ManipulateData1();
   $NomeEsp = $lista->NomeEspecie($esp);
    $NomeOrd = $lista->NomeOrd($esp);
  $NomeFam = $lista->NomeFam($esp);


/*--------NÚMERO DE INDIVÍDUOS TOTAIS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}

$sqlx = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1[$n] =  $registrox[0];
}

/*--------Cautário */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '22' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql1 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro1 = mysql_fetch_row($sql1))
{$num1 =  $registro1[0];}
if($num1 == 0){$num1="";}



/*--------Sotério */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '21' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql2 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro2 = mysql_fetch_row($sql2))
{$num2 =  $registro2[0];}
if($num2 == 0){$num2="";}



/*--------Pacás */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '20' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql3 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro3 = mysql_fetch_row($sql3))
{$num3 =  $registro3[0];}
if($num3 == 0){$num3="";}



/*--------Arara */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '11' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql4 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro4 = mysql_fetch_row($sql4))
{$num4 =  $registro4[0];}
if($num4 == 0){$num4="";}



/*--------Mutumparaná */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '10' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql5 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro5 = mysql_fetch_row($sql5))
{$num5 =  $registro5[0];}
if($num5 == 0){$num5="";}



/*--------São Lourenço */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '7' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql6 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro6 = mysql_fetch_row($sql6))
{$num6 =  $registro6[0];}
if($num6 == 0){$num6="";}



/*--------Karipunas montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '9' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql7 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro7 = mysql_fetch_row($sql7))
{$num7 =  $registro7[0];}
if($num7 == 0){$num7="";}



/*--------Karipunas foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '8' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql8 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro8 = mysql_fetch_row($sql8))
{$num8 =  $registro8[0];}
if($num8 == 0){$num8="";}



/*--------Jaciparana montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '6' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql9 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro9 = mysql_fetch_row($sql9))
{$num9 =  $registro9[0];}
if($num9 == 0){$num9="";}



/*--------Jaciparana foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '5' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql10 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro10 = mysql_fetch_row($sql10))
{$num10 =  $registro10[0];}
if($num10 == 0){$num10="";}



/*--------Jatuarana */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '4' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql11 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro11 = mysql_fetch_row($sql11))
{$num11 =  $registro11[0];}
if($num11 == 0){$num11="";}



/*--------Belmont montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '3' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql12 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro12 = mysql_fetch_row($sql12))
{$num12 =  $registro12[0];}
if($num12 == 0){$num12="";}



/*--------Belmont foz */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '2' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql13 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro13 = mysql_fetch_row($sql13))
{$num13 =  $registro13[0];}
if($num13 == 0){$num13="";}



/*--------Cuniã */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '1' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql14 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro14 = mysql_fetch_row($sql14))
{$num14 =  $registro14[0];}
if($num14 == 0){$num14="";}



/*--------Puruzinho */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '14' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql15 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro15 = mysql_fetch_row($sql15))
{$num15 =  $registro15[0];}
if($num15 == 0){$num15="";}



/*--------Machado montante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '13' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql16 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro16 = mysql_fetch_row($sql16))
{$num16 =  $registro16[0];}
if($num16 == 0){$num16="";}



/*--------Machado jusante */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '12' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql17 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro17 = mysql_fetch_row($sql17))
{$num17 =  $registro17[0];}
if($num17 == 0){$num17="";}



/*--------Manicoré */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '15' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql18 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro18 = mysql_fetch_row($sql18))
{$num18 =  $registro18[0];}
if($num18 == 0){$num18="";}



/*--------Aripuanã */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '16' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql19 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro19 = mysql_fetch_row($sql19))
{$num19 =  $registro19[0];}
if($num19 == 0){$num19="";}



/*--------Lago Sampaio */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '17' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql20 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro20 = mysql_fetch_row($sql20))
{$num20 =  $registro20[0];}
if($num20 == 0){$num20="";}







/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '34' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql22 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro22 = mysql_fetch_row($sql22))
{$num22 =  $registro22[0];}
if($num22 == 0){$num22="";}






/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '35' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql23 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro23 = mysql_fetch_row($sql23))
{$num23 =  $registro23[0];}
if($num23 == 0){$num23="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '36' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql24 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro24 = mysql_fetch_row($sql24))
{$num24 =  $registro24[0];}
if($num24 == 0){$num24="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '41' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql25 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro25 = mysql_fetch_row($sql25))
{$num25 =  $registro25[0];}
if($num25 == 0){$num25="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '42' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql26 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro26 = mysql_fetch_row($sql26))
{$num26 =  $registro26[0];}
if($num26 == 0){$num26="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '43' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql27 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro27 = mysql_fetch_row($sql27))
{$num27 =  $registro27[0];}
if($num27 == 0){$num27="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '44' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql28 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro28 = mysql_fetch_row($sql28))
{$num28 =  $registro28[0];}
if($num28 == 0){$num28="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '45' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql29 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro29 = mysql_fetch_row($sql29))
{$num29 =  $registro29[0];}
if($num29 == 0){$num29="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '46' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql30 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro30 = mysql_fetch_row($sql30))
{$num30 =  $registro30[0];}
if($num30 == 0){$num30="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '47' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql31 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro31 = mysql_fetch_row($sql31))
{$num31 =  $registro31[0];}
if($num31 == 0){$num31="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '48' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql32 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro32 = mysql_fetch_row($sql32))
{$num32 =  $registro32[0];}
if($num32 == 0){$num32="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '49' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql33 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro33 = mysql_fetch_row($sql33))
{$num33 =  $registro33[0];}
if($num33 == 0){$num33="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '50' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql34 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro34 = mysql_fetch_row($sql34))
{$num34 =  $registro34[0];}
if($num34 == 0){$num34="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '51' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql35 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro35 = mysql_fetch_row($sql35))
{$num35 =  $registro35[0];}
if($num35 == 0){$num35="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '52' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql36 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro36 = mysql_fetch_row($sql36))
{$num36 =  $registro36[0];}
if($num36 == 0){$num36="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '53' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql37 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro37 = mysql_fetch_row($sql37))
{$num37 =  $registro37[0];}
if($num37 == 0){$num37="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '54' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql38 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro38 = mysql_fetch_row($sql38))
{$num38 =  $registro38[0];}
if($num38 == 0){$num38="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '55' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql39 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro39 = mysql_fetch_row($sql39))
{$num39 =  $registro39[0];}
if($num39 == 0){$num39="";}






/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '56' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql40 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro40 = mysql_fetch_row($sql40))
{$num40 =  $registro40[0];}
if($num40 == 0){$num40="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '57' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql41 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro41 = mysql_fetch_row($sql41))
{$num41 =  $registro41[0];}
if($num41 == 0){$num41="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '58' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql42 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro42 = mysql_fetch_row($sql42))
{$num42 =  $registro42[0];}
if($num42 == 0){$num42="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '59' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql43 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro43 = mysql_fetch_row($sql43))
{$num43 =  $registro43[0];}
if($num43 == 0){$num43="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '60' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql44 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro44 = mysql_fetch_row($sql44))
{$num44 =  $registro44[0];}
if($num44 == 0){$num44="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '61' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql45 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro45 = mysql_fetch_row($sql45))
{$num45 =  $registro45[0];}
if($num45 == 0){$num45="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '62' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql46 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro46 = mysql_fetch_row($sql46))
{$num46 =  $registro46[0];}
if($num46 == 0){$num46="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '63' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql47 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro47 = mysql_fetch_row($sql47))
{$num47 =  $registro47[0];}
if($num47 == 0){$num47="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '64' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql48 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro48 = mysql_fetch_row($sql48))
{$num48 =  $registro48[0];}
if($num48 == 0){$num48="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '65' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql49 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro49 = mysql_fetch_row($sql49))
{$num49 =  $registro49[0];}
if($num49 == 0){$num49="";}





/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '66' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql50 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro50 = mysql_fetch_row($sql50))
{$num50 =  $registro50[0];}
if($num50 == 0){$num50="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '67' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql51 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro51 = mysql_fetch_row($sql51))
{$num51 =  $registro51[0];}
if($num51 == 0){$num51="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '68' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql52 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro52 = mysql_fetch_row($sql52))
{$num52 =  $registro52[0];}
if($num52 == 0){$num52="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '69' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql53 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro53 = mysql_fetch_row($sql53))
{$num53 =  $registro53[0];}
if($num53 == 0){$num53="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '70' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql54 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro54 = mysql_fetch_row($sql54))
{$num54 =  $registro54[0];}
if($num54 == 0){$num54="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '71' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql55 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro55 = mysql_fetch_row($sql55))
{$num55 =  $registro55[0];}
if($num55 == 0){$num55="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '72' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql56 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro56 = mysql_fetch_row($sql56))
{$num56 =  $registro56[0];}
if($num56 == 0){$num56="";}




/*--------OUTTRRROOSS */
$outr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_outr FROM tb_limno_outr WHERE id_tb_limno_outr >= 1 AND lim_outr_aparelho = '$aparelho' AND lim_local = '73' $excu2 ");
while($registroa = mysql_fetch_row($sqla))
{
$outr_lim =  $registroa[0];
$lim .= ' OR '.'outr_lim = '.$outr_lim;
}
$sql57 = mysql_query("SELECT sum(outr_qtde) FROM tb_outros_biotico WHERE outr_especie = '$esp' AND (outr_lim = '$outr_lim' $lim)");
while($registro57 = mysql_fetch_row($sql57))
{$num57 =  $registro57[0];}
if($num57 == 0){$num57="";}









$tott +=  $tot1[$n];

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
$n++;}
?>



<?php
}


?>