<?php
include_once "classes/ManipulateData.php";
$usu = $_POST["usu"];
$senha = $_POST["senha"];


$login = new ManipulateData();
$login->setTable("senha");
$login->setFieldId("pass_usu ='$usu'");
$login->setFieldNr("2"); $senha3 = $login->data_filter();
$login->setFieldNr("3"); $nivel = $login->data_filter();
$login->setFieldNr("1"); $usuario = $login->data_filter();

if ($senha3 != $senha) // confere senha
{
header("Location:  index.php?secoes=log_neg");
      }
else{

setcookie("usu", $usu, 0);
setcookie("senha", $senha, 0);
setcookie("nivel", $nivel, 0);
//echo "$usu--$senha";echo "$senha3---$senha";echo "yy";
header("Location: index.php?secoes=secoes/home");
}
?>
