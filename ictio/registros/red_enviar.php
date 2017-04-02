

<?php


$red_lim = $_GET["red_lim"];

$red_hora = $_GET["red_hora"];


$red_qtde = $_POST["red_qtde"];

$red_data = $_GET["lim_data"];


 $red_voucher = $_POST["red_voucher1"];

$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_redinha_biotico");
$dado_fim->setFieldOrder("id_tb_redinha");
$dado_fim->setFieldID("5");$red_numero1 = $dado_fim->getLastId();
$red_numero = $red_numero1 + 1;


$red_especie = $_POST["red_especie"];




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
$cresc = $_POST["cresc"];


$red_teci = $_POST["red_teci"];

$red_foto = $_POST["red_foto"];
 $red_col = $_POST["red_col"];
$red_obs = $_POST["red_obs"];
$red_det = $_POST["red_det"];
$red_anali = $_POST["red_anali"];



$login = new ManipulateData();
$login->setTable("tb_limno");
$login->setFieldId("id_tb_limno ='$red_lim'");
$login->setFieldNr("37"); $idlimnologia = $login->data_filter();
$login->setFieldNr("1"); $red_excursao = $login->data_filter();
 //  echo "$idlimnologia<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$red_excursao', '$idlimnologia' , '$red_especie' , 'Redinha', '$red_qtde', '$red_numero', '$red_voucher', '', '$red_teci', '$red_foto', 'Madeira'");
$cadastra->insert();/**/

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();
// echo $idbiotico;






$cadastra = new ManipulateData();
$cadastra->setTable("tb_redinha_biotico");
$cadastra->setFields(" `id_tb_redinha`,`red_qtde`,`red_lim`,`red_data`,`red_hora`,`red_numero`,`red_especie`,`red_teci`,`red_foto`,`red_col`,`red_voucher`,`red_obs`,`red_det`,`red_anali`,`red_data_det`,`red_cpp`,`red_cpt`,`red_cpc`,`red_ptt`,`red_ptc`,`red_pte`,`red_gr`,`red_gg`,`red_sexo`,`red_ematur`,`red_histo`,`red_cresc`,`idbiotico`");
$cadastra->setDados("NULL , '$red_qtde', '$red_lim', '$red_data', '$red_hora', '$red_numero', '$red_especie', '$red_teci', '$red_foto', '$red_col', '$red_voucher', '$red_obs', '$red_det', '$red_anali', now(), '$cpp', '$cpt', '$cpc', '$ptt', '$ptc', '$pte', '$gr', '$gg', '$sexo', '$ematur', '$histo', '$cresc', '$idbiotico'");
$cadastra->insert();
$rr = "$red_col";
?>

<script>parent.location.href='index.php?secoes=registros/red_inserir1&red_lim=<?php echo "$red_lim"; ?>&red_hora=<?php echo "$red_hora"; ?>&red_especie=<?php echo "$red_especie"; ?>&col=<?php echo "$rr"; ?>&red_voucher=<?php echo "$red_voucher"; ?>&flag=2'</script>;

