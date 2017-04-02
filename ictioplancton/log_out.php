<?php
        $usu = $_COOKIE["usu"];
		$senha = $_COOKIE["senha"];
		$nivel = $_COOKIE["nivel"];
        setcookie("usu", "", 0);
        setcookie("senha",  "" , 0);
        setcookie("nivel", "", 0);
        header ("Location: index.php");
?>

