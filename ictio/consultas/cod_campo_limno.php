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

    $flag = $_GET['flag'];
    $exc = $_GET['exc'];

    $aparelho = $_GET['aparelho'];
    $flag1 = $_GET['flag1'];



?>
<div id="conteudo">
   <h3>Parâmetros da consulta de número de espécies capturadas</h3>

 <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/cod_campo_limno&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->
    <tr>
       <td>1) Excursão:</td>
       <td><label for="limno">


       <SELECT name='exc' id="exc" type='text'  tabindex="1"  onchange="destino1()" >
      <!--     -->
           <?php
              if($flag == 1)
                 {echo "<option value=\"".$exc."\">".$exc."</option>";}
           ?>
           <option value='index.php?secoes=consultas/cod_campo_limno&exc=#&flag=3'>&nbsp;</option>
           <option value="index.php?secoes=consultas/cod_campo_limno&exc=Geral&flag=1&aparelho=<?php echo "$aparelho"; ?>&flag1=<?php echo "$flag1"; ?>">Geral</option>

           <option value='index.php?secoes=consultas/cod_campo_limno&exc=Todas&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"flag1"; ?>'>Todas</option>
          <?php
               $lista = new ManipulateData1();
               $lista->geraListaExc1($aparelho,$flag1,cod_campo_limno);
           ?>
       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>







     <!-- LINHA DO APARELHO DE PESCA -->
    <?php
    if ($flag == 1)
    {
    ?>
    <tr>
      <td>2) Aparelho de pesca:</td>
      <td><label for="inicial">
            <?php
              if ($aparelho == "Malhadeira")
              {$filt = "Ma"; $ma = "selected";}
              else if ($aparelho == "Redinha")
              {$filt = "Re"; $re = "selected";}
              else if ($aparelho == "Arrasto de fundo")
              {$filt = "Arras"; $ar = "selected";}
              else if ($aparelho == "Puça")
              {$filt = "Pucc"; $pu = "selected";}
               else if ($aparelho == "Espinhel")
              {$filt = "Esp"; $esp = "selected";}
              else if ($aparelho == "Todos")
              {$filt = "Todo"; $to = "selected";}

               else if ($aparelho == "Tarrafa")
              {$filt = "Tarr"; $ta = "selected";}


               else if ($aparelho == "Outros")
              {$filt = "Ma"; $ou = "selected";}
            ?>
            <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
             <option value='index.php?secoes=consultas/cod_campo_limno&exc=<?php echo"$exc";?>&flag=1&flag1=0'>Selecione</option>
              <!--  <option value='index.php?secoes=consultas/registros&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$to";?>>Todos</option>-->
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Redinha&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$re";?>>Redinha</option>
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Malhadeira&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ma";?>>Malhadeira</option>
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Arrasto de fundo&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ar";?>>Arrasto Bentônico</option>
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Puça&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$pu";?>>Puça</option>
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Tarrafa&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ta";?>>Tarrafa</option>
             <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Espinhel&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$esp";?>>Espinhel</option>

                   <option value='index.php?secoes=consultas/cod_campo_limno&aparelho=Outros&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ou";?>>Outros</option>


           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php
    }
    ?>

 </table>
    <br />&nbsp;&nbsp;&nbsp;
    </fieldset>
    </form>
</div>




    <!-- RESULTADO -->
    <?php
    if ($flag1 == 1)
    {
    include_once "cod_campo_limno_mostrar.php";
    }
    ?>