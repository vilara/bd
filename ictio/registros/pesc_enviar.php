
<?php

$cod = $_GET["cod"];
$data = $_GET["data"];
$data1 = $_GET["data1"];
$proced = $_GET["proced"];
$local = $_GET["local"];
$localidade = $_GET["localidade"];
$dado = new ManipulateData();
$dado->setTable("tb_pesc_biotico");
$dado->setFieldOrder("id_tb_pesc");
$dado->setFieldID("5");$pesc_numero5 = $dado->getLastId();
$num = $pesc_numero5 + 1;
$especie = $_POST["especie"];
$cpp = $_POST["cpp"];
$cpt = $_POST["cpt"];
$cpc = $_POST["cpc"];
$ptt = $_POST["ptt"];
$ptc = $_POST["ptc"];
$pte = $_POST["pte"];
$gg = $_POST["gg"];
$gr = $_POST["gr"];
$sexo = $_POST["sexo"];
$ematur = $_POST["ematur"];
$histo = $_POST["histo"];
$teci = $_POST["teci"];
$cresc = $_POST["cresc"];
$oe = $_POST["oe"];
$od = $_POST["od"];
$cresc = $_POST["cresc"];
$obs = $_POST["obs"];


$cadastra = new ManipulateData();
$cadastra->setTable("tb_pesc_biotico");
$cadastra->setFields(" `id_tb_pesc` , `pesc_cod` , `pesc_proced` , `pesc_local` , `pesc_localidade` , `pesc_num` , `pesc_data` ,  `pesc_esp` , `pesc_cpp` , `pesc_cpt` , `pesc_cpc` , `pesc_ptt` , `pesc_ptc` , `pesc_pte` , `pesc_gr` , `pesc_gg` , `pesc_sexo` , `pesc_ematur` , `pesc_histo` , `pesc_teci` , `pesc_cresc` , `pesc_pescad` , `pesc_colet` , `pesc_obs` , `pesc_oe` , `pesc_od` , `time`");
$cadastra->setDados("NULL , '$cod', '$proced' , '$local' , '$cat_localidade', '$num', '$data', '$especie', '$cpp', '$cpt', '$cpc', '$ptt', '$ptc', '$pte', '$gr', '$gg', '$sexo' , '$ematur' , '$histo' , '$teci' , '$cresc' , '' , '' , '$obs' , '$oe' , '$od', now()");
$cadastra->insert();




?>


<script>parent.location.href='index.php?secoes=registros/pesc_inserir1&proced=<?php echo "$proced"; ?>&cod=<?php echo "$cod"; ?>&local=<?php echo "$local"; ?>&localidade=<?php echo "$localidade"; ?>&data=<?php echo "$data"; ?>&data1=<?php echo "$data1"; ?>&flag=2'</script>

