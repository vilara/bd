<?php
include_once "ManipulateData.php";
$contar = new ManipulateData();
$contar->setTable("tb_malhadeira_biotico");
$contar->setFieldID("malh_especie");


$ss = $contar->getContarDados("352");
echo "$ss<br />";
$tt = $contar->getContarDados("424");
echo "$tt<br />";
?>