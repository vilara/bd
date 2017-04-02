
<?php
$exc = $_GET["exc"];
$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_biologia");
$dado_fim->setFieldOrder("id_bio");
$dado_fim->setFieldID("5");$malh_numero1 = $dado_fim->getLastId();
$numero = $malh_numero1 + 1;


$cadastra = new ManipulateData();
$cadastra->setTable("tb_biologia");
$cadastra->setFields(" `id_bio` , `cod` , `esp` , `dlarval` , `cp` , `numero`, `time`");
$cadastra->setDados("NULL , "."'".$_POST["cod"]."'".", "."'".$_POST["esp"]."'".", "."'".$_POST["dlarval"]."'".", "."'".$_POST["cp"]."'".", '$numero', now()");
$cadastra->insert();

?>

<script>parent.location.href='index.php?secoes=registros/bio_inserir&cod=<?php echo $_POST["cod"]; ?>&exc=<?php echo "$exc"; ?>&flag=1'</script>

