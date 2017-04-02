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

    if ($ano == "Todos" AND $mes == "Todos"){$data = "";}
    else if ($ano != "Todos" AND $mes == "Todos"){$data = " AND ano = '$ano'";}
    else if ($ano != "Todos" AND $mes != "Todos"){$data = " AND ano = '$ano' AND mes = '$mes'";}


     $func =  $_POST["func"];
     if ($func == "Todos"){$fun = "";}
    else {$fun = " AND func = '$func'";}



  $lista = new ManipulateData();

?>
<div id="conteudo">
   <h3>Rendimento pesqueiro</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/caderno_rel_pesc&flag=1" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->


    <tr>
       <td>1) Função:</td>
       <td><label for="limno">

        <select name='func' type='text' id='ano' tabindex="1">
         <?php if ($flag == 1){ ?>
         <option value='<?php echo "$func"; ?>'><?php echo "$func"; ?></option>
         <?php } ?>
          <option value='Todos'>Todos</option>
         <option value='P'>P</option>
         <option value='A'>A</option>
         <option value='P e A'>P e A</option>
         <option value='B'>B</option>
         <option value='C'>C</option>
         <option value='R'>R</option>
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
          <option value='Todos'>Selecione</option>
         <option value='1989'>1989</option>
         <option value='1990'>1990</option>
         <option value='1991'>1991</option>
         <option value='1992'>1992</option>
         <option value='1993'>1993</option>
         <option value='1994'>1994</option>
         <option value='1995'>1995</option>
         <option value='1996'>1996</option>
         <option value='1997'>1997</option>
         <option value='1998'>1998</option>
         <option value='1999'>1999</option>
         <
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
    include_once "caderno_rel_pesc_mostrar.php";
    }
    ?>