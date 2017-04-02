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


  $esp = $_POST["esp"];
  $loc = $_POST["loc"];

    $flag = $_GET["flag"];
    $exc = $_GET["exc"];


    $flag1 = $_GET["flag1"];

?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/bagres_malh&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
<fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->
    <tr>
       <td>1) Espécie:</td>
       <td><label for="limno">
       <SELECT name='esp' id="esp" type='text' >

           <?php

          if ($esp == 333){$espe = "Prochilodus nigricans";}
           else if ($esp == 378){$espe = "Semaprochilodus insignis";}
           else if ($esp == 328){$espe = "Potamorhina latior";}
            /*   $lista = new ManipulateData1();
               $NomeLoc = $lista->NomeLoc($loc);*/
              if($flag == 1)
                 {echo "<option value=\"".$esp."\">".$espe."</option>";}
           ?>
           <option value='#'>Selecione</option>
           <option value='333'>Prochilodus nigricans</option>
           <option value='378'>Semaprochilodus insignis</option>
           <option value='328'>Potamorhina latior</option>


       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>







     <!-- LINHA DO APARELHO DE PESCA -->


    </table>
    <br />&nbsp;&nbsp;&nbsp;
         <center><input type="submit" value="Submeter" class="botao2"  /></center>
    </fieldset>
    </form>
</div>
    <?php
    if ($flag1 == 1)
    {
    include_once "bagres_malh_mostrar.php";
    }
    ?>


