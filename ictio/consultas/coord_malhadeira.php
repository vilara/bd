<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?>




<div id="conteudo">
<h3>Testes</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" width="20%" align="center" width="100%" class="bordasimples">
<tr class="titulo">
 <td  width="20%">Família</td>
<td  width="20%">Espécie</td>
  <td  width="20%">Cod</td><!---->
  <td  width="20%">Lat</td>
  <td  width="20%">Long</td>
<!--  <td  width="20%">bio_qtde</td>
   <td  width="20%">bio_nr</td>
    <td  width="20%">bio_col</td>
     <td  width="20%">bio_esto</td>
     <td  width="20%">bio_teci</td>
       <td  width="20%">bio_foto</td>
       <td  width="20%">bio_time</td>
-->




 </tr>
  <?php
/* tb_malhadeira_biotico.id_tb_malhadeira ,,
  tb_limno.idlimnologia,
  tb_malhadeira_biotico.malh_especie,
   tb_limno.lim_aparelho,
   tb_malhadeira_biotico.malh_numero ,
    tb_malhadeira_biotico.malh_voucher ,
     tb_malhadeira_biotico.malh_esto  ,
      tb_malhadeira_biotico.malh_teci ,
       tb_malhadeira_biotico.malh_foto ,
        tb_malhadeira_biotico.time
                                                 `tb_malhadeira_biotico`
 ON tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno
        */
$res = mysql_query("SELECT   tb_especies.esp_familia,tb_especies.esp_especie,tb_local.loc_codigo,
tb_local.loc_latitude,tb_local.loc_longitude
 FROM tb_biotico
 INNER JOIN tb_especies
 ON tb_biotico.idespecie = tb_especies.id_tab_especie

  INNER JOIN tb_limnologia
 ON tb_biotico.idlimnologia = tb_limnologia.idlimnologia


   INNER JOIN tb_local
 ON tb_limnologia.local = tb_local.id_tab_local  WHERE tb_local.id_tab_local < 39 AND tb_especies.esp_especie != 'NI'
 GROUP BY tb_especies.esp_especie,tb_local.loc_codigo
 ORDER BY  tb_especies.esp_familia,tb_especies.esp_especie ");
  $e = 1;
$num = mysql_num_rows($res) ;
while($registro = mysql_fetch_row($res)){
  $idd = $registro[0];
 $cc[$e] = $registro[1]; $r = $e - 1;
   if($cc[$e] != $cc[$r] ){$cor = "#D2D2D2";}else{$cor = "#FFFFFF";}
?>
<tr style=" background-color: <?php echo "$cor"; ?> ">
 <td  width="20%"><?php echo $registro[0]; ?></td>
<td  width="20%"><?php echo $registro[1]; ?></td>
 <td  width="20%"><?php echo $registro[2]; ?></td><!-- -->
    <td  width="20%"><?php echo "-".$registro[3]; ?></td>
     <td  width="20%"><?php echo "-".$registro[4]; ?></td>
  <!--   <td  width="20%"><?php echo 1; ?></td>
     <td  width="20%"><?php echo $registro[5]; ?></td>
      <td  width="20%"><?php echo $registro[6]; ?></td>
       <td  width="20%"><?php echo $registro[7]; ?></td>
           <td  width="20%"><?php echo $registro[8]; ?></td>
           <td  width="20%"><?php echo $registro[9]; ?></td>
             <td  width="20%"><?php echo $registro[10]; ?></td>-->
  </tr>

<?php


$e++;
 }


?>
<tr class="titulo"> <td  width="20%"><?php echo $num; ?></td> </tr>

  </table>



        </div>
    </div>
