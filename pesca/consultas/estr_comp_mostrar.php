 <?php
 $tt = 0;
 ?>
 <div id="tabelas">
<div id="tabela">
<?php
$nn = 0;
 $sql2 = mysql_query("SELECT id_familiar, cp FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp' $locc ORDER BY cp ASC ");
 while($registro2 = mysql_fetch_row($sql2))
{
      $reg =  $registro2[0];
      $cp =  $registro2[1];
      if ($nn == 0){$min = $cp;}
      $nn++;
      $max = $cp;
      $soma += $cp;
}
$med_cp = $soma/$nn;
?>
<table cellspacing="0" align="center" width="25%" class="bordasimples">
<tr class="titulo">
<td colspan="22">Categoria: <?php echo"$NomeCateg";?> </td>
</tr>
<tr class="titulo">
<td>Registro</td>

<td>Pt</td>

<td>Comp Pad</td> <!-- cp -->
<td>Comp Tot</td> <!-- ct -->
<td>Comp Cab</td> <!-- cpc -->
<td>Comp Tot S Cab</td> <!-- cptc -->
<td>Comp Pad S Cab</td> <!-- cppc -->

<td>Esto</td> <!-- cpc -->
<td>Gono</td> <!-- cptc -->
<td>P Gono</td> <!-- cppc -->

<td>Cab</td> <!-- cpc -->
<td>Nr Foto</td> <!-- cptc -->
<td>Ref</td> <!-- cppc -->

<td>Sexo</td> <!-- cpc -->
<td>Ematur</td> <!-- cptc -->
<td>Histo</td> <!-- cppc -->

<td>Teci</td> <!-- cpc -->
<td>Cresc</td> <!-- cptc -->
<td>GG</td> <!-- cppc -->
<td>GR</td> <!-- cppc --> 
</tr>
<?php
 $sql2 = mysql_query("SELECT id_familiar, cp, pt, cpc, cptc, cppc, ct, esto, gono,
  pgono, cab, nr_foto, ref, sexo, ematur, histo, teci, cresc, gg, gr

 FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp' $locc ORDER BY cp ASC ");
 while($registro2 = mysql_fetch_row($sql2))
{
      $reg =  $registro2[0];
      $cp =  $registro2[1];$cp1 = number_format($cp,2,",",".");
      $dif = $cp - $med_cp;
      $quad = $dif * $dif;
      $pt =  $registro2[2];

      $cpc =  $registro2[3];
      $cptc =  $registro2[4];
      $cppc =  $registro2[5];
       $ct =  $registro2[6];

        $esto =  $registro2[7];
         $gono =  $registro2[8];
          $pgono =  $registro2[9];

          $cab =  $registro2[10];
         $nr_foto =  $registro2[11];
          $ref =  $registro2[12];

           $sexo =  $registro2[13];
         $ematur =  $registro2[14];
          $histo =  $registro2[15];

           $teci =  $registro2[16];
         $cresc =  $registro2[17];
          $gg =  $registro2[18];
          $gr =  $registro2[19];

      ?>
      <tr>
      <td align="left" ><?php echo "$reg"; ?></td>
       <td align="left" ><?php echo "$pt"; ?></td>
        <td align="left" ><?php echo "$cp1"; ?></td>
         <td align="left" ><?php echo "$ct"; ?></td>
         <td align="left" ><?php echo "$cpc"; ?></td>
          <td align="left" ><?php echo "$cptc"; ?></td>
           <td align="left" ><?php echo "$cppc"; ?></td>

            <td align="left" ><?php echo "$esto"; ?></td>
          <td align="left" ><?php echo "$gono"; ?></td>
           <td align="left" ><?php echo "$pgono"; ?></td>

           <td align="left" ><?php echo "$cab"; ?></td>
          <td align="left" ><?php echo "$nr_foto"; ?></td>
           <td align="left" ><?php echo "$ref"; ?></td>

            <td align="left" ><?php echo "$sexo"; ?></td>
          <td align="left" ><?php echo "$ematur"; ?></td>
           <td align="left" ><?php echo "$histo"; ?></td>

           <td align="left" ><?php echo "$teci"; ?></td>
          <td align="left" ><?php echo "$cresc"; ?></td>
           <td align="left" ><?php echo "$gg"; ?></td>
           <td align="left" ><?php echo "$gr"; ?></td>
      </tr>

<?php
$soma_quad += $quad;
}
$variancia = $soma_quad/($nn - 1);
$med_cp1 = number_format($med_cp,2,",",".");
$des_pad = sqrt($variancia);  $des_pad1 = number_format($des_pad,2,",",".");
 $max1 = number_format($max,2,",",".");
  $min1 = number_format($min,2,",",".");
?>
</table>

<br /><br /><br />
<table cellspacing="0" align="center" width="30%" class="bordasimples">
<tr class="titulo">
<td colspan="2">RESUMO</td>
</tr>
<tr>
<td align="left">Qtde Indivíduos</td><td align="left"><?php echo "$nn"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Máximo (mm)</td><td align="left"><?php echo "$max1"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Mínimo (mm)</td><td align="left"><?php echo "$min1"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Médio (mm)</td><td align="left"><?php echo "$med_cp1"; ?></td>
</tr>
<tr>
<td align="left">Desvio Padrão</td><td align="left"><?php echo "$des_pad1"; ?></td>
</tr>
<!--<tr>
<td align="left">Peso Máximo</td><td><?php echo "$maxp"; ?></td>
</tr>
<tr>
<td align="left">Peso Mínimo</td><td><?php echo "$minp"; ?></td>
</tr>-->
<!--<tr>
<td align="left"><b>TOTAL</b></td><td><b><?php echo "$cat_s"; ?></b></td>
</tr>-->
</table>
<br /><br /><br />
<table cellspacing="0" align="center" width="25%" class="bordasimples">
<tr class="titulo">
<td colspan="14">Categoria: <?php echo"$NomeCateg";?> </td>
</tr>
<tr class="titulo">
<td>Classe</td>
<td>Qtde</td>
</tr>
<?php
$sql = mysql_query("SELECT max(cp) FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp' $locc");
while($registro = mysql_fetch_row($sql))
{$max =  $registro[0];}

$sql = mysql_query("SELECT min(cp) FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp' $locc");
while($registro = mysql_fetch_row($sql))
{$min =  $registro[0];}

$f = 0; $n = 0;
while ($f <= $max){
$g = $f + 9.99;

$sql1 = mysql_query("SELECT cp FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' $locc");
$num = mysql_num_rows($sql1);

$sql12 = mysql_query("SELECT sexo FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND sexo = 'M' $locc");
$m = mysql_num_rows($sql12);

$sql3 = mysql_query("SELECT ematur FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND ematur = 1  AND sexo != 'M'");
$f1 = mysql_num_rows($sql3);

$sql5 = mysql_query("SELECT ematur FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND ematur = 2  AND sexo != 'M'");
$f2_6 = mysql_num_rows($sql5);
$fo = $num - ($m + $f1 + $f2_6);

echo "<tr>
<td align=\"left\">".$f."mm"." a ".$g."mm"."</td>
<td align=\"center\">".$num."</td>
</tr>";

$f2_6 = 0;
 $g = $g + 0.02;
$n1 += $num;
$f = $f + 10;
}
?>
</table>
<br /><br /><br />


</div>
</div>