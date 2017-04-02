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
//include_once "lista_abud/arrasto.php";     
 include_once "exc/malhadeira.php";
include_once "exc/outros_nova.php";  /**/

include_once "lista_abud/malhadeira_nova.php";
/*include_once "lista_abud/redinha.php";*/


/*include_once "lista_abud/outros.php";
include_once "lista_abud/espinhel.php";

include_once "lista_abud/todos.php";*/
//include_once "lista_abud/tarrafa.php";
?>

</table>  <br />
<div><center>TOTAL DE INDIVÍDUOS IDENTIFICADOS:&nbsp;&nbsp;&nbsp;<b><?php echo"$tott";?></b></center></div>

</div>
</div>
