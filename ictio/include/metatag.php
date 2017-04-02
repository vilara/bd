<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Banco de Dados de Ecologia e Biologia</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
  <link href="estilos/estilos_ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 6]>
  <link href="estilos/estilos_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 5]>
  <link href="estilos/estilos_ie5.css" rel="stylesheet" type="text/css" />
<![endif]-->


<script type="text/javascript">
function loader(){ document.getElementById("loader").style.display="none" }
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

</head>
