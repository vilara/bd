<?php
include_once "ManipulateData.php";
$altera = new ManipulateData();
$altera->setTable("tb_excursao");
$altera->setfields("ex_numero='2'");
$altera->setFieldID("id_excursao");
$altera->setValueID("2");
$altera->update();
echo $altera->getStatus();
?>