 <?php
 $aparelho = $_POST["aparelho"];
  $exc = $_POST["exc"];
   $bio_nr = $_POST["bio_nr"];
    if ($l == "Todos"){$ll = " ";}
else if ($l == "Larva"){$ll = " AND arr_larva = 'L'";}
else if ($l == "Não larva"){$ll = " AND arr_larva = 'N'";}
// echo "$aparelho";
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<?php
include_once "exc/arrasto.php";
include_once "lista_abud_g/arrasto.php";/**/

include_once "exc/malhadeira.php";
include_once "lista_abud_g/malhadeira.php";
include_once "lista_abud_g/redinha.php";
/* */
include_once "exc/outros.php";
include_once "exc/arrasto_3.php";
include_once "lista_abud_g/espinhel.php";
   include_once "lista_abud_g/outros.php";
include_once "lista_abud_g/todos.php";
//include_once "lista_abud/tarrafa.php";
?>

</table>  <br />
<?php

if ($ne > 0){
?>
<div><center>TOTAL DE ESPÉCIES IDENTIFICADAS:&nbsp;&nbsp;&nbsp;<b><?php echo"$ne";?></b></center></div>

<?php

}
?>

<div><center>TOTAL DE INDIVÍDUOS IDENTIFICADOS:&nbsp;&nbsp;&nbsp;<b><?php echo"$tott";?></b></center></div>

</div>
</div>
