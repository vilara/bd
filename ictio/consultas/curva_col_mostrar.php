

<?php
 $aparelho = $_GET["aparelho"];
 $exc = $_GET["exc"];
?>

<div id="tabelas">
<div id="tabela">
<?php
$nn = 1;
$cun_t = 0;

$res = mysql_query("SELECT * FROM tb_especies");
while($registro = mysql_fetch_row($res))
{
      $id = $registro[0];
      $Ord[$nn] = $registro[1];
      $Fam[$nn] = $registro[2];
      $esp[$nn] = $registro[3];
     if ($aparelho == "Malhadeira" OR $aparelho == "Todos")
     {
    $res1 = mysql_query("SELECT * FROM tb_malhadeira_biotico WHERE malh_especie = '$id' GROUP BY malh_lim");
      while($registro = mysql_fetch_row($res1))
      {$lim[$nn] =  $registro[1];

              $res2 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = '$lim[$nn]' AND lim_aparelho = 'Malhadeira'");
              while($registro = mysql_fetch_row($res2))
              {$loc1[$nn] = $registro[1];

              if($loc1[$nn] == 1){$cunn[$nn] = "X";$cun_t++;}
              if($loc1[$nn] == 2){$beff[$nn] = "X";}
              if($loc1[$nn] == 3){$bemm[$nn] = "X";}
              if($loc1[$nn] == 4){$jatt[$nn] = "X";}
              if($loc1[$nn] == 5){$jaff[$nn] = "X";}
              if($loc1[$nn] == 6){$jamm[$nn] = "X";}
              if($loc1[$nn] == 7){$sloo[$nn] = "X";}
              if($loc1[$nn] == 8){$kaff[$nn] = "X";}

              // echo "$id--$esp[$nn]--$lim[$nn]--$loc1[$nn]<br>";
              }

        }
        }

         if ($aparelho == "Redinha" OR $aparelho == "Todos")
     {
        $res11 = mysql_query("SELECT * FROM tb_redinha_biotico WHERE red_especie = '$id' GROUP BY red_lim");
        while($registro11 = mysql_fetch_row($res11))
        {$lim11[$nn] =  $registro11[2];

              $res22 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = '$lim11[$nn]' AND lim_aparelho = 'Redinha'");
              while($registro22 = mysql_fetch_row($res22))
              {$loc11[$nn] = $registro22[1];

              if($loc11[$nn] == 1){$cunn[$nn] = "X";$cun_t++;}
              if($loc11[$nn] == 2){$beff[$nn] = "X";}
              if($loc11[$nn] == 3){$bemm[$nn] = "X";}
              if($loc11[$nn] == 4){$jatt[$nn] = "X";}
              if($loc11[$nn] == 5){$jaff[$nn] = "X";}
              if($loc11[$nn] == 6){$jamm[$nn] = "X";}
              if($loc11[$nn] == 7){$sloo[$nn] = "X";}
              if($loc11[$nn] == 8){$kaff[$nn] = "X";}
              }
        }
        }

         if ($aparelho == "Arrasto de fundo" OR $aparelho == "Todos")
     {
        $res111 = mysql_query("SELECT * FROM tb_arrastofundo_biotico WHERE arr_especie = '$id' GROUP BY arr_lim");
        while($registro111 = mysql_fetch_row($res111))
        {$lim111[$nn] =  $registro111[2];

              $res222 = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = '$lim111[$nn]'");
              while($registro222 = mysql_fetch_row($res222))
              {$loc111[$nn] = $registro222[2];
              if($loc111[$nn] == 1){$cunn[$nn] = "X";$cun_t++;}
              if($loc111[$nn] == 2){$beff[$nn] = "X";}
              if($loc111[$nn] == 3){$bemm[$nn] = "X";}
              if($loc111[$nn] == 4){$jatt[$nn] = "X";}
              if($loc111[$nn] == 5){$jaff[$nn] = "X";}
              if($loc111[$nn] == 6){$jamm[$nn] = "X";}
              if($loc111[$nn] == 7){$sloo[$nn] = "X";}
              if($loc111[$nn] == 8){$kaff[$nn] = "X";}
             //  echo "$id--$esp[$nn]--$lim111[$nn]--$loc111[$nn]<br>";
              }
       }

        }

         if ($aparelho == "Espinhel" OR $aparelho == "Todos" OR $aparelho == "Puça")


     {

        $res1111 = mysql_query("SELECT * FROM tb_outros_biotico WHERE outr_especie = '$id' GROUP BY outr_lim");
        while($registro1111 = mysql_fetch_row($res1111))
        {$lim1111[$nn] =  $registro1111[2];

              $filt = " AND lim_outr_aparelho = '$aparelho'";

              if ($aparelho == "Todos"){$filt = "";}
              // echo "$filt";
              $res2222 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$lim1111[$nn]' $filt ");
              while($registro2222 = mysql_fetch_row($res2222))
              {$loc1111[$nn] = $registro2222[1];
              if($loc1111[$nn] == 1){$cunn[$nn] = "X";$cun_t++;}
              if($loc1111[$nn] == 2){$beff[$nn] = "X";}
              if($loc1111[$nn] == 3){$bemm[$nn] = "X";}
              if($loc1111[$nn] == 4){$jatt[$nn] = "X";}
              if($loc1111[$nn] == 5){$jaff[$nn] = "X";}
              if($loc1111[$nn] == 6){$jamm[$nn] = "X";}
              if($loc1111[$nn] == 7){$sloo[$nn] = "X";}
              if($loc1111[$nn] == 8){$kaff[$nn] = "X";}
             //  echo "$id--$esp[$nn]--$lim111[$nn]--$loc111[$nn]<br>";
              }
       }
       }





    //    echo "$nn,,";
      $nn++;
}



?>

<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">
<td colspan="24">Aparelho: <?php echo"$aparelho ";?></td>
</tr>

<tr class="titulo">

    <td align="left" width="250" colspan="3">EXCURSÕES</td>
    <td title="Lago Cunião" align="" width="30">1</td>
    <td title="Lago Cunião" align="" width="30">2</td>
    <td title="Lago Cunião" align="" width="30">3</td>
    <td title="Lago Cunião" align="" width="30">4</td>
    <td title="Lago Cunião" align="" width="30">5</td>
    <td title="Lago Cunião" align="" width="30">6</td>
    <td title="Lago Cunião" align="" width="30">7</td>
    <td title="Lago Cunião" align="" width="30">8</td>

</tr>


<?php
$ff = 1;

$cc = 2;

while($ff <= $nn)
{
$cor="#000000";
$cun_tt[$ff]=0;$bef_tt[$ff]=0;$bem_tt[$ff]=0;$jat_tt[$ff]=0;$jaf_tt[$ff]=0;$jam_tt[$ff]=0;$slo_tt[$ff]=0;
$kaf_tt[$ff]=0;
if($cunn[$ff] == "X"  OR $beff[$ff] == "X"OR $bemm[$ff] == "X" OR $jatt[$ff] == "X"
 OR $jaff[$ff] == "X" OR $jamm[$ff] == "X" OR $sloo[$ff] == "X" OR $kaff[$ff] == "X")
{
        if ($cunn[$ff] == "X"){$cun_tt[$ff]=1;}
		else if ($beff[$ff] == "X"){$bef_tt[$ff]=1;}
        else if ($bemm[$ff] == "X"){$bem_tt[$ff]=1;}
        else if ($jatt[$ff] == "X"){$jat_tt[$ff]=1;}
        else if ($jaff[$ff] == "X"){$jaf_tt[$ff]=1;}
        else if ($jamm[$ff] == "X"){$jam_tt[$ff]=1;}
        else if ($sloo[$ff] == "X"){$slo_tt[$ff]=1;}
        else if ($kaff[$ff] == "X"){$kaf_tt[$ff]=1;}



$cun_s += $cun_tt[$ff];
$bef_s += $bef_tt[$ff];
$bem_s += $bem_tt[$ff];
$jat_s += $jat_tt[$ff];
$jaf_s += $jaf_tt[$ff];
$jam_s += $jam_tt[$ff];
$slo_s += $slo_tt[$ff];
$kaf_s += $kaf_tt[$ff];



?>

    <tr>
        <td align="left" width="13%"><?php echo"$Ord[$ff]"; ?></td>
        <td align="left" width="13%"><?php echo"$Fam[$ff]"; ?></td>
        <td align="left" width="17%"><?php echo"$esp[$ff]"; ?></td>
        <td align="center" title="Cuniã" width="30"><?php echo"$cunn[$ff]"; ?></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$beff[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$bemm[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$jatt[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$jaff[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$jamm[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$sloo[$ff]"; ?></font></td>
        <td align="center" title="Cuniã" width="30"><font color="<?php echo"$cor"; ?>"><?php echo"$kaff[$ff]"; ?></font></td>

    </tr>

  <?php
$cc++;
$cor="#000000";
}

$ff++;


}
$bef_s1 = $cun_s + $bef_s;
$bem_s1 = $bem_s + $bef_s1;
$jat_s1 = $jat_s + $bem_s1;
$jaf_s1 = $jaf_s + $jat_s1;
$jam_s1 = $jam_s + $jaf_s1;
$slo_s1 = $slo_s + $jam_s1;
$kaf_s1 = $kaf_s + $slo_s1;

?>

      <tr class="titulo">

          <td align="left" colspan="3">Curva do coletor</td>
          <td align="center" title="Cuniã"><?php echo"$cun_s"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$bef_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$bem_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$jat_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$jaf_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$jam_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$slo_s1"; ?></td>
          <td align="center" title="Cuniã"><?php echo"$kaf_s1"; ?></td>

      </tr>
<?php


setlocale(LC_TIME,"portuguese");
$data_completa = strftime("%d de %B de %Y.");
?>

  </table>

  <div id="rodape_branco">
<p>Total de espécies capturadas:&nbsp;<?php echo"$kaf_s1";?> </p>
<p>Dados Atualizados em: &nbsp;<?php echo"$data_completa";?> </p>
</div>
    </div>
    </div>


