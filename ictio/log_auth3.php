<?php

$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];
$login = new ManipulateData();

$login->setTable("usu_senha");
$login->setFieldId("usu_usuario ='$usu'");
$login->setFieldNr("3"); $nivel = $login->data_filter();

        if ($nivel != 3) // confere n�vel
 {
echo"<script>parent.location.href='index.php?secoes=log_neg_nivel'</script>;";
 }

 ?>