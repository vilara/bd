

<?php


$red_lim = $_GET["red_lim"];

$red_hora = $_GET["red_hora"];


$red_qtde = $_POST["red_qtde"];

$red_data = $_GET["lim_data"];

 //  echo"$red_data";



 $red_voucher = $_POST["red_voucher1"];



$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_corr_biotico");
$dado_fim->setFieldOrder("id_tb_corr");
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


/*if ($red_voucher1 == "")
{

if ($red_col == 'Sim')
{


$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;


$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();

$red_voucher = "UNIR" . "$nr_voucher1";
}
 else

{$red_voucher = 'Não';}*/
/*
if ($malh_teci == 'Sim')
{
 	$res = mysql_query("SELECT * FROM cons_gen ");
		while($registro = mysql_fetch_row($res))
		{$nr_gen = $registro[1];
		}
		$nr_gen1 = $nr_gen + 1;

$sql4 = "INSERT INTO `ictiomadeira`.`cons_gen` (
`id_cons_gen` ,
`nr_gen`
)
VALUES (
NULL , '$nr_gen1'
)";
$rs4 = mysql_query($sql4);

$malh_teci = "GEN" . "$nr_gen1";
}
 else

{$malh_teci = 'Não';}


else
{$malh_voucher = $malh_voucher1;}
*/

/*}
else
{
$red_voucher = $red_voucher1;
$red_col = "Sim";
}*/

$cadastra = new ManipulateData();
$cadastra->setTable("tb_corr_biotico");
$cadastra->setFields(" `id_tb_corr`,`corr_qtde`,`corr_lim`,`corr_data`,`corr_hora`,`corr_numero`,`corr_especie`,`corr_teci`,`corr_foto`,`corr_col`,`corr_voucher`,`corr_obs`,`corr_det`,`corr_anali`,`corr_data_det`,`corr_cpp`,`corr_cpt`,`corr_cpc`,`corr_ptt`,`corr_ptc`,`corr_pte`,`corr_gr`,`corr_gg`,`corr_sexo`,`corr_ematur`,`corr_histo`,`corr_cresc`");
$cadastra->setDados("NULL , '$red_qtde', '$red_lim', '$red_data', '$red_hora', '$red_numero', '$red_especie', '$red_teci', '$red_foto', '$red_col', '$red_voucher', '$red_obs', '$red_det', '$red_anali', now(), '$cpp', '$cpt', '$cpc', '$ptt', '$ptc', '$pte', '$gr', '$gg', '$sexo', '$ematur', '$histo', '$cresc'");
$cadastra->insert();
$rr = "$red_col";
?>

<script>parent.location.href='index.php?secoes=registros/corr_inserir1&red_lim=<?php echo "$red_lim"; ?>&red_hora=<?php echo "$red_hora"; ?>&red_especie=<?php echo "$red_especie"; ?>&col=<?php echo "$rr"; ?>&red_voucher=<?php echo "$red_voucher"; ?>&flag=2'</script>;

