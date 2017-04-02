
<?php


$lim = $_GET["lim"];




$qtde = $_POST["qtde"];



$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_ig_biotico");
$dado_fim->setFieldOrder("id_tb_ig");
$dado_fim->setFieldID("8");$numero1 = $dado_fim->getLastId();



$numero = $numero1 + 1;


$especie = $_POST["especie"];

$teci = $_POST["teci"];

$foto = $_POST["foto"];
$col = $_POST["col"];
$obs = $_POST["obs"];
$det = $_POST["det"];
// $anali = $_POST["anali"];
 $voucher = $_POST["voucher1"];



/**/$login = new ManipulateData();
$login->setTable("tb_limno_ig");
$login->setFieldId("id_tb_limno ='$lim'");
$login->setFieldNr("44"); $idlimnologia = $login->data_filter();
$login->setFieldNr("3"); $excursao = $login->data_filter();
$login->setFieldNr("1"); $aparelho = $login->data_filter();
//  echo "$lim--$idlimnologia--$excursao--$aparelho--<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$excursao', '$idlimnologia' , '$especie' , '$aparelho', '$qtde', '$numero', '$voucher', '', '$teci', '$foto', 'Igarape'");
$cadastra->insert();

/* */

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();/**/
// echo $idbiotico;

$cadastra = new ManipulateData();
$cadastra->setTable("tb_ig_biotico");
$cadastra->setFields("`id_tb_ig`,`ig_especie` ,`ig_qtde` ,`ig_lim`,`ig_gen`,`ig_foto`,`ig_voucher`,`ig_numero`,`ig_det`,`ig_obs`,`time`,`idbiotico`");
$cadastra->setDados("NULL , '$especie', '$qtde', '$lim', '$teci', '$foto', '$voucher', '$numero','$det', '$obs', now(), '$idbiotico'");
$cadastra->insert();

?>

<script>parent.location.href='index.php?secoes=registros/ig_inserir1&lim=<?php echo "$lim"; ?>&col=<?php echo "$rr"; ?>&voucher=<?php echo "$voucher"; ?>&flag=2'</script>;
<!-- -->

