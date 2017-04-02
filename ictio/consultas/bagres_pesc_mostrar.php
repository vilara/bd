<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

function janelaSecundaria1 (URL){
   window.open(URL,"janela1","width=400,height=100,scrollbars=YES")
}
</script>

<?php

// echo "$local-xx";
 $tt = 0;
 ?>
 <div id="tabelas">
<div id="tabela">
<?php
if ($flag2 == 1){


  if ($nr_ref > 0){
  $dataa = " AND ref = '$nr_ref'";
  $emm = " ";
  $ann = " ";

  }


 if ($local > 0){
  $loccc = " AND loc = '$local'";
  }  else {$loccc = "";}



?>
<table cellspacing="0" align="center" width="25%" class="bordasimples">
<tr class="titulo"><td colspan="28">Espécie: <?php echo"$espe ";?></td></tr>
<tr class="titulo">
<td>Registro</td>
<td>Empr</td>
<td>Loc</td>
<td>Data</td>
<td>Ref</td>
<td>Categoria</td>
<td>Pt</td>
<td>Pt corr</td>
<td>Comp Tot</td>
<td>Comp Tot Corr</td>
<td>Cp</td>
<td>Cf</td>
<td>Cf Corr</td>
<td>Comp Cab</td>
<td>Sexo</td>
<td>Gono</td>
<td>P Gono</td>
<td>Ematur Mac</td>
<td>Ematur Histo</td>
<td>Esto</td>
<td>Gr</td>
<td>Teci</td>
<td>Gen</td>
<td>Origem</td>
<td>Arte</td>
<td>Anali</td>
<td>Obs</td>
<!--<td>Histo</td> -->
<!--<td>Cab</td>-->
<!--<td>Borda</td>
<td>IM</td>-->
 <td title="" align="left" >Edit</td>
</tr>
<?php
$n1 = 1;
$sql1 = mysql_query("SELECT * FROM pesc_col_mercado WHERE id_familiar > 0 $dataa $emm $ann $loccc AND cat = '$esp' AND (cp > 0 OR pt > 0)");
while($registro1 = mysql_fetch_row($sql1))
{
$reg =  $registro1[0];
$ref =  $registro1[17];
$empr =  $registro1[2];
$data =  $registro1[3];
$loc =  $registro1[4];
 $lista = new ManipulateData1();
  $NomeLoc = $lista->NomeLocalPesc($loc);
$cp =  $registro1[7];  if ($cp == 0){$cp = "";}
$pt =  $registro1[8]; if ($pt == 0){$pt = "";}
$sexo =  $registro1[18]; if ($sexo == "#"){$sexo = "";}
$ematur =  $registro1[19];if ($ematur == 0){$ematur = "";}
/*$histo =  $registro1[20];*/
$cpc =  $registro1[9];if ($cpc == 0){$cpc = "";}
$ct =  $registro1[6]; if ($ct == 0){$ct = "";}
$peg =  $registro1[14];if ($peg == 0){$peg = "";}
$esto =  $registro1[12];
$tecii = "";
$teci =  $registro1[21];
            if ($teci == "S"){$tecii = "Sim";}
            else if ($teci == "N"){$tecii = "Não";}
$gr =  $registro1[24]; if ($gr == 9){$gr = "";}
$obs =  $registro1[25];
$cf =  $registro1[26]; if ($cf == 0){$cf = "";}
$do =  $registro1[27];
$ematur_mac =  $registro1[68]; if ($ematur_mac == 0){$ematur_mac = "";}
$gen =  $registro1[69];
$odd = " ";
$od =  $registro1[70];
            if ($od == "ec"){$odd = "Equipe de crescimento";}
      else if ($od == "p"){$odd = "Pesca";}
       else if ($od == "n"){$odd = "Naturae";}


$app = "";
$ap =  $registro1[71];

            if ($ap == "gro"){$app = "Groseira";}
      else if ($ap == "fis"){$app = "Fisga";}
       else if ($ap == "tar"){$app = "Tarrafa";}
        else if ($ap == "esp"){$app = "Espinhel";}
         else if ($ap == "cov"){$app = "Covo";}
          else if ($ap == "cac"){$app = "Caçoeira";}
           else if ($ap == "mal"){$app = "Malhadeira";}

$anali =  $registro1[72];
$bor =  $registro1[73];
$im =  $registro1[74];
$goo = "";
$go =  $registro1[75];

if ($go == "S"){$goo = "Sim";}
            else if ($go == "N"){$goo = "Não";}
$est =  $registro1[76];
$pt_corr =  $registro1[77];
if ($pt_corr == 0){$pt_corr = "";}

$ct_corr =  $registro1[78];
if ($ct_corr == 0){$ct_corr = "";}

$cf_corr =  $registro1[79];
if ($cf_corr == 0){$cf_corr = "";}



echo "<tr>
<td align=\"center\">".$reg."</td>
<td align=\"center\">".$empr."</td>
<td align=\"center\">".$NomeLoc."</td>
<td align=\"center\">".$data."</td>
<td align=\"center\">".$ref."</td>
<td align=\"center\">".$espe."</td>
<td align=\"center\">".$pt."</td>
<td align=\"center\">".$pt_corr."</td>
<td align=\"center\">".$ct."</td>

<td align=\"center\">".$ct_corr."</td>

<td align=\"center\">".$cp."</td>
<td align=\"center\">".$cf."</td>

<td align=\"center\">".$cf_corr."</td>

<td align=\"center\">".$cpc."</td>
<td align=\"center\">".$sexo."</td>
<td align=\"center\">".$goo."</td>
<td align=\"center\">".$peg."</td>
<td align=\"center\">".$ematur_mac."</td>
<td align=\"center\">".$ematur."</td>
<td align=\"center\">".$est."</td>
<td align=\"center\">".$gr."</td>
<td align=\"center\">".$tecii."</td>
<td align=\"center\">".$gen."</td>
<td align=\"center\">".$odd."</td>
<td align=\"center\">".$app."</td>
<td align=\"center\">".$anali."</td>
<td align=\"center\">".$obs."</td>
<td title=\"Excursão\" >
<a href=\"javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=".$reg."&aparelho=Biometria&flag=1')\" >
<img src='img/edit.png' width='16' height='16' alt='Editar' border=\"0\" /></a></td>
</tr>";
$n1++;
}
?>
</table>
<?php
}
else {


  $dataa = $_GET["dataa"];
   $ann = $_GET["ann"];
  $emm = $_GET["emm"];

  // echo "$dataa";

  if ($nr_ref > 0){
  $dataa = " AND nr = '$nr_ref'";
  $emm = " ";
  $ann = " ";

  }

   if ($local > 0){
  $loccc = " AND loc = '$local'";
  }  else {$loccc = "";}

		?>



<table cellspacing="0" align="center" width="25%" class="bordasimples">
<tr class="titulo"><td colspan="98">Espécie: <?php echo"$espe ";?></td></tr>
<tr class="titulo">
<td>Registro</td>
<td>Ref</td>
<td>Comp Tot</td>
<td>Cf</td>
<td>Pt</td>
<td>DO</td>
<td>Borda</td>
<td>IM</td>


<td>ldl</td><td>lel</td><td>ldp</td><td>lep</td><td>lda</td><td>lea</td>
<td>adl</td><td>ael</td><td>adp</td><td>aep</td><td>ada</td><td>aea</td>
<td>sdl</td><td>sel</td><td>sdp</td><td>sep</td><td>sda</td><td>sea</td>

<td>R1</td><td>R2</td><td>R3</td><td>R4</td><td>R5</td><td>R6</td><td>R7</td><td>R8</td><td>R9</td><td>R10</td>
<td>R11</td><td>R12</td><td>R13</td><td>R14</td><td>R15</td><td>R16</td><td>R17</td><td>R18</td><td>R19</td><td>R20</td>
<td>RT</td>
  <td title="" align="left" >Edit</td>

<!-- <td title="" align="left" >Edit</td> -->
</tr>
<?php
$n1 = 1;
$sql1 = mysql_query("SELECT * FROM pesc_col_mercado WHERE id_familiar > 0 $dataa $emm $ann $loccc  AND cat = '$esp' AND (cp > 0 OR pt > 0)");
while($registro1 = mysql_fetch_row($sql1))
{
$reg =  $registro1[0];
$ref =  $registro1[17];
$cp =  $registro1[7];
$cf =  $registro1[26];
$pt =  $registro1[8];if ($pt == 0){$pt = "";}
$do =  $registro1[27];
$bor =  $registro1[73];
$im =  $registro1[74]; if($im == 0){$im = "";}

$ldl =  $registro1[28];if ($ldl == 0){$ldl = "";}
$lel =  $registro1[29];if ($lel == 0){$lel = "";}
$ldp =  $registro1[30]; if ($ldp == 0){$ldp = "";}
$lep =  $registro1[31];if ($lep == 0){$lep = "";}
$lda =  $registro1[32]; if ($lda == 0){$lda = "";}
$lea =  $registro1[33];if ($lea == 0){$lea = "";}

$adl =  $registro1[34]; if ($adl == 0){$adl = "";}
$ael =  $registro1[35];if ($ael == 0){$ael = "";}
$adp =  $registro1[36];if ($adp == 0){$adp = "";}
$aep =  $registro1[37];if ($aep == 0){$aep = "";}
$ada =  $registro1[38];if ($ada == 0){$ada = "";}
$aea =  $registro1[39];if ($aea == 0){$aea = "";}

$sdl =  $registro1[40];if ($sdl == 0){$sdl = "";}
$sel =  $registro1[41];if ($sel == 0){$sel = "";}
$sdp =  $registro1[42];if ($sdp == 0){$sdp = "";}
$sep =  $registro1[43];if ($sep == 0){$sep = "";}
$sda =  $registro1[44];if ($sda == 0){$sda = "";}
$sea =  $registro1[45];if ($sea == 0){$sea = "";}

$r1 =  $registro1[47];
$r2 =  $registro1[48];
$r3 =  $registro1[49];
$r4 =  $registro1[50];
$r5 =  $registro1[51];
$r6 =  $registro1[52];
$r7 =  $registro1[53];
$r8 =  $registro1[54];
$r9 =  $registro1[55];
$r10 =  $registro1[56];
$r11 =  $registro1[57];
$r12 =  $registro1[58];
$r13 =  $registro1[59];
$r14 =  $registro1[60];
$r15 =  $registro1[61];
$r16 =  $registro1[62];
$r17 =  $registro1[63];
$r18 =  $registro1[64];
$r19 =  $registro1[65];
$r20 =  $registro1[66];

if ($r1 == 0){$r1 = "";}if ($r2 == 0){$r2 = "";} if ($r3 == 0){$r3 = "";} if ($r4 == 0){$r4 = "";} if ($r5 == 0){$r5 = "";}
if ($r6 == 0){$r6 = "";}if ($r7 == 0){$r7 = "";} if ($r8 == 0){$r8 = "";} if ($r9 == 0){$r9 = "";} if ($r10 == 0){$r10 = "";}
if ($r11 == 0){$r11 = "";}if ($r12 == 0){$r12 = "";} if ($r13 == 0){$r13 = "";} if ($r14 == 0){$r14 = "";} if ($r15 == 0){$r15 = "";}
if ($r16 == 0){$r16 = "";}if ($r17 == 0){$r17 = "";} if ($r18 == 0){$r18 = "";} if ($r19 == 0){$r19 = "";} if ($r20 == 0){$r20 = "";}


$rt =  $registro1[46];


echo "<tr>
<td align=\"center\">".$reg."</td>
<td align=\"center\">".$ref."</td>
<td align=\"center\">".$cp."</td>
<td align=\"center\">".$cf."</td>
<td align=\"center\">".$pt."</td>
<td align=\"center\">".$do."</td>
<td align=\"center\">".$bor."</td>
<td align=\"center\">".$im."</td>

<td align=\"center\">".$ldl."</td>
<td align=\"center\">".$lel."</td>
<td align=\"center\">".$ldp."</td>
<td align=\"center\">".$lep."</td>
<td align=\"center\">".$lda."</td>
<td align=\"center\">".$lea."</td>

<td align=\"center\">".$adl."</td>
<td align=\"center\">".$ael."</td>
<td align=\"center\">".$adp."</td>
<td align=\"center\">".$aep."</td>
<td align=\"center\">".$ada."</td>
<td align=\"center\">".$aea."</td>

<td align=\"center\">".$sdl."</td>
<td align=\"center\">".$sel."</td>
<td align=\"center\">".$sdp."</td>
<td align=\"center\">".$sep."</td>
<td align=\"center\">".$sda."</td>
<td align=\"center\">".$sea."</td>


<td align=\"center\">".$r1."</td><td align=\"center\">".$r2."</td><td align=\"center\">".$r3."</td><td align=\"center\">".$r4."</td>
<td align=\"center\">".$r5."</td><td align=\"center\">".$r6."</td><td align=\"center\">".$r7."</td><td align=\"center\">".$r8."</td>
<td align=\"center\">".$r9."</td><td align=\"center\">".$r10."</td><td align=\"center\">".$r11."</td><td align=\"center\">".$r12."</td>
<td align=\"center\">".$r13."</td><td align=\"center\">".$r14."</td><td align=\"center\">".$r15."</td><td align=\"center\">".$r16."</td>
<td align=\"center\">".$r17."</td><td align=\"center\">".$r18."</td><td align=\"center\">".$r19."</td><td align=\"center\">".$r20."</td>

<td align=\"center\">".$rt."</td>

<td title=\"Excursão\" >
<a href=\"javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=".$reg."&aparelho=Biometria&flag=2')\" >
<img src='img/edit.png' width='16' height='16' alt='Editar' border=\"0\" /></a></td>



</tr>";
$n1++;
}
?>
<!--<td title=\"Excursão\" >
<a href=\"javascript:janelaSecundaria('../pesca/editar/index.php?secoes=edit/editar_merc_inserir&idd=".$reg."&aparelho=Biometria&flag=2')\" >
<img src='img/edit.png' width='16' height='16' alt='Editar' border=\"0\" /></a></td>-->
</table>

<?php
}

if ($flag2 == 1){
?>
<br /><br />
 <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/bagres_pesc&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&dataa=<?php echo"$dataa"; ?>&ann=<?php echo"$ann"; ?>&emm=<?php echo"$emm"; ?>&locc=<?php echo"$locc"; ?>" enctype="multipart/form-data">

    <input name="esp" type="hidden"  value="<?php echo"$esp"; ?>" />

<center><input type="submit" value="Continuar..." class="botao2"  /></center>
 </form>
<br /><br /><br />


<!--<table cellspacing="0" align="center" width="40%" class="bordasimples">
<tr class="titulo">
<td colspan="14">Espécie: <?php echo"$espe ";?> </td>
</tr>
<tr class="titulo">
<td>Código</td>
<td>Qtde</td>
<td>Macho</td>
<td>F2 a F6</td>
<td>F1</td>
<td>N Identif</td>
</tr>-->
<?php
/*$sql = mysql_query("SELECT max(cp) FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp'");
while($registro = mysql_fetch_row($sql))
{$max =  $registro[0];}

$sql = mysql_query("SELECT min(cp) FROM pesc_col_mercado WHERE id_familiar >= 1 AND cp > 0 AND cat = '$esp'");
while($registro = mysql_fetch_row($sql))
{$min =  $registro[0];}



$f = 0; $n = 0;
while ($f <= $max){
$g = $f + 39.99;

$sql1 = mysql_query("SELECT cp FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp'");
$num = mysql_num_rows($sql1);

$sql12 = mysql_query("SELECT sexo FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND sexo = 'M'");
$m = mysql_num_rows($sql12);


$sql3 = mysql_query("SELECT ematur FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND ematur = 1  AND sexo != 'M'");
$f1 = mysql_num_rows($sql3);

$sql5 = mysql_query("SELECT ematur FROM pesc_col_mercado WHERE cp BETWEEN '$f' AND '$g' AND cp > 0 AND cat = '$esp' AND ematur = 2  AND sexo != 'M'");
$f2_6 = mysql_num_rows($sql5);
$fo = $num - ($m + $f1 + $f2_6);

echo "<tr>
<td align=\"left\">".$f."mm"." a ".$g."mm"."</td>
<td align=\"center\">".$num."</td>
<td align=\"center\">".$m."</td>
<td align=\"center\">".$f2_6."</td>
<td align=\"center\">".$f1."</td>

<td align=\"center\">".$fo."</td>

</tr>";
$f2_6 = 0;
 $g = $g + 0.02;
$n++;
$f = $f + 40;
}*/
?>
<!--</table>
<br /><br /><br />-->

<?php

?>

<!--<br /><br /><br />
<table cellspacing="0" align="center" width="30%" class="bordasimples">
<tr class="titulo">
<td colspan="2">RESUMO</td>
</tr>
<tr>
<td align="left">Qtde Indivíduos</td><td><?php echo "$n1"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Máximo</td><td><?php echo "$max"; ?></td>
</tr>
<tr>
<td align="left">Comprimento Mínimo</td><td><?php echo "$min"; ?></td>
</tr>

<tr>
<td align="left"><b>TOTAL</b></td><td><b><?php echo "$cat_s"; ?></b></td>
</tr>
</table>-->

<?php

}else {
?>
 <form>
<center><input type="button" value="Voltar" class="botao2" onclick="history.go(-1)"  /></center>
 </form>
<?php
 }

?>
</div>
</div>