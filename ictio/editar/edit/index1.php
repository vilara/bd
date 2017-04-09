
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function horizontal() {
   var navItems = document.getElementById("menu_dropdown").getElementsByTagName("li");
   for (var i=0; i< navItems.length; i++) {
      if(navItems[i].className == "submenu")
      {
         if(navItems[i].getElementsByTagName('ul')[0] != null)
         {
            navItems[i].onmouseover=function() {this.getElementsByTagName('ul')[0].style.display="block";this.style.backgroundColor = "#f9f9f9";}
            navItems[i].onmouseout=function() {this.getElementsByTagName('ul')[0].style.display="none";this.style.backgroundColor = "#FFFFFF";}
         }
      }
   }
  }
</script>
<?php
include_once "include/metatag.php";
// Classes-----------------------start
include_once("classes/verURL.php");
include_once("../classes/ManipulateData.php");
include_once("../classes/ManipulateData1.php");
// Classes-----------------------end
include_once "include/topo.php";
?>
</head>
<body onload="horizontal();">

<?php
$red = new verURL();
$red->trocarURL($_GET["secoes"]);



include_once "include/rodape.php";
?>

</body>
</html>










<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body onload="loader()">
<div id="loader" >Aguarde enquanto a página está sendo carregada...</div>

<div id="geral"  onload="horizontal();>-->

<?php
// include "log_auth.php";
// include "log_auth3.php";
/*$flag = $_GET["flag"];


include_once "include/topo.php";




*/

 ?>

<!--</div>
</body>
</html>-->