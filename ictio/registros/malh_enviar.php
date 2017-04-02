<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>
<?php

$aparelho = $_GET["aparelho"];
$malh_lim = $_GET["malh_lim"];
$malh_hora = $_GET["malh_hora"];
$malh_data = $_GET["malh_data"];

$malh_excursao = $_GET["malh_excursao"] ;


if ($malh_hora > '15:59:59' AND $malh_hora < '20:00:00')
{$malh_cat_hora = "Crepúsculo vespertino";}

if ($malh_hora > '03:59:59' AND $malh_hora < '08:00:00')
{$malh_cat_hora = "Crepúsculo matutino";}

if ($malh_hora > '07:59:59' AND $malh_hora < '16:00:00')
{$malh_cat_hora = "Dia";}

if ($malh_hora > '19:59:59' AND $malh_hora < '23:59:59' OR $malh_hora >= '00:00:00' AND $malh_hora < '04:00:00')
{$malh_cat_hora = "Noite";}

$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_malhadeira_biotico");
$dado_fim->setFieldOrder("id_tb_malhadeira");
$dado_fim->setFieldID("5");$malh_numero1 = $dado_fim->getLastId();


$malh_numero = $malh_numero1 + 1;


$malh_especie = $_POST["malh_especie"];
$malh_cp = $_POST["malh_cp"];
$malh_pt = $_POST["malh_pt"];
$malh_sexo = $_POST["malh_sexo"];
$malh_ematur = $_POST["malh_ematur"];
$malh_pg = $_POST["malh_pg"];
$malh_gg = $_POST["malh_gg"];
$malh_gr = $_POST["malh_gr"];
$malh_cresc = $_POST["malh_cresc"];
$malh_histo = $_POST["malh_histo"];
$malh_fecund = $_POST["malh_fecund"];
$malh_teci = $_POST["malh_teci"];
if ($malh_teci == ""){$malh_teci = "Não";}
$malh_foto = $_POST["malh_foto"];
$malh_col = $_POST["malh_col"];
$malh_obs = $_POST["malh_obs"];
$malh_det = $_POST["malh_det"];
$malh_anali = $_POST["malh_anali"];
$malh_voucher = $_POST["malh_voucher1"];
$malh_esto = $_POST["malh_esto"] ;



$login = new ManipulateData();
$login->setTable("tb_limno");
$login->setFieldId("id_tb_limno ='$malh_lim'");
$login->setFieldNr("37"); $idlimnologia = $login->data_filter();
$login->setFieldNr("1"); $malh_excursao = $login->data_filter();
 //  echo "$idlimnologia<br>";


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biotico");
$cadastra->setFields(" `idbiotico` , `idexc` , `idlimnologia` , `idespecie` , `aparelho` , `qtde` , `registro` ,  `colecao` , `estomago` , `tecido` , `foto`  , `projeto`  ");
$cadastra->setDados("NULL , '$malh_excursao', '$idlimnologia' , '$malh_especie' , 'Malhadeira', '1', '$malh_numero', '$malh_voucher', '$malh_esto', '$malh_teci', '$malh_foto', 'Madeira'");
$cadastra->insert();/**/

$login = new ManipulateData();
$login->setTable("tb_biotico");
$login->setFieldId("idbiotico > 0 ORDER BY idbiotico DESC");
$login->setFieldNr("0"); $idbiotico = $login->data_filter();
// echo $idbiotico;


$cadastra = new ManipulateData();
$cadastra->setTable("tb_malhadeira_biotico");
$cadastra->setFields(" `id_tb_malhadeira` , `malh_lim` , `malh_hora` , `malh_data` , `malh_cat_hora` , `malh_numero` , `malh_especie` ,  `malh_cp` , `malh_pt` , `malh_sexo` , `malh_ematur` , `malh_pg` , `malh_gg` , `malh_gr` , `malh_cresc` , `malh_histo` , `malh_fecund` , `malh_teci` , `malh_foto` , `malh_col` , `malh_voucher` , `malh_obs` , `malh_det` , `malh_anali` , `malh_data_det`  , `malh_esto`, `idbiotico`");
$cadastra->setDados("NULL , '$malh_lim', '$malh_hora' , '$malh_data' , '$malh_cat_hora', '$malh_numero', '$malh_especie', '$malh_cp', '$malh_pt', '$malh_sexo', '$malh_ematur', '$malh_pg', '$malh_gg', '$malh_gr', '$malh_cresc', '$malh_histo', '$malh_fecund' , '$malh_teci' , '$malh_foto' , '$malh_col' , '$malh_voucher' , '$malh_obs' , '$malh_det' , '$malh_anali', now(),  '$malh_esto',  '$idbiotico'");
$cadastra->insert();/* */


$rr = "$malh_col";

?>


<script>parent.location.href='index.php?secoes=registros/malh_inserir1&malh_excursao=<?php echo "$malh_excursao"; ?>&malh_local=<?php echo "$malh_local"; ?>&malh_lim=<?php echo "$malh_lim"; ?>&malh_hora=<?php echo "$malh_hora"; ?>&malh_data=<?php echo "$malh_data"; ?>&malh_especie=<?php echo "$malh_especie"; ?>&col=<?php echo "$rr"; ?>&malh_voucher=<?php echo "$malh_voucher"; ?>&flag=2'</script>
 <!--
-->