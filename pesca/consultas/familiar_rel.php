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
                        $dia = $_POST["dia"];
                        $mes = $_POST["mes"];
                        $ano = $_POST["ano"];
   if ($ano == "Todos" AND $mes == "Todos" AND $dia == "Todos"){$data = "";}
 else if ($ano != "Todos" AND $mes == "Todos" AND $dia == "Todos"){$data = " AND data LIKE '$ano-%'";}
   else if ($ano != "Todos" AND $mes != "Todos" AND $dia == "Todos"){$data = " AND data LIKE '$ano-$mes%'";}
   else if ($ano != "Todos" AND $mes != "Todos" AND $dia != "Todos"){$data = " AND data = '$ano-$mes-$dia'";}


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

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/familiar_rel&flag=1" enctype="multipart/form-data">
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
       <td>2) Ano da pesquisa:</td>
       <td><label for="limno">

        <select name='ano' type='text' id='ano' tabindex="1">
         <?php if ($flag == 1){ ?>
         <option value='<?php echo "$ano"; ?>'><?php echo "$ano"; ?></option>
         <?php } ?>
          <option value='Todos'>Todos</option>
         <option value='2005'>2005</option>
         <option value='2006'>2006</option>
         <option value='2007'>2007</option>
         <option value='2008'>2008</option>
         <option value='2009'>2009</option>
         <option value='2010'>2010</option>
            <option value='2011'>2011</option>  
 <option value='2012' >2012</option>
 <option value='2013' "selected">2013</option> 
        </select> </label> </td>


       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
      <td>3) Mês da pesquisa:</td>
      <td><label for="mes">
               <SELECT name='mes' type='text' tabindex="2">
                <?php if ($flag == 1){ ?>
                <option value='<?php echo "$mes"; ?>'><?php echo "$mes"; ?></option>
                 <?php } ?>
                 <option value='Todos'>Todos</option>
               <?php
               $lista->ListaMeses();
                ?>
              </select></label> </td>

       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>



     <tr>
      <td>4) Dia da pesquisa:</td>
      <td><label for="dia">
             <SELECT name='dia' type='text' id='dia' tabindex="3">
              <?php if ($flag == 1){ ?>
               <option value='<?php echo "$dia"; ?>'><?php echo "$dia"; ?></option>
                <?php } ?>
                 <option value='Todos'>Todos</option>
               <?php
               $lista->ListaDias();
                ?>
           </select>  </label>  </td>
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
    include_once "familiar_rel_mostrar.php";
    }
    ?>