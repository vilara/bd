<?php
include "config.php";
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];
        $sql = "SELECT * FROM usu_senha WHERE usu_usuario ='$usu' ";
        $res = mysql_query($sql);
        $nums = mysql_num_rows ($res);
	    $linha=mysql_fetch_row($res);
	    $senha3=$linha[2];
        $nivel=$linha[3];
		$usuario=$linha[4];
        if ($nivel != 3 AND $nivel != 2) // confere nível
 {
echo"<script>parent.location.href='index1.php?id=log_neg_nivel.php'</script>;";
 }
?>