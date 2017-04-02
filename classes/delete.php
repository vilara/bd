<?php
include_once "ManipulateData.php";
$apaga = new ManipulateData();
$apaga->setTable("tb_excursao");
$apaga->setFieldID("ex_numero");
$apaga->setValueID("3");
$apaga->delete();
echo $apaga->getStatus();
?>