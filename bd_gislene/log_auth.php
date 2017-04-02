<?php
// obtém os valores digitados
include_once "classes/ManipulateData.php";
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];

$login = new ManipulateData();

$login->setTable("senha");
$login->setFieldId("pass_usu ='$usu'");
$login->setFieldNr("2"); $senha3 = $login->data_filter();
$login->setFieldNr("3"); $nivel = $login->data_filter();
$login->setFieldNr("1"); $usuario = $login->data_filter();

$login->setFieldId("pass_usu");
$nums = $login->getContarDados("$usu");

        if ($nums == 0 OR $usu != $usuario ) // confere senha
 {
echo"<script>parent.location.href='index.php?secoes=log_neg'</script>;";
}

 ?>