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

     $flag = $_GET["flag"];
    $exc = $_GET["exc"];
    $esp = $_POST["esp"];

                  $login = new ManipulateData();
                  $login->setTable("tb_especies");
                  $login->setFieldId("esp_especie ='$esp'");
                  $login->setFieldNr("0"); $cod_esp = $login->data_filter();
     //  echo "$esp";
    $aparelho = $_GET["aparelho"];
    $flag1 = $_GET["flag1"];

    $flag2 = $_GET["flag2"];

    if ($flag2 == 1)
    {
    $cod = $_POST["cod"];
    }
    else
    {
    $cod = $_GET["cod"];
    }
//   echo "$cod";
?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas no Projeto Igarapés</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/ig&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=Geral" enctype="multipart/form-data">
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


           <?php
               if($flag == 1)
                 {echo "<option value=\"".$exc."\">".$exc."</option>";}
           ?>
       <option value='index.php?secoes=consultas/ig&flag=0'>&nbsp;</option>
       <option value="index.php?secoes=consultas/ig&exc=Geral&flag=1&aparelho=<?php echo "$aparelho"; ?>&flag1=<?php echo "$flag1"; ?>">Geral</option>

               <option value="index.php?secoes=consultas/ig&exc=Todas&flag=1&aparelho=<?php echo "$aparelho"; ?>&flag1=<?php echo "$flag1"; ?>">Todas</option>

           <?php
               $lista = new ManipulateData1();
               $lista->geraListaExc1($aparelho,$flag1,ig);
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
              else if ($aparelho == "Covos")
              {$filt = "Arras"; $ar = "selected";}
              else if ($aparelho == "Puça")
              {$filt = "Outr"; $pu = "selected";}
              else if ($aparelho == "Detector")
              {$filt = "Outr"; $espii = "selected";}
              else if ($aparelho == "Todos")
              {$filt = "Todo"; $to = "selected";}
               else if ($aparelho == "Espinhel-ant")
              {$filt = "ea"; $ea = "selected";}

                 else if ($aparelho == "Fikenet")
              {$filt = "Tarr"; $ta = "selected";}
            ?>
           <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
             <option value='index.php?secoes=consultas/ig&exc=<?php echo"$exc";?>&flag=1&flag1=0'>Selecione</option>
             <option value='index.php?secoes=consultas/ig&aparelho=Todos&exc=<?php echo"$exc";?>&flag=1&flagg=1' <?php echo"$to";?>>Todos</option>
             <option value='index.php?secoes=consultas/ig&aparelho=Redinha&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$re";?>>Redinha</option>
             <option value='index.php?secoes=consultas/ig&aparelho=Covos&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ar";?>>Covos</option>
             <option value='index.php?secoes=consultas/ig&aparelho=Puça&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$pu";?>>Puça</option>
              <option value='index.php?secoes=consultas/ig&aparelho=Fikenet&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ta";?>>Fikenet</option>
             <option value='index.php?secoes=consultas/ig&aparelho=Detector&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$espii";?>>Detector</option>
<!--             <option value='index.php?secoes=consultas/registros&aparelho=Espinhel-ant&exc=<?php echo"$exc";?>&flag=1&flag1=1' <?php echo"$ea";?>>Espinhel-ant</option>
-->           <!--  <option value='index.php?secoes=consultas/registros&aparelho=Outros&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$pu";?>>Outros</option> -->
           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php
    }



          /*LINHA DO CÓDIGO DE CAMPO PARA OUTROS APARELHOS */
        if ($aparelho == "Covos" OR $aparelho == "Redinha" OR $aparelho == "Fikenet" OR $aparelho == "Puça" OR $aparelho == "Detector" OR $aparelho == "Todos")
        {
        ?>
            <tr>
            <td>3) Código Limno:</td>
            <td><label for="inicial">
            <?php
            if($exc != "Todas")
            {$excc = " "."AND tb_limno_ig.lim_ig_excursao = 0";}
            if($exc == "Geral")
            {$excc = "   "." AND tb_limno_ig.lim_ig_excursao = 0";}/*echo "$excc"; */

            ?>
            <SELECT name='cod' type='text' tabindex="1">
            <OPTION value="Todos" >Todos</option>
            <?php
            $lista = new ManipulateData1();
            $lista->geraListaCodIg($excc,$aparelho);
            ?>
            </select>
            </label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>



  <tr>
            <td>4) Espécie:</td>
            <td><label for="inicial"><SELECT NAME='esp' type='text' id='aparelho' tabindex="1">
            <?php
            $selec = "selected";
            $flag = $_GET["flag"];
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

            <?php
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
    include_once "ig_mostrar.php";
    }
    ?>