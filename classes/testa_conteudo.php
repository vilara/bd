<?php
	include_once("ManipulateData.php");
	$listagem = new ManipulateData();
    $listagem->setTable("tb_malhadeira_biotico");
    $listagem->setFieldId('id_tb_malhadeira');
    $listagem->geraListaIndex();
?>