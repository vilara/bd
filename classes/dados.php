<?php
$tt = " AND ";
$tt .= "id_tab_especie < 90";

	include_once("ListaDados.php");
	$listagem = new ListaDados();
	$listagem->setfields("esp_ordem, esp_familia, esp_especie");
    $listagem->settable("tb_especies");
    $listagem->setfieldID("id_tab_especie");
    $listagem->setwhere("$tt");
    $listagem->geraListaIndex();

 ?>
