 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
  if ($l == "Todos"){$ll = " ";}
else if ($l == "Larva"){$ll = " AND arr_larva = 'L'";}
else if ($l == "Não larva"){$ll = " AND arr_larva = 'N'";}
   //  $bio_nr = $_POST["bio_nr"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">
<?php
//Arrasto de fundo-----------------------------------------------------------------------
include_once "exc/arrasto.php";
include_once "lista_pres/arrasto.php";
//Malhadeira-----------------------------------------------------------------------
include_once "exc/malhadeira.php";
include_once "lista_pres/malhadeira.php";
//Redinha-----------------------------------------------------------------------
include_once "lista_pres/redinha.php";
//Outros-----------------------------------------------------------------------
include_once "exc/outros.php";
include_once "lista_pres/outros.php";
include_once "lista_pres/espinhel.php"

?>
</table>
</div>
</div>