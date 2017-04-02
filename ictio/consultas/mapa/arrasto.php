<?php
if ($aparelho == "Arrasto de fundo" AND $p == "Grupados")
{
?>

<tr class="titulo">

<td colspan="18">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>
<td>Rio Guaporé ACM 16_20</td>
<td>Rio Mamoré ACM 21_25</td>
<td>Rio Mamoré ACM 26_30</td>
<td>Rio Madeira COR 1_5</td>
<td>Rio Madeira COR 6_10</td>
<td>Rio Madeira COR 11_15</td>
<td>Rio Madeira ACJ 31_35</td>
<td>Rio Madeira ACJ 36_40</td>
<td>Rio Madeira ACJ 41_45</td>
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
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '16' OR lim_arr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
if ($exc == "Seca 1")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}

else if ($exc == "Expandidas Cheia")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '12' OR lim_arr_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu = " AND (lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '16')";}


else if ($exc == "ANO I")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}

else if ($exc == "ANO II")
{$excu = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17'  OR lim_arr_excursao = '18' OR lim_arr_excursao = '19'
 OR lim_arr_excursao = '20')";}

 else if ($exc == "2008")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}

 else if ($exc == "2009")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9'  OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}

 else if ($exc == "2010")
{$excu = " AND (lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14'  OR lim_arr_excursao = '15' OR lim_arr_excursao = '16'
 OR lim_arr_excursao = '17' OR lim_arr_excursao = '18'  OR lim_arr_excursao = '19')";}

  else if ($exc == "2011")
{$excu = " AND (lim_arr_excursao = '20')";}

else if ($exc > 0)
{$excu = " AND (lim_arr_excursao = '$exc')";}




$l1 = 0;
$n = 1;



// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT arr_especie, count(arr_especie) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' GROUP BY arr_especie");
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
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}

$sqlx = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1[$n] =  $registrox[0];
}

/*--------Rio Guaporé ACM 16_20 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num1 =  $registro1[0];}
if($num1 == 0){$num1="";}



/*--------Rio Mamoré ACM 21_25 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num2 =  $registro2[0];}
if($num2 == 0){$num2="";}


/*--------Rio Mamoré ACM 26_30 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num3 =  $registro3[0];}
if($num3 == 0){$num3="";}


/*--------Rio Madeira COR 1_5 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num4 =  $registro4[0];}
if($num4 == 0){$num4="";}



/*--------Rio Madeira COR 6_10 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num5 =  $registro5[0];}
if($num5 == 0){$num5="";}



/*--------Rio Madeira COR 11_15 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num6 =  $registro6[0];}
if($num6 == 0){$num6="";}

/*--------Rio Madeira ACJ 31_35 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num7 =  $registro7[0];}
if($num7 == 0){$num7="";}

/*--------Rio Madeira ACJ 36_40 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num8 =  $registro8[0];}
if($num8 == 0){$num8="";}


/*--------Rio Madeira ACJ 41_45 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num9 =  $registro9[0];}
if($num9 == 0){$num9="";}

$tott +=  $tot1[$n];

/*--------Linhas de resultados */
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td align=\"center\">".$num1."</td>
<td align=\"center\">".$num2."</td>
<td align=\"center\">".$num3."</td>
<td align=\"center\">".$num4."</td>
<td align=\"center\">".$num5."</td>
<td align=\"center\">".$num6."</td>
<td align=\"center\">".$num7."</td>
<td align=\"center\">".$num8."</td>
<td align=\"center\">".$num9."</td>
<td><b>".$tot1[$n]."</b></td>
</tr>";
$n++;}
?>

<!--<tr><td colspan="10" bgcolor="#CCCCCC"><b>TOTAL DE INDIVÍDUOS IDENTIFICADOS</b></td><td bgcolor="#CCCCCC"><b><?php echo"$tott";?></b>
</td></tr>-->
<?php
}

else if ($aparelho == "Arrasto de fundo" AND $p == "Separados")

{
?>

<tr class="titulo">

<td colspan="49">Aparelho: <?php echo"$aparelho ";?>

 ---- Excursão: <?php echo"$exc ";?> </td>
</tr>
<tr class="titulo">
<td>Ordem</td>
<td>Família</td>
<td>Espécie</td>
<td title="Rio Guaporé ACM 16_20">16</td>
<td title="Rio Guaporé ACM 16_20">17</td>
<td title="Rio Guaporé ACM 16_20">18</td>
<td title="Rio Guaporé ACM 16_20">19</td>
<td title="Rio Guaporé ACM 16_20">20</td>


<td title="Rio Mamoré ACM 21_25">21</td>
<td title="Rio Mamoré ACM 21_25">22</td>
<td title="Rio Mamoré ACM 21_25">23</td>
<td title="Rio Mamoré ACM 21_25">24</td>
<td title="Rio Mamoré ACM 21_25">25</td>


<td title="Rio Mamoré ACM 26_30">26</td>
<td title="Rio Mamoré ACM 26_30">27</td>
<td title="Rio Mamoré ACM 26_30">28</td>
<td title="Rio Mamoré ACM 26_30">29</td>
<td title="Rio Mamoré ACM 26_30">30</td>


<td title="Rio Madeira COR 1_5">1</td>
<td title="Rio Madeira COR 1_5">2</td>
<td title="Rio Madeira COR 1_5">3</td>
<td title="Rio Madeira COR 1_5">4</td>
<td title="Rio Madeira COR 1_5">5</td>


<td title="Rio Madeira COR 6_10">6</td>
<td title="Rio Madeira COR 6_10">7</td>
<td title="Rio Madeira COR 6_10">8</td>
<td title="Rio Madeira COR 6_10">9</td>
<td title="Rio Madeira COR 6_10">10</td>

<td title="Rio Madeira COR 11_15">11</td>
<td title="Rio Madeira COR 11_15">12</td>
<td title="Rio Madeira COR 11_15">13</td>
<td title="Rio Madeira COR 11_15">14</td>
<td title="Rio Madeira COR 11_15">15</td>

<td title="Rio Madeira ACJ 31_35">31</td>
<td title="Rio Madeira ACJ 31_35">32</td>
<td title="Rio Madeira ACJ 31_35">33</td>
<td title="Rio Madeira ACJ 31_35">34</td>
<td title="Rio Madeira ACJ 31_35">35</td>

<td title="Rio Madeira ACJ 36_40">36</td>
<td title="Rio Madeira ACJ 36_40">37</td>
<td title="Rio Madeira ACJ 36_40">38</td>
<td title="Rio Madeira ACJ 36_40">39</td>
<td title="Rio Madeira ACJ 36_40">40</td>


<td title="Rio Madeira ACJ 41_45">41</td>
<td title="Rio Madeira ACJ 41_45">42</td>
<td title="Rio Madeira ACJ 41_45">43</td>
<td title="Rio Madeira ACJ 41_45">44</td>
<td title="Rio Madeira ACJ 41_45">45</td>
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
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '16' OR lim_arr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
if ($exc == "Seca 1")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}


else if ($exc == "Expandidas Cheia")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '12' OR lim_arr_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu = " AND (lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '16')";}

else if ($exc == "ANO I")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}

else if ($exc == "ANO II")
{$excu = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17'  OR lim_arr_excursao = '18' OR lim_arr_excursao = '19'
 OR lim_arr_excursao = '20')";}

 else if ($exc == "2008")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}

 else if ($exc == "2009")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9'  OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}

 else if ($exc == "2010")
{$excu = " AND (lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14'  OR lim_arr_excursao = '15' OR lim_arr_excursao = '16'
 OR lim_arr_excursao = '17' OR lim_arr_excursao = '18'  OR lim_arr_excursao = '19')";}

  else if ($exc == "2011")
{$excu = " AND (lim_arr_excursao = '20')";}

else if ($exc > 0)
{$excu = " AND (lim_arr_excursao = '$exc')";}


/*
else if ($exc == "2008")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}

else if ($exc == "2009")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}


else if ($exc == "2010")
{$excu = " AND (lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17' OR lim_arr_excursao = '18')";}

*/


$l1 = 0;
$n = 1;



// Listagem das espécies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT arr_especie, count(arr_especie) FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' GROUP BY arr_especie");
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
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}

$sqlx = mysql_query("SELECT sum(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registrox = mysql_fetch_row($sqlx))
{
$tot1[$n] =  $registrox[0];
}

/*--------Rio Guaporé ACM 16_20 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' AND lim_arr_ponto = '16' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num16 =  $registro1[0];}
if($num16 == 0){$num16="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' AND lim_arr_ponto = '17' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num17 =  $registro1[0];}
if($num17 == 0){$num17="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' AND lim_arr_ponto = '18' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num18 =  $registro1[0];}
if($num18 == 0){$num18="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' AND lim_arr_ponto = '19' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num19 =  $registro1[0];}
if($num19 == 0){$num19="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '24' AND lim_arr_ponto = '20' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql1 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro1 = mysql_fetch_row($sql1))
{$num120 =  $registro1[0];}
if($num120 == 0){$num120="";}


/*--------Rio Mamoré ACM 21_25 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' AND lim_arr_ponto = '21' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num221 =  $registro2[0];}
if($num221 == 0){$num221="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' AND lim_arr_ponto = '22' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num222 =  $registro2[0];}
if($num222 == 0){$num222="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' AND lim_arr_ponto = '23' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num223 =  $registro2[0];}
if($num223 == 0){$num223="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' AND lim_arr_ponto = '24' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num224 =  $registro2[0];}
if($num224 == 0){$num224="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '25' AND lim_arr_ponto = '25' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql2 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro2 = mysql_fetch_row($sql2))
{$num225 =  $registro2[0];}
if($num225 == 0){$num225="";}


/*--------Rio Mamoré ACM 26_30 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' AND lim_arr_ponto = '26' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num326 =  $registro3[0];}
if($num326 == 0){$num326="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' AND lim_arr_ponto = '27' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num327 =  $registro3[0];}
if($num327 == 0){$num327="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' AND lim_arr_ponto = '28' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num328 =  $registro3[0];}
if($num328 == 0){$num328="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' AND lim_arr_ponto = '29' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num329 =  $registro3[0];}
if($num329 == 0){$num329="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '26' AND lim_arr_ponto = '30' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql3 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro3 = mysql_fetch_row($sql3))
{$num330 =  $registro3[0];}
if($num330 == 0){$num330="";}


/*--------Rio Madeira COR 1_5 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' AND lim_arr_ponto = '1' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num41 =  $registro4[0];}
if($num41 == 0){$num41="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' AND lim_arr_ponto = '2' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num42 =  $registro4[0];}
if($num42 == 0){$num42="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' AND lim_arr_ponto = '3' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num43 =  $registro4[0];}
if($num43 == 0){$num43="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' AND lim_arr_ponto = '4' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num44 =  $registro4[0];}
if($num44 == 0){$num44="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '27' AND lim_arr_ponto = '5' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql4 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro4 = mysql_fetch_row($sql4))
{$num45 =  $registro4[0];}
if($num45 == 0){$num45="";}



/*--------Rio Madeira COR 6_10 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' AND lim_arr_ponto = '6' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num56 =  $registro5[0];}
if($num56 == 0){$num56="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' AND lim_arr_ponto = '7' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num57 =  $registro5[0];}
if($num57 == 0){$num57="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' AND lim_arr_ponto = '8' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num58 =  $registro5[0];}
if($num58 == 0){$num58="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' AND lim_arr_ponto = '9' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num59 =  $registro5[0];}
if($num59 == 0){$num59="";}


$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '28' AND lim_arr_ponto = '10' $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql5 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro5 = mysql_fetch_row($sql5))
{$num510 =  $registro5[0];}
if($num510 == 0){$num510="";}



/*--------Rio Madeira COR 11_15 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' AND lim_arr_ponto = '11'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num611 =  $registro6[0];}
if($num611 == 0){$num611="";}
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' AND lim_arr_ponto = '12'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num612 =  $registro6[0];}
if($num612 == 0){$num612="";}
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' AND lim_arr_ponto = '13'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num613 =  $registro6[0];}
if($num613 == 0){$num613="";}
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' AND lim_arr_ponto = '14'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num614 =  $registro6[0];}
if($num614 == 0){$num614="";}
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '29' AND lim_arr_ponto = '15'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql6 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro6 = mysql_fetch_row($sql6))
{$num615 =  $registro6[0];}
if($num615 == 0){$num615="";}

/*--------Rio Madeira ACJ 31_35 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' AND lim_arr_ponto = '31'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num731 =  $registro7[0];}
if($num731 == 0){$num731="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' AND lim_arr_ponto = '32'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num732 =  $registro7[0];}
if($num732 == 0){$num732="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' AND lim_arr_ponto = '33'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num733 =  $registro7[0];}
if($num733 == 0){$num733="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' AND lim_arr_ponto = '34'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num734 =  $registro7[0];}
if($num734 == 0){$num734="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '30' AND lim_arr_ponto = '35'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql7 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro7 = mysql_fetch_row($sql7))
{$num735 =  $registro7[0];}
if($num735 == 0){$num735="";}

/*--------Rio Madeira ACJ 36_40 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' AND lim_arr_ponto = '36'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num836 =  $registro8[0];}
if($num836 == 0){$num836="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' AND lim_arr_ponto = '37'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num837 =  $registro8[0];}
if($num837 == 0){$num837="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' AND lim_arr_ponto = '38'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num838 =  $registro8[0];}
if($num838 == 0){$num838="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' AND lim_arr_ponto = '39'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num839 =  $registro8[0];}
if($num839 == 0){$num839="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '31' AND lim_arr_ponto = '40'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql8 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro8 = mysql_fetch_row($sql8))
{$num840 =  $registro8[0];}
if($num840 == 0){$num840="";}


/*--------Rio Madeira ACJ 41_45 */
$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' AND lim_arr_ponto = '41'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num941 =  $registro9[0];}
if($num941 == 0){$num941="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' AND lim_arr_ponto = '42'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num942 =  $registro9[0];}
if($num942 == 0){$num942="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' AND lim_arr_ponto = '43'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num943 =  $registro9[0];}
if($num943 == 0){$num943="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' AND lim_arr_ponto = '44'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num944 =  $registro9[0];}
if($num944 == 0){$num944="";}

$arr_lim = " ";
$lim = " ";
$sqla = mysql_query("SELECT id_tb_limno_arr FROM tb_limno_arr WHERE id_tb_limno_arr >= 1 AND lim_arr_loc = '32' AND lim_arr_ponto = '45'  $excu ");
while($registroa = mysql_fetch_row($sqla))
{
$arr_lim =  $registroa[0];
$lim .= ' OR '.'arr_lim = '.$arr_lim;
}
$sql9 = mysql_query("SELECT SUM(arr_qtde) FROM tb_arrastofundo_biotico WHERE arr_especie = '$esp' AND (arr_lim = '$arr_lim' $lim) $ll");
while($registro9 = mysql_fetch_row($sql9))
{$num945 =  $registro9[0];}
if($num945 == 0){$num945="";}

$tott +=  $tot1[$n];

/*--------Linhas de resultados */
echo "<tr>
<td align=\"left\">".$NomeOrd."</td>
<td align=\"left\">".$NomeFam."</td>
<td align=\"left\">".$NomeEsp."</td>
<td align=\"center\">".$num16."</td>
<td align=\"center\">".$num17."</td>
<td align=\"center\">".$num18."</td>
<td align=\"center\">".$num19."</td>
<td align=\"center\">".$num120."</td>

<td align=\"center\">".$num221."</td>
<td align=\"center\">".$num222."</td>
<td align=\"center\">".$num223."</td>
<td align=\"center\">".$num224."</td>
<td align=\"center\">".$num225."</td>


<td align=\"center\">".$num326."</td>
<td align=\"center\">".$num327."</td>
<td align=\"center\">".$num328."</td>
<td align=\"center\">".$num329."</td>
<td align=\"center\">".$num330."</td>

<td align=\"center\">".$num41."</td>
<td align=\"center\">".$num42."</td>
<td align=\"center\">".$num43."</td>
<td align=\"center\">".$num44."</td>
<td align=\"center\">".$num45."</td>

<td align=\"center\">".$num56."</td>
<td align=\"center\">".$num57."</td>
<td align=\"center\">".$num58."</td>
<td align=\"center\">".$num59."</td>
<td align=\"center\">".$num510."</td>

<td align=\"center\">".$num611."</td>
<td align=\"center\">".$num612."</td>
<td align=\"center\">".$num613."</td>
<td align=\"center\">".$num614."</td>
<td align=\"center\">".$num615."</td>

<td align=\"center\">".$num731."</td>
<td align=\"center\">".$num732."</td>
<td align=\"center\">".$num733."</td>
<td align=\"center\">".$num734."</td>
<td align=\"center\">".$num735."</td>

<td align=\"center\">".$num836."</td>
<td align=\"center\">".$num837."</td>
<td align=\"center\">".$num838."</td>
<td align=\"center\">".$num839."</td>
<td align=\"center\">".$num840."</td>

<td align=\"center\">".$num941."</td>
<td align=\"center\">".$num942."</td>
<td align=\"center\">".$num943."</td>
<td align=\"center\">".$num944."</td>
<td align=\"center\">".$num945."</td>
<td><b>".$tot1[$n]."</b></td>
</tr>";
$n++;}
?>

<!--<tr><td colspan="10" bgcolor="#CCCCCC"><b>TOTAL DE INDIVÍDUOS IDENTIFICADOS</b></td><td bgcolor="#CCCCCC"><b><?php echo"$tott";?></b>
</td></tr>-->
<?php

}









?>