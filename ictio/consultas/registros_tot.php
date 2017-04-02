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
   if($flag == 2){

     $aparelho = $_GET["aparelho"];
     }
     $flag2 = $_GET["flag2"];

  if($flag2 == 1){

    $aparelho = $_GET["aparelho"];
    $esp = $_POST["esp"];
    $cod_lim = $_POST["cod_lim"]; // echo "$cod_lim";


  }
   //echo "$quant";



?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies totais capturadas</h3>

       <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/registros_tot&flag=2&flag2=1&quant=<?php echo "$quant"; ?>&aparelho=<?php echo"$aparelho"; ?>" enctype="multipart/form-data">

   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>



    <tr>
      <td>1) Aparelho de pesca:</td>
      <td><label for="inicial">

           <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
             <?php if($flag == 2){?>
             <option value='<?php echo "$aparelho"; ?>'><?php echo "$aparelho"; ?></option>
             <?php } ?>
             <option value='index.php?secoes=consultas/registros_tot&flag=2&flag1=0'>Selecione</option>
<!--             <option value='index.php?secoes=consultas/registros&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=1'>Todos</option>
-->             <option value='index.php?secoes=consultas/registros_tot&aparelho=Redinha&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Redinha</option>
             <option value='index.php?secoes=consultas/registros_tot&aparelho=Malhadeira&flag=2&quant=<?php echo "$quant"; ?>&flag1=1' >Malhadeira</option>
             <option value='index.php?secoes=consultas/registros_tot&aparelho=Arrasto de fundo&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Arrasto Bentônico</option>
             <option value='index.php?secoes=consultas/registros_tot&aparelho=Puça&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Puça</option>
                        <option value='index.php?secoes=consultas/registros_tot&aparelho=Manual&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Manual</option>
                                   <option value='index.php?secoes=consultas/registros_tot&aparelho=Outros&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Outros</option>
                               
            <option value='index.php?secoes=consultas/registros_tot&aparelho=Caniço&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Caniço</option>


              <option value='index.php?secoes=consultas/registros_tot&aparelho=Tarrafa&flag=2&quant=<?php echo "$quant"; ?>&flag1=1'>Tarrafa</option>
             <option value='index.php?secoes=consultas/registros_tot&aparelho=Espinhel&flag=2&quant=<?php echo "$quant"; ?>&flag1=1' >Espinhel</option>
           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>


     <tr>
            <td>2) Espécie:</td>
            <td><label for="inicial"><SELECT NAME='esp' type='text' id='aparelho' tabindex="1">
            <?php
            $selec = "selected";
            if ($flag2 == 1)
            {echo "<option value=\"".$esp."\">".$esp."</option>";   $selec = " ";}
            ?>
            <option value='Todas' <?php echo "$selec"; ?>>Todas</option>

            <?php
            $lista = new ManipulateData1();
            $lista->geraListaEspecie();
            ?>
            </select></label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>

    <!--   LINHA DO CÓDIGO DE CAMPO     -->
   <?php
  if ($flag == 2 )
    {

        /*LINHA DO CÓDIGO DE CAMPO PARA MALHADEIRA E REDINHA */
        if ($aparelho == "Malhadeira" OR $aparelho == "Redinha")
        {
        ?>
            <tr>
                <td>3) Código Limno:</td>
                <td>
                <SELECT NAME='cod_lim' type='text' id='aparelho' tabindex="1">
                <option value='Todas'>Todas</option>
                <?php
                  $lista = new ManipulateData1();
                  $lista->geraListaCodMalhRed1($aparelho);
                ?>
                 </select></td>
                <td>&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
            </tr>
        <?php

        }

         if ($aparelho == "Arrasto de fundo")
        {
        ?>
            <tr>
            <td>3) Código Limno:</td>
            <td><label for="inicial">
            <SELECT name='cod_lim' type='text' tabindex="1">
            <OPTION value="Todos" >Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaCodArr1();
            ?></select>
            </label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>
        <?php
        }

         if ($aparelho == "Puça" OR $aparelho == "Tarrafa" OR $aparelho == "Espinhel" OR $aparelho == "Manual" OR $aparelho == "Caniço"  OR $aparelho == "Outros")
        {
        ?>
            <tr>
            <td>3) Código Limno:</td>
            <td><label for="inicial">
            <SELECT name='cod_lim' type='text' tabindex="1">
            <OPTION value="Todos" >Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaCodOutr1($aparelho);
            ?></select>
            </label> &nbsp;&nbsp;&nbsp;</td>
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



    if ($flag2 == 1 )
    {
    include_once "registros_mostrar_tot.php";
    }
    ?>