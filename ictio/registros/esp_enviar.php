
<?php

$lim = $_GET["lim"];

$especie = $_POST["especie"];
$qtde = $_POST["qtde"];
$cpp = $_POST["cpp"];
$cpt = $_POST["cpt"];
$cpc = $_POST["cpc"];
$ptt = $_POST["ptt"];
$ptc = $_POST["ptc"];
$pte = $_POST["pte"];
$gr = $_POST["gr"];
$gg = $_POST["gg"];
$sexo = $_POST["sexo"];
$ematur = $_POST["ematur"];
$histo = $_POST["histo"];
$teci = $_POST["teci"];
$cresc = $_POST["cresc"];
$foto = $_POST["foto"];
$col = $_POST["col"];

$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_espinhel_biotico");
$dado_fim->setFieldOrder("id_tb_espi");
$dado_fim->setFieldID("2");$espi_numero1 = $dado_fim->getLastId();
$espi_numero = $espi_numero1 + 1;

$obs = $_POST["obs"];
$det = $_POST["det"];
$voucher = $_POST["voucher1"];



/**/$login = new ManipulateData();
$login->setTable("tb_limno_outr");
$login->setFieldId("id_tb_limno_outr ='$lim'");
$login->setFieldNr("20"); $idlimnologia = $login->data_filter();
$login->setFieldNr("1"); $excursao = $login->data_filter();
$login->setFieldNr("2"); $aparelho = $login->data_filter();
 //  echo "$lim--$idlimnologia--$excursao--$aparelho--<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$excursao', '$idlimnologia' , '$especie' , '$aparelho', '$qtde', '$espi_numero', '$voucher', '', '$teci', '$foto', 'Madeira'");
$cadastra->insert();

/* */

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();/**/
 // echo $idbiotico;


$cadastra = new ManipulateData();
$cadastra->setTable("tb_espinhel_biotico");
$cadastra->setFields("`id_tb_espi` ,`espi_qtde` ,`espi_nr`,`espi_lim`,`espi_esp`,`espi_cpp`,`espi_cpt`,`espi_cpc`,`espi_ptt`,`espi_ptc`,`espi_pte`,`espi_gr`,`espi_gg`,`espi_sexo`,`espi_ematur`,`espi_histo`,`espi_teci`,`espi_cresc`,`espi_foto`,`espi_col`,`espi_voucher`,`espi_det`,`espi_obs`,`time`,`idbiotico`");
$cadastra->setDados("NULL , '$qtde', '$espi_numero', '$lim', '$especie', '$cpp', '$cpt', '$cpc','$ptt', '$ptc', '$pte', '$gr', '$gg', '$sexo', '$ematur', '$histo', '$teci', '$cresc', '$foto', '$col', '$voucher', '$det', '$obs', now(), '$idbiotico'");
$cadastra->insert();
$rr = "$col";
?>

<script>parent.location.href='index.php?secoes=registros/esp_inserir1&lim=<?php echo "$lim"; ?>&especie=<?php echo "$especie"; ?>&col=<?php echo "$rr"; ?>&voucher=<?php echo "$voucher"; ?>&flag=2'</script>;
<!---->

