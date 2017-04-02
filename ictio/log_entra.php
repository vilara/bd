<?php
include_once "classes/ManipulateData.php";
$usu = $_POST["usu"];
$senha = md5($_POST["senha"]);

$login = new ManipulateData();
$login->setTable("usu_senha");
$login->setFieldId("usu_senha ='$senha' AND usu_usuario='$usu'");
$login->setFieldNr("2"); $senha3 = $login->data_filter();
$login->setFieldNr("3"); $nivel = $login->data_filter();
$login->setFieldNr("4"); $usuario = $login->data_filter();
$login->setFieldNr("5"); $subpro = $login->data_filter();

if ($nivel >= 1) // senha e usuario conferidos
{
setcookie("usu", $usu, 0);
setcookie("senha", $senha, 0);
setcookie("nivel", $nivel, 0);
header("Location: index.php?secoes=secoes/home");
}
else   // senha e usuario não conferem
{
header("Location:  index.php?secoes=log_neg");
}
?>
