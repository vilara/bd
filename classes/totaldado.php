<?php
include_once "ManipulateData.php";
$total = new ManipulateData();
$total->setTable("tb_malhadeira_biotico");
$total->setFieldID("id_tb_malhadeira");
$total->setFieldOrder("id_tb_malhadeira");

echo $total->getTotalData();

?>