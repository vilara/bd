 <?php
   $tt = 0;
 ?>
<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">
<tr class="titulo"><td colspan="4">Aparelho: <?php echo"$aparelho ";?> ---- Excursão: <?php echo"$exc ";?> </td></tr>
<tr class="titulo">
          <td>Local de captura</td>
              <?php
               if ($ponto == "Separados")
               {
              ?>
          <td align="center" width="10%">Ponto captura</td>
              <?php
              }
              ?>
          <td>Total de espécies capturadas</td>
          <td>Total de exemplares capturados</td>
              <?php
               if ($ponto != "Separados")
               {
              ?>
          <td>Peso total em gramas</td>
              <?php
              }
              ?>
    </tr>
<?php


//Arrasto de fundo-----------------------------------------------------------------------
/**/   include_once "exc/arrasto.php";
include_once "nr_esp/arrasto.php";
//Malhadeira-----------------------------------------------------------------------
include_once "exc/malhadeira.php";
include_once "nr_esp/malhadeira.php";
//Redinha-----------------------------------------------------------------------
include_once "nr_esp/redinha.php";
//Outros-----------------------------------------------------------------------
include_once "exc/outros.php"; 
include_once "nr_esp/outros.php";
include_once "nr_esp/espinhel.php"; 
?>
    <tr bgcolor="#CCCCCC">
          <td align="left">Totais</td>
          <td><b><?php echo"$num_t";?></b></td>
          <td><b><?php echo"$num_n_t";?></b></td>
          <td><b><?php echo"$num_p_t";?></b></td>
    </tr>
</table>

</div>
          </div>