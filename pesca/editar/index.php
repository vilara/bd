<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body onload="loader()">
<div id="loader" >Aguarde enquanto a página está sendo carregada...</div>

<div id="geral">

<?php
include_once "../include/metatag.php";
// Classes-----------------------start
include_once("../classes/verURL.php");
include_once("../classes/ManipulateData.php");
// Classes-----------------------end
/*include_once "../include/topo.php"; */
?>

<?php
$red = new verURL();
$red->trocarURL($_GET["secoes"]);



// include_once "../include/rodape.php";


 ?>

</div>
</body>
</html>