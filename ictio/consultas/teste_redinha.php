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

 tb_redinha_biotico.id_tb_redinha,
 tb_limno.lim_excursao,
  tb_limno.idlimnologia,
  tb_redinha_biotico.red_especie,
   tb_limno.lim_aparelho,

    tb_redinha_biotico.red_qtde ,
   tb_redinha_biotico.red_numero ,
    tb_redinha_biotico.red_voucher ,
     tb_redinha_biotico.red_histo  ,
      tb_redinha_biotico.red_teci ,
      tb_redinha_biotico.red_foto ,
       tb_redinha_biotico.time






  FROM  `tb_redinha_biotico` INNER JOIN `tb_limno` ON tb_redinha_biotico.red_lim = tb_limno.id_tb_limno");
  $e = 48950;
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
       <td  width="20%"><?php echo $registro[8]; ?></td>
           <td  width="20%"><?php echo $registro[9]; ?></td>
           <td  width="20%"><?php echo $registro[10]; ?></td>
             <td  width="20%"><?php echo $registro[11]; ?></td>
  </tr>

<?php

/**/$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto` , `time`, `projeto` ");
$cadastra->setDados("'$e' , '$registro[1]', '$registro[2]' , '$registro[3]' , '$registro[4]', '$registro[5]', '$registro[6]', '$registro[7]', '$registro[8]', '$registro[9]', '$registro[10]', '$registro[11]', 'Madeira'");
$cadastra->insert();


$res1 = mysql_query("UPDATE `tb_redinha_biotico` SET `idbiotico` = '$e' WHERE `id_tb_redinha` = $idd LIMIT 1 ;");

/**/


$e++;
 }


?>
<tr class="titulo"> <td  width="20%"><?php echo $num; ?></td> </tr>

  </table>



        </div>
    </div>
