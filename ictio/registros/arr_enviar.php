
<?php


$arr_lim = $_GET["arr_lim"];

$arr_hora = $_GET["arr_hora"];


$arr_qtde = $_POST["arr_qtde"];


$arr_data = $_GET["arr_data"];


$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_arrastofundo_biotico");
$dado_fim->setFieldOrder("id_tb_arrastofundo");
$dado_fim->setFieldID("5");$arr_numero1 = $dado_fim->getLastId();



$arr_numero = $arr_numero1 + 1;


$arr_especie = $_POST["arr_especie"];

$arr_teci = $_POST["arr_teci"];

$arr_foto = $_POST["arr_foto"];
$arr_col = $_POST["arr_col"];
$arr_obs = $_POST["arr_obs"];
$arr_det = $_POST["arr_det"];
$arr_anali = $_POST["arr_anali"];
$arr_larva = $_POST["arr_larva"];
 $arr_voucher = $_POST["arr_voucher1"];






$login = new ManipulateData();
$login->setTable("tb_limno_arr");
$login->setFieldId("id_tb_limno_arr ='$arr_lim'");
$login->setFieldNr("61"); $idlimnologia = $login->data_filter();
$login->setFieldNr("2"); $arr_excursao = $login->data_filter();
  // echo "$arr_lim--$idlimnologia<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$arr_excursao', '$idlimnologia' , '$arr_especie' , 'Arrasto', '$arr_qtde', '$arr_numero', '$arr_voucher', '', '$arr_teci', '$arr_foto', 'Madeira'");
$cadastra->insert();

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();
// echo $idbiotico;



$cadastra = new ManipulateData();
$cadastra->setTable("tb_arrastofundo_biotico");
$cadastra->setFields("`id_tb_arrastofundo`,`arr_qtde`,`arr_lim`,`arr_data`,`arr_hora`,`arr_numero`,`arr_especie`,`arr_teci`,`arr_foto`,`arr_col`,`arr_voucher`,`arr_obs`,`arr_det`,`arr_anali`,`arr_larva`,`arr_data_det`,`idbiotico`");
$cadastra->setDados("NULL , '$arr_qtde ', '$arr_lim', '$arr_data', '$arr_hora', '$arr_numero', '$arr_especie', '$arr_teci', '$arr_foto', '$arr_col', '$arr_voucher', '$arr_obs', '$arr_det', '$arr_anali', '$arr_larva', now(), '$idbiotico'");
$cadastra->insert();
                   /* */
$rr = "$arr_col";
?>

<script>parent.location.href='index.php?secoes=registros/arr_inserir1&arr_lim=<?php echo "$arr_lim"; ?>&arr_hora=<?php echo "$arr_hora"; ?>&arr_especie=<?php echo "$arr_especie"; ?>&col=<?php echo "$rr"; ?>&arr_voucher=<?php echo "$arr_voucher"; ?>&flag=2'</script>;
<!--
-->
