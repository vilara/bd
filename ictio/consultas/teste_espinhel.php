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
 <td  width="20%">bio_id</td>
 <td  width="20%">lim_exc</td>
 <td  width="20%">id_limno</td>
  <td  width="20%">bio_esp</td>
  <td  width="20%">aparelho</td>
  <td  width="20%">bio_qtde</td>
   <td  width="20%">bio_nr</td>
    <td  width="20%">bio_col</td>
     <td  width="20%">bio_esto</td>
     <td  width="20%">bio_teci</td>
       <td  width="20%">bio_foto</td>
       <td  width="20%">bio_time</td>





 </tr>
  <?php
$res = mysql_query("SELECT

 tb_espinhel_biotico.id_tb_espi,
 tb_limno_outr.lim_outr_excursao,
  tb_limno_outr.idlimnologia,
  tb_espinhel_biotico.espi_esp,
                                              tb_limno_outr.lim_outr_aparelho,
    tb_espinhel_biotico.espi_qtde ,
   tb_espinhel_biotico.espi_nr ,
    tb_espinhel_biotico.espi_voucher ,
                                               tb_espinhel_biotico.espi_cpp,
      tb_espinhel_biotico.espi_teci ,
      tb_espinhel_biotico.espi_foto ,
       tb_espinhel_biotico.time






  FROM  `tb_espinhel_biotico` INNER JOIN `tb_limno_outr` ON tb_espinhel_biotico.espi_lim = tb_limno_outr.id_tb_limno_outr");
  $e =  68207;
$num = mysql_num_rows($res) ;
while($registro = mysql_fetch_row($res)){
  $idd = $registro[0];
?>
<tr>
 <td  width="20%"><?php echo $e; ?></td>
  <td  width="20%"><?php echo $registro[1]; ?></td>
  <td  width="20%"><?php echo $registro[2]; ?></td>
   <td  width="20%"><?php echo $registro[3]; ?></td>
     <td  width="20%"><?php echo $registro[4]; ?></td>
     <td  width="20%"><?php echo $registro[5]; ?></td>
     <td  width="20%"><?php echo $registro[6]; ?></td>
      <td  width="20%"><?php echo $registro[7]; ?></td>
       <td  width="20%"><?php echo ""; ?></td>
           <td  width="20%"><?php echo $registro[9]; ?></td>
           <td  width="20%"><?php echo $registro[10]; ?></td>
             <td  width="20%"><?php echo $registro[11]; ?></td>
  </tr>

<?php

$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto` , `time`, `projeto` ");
$cadastra->setDados("'$e' , '$registro[1]', '$registro[2]' , '$registro[3]' , '$registro[4]', '$registro[5]', '$registro[6]', '$registro[7]', '', '$registro[9]', '$registro[10]', '$registro[11]', 'Madeira'");
$cadastra->insert();


$res1 = mysql_query("UPDATE `tb_espinhel_biotico` SET `idbiotico` = '$e' WHERE `id_tb_espi` = $idd LIMIT 1 ;");

/* */


$e++;
 }


?>
<tr class="titulo"> <td  width="20%"><?php echo $num; ?></td> </tr>

  </table>



        </div>
    </div>
