<script language=javascript>
function destino(){
url = document.navegador.lim_aparelho.options[document.navegador.lim_aparelho.selectedIndex].value
if (url != " no") window.location = url;
}
function destino1(){
url = document.navegador.exc.options[document.navegador.exc.selectedIndex].value
if (url != " no") window.location = url;
}
</script>
 <?php

    include_once "log_auth1.php";

    $flag = $_GET["flag"];
    $flagg = $_GET["flagg"];
    $aparelho = $_GET["aparelho"];

    if ($flag == 1)
    {
          $apar = $_POST["aparelho"];
          $exc = $_POST["exc"];
          $pes = $_POST["peso"];
          $ord = $_POST["ord"];
          $fam = $_POST["fam"];
          $esp = $_POST["esp"];
    }

    if ($flag == 2)
    {
    $aparelho = $_GET["aparelho"];
    }

    if ($flag == 3)
    {
    $exc = $_GET["exc"];
    }

?>
<div id="conteudo">
   <h3>Parâmetros da consulta da curva do coletor</h3>

 <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/curva_col&flag=1&aparelho=<?php echo"$aparelho";?>&exc=<?php echo"$exc";?>&flagg=1" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->



     <!-- LINHA DO APARELHO DE PESCA -->

    <tr>
      <td>1) Aparelho de pesca:</td>
      <td><label for="inicial">
            <?php
              if ($aparelho == "Malhadeira")
              {$ma = "selected";}
              else if ($aparelho == "Redinha")
              {$re = "selected";}
              else if ($aparelho == "Arrasto de fundo")
              {$ar = "selected";}
              else if ($aparelho == "Outros")
              {$pu = "selected";}
              else if ($aparelho == "Puça")
              {$pucc = "selected";}
               else if ($aparelho == "Espinhel")
              {$espin = "selected";}
              else if ($aparelho == "Todos")
              {$to = "selected";}
            ?>
           <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
           <option value='index.php?secoes=consultas/curva_col&exc=<?php echo"$exc";?>&flag=3&flagg=0'>Selecione</option>
             <option value='index.php?secoes=consultas/curva_col&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=0' <?php echo"$to";?>>Todos</option>
              <!--  <option value='index.php?secoes=consultas/registros&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$to";?>>Todos</option>-->
             <option value='index.php?secoes=consultas/curva_col&aparelho=Redinha&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$re";?>>Redinha</option>
             <option value='index.php?secoes=consultas/curva_col&aparelho=Malhadeira&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$ma";?>>Malhadeira</option>
             <option value='index.php?secoes=consultas/curva_col&aparelho=Arrasto de fundo&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$ar";?>>Arrasto Bentônico</option>
             <option value='index.php?secoes=consultas/curva_col&aparelho=Puça&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$pucc";?>>Puça</option>
             <option value='index.php?secoes=consultas/curva_col&aparelho=Espinhel&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$espin";?>>Espinhel</option>
            <!-- <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Outros&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$pu";?>>Outros</option>-->
           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>


 </table>
    <br />&nbsp;&nbsp;&nbsp;
         <center><input type="submit" value="Submeter" class="botao2"  /></center>
    </fieldset>
    </form>
</div>




    <!-- RESULTADO -->
    <?php
    if ($flag == 1)
    {
    include_once "curva_col_mostrar.php";
    }
    ?>