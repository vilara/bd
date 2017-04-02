<?php
include_once "classes/ManipulateData.php";
$usu = $_POST["usu"];
$senha = md5($_POST["senha"]);
echo "$senha  $usu";

$login = new ManipulateData();
$login->setTable("usu_senha");
$login->setFieldId("usu_senha ='$senha'");
$login->setFieldNr("2"); $senha3 = $login->data_filter();
$login->setFieldNr("3"); $nivel = $login->data_filter();
$login->setFieldNr("4"); $usuario = $login->data_filter();



if ($senha3 == $senha AND $nivel == "ictio") // confere senha
{
setcookie("usu", $usu, 0);
setcookie("senha", $senha, 0);
setcookie("nivel", $nivel, 0);

//echo "$usu--$senha";echo "$senha3---$senha";echo "yy";
header("Location: index.php?secoes=secoes/home");
      }
else{
header("Location:  index.php?secoes=log_neg");

}
?>
