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

   //  include_once "log_auth.php";

    $flag = $_GET["flag"];
    $pesca =  $_POST["pesca"];
                        $data1 = $_POST["data1"];

 if ($data1 == "Novaterra"){$data = " AND data between '2009-04-01' and '2010-03-31'";}


   // echo "$data";




    $loc = $_POST["local"];

if ($loc != "Todos"){$local = " AND localidade = '$loc'";}else {$local = "";}
// echo "$local";

$par = $_POST["par"];
if ($par == "+cap"){$para = "Espécies mais Capturadas";}
if ($par == "+vend"){$para = "Espécies mais Vendidas";}
if ($par == "+cons"){$para = "Espécies mais Consumidas";}

  $lista = new ManipulateData();

?>
<div id="conteudo">
   <h3>Parâmetros da Consulta de Pesca Familiar</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/familiar_rel_nt&flag=1" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->

      <tr>
       <td>1)Pesquisa:</td>
       <td><label for="par">

        <select name='par' type='text' id='par' tabindex="1">
         <?php if ($flag == 1){ ?>
         <option value='<?php echo "$par"; ?>'><?php echo "$para"; ?></option>
         <?php } ?>
          <option value='+cap'>Espécies mais Capturadas</option>
         <option value='+vend'>Espécies mais Vendidas</option>
         <option value='+cons'>Espécies mais Consumidas</option>

        </select> </label> </td>


       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>

    <tr>
       <td>2) Data:</td>
       <td><label for="limno">

        <select name='ata1' type='text' id='ano' tabindex="1">

         <option value='<?php echo "Novaterra"; ?>'>Novaterra</option>


        </select> </label> </td>


       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>





     <tr>
      <td>5) Local da pesquisa:</td>
      <td><label for="local">
             <SELECT name='local' type='text' id='dia' tabindex="3">
              <?php if ($loc == "Todos"){
              ?>
                 <option value='Todos'>Todos</option>
                <?php } ?>
              <?php if ($flag == 1){
               $lista = new ManipulateData();
              $NomeLoc = $lista->NomeLocal($loc);
              ?>
               <option value='<?php echo "$loc"; ?>'><?php echo "$NomeLoc"; ?></option>
                <?php } ?>



                 <option value='Todos'>Todos</option>
               <?php
               $lista->geraListaLocali();
                ?>
           </select>  </label>  </td>
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
    include_once "familiar_rel_mostrar_nt.php";
    }
    ?>