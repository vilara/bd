<?php
include_once "ManipulateData.php";
$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_malhadeira_biotico");
$dado_fim->setFieldOrder("id_tb_malhadeira");
$dado_fim->setFieldID("0");$tt = $dado_fim->getLastId();
$dado_fim->setFieldID("6");$gg = $dado_fim->getLastId();
echo "$tt--$gg" ;


?>