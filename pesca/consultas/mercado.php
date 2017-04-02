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
    $exc = $_GET["exc"];

    $aparelho = $_GET["aparelho"];
    $flag1 = $_GET["flag1"];

    $flag2 = $_GET["flag2"];

    $ord = "malh_data,malh_hora,malh_numero";
   if ($flag2 == 1)
    {
    $cod = $_POST["cod"];
    }
    else
    {
    $cod = $_GET["cod"];
    $ord = $_GET["ord"];
    }

  $lista = new ManipulateData();

?>
<div id="conteudo">
   <h3>Parâmetros da Consulta de Pesca Familiar</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->
    <tr>
       <td>1) Data Inicial:</td>
       <td><label for="limno">
       <SELECT name='dia_i' type='text' id='dia' tabindex="4">
        <?php
        $lista->ListaDias();
        ?>
        </select>\
        <SELECT name='mes_i' type='text' id='mes' tabindex="5">
        <?php
        $lista->ListaMeses();
        ?>
        </select>\
        <select name='ano_i' type='text' id='ano' tabindex="6">
        <option value=''>&nbsp;</option>
        <option value='2008'>2008</option>
        <option value='2009' "selected">2009</option>
           <option value='2010'>2010</option>
              <option value='2011'>2011</option>
        </select>


       </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>



    <tr>
       <td>2) Data Final:</td>
       <td><label for="limno">
       <SELECT name='dia_f' type='text' id='dia' tabindex="4">
        <?php
        $lista->ListaDias();
        ?>
        </select>\
        <SELECT name='mes_f' type='text' id='mes' tabindex="5">
        <?php
        $lista->ListaMeses();
        ?>
        </select>\
        <select name='ano_f' type='text' id='ano' tabindex="6">
        <option value=''>&nbsp;</option>
        <option value='2008'>2008</option>
        <option value='2009' "selected">2009</option>
        </select>


       </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>






     <tr>
       <td>3) Pesca:</td>
       <td><label for="pesca">
       <SELECT name='pesca' id="pesca" type='text'  tabindex="2" >

       <option value='Familiar'>Familiar</option>
        <option value='Caderno'>Caderno</option>
         <option value='Mercado'>Mercado</option>

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
              {$filt = "Outr"; $pu = "selected";}
              else if ($aparelho == "Espinhel")
              {$filt = "Outr"; $esp = "selected";}
              else if ($aparelho == "Todos")
              {$filt = "Todo"; $to = "selected";}
            ?>
           <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
             <option value='index.php?secoes=consultas/registros&exc=<?php echo"$exc";?>&flag=1&flag1=0'>Selecione</option>
              <!--  <option value='index.php?secoes=consultas/registros&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$to";?>>Todos</option>-->
             <option value='index.php?secoes=consultas/registros&aparelho=Redinha&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$re";?>>Redinha</option>
             <option value='index.php?secoes=consultas/registros&aparelho=Malhadeira&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ma";?>>Malhadeira</option>
             <option value='index.php?secoes=consultas/registros&aparelho=Arrasto de fundo&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ar";?>>Arrasto Bentônico</option>
             <option value='index.php?secoes=consultas/registros&aparelho=Puça&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$pu";?>>Puça</option>
             <option value='index.php?secoes=consultas/registros&aparelho=Espinhel&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$esp";?>>Espinhel</option>
           <!--  <option value='index.php?secoes=consultas/registros&aparelho=Outros&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$pu";?>>Outros</option> -->
           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php
    }






    /*LINHA DO CÓDIGO DE CAMPO*/
    if ($flag1 == 1)
    {

        /*LINHA DO CÓDIGO DE CAMPO PARA MALHADEIRA E REDINHA */
        if ($aparelho == "Malhadeira" OR $aparelho == "Redinha")
        {
        ?>
            <tr>
                <td>3) Código Limno:</td>
                <td><label for="inicial">
                <?php
                if($exc != "Todas")
                {$excc = " "."AND tb_limno.lim_excursao = $exc";}
                else{$excc = " ";}
                ?>
                <SELECT name='cod' type='text' tabindex="1">
                <OPTION value="Todos" >Todos</option>
                <?php
                $lista = new ManipulateData1();
                $lista->geraListaCodMalhRed($aparelho,$excc);
                ?>
                </select>
                </label> &nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
            </tr>
        <?php
        }


        /*LINHA DO CÓDIGO DE CAMPO PARA ARRASTO DE FUNDO */
        if ($aparelho == "Arrasto de fundo")
        {
        ?>
            <tr>
            <td>3) Código Limno:</td>
            <td><label for="inicial">
            <?php
            if($exc != "Todas")
            {$excc = " "."AND tb_limno_arr.lim_arr_excursao = $exc";}
            else{$excc = " ";}
            ?>
            <SELECT name='cod' type='text' tabindex="1">
            <OPTION value="Todos" >Todos</option> 
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaCodArr($excc);
            ?></select>
            </label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
        <?php
        }

        /*LINHA DO CÓDIGO DE CAMPO PARA OUTROS APARELHOS */
        if ($aparelho == "Espinhel" OR $aparelho == "Puça")
        {
        ?>
            <tr>
            <td>3) Código Limno:</td>
            <td><label for="inicial">
            <?php
            if($exc != "Todas")
            {$excc = " "."AND tb_limno_outr.lim_outr_excursao = $exc";}
            else{$excc = " ";}
            ?>
            <SELECT name='cod' type='text' tabindex="1">
            <OPTION value="Todos" >Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaCodOutr($excc,$aparelho);
            ?>
            </select>
            </label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
        <?php
        }
     }

     /*LINHA DAS ESPÉCIMES*/

if ($flag == 2)
{

    if ($flag == 20)
    {
    ?>
          <!--ORDEM -->
          <tr>
            <td>3) Ordem:</td>
            <td><label for="inicial">
            <SELECT NAME='ord' type='text' id='aparelho' tabindex="1">
            <?php
            $flag = $_GET["flag"];
            if ($flag == 1)
            {echo "<option value=\"".$ord."\">".$ord."</option>";}
            ?>
            <option value='Todos'>Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaOrdem();
            ?>
            </select></label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>

          <!--FAMÍLIA -->
          <tr>
              <td>4) Família: </td>
              <td><label for="inicial"><SELECT NAME='fam' type='text' id='aparelho' tabindex="1">
              <?php
              $flag = $_GET["flag"];
              if ($flag == 1)
              {echo "<option value=\"".$fam."\">".$fam."</option>";}
              ?>
              <option value='Todos'>Todos</option>
              <?php
              $lista = new ManipulateData1();
              $lista->geraListaFam();
              ?>
              </select></label></td>
              <td>&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
          </tr>

          <!-- ESPÉCIE -->
          <tr>
            <td>5) Espécie:</td>
            <td><label for="inicial"><SELECT NAME='esp' type='text' id='aparelho' tabindex="1">
            <?php
            $flag = $_GET["flag"];
            if ($flag == 1)
            {echo "<option value=\"".$esp."\">".$esp."</option>";}
            ?>
            <option value='Todos'>Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaEspecie();
            ?>
            </select></label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
    <?php
    }

}
?>

    </table>
    <br />&nbsp;&nbsp;&nbsp;
         <center><input type="submit" value="Submeter" class="botao2"  /></center>
    </fieldset>
    </form>
</div>




    <!-- RESULTADO -->
    <?php
    if ($flag2 == 1 OR $flag2 == 2)
    {
    include_once "mercado_mostrar.php";
    }
    ?>