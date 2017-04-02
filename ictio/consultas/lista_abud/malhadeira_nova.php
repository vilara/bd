<?php



if ($aparelho == "Malhadeira")

{$sql = "SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie";

                                                    //

   }

   else if ($aparelho == "Redinha"){ /*SELECT

    red_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam,

    sum(red_qtde) AS tot,

    lim_local

    FROM ictiomadeira.tb_redinha_biotico

    INNER JOIN tb_especies ON tb_redinha_biotico.red_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno ON tb_redinha_biotico.red_lim = tb_limno.id_tb_limno

    INNER JOIN tb_local ON tb_limno.lim_local = tb_local.id_tab_local

    WHERE loc_ordem BETWEEN 1 AND 21   $excu1 AND tb_limno.lim_padronizado = 'Sim' GROUP BY red_especie ORDER BY esp_especie*/

    $sql = "SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie";

   }

   else if ($aparelho == "Espinhel"){ /*SELECT

    espi_esp AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam,

    sum(espi_qtde) AS tot,

    lim_local

    FROM ictiomadeira.tb_espinhel_biotico

    INNER JOIN tb_especies ON tb_espinhel_biotico.espi_esp = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_espinhel_biotico.espi_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE loc_ordem BETWEEN 1 AND 21 $excu3 AND tb_limno_outr.lim_outr_padronizado = 'Sim' GROUP BY espi_esp ORDER BY esp_especie*/

    $sql = "";

   }

    else if ($aparelho == "Tarrafa"){

    $sql = "SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie";

   }

   else if ($aparelho == "Puça"){/*SELECT

    outr_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam,

    sum(outr_qtde) AS tot,

    lim_local

    FROM ictiomadeira.tb_outros_biotico

    INNER JOIN tb_especies ON tb_outros_biotico.outr_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE loc_ordem BETWEEN 1 AND 21 $excu3 AND lim_outr_aparelho='Puça' AND tb_limno_outr.lim_outr_padronizado = 'Sim' GROUP BY outr_especie ORDER BY esp_especie*/

    $sql = utf8_encode("SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie");

   }

 else if ($aparelho == "Arrasto de fundo"){ /*SELECT

    arr_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam,

    sum(arr_qtde) AS tot,

    lim_arr_loc

     FROM ictiomadeira.tb_arrastofundo_biotico

      INNER JOIN tb_especies ON tb_arrastofundo_biotico.arr_especie = tb_especies.id_tab_especie

      INNER JOIN tb_limno_arr ON tb_arrastofundo_biotico.arr_lim = tb_limno_arr.id_tb_limno_arr

      INNER JOIN tb_local ON tb_limno_arr.lim_arr_loc = tb_local.id_tab_local

    WHERE loc_ordem BETWEEN 51 AND 63 $excu2 AND tb_limno_arr.lim_arr_padronizado = 'Sim' GROUP BY arr_especie ORDER BY esp_especie*/

   // include_once "exc/arrasto.php";

    $sql = "SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie";

   }



    else if ($aparelho == "Todos"){

   // include_once "exc/arrasto.php";

    $sql = "SELECT

    id_tab_especie AS idesp,

    esp_especie AS esp,

    esp_ordem AS ord,

    esp_familia AS fam

     FROM ictiomadeira.tb_especies where esp_especie != '' AND  esp_especie != '#'

      ORDER BY esp_especie";

   }

// Início dos resultados para Malhadeira --------------------------------------------------------------------------

?>

<tr class="titulo">



<td colspan="64">Aparelho: <?php echo"$aparelho ";?>



 ---- Excursão: <?php echo"$exc ";?> </td>

</tr>

<tr class="titulo">

<?php

if($aparelho != "Arrasto de fundo"){

?>

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

<td title="Jaciparana Foz-Foz">JFF</td><!--17-->

<?php

}else{

?>

<td>Ordem</td>

<td>Família</td>

<td>Espécie</td>

<td>Rio Guaporé ACM 46_50</td>

<td>Rio Guaporé ACM 51_55</td>

<td>Rio Guaporé ACM 56_60</td>

<td>Rio Guaporé ACM 61_65</td>

<td>Rio Guaporé ACM 16_20</td>

<td>Rio Mamoré ACM 21_25</td>

<td>Rio Mamoré ACM 26_30</td>

<td>Rio Madeira COR 1_5</td>

<td>Rio Madeira COR 6_10</td>

<td>Rio Madeira COR 11_15</td>

<td>Rio Madeira ACJ 31_35</td>

<td>Rio Madeira ACJ 36_40</td>

<td>Rio Madeira ACJ 41_45</td>

<?php

}

?>



<!--<td>Total Capturado</td> -->



</tr>

<?php





$l1 = 0;

$n = 1;





 /*   $pdo = new PDO("mysql:host=localhost; dbname=ictiomadeira; charset=utf8;", "root", "", $opcoes);*/

     $pdo = new PDO("mysql:host=mysql01.ictiomadeira.com.br; dbname=ictiomadeira; charset=utf8;", "ictiomadeira", "guariba***", $opcoes);   

    $dados = $pdo->prepare($sql);

    $dados->execute();

    $esc = json_encode($dados->fetchAll(PDO::FETCH_ASSOC));

    $esc  = json_decode($esc);



                  foreach ( $esc as $ee ) {





if ($aparelho != "Todos"){

         if ($aparelho == "Malhadeira")

{      $sql1 = "SELECT count(malh_especie) AS num , loc_ordem

    FROM tb_malhadeira_biotico

    INNER JOIN tb_especies ON tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno ON tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno

    INNER JOIN tb_local ON tb_limno.lim_local = tb_local.id_tab_local

    WHERE

    malh_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu1 AND tb_limno.lim_padronizado = 'Sim'

    GROUP BY loc_ordem  " ; }









        else if ($aparelho == "Redinha")

{      $sql1 = "SELECT sum(red_qtde) AS num , loc_ordem

    FROM tb_redinha_biotico

    INNER JOIN tb_especies ON tb_redinha_biotico.red_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno ON tb_redinha_biotico.red_lim = tb_limno.id_tb_limno

    INNER JOIN tb_local ON tb_limno.lim_local = tb_local.id_tab_local

    WHERE

    red_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu1  AND tb_limno.lim_padronizado = 'Sim'

    GROUP BY loc_ordem  "; }



    else if ($aparelho == "Espinhel")

{      $sql1 = "SELECT sum(espi_qtde) AS num  , loc_ordem

    FROM tb_espinhel_biotico

     INNER JOIN tb_especies ON tb_espinhel_biotico.espi_esp = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_espinhel_biotico.espi_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE

    espi_esp = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3  AND tb_limno_outr.lim_outr_padronizado = 'Sim'

    GROUP BY loc_ordem  "; }



    else if ($aparelho == "Tarrafa")

{      $sql1 = "SELECT sum(outr_qtde) AS num   , loc_ordem

    FROM tb_outros_biotico

     INNER JOIN tb_especies ON tb_outros_biotico.outr_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE

    outr_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3  AND tb_limno_outr.lim_outr_padronizado = 'Sim'

     AND lim_outr_aparelho='Tarrafa' GROUP BY loc_ordem "; }



     else if ($aparelho == "Puça")

{      $sql1 = "SELECT sum(outr_qtde) AS num    , loc_ordem

    FROM tb_outros_biotico

     INNER JOIN tb_especies ON tb_outros_biotico.outr_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

     WHERE

    outr_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3  AND tb_limno_outr.lim_outr_padronizado = 'Sim'

     AND lim_outr_aparelho='Puça' GROUP BY loc_ordem "; }



    else if ($aparelho == "Arrasto de fundo"){

      $ii = $i + 50;    // são outros locais

    $sql1 = "SELECT sum(arr_qtde) AS num    , loc_ordem

    FROM ictiomadeira.tb_arrastofundo_biotico

   INNER JOIN tb_especies ON tb_arrastofundo_biotico.arr_especie = tb_especies.id_tab_especie

   INNER JOIN tb_limno_arr ON tb_arrastofundo_biotico.arr_lim = tb_limno_arr.id_tb_limno_arr

     INNER JOIN tb_local ON tb_limno_arr.lim_arr_loc = tb_local.id_tab_local

    WHERE

    arr_especie = '$ee->idesp'

     AND loc_ordem BETWEEN 51 AND 63 $excu2 AND tb_limno_arr.lim_arr_padronizado = 'Sim'

    GROUP BY loc_ordem  ";

    }

    $dados1 = $pdo->prepare($sql1);

    $dados1->execute();

    $esc1 = json_encode($dados1->fetchAll(PDO::FETCH_ASSOC));

    $esc1  = json_decode($esc1);



    //  foreach ( $esc1 as $ee1 ) {  $num[$i] = $ee1->num; if($num[$i] == 0){$num[$i]="";}}/*'$ee->lim_local'*/

    foreach ( $esc1 as $ee1 ) {  $num[$ee1->loc_ordem] = $ee1->num;}

$tott +=  $ee->tot;

}else{

    $tot = "";

    //"Malhadeira"

     $sql_m = "SELECT count(malh_especie) AS num , loc_ordem

    FROM tb_malhadeira_biotico

    INNER JOIN tb_especies ON tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno ON tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno

    INNER JOIN tb_local ON tb_limno.lim_local = tb_local.id_tab_local

    WHERE

    malh_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu1  AND tb_limno.lim_padronizado = 'Sim'

    GROUP BY loc_ordem " ;

    $dados_m = $pdo->prepare($sql_m);

    $dados_m->execute();

    $esc_m = json_encode($dados_m->fetchAll(PDO::FETCH_ASSOC));

    $esc_m  = json_decode($esc_m);

   foreach ( $esc_m as $ee_m ) {  $num[$ee_m->loc_ordem] = $ee_m->num; $tot+=$ee_m->num; $tott+=$ee_m->num;}

 //"Redinha"

   $sql_r = "SELECT sum(red_qtde) AS num , loc_ordem

    FROM tb_redinha_biotico

    INNER JOIN tb_especies ON tb_redinha_biotico.red_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno ON tb_redinha_biotico.red_lim = tb_limno.id_tb_limno

    INNER JOIN tb_local ON tb_limno.lim_local = tb_local.id_tab_local

    WHERE

    red_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu1  AND tb_limno.lim_padronizado = 'Sim'

    GROUP BY loc_ordem " ;

    $dados_r = $pdo->prepare($sql_r);

    $dados_r->execute();

    $esc_r = json_encode($dados_r->fetchAll(PDO::FETCH_ASSOC));

    $esc_r  = json_decode($esc_r);

   foreach ( $esc_r as $ee_r ) {  $num[$ee_r->loc_ordem] += $ee_r->num; $tot+=$ee_r->num; $tott+=$ee_r->num;}

     //"Espinhel"

   $sql_e = "SELECT sum(espi_qtde) AS num  , loc_ordem

    FROM tb_espinhel_biotico

     INNER JOIN tb_especies ON tb_espinhel_biotico.espi_esp = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_espinhel_biotico.espi_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE

    espi_esp = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3 AND tb_limno_outr.lim_outr_padronizado = 'Sim'

    GROUP BY loc_ordem " ;

    $dados_e = $pdo->prepare($sql_e);

    $dados_e->execute();

    $esc_e = json_encode($dados_e->fetchAll(PDO::FETCH_ASSOC));

    $esc_e  = json_decode($esc_e);

   foreach ( $esc_e as $ee_e ) {  $num[$ee_e->loc_ordem] += $ee_e->num; $tot+=$ee_e->num; $tott+=$ee_e->num;}

  //"Tarrafa"

   $sql_t = "SELECT sum(outr_qtde) AS num   , loc_ordem

    FROM tb_outros_biotico

     INNER JOIN tb_especies ON tb_outros_biotico.outr_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE

    outr_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3 AND tb_limno_outr.lim_outr_padronizado = 'Sim'

    AND lim_outr_aparelho='Tarrafa' GROUP BY loc_ordem " ;

    $dados_t = $pdo->prepare($sql_t);

    $dados_t->execute();

    $esc_t = json_encode($dados_t->fetchAll(PDO::FETCH_ASSOC));

    $esc_t  = json_decode($esc_t);

   foreach ( $esc_t as $ee_t ) {  $num[$ee_t->loc_ordem] += $ee_t->num; $tot+=$ee_t->num; $tott+=$ee_t->num;}

   //"Puça"

   $sql_p = "SELECT sum(outr_qtde) AS num   , loc_ordem

    FROM tb_outros_biotico

     INNER JOIN tb_especies ON tb_outros_biotico.outr_especie = tb_especies.id_tab_especie

    INNER JOIN tb_limno_outr ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr

    INNER JOIN tb_local ON tb_limno_outr.lim_local = tb_local.id_tab_local

    WHERE

    outr_especie = '$ee->idesp'

    AND loc_ordem BETWEEN 1 AND 21 $excu3 AND tb_limno_outr.lim_outr_padronizado = 'Sim'

    AND lim_outr_aparelho='Puça' GROUP BY loc_ordem " ;

    $dados_p = $pdo->prepare($sql_p);

    $dados_p->execute();

    $esc_p = json_encode($dados_p->fetchAll(PDO::FETCH_ASSOC));

    $esc_p  = json_decode($esc_p);

   foreach ( $esc_p as $ee_p ) {  $num[$ee_p->loc_ordem] += $ee_p->num; $tot+=$ee_p->num; $tott+=$ee_p->num;}

}

/*--------Linhas de resultados */   if($aparelho == "Todos"){$tot=$tot;}else{$tot =$ee->tot;}

if($aparelho != "Arrasto de fundo"){

//  if($tot!=""){

echo "<tr>

<td align=\"left\">".$ee->ord."</td>

<td align=\"left\">".$ee->fam."</td>

<td align=\"left\">".$ee->esp."</td>

<td title=\"Cutário\" align=\"center\">".$num[1]."</td>

<td title=\"Sotério\" align=\"center\">".$num[2]."</td>

<td title=\"Pacaás\" align=\"center\">".$num[3]."</td>

<td title=\"Arara\" align=\"center\">".$num[4]."</td>

<td title=\"Mutumparaná\" align=\"center\">".$num[5]."</td>

<td title=\"São Lourenço\" align=\"center\">".$num[6]."</td>

<td title=\"Karipunas (Montante)\" align=\"center\">".$num[7]."</td>

<td title=\"Karipunas (Foz)\" align=\"center\">".$num[8]."</td>

<td title=\"Jaciparaná (Montante)\" align=\"center\">".$num[9]."</td>

<td title=\"Jaciparaná (Foz)\" align=\"center\">".$num[10]."</td>

<td title=\"Jatuarana\" align=\"center\">".$num[11]."</td>

<td title=\"Belmont (Montante)\" align=\"center\">".$num[12]."</td>

<td title=\"Belmont (Foz)\" align=\"center\">".$num[13]."</td>

<td title=\"Cuniã\" align=\"center\">".$num[14]."</td>

<td title=\"Puruzinho\" align=\"center\">".$num[15]."</td>

<td title=\"Machado (Montante)\" align=\"center\">".$num[16]."</td>

<td title=\"Machado (Foz)\" align=\"center\">".$num[17]."</td>

<td title=\"Manicoré\" align=\"center\">".$num[18]."</td>

<td title=\"Aripuanã\" align=\"center\">".$num[19]."</td>

<td title=\"Lago Sampaio\" align=\"center\">".$num[20]."</td>

<td title=\"Jaciparana Foz\" align=\"center\">".$num[21]."</td>







</tr>";for($i=1;$i < 23;$i++){$num[$i] = ""; }

}else{



echo "<tr>

<td align=\"left\">".utf8_encode($ee->ord)."</td>

<td align=\"left\">".utf8_encode($ee->fam)."</td>

<td align=\"left\">".utf8_encode($ee->esp)."</td>





<td align=\"center\">".$num[51]."</td>

<td align=\"center\">".$num[52]."</td>

<td align=\"center\">".$num[53]."</td>

<td align=\"center\">".$num[54]."</td>



<td align=\"center\">".$num[55]."</td>



<td align=\"center\">".$num[56]."</td>

<td align=\"center\">".$num[57]."</td>

<td align=\"center\">".$num[58]."</td>

<td align=\"center\">".$num[59]."</td>

<td align=\"center\">".$num[60]."</td>

<td align=\"center\">".$num[61]."</td>

<td align=\"center\">".$num[62]."</td>

<td align=\"center\">".$num[63]."</td>





</tr>";

 for($i=51;$i < 64;$i++){$num[$i] = ""; }

$n++;}

}

?>



