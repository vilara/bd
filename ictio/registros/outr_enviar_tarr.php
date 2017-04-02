
<?php


$outr_lim = $_GET["outr_lim"];

$outr_hora = $_GET["outr_hora"];


$outr_qtde = $_POST["outr_qtde"];

$outr_data = $_GET["outr_data"];


$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_outros_biotico");
$dado_fim->setFieldOrder("id_tb_outros");
$dado_fim->setFieldID("5");$outr_numero1 = $dado_fim->getLastId();



$outr_numero = $outr_numero1 + 1;


$outr_especie = $_POST["outr_especie"];

$outr_teci = $_POST["outr_teci"];

$outr_foto = $_POST["outr_foto"];
$outr_col = $_POST["outr_col"];
$outr_obs = $_POST["outr_obs"];
$outr_det = $_POST["outr_det"];
$outr_anali = $_POST["outr_anali"];
 $outr_voucher = $_POST["outr_voucher1"];




/**/$login = new ManipulateData();
$login->setTable("tb_limno_outr");
$login->setFieldId("id_tb_limno_outr ='$outr_lim'");
$login->setFieldNr("20"); $idlimnologia = $login->data_filter();
$login->setFieldNr("1"); $outr_excursao = $login->data_filter();
$login->setFieldNr("2"); $outr_aparelho = $login->data_filter();
 // echo "$outr_lim--$idlimnologia--$outr_excursao--$outr_aparelho--<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$outr_excursao', '$idlimnologia' , '$outr_especie' , '$outr_aparelho', '$outr_qtde', '$outr_numero', '$outr_voucher', '', '$outr_teci', '$outr_foto', 'Madeira'");
$cadastra->insert();

/* */

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();/**/
 // echo $idbiotico;




$cadastra = new ManipulateData();
$cadastra->setTable("tb_outros_biotico");
$cadastra->setFields("`id_tb_outros` ,`outr_qtde` ,`outr_lim`,`outr_data`,`outr_hora`,`outr_numero`,`outr_especie`,`outr_teci`,`outr_foto`,`outr_col`,`outr_voucher`,`outr_obs`,`outr_det`,`outr_anali`,`outr_data_det`, `idbiotico`");
$cadastra->setDados("NULL , '$outr_qtde', '$outr_lim', '$outr_data', '$outr_hora', '$outr_numero', '$outr_especie', '$outr_teci','$outr_foto', '$outr_col', '$outr_voucher', '$outr_obs', '$outr_det', '$outr_anali', now(), '$idbiotico'");
$cadastra->insert();
$rr = "$outr_col";

?>

<script>parent.location.href='index.php?secoes=registros/outr_inserir1&outr_lim=<?php echo "$outr_lim"; ?>&outr_hora=<?php echo "$outr_hora"; ?>&outr_especie=<?php echo "$outr_especie"; ?>&col=<?php echo "$rr"; ?>&outr_voucher=<?php echo "$outr_voucher"; ?>&flag=2'</script>;
<!-- 
-->
