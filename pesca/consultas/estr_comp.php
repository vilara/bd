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
  if ($loc == "Montante"){$locc = "AND (loc = 46 OR loc = 7 OR loc = 6 OR loc = 43 OR loc = 19 OR loc = 8)";}
  else if ($loc == "Reservatorio"){$locc = "AND (loc = 47 OR loc = 9 OR loc = 11
    OR loc = 44 OR loc = 34 OR loc = 48 OR loc = 33 OR loc = 49)";}
  else if ($loc == "Jusante"){$locc = "AND (loc = 45 OR loc = 50 OR loc = 30
    OR loc = 28 OR loc = 31 OR loc = 10 OR loc = 29 OR loc = 32 OR loc = 35 OR loc = 2 OR loc = 13 OR loc = 24 OR loc = 37
     OR loc = 27 OR loc = 26 OR loc = 18 OR loc = 17 OR loc = 51 OR loc = 12 OR loc = 19 OR loc = 15 OR loc = 16 OR loc = 52 OR loc = 14 OR loc = 41)";}
   else if ($loc == "Todos"){$locc = " ";} 

  $flag = $_GET["flag"];
  $exc = $_GET["exc"];
  $flag1 = $_GET["flag1"];
   $lista = new ManipulateData();
   $NomeCateg = $lista->NomeCateg($esp);
 ?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/estr_comp&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
<fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

    <tr>
       <td>1) Espécie:</td>
       <td><label for="limno">
       <SELECT name='esp' id="esp" type='text' >

           <option value='<?php echo "$esp"; ?>'><?php echo"$NomeCateg"; ?></option>
            <?php

            $lista->geraListaCateg();
            ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
       <td>3) Locais:</td>
       <td><label for="limno">
       <SELECT name='loc' id="loc" type='text' >

           <?php


                 {echo "<option value=\"".$loc."\">".$loc."</option>";}
           ?>
           <option value='Todos'>Todos</option>
           <option value='Montante'>Montante</option>
           <option value='Reservatorio'>Reservatório</option>
           <option value='Jusante'>Jusante</option>


       </select></label></td>
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

    <?php
    if ($flag1 == 1)
    {
    include_once "estr_comp_mostrar.php";
    }
    ?>


