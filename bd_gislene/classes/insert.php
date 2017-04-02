<?php
include_once "ManipulateData.php";
$cadastra = new ManipulateData();
$cadastra->setTable("tb_excursao");
$cadastra->setFields("ex_numero,ex_mes,ex_ano");
$cadastra->setDados("'3','01','2009'");
$cadastra->insert();
echo $cadastra->getStatus();
?>