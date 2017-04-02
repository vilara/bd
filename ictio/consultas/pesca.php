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
      $dia_i = $_POST["dia_i"];
                       $mes_i = $_POST["mes_i"];
                        $ano_i = $_POST["ano_i"];
                        $data_i = "$ano_i-$mes_i-$dia_i";

                        $dia_f = $_POST["dia_f"];
                       $mes_f = $_POST["mes_f"];
                        $ano_f = $_POST["ano_f"];
                        $data_f = "$ano_f-$mes_f-$dia_f";
     $loc = $_POST["local"];

if ($loc != "Todos"){$local = " AND loc = $loc";}else {$local = "";}




     $esp1 = $_POST["esp"];
  //    echo "$esp1";
if ($loc != "Todos"){$local = " AND loc = $loc";}else {$local = "";}
if ($esp1 != "Todas"){$espec1 = " AND cat = $esp1";}else {$espec1 = "";}
  //   echo "$espec1";
// echo "$local";
   /* $exc = $_GET["exc"];

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
     */
  $lista = new ManipulateData();

?>
<div id="conteudo">
   <h3>Parâmetros da Consulta de Pesca Familiar</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/pesca&flag=1" enctype="multipart/form-data">
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
       <option value="<?php echo "$dia_i"; ?>"><?php echo "$dia_i"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>\
        <SELECT name='mes_i' type='text' id='mes' tabindex="5">
        <option value="<?php echo "$mes_i"; ?>"><?php echo "$mes_i"; ?></option>
        <?php
        $lista->ListaMeses();
        ?>
        </select>\
        <select name='ano_i' type='text' id='ano' tabindex="6">
        <option value='<?php echo "$ano_i"; ?>'><?php echo "$ano_i"; ?></option>
        <option value='2008'>2008</option>
          <option value='2009'>2009</option>
          <option value='2010' >2010</option>
        <option value='2011' "selected">2011</option>
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
       <option value="<?php echo "$dia_f"; ?>"><?php echo "$dia_f"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>\
        <SELECT name='mes_f' type='text' id='mes' tabindex="5">
        <option value="<?php echo "$mes_f"; ?>"><?php echo "$mes_f"; ?></option>
        <?php
        $lista->ListaMeses();
        ?>
        </select>\
        <select name='ano_f' type='text' id='ano' tabindex="6">
        <option value="<?php echo "$ano_f"; ?>"><?php echo "$ano_f"; ?></option>
        <option value='2008'>2008</option>
        <option value='2009'>2009</option>
          <option value='2010' >2010</option>
        <option value='2011' "selected">2011</option>

        </select>


       </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
       <td>3) Local:</td>
       <td><label for="local">
       <SELECT name='local' id="local" type='text'  tabindex="2" >

       <option value='Todos'>Todos</option>
         <?php
                $lista = new ManipulateData();
                $lista->geraListaLocalP();
                ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>



     <tr>
       <td>4) Pesca:</td>
       <td><label for="pesca">
       <SELECT name='pesca' id="pesca" type='text'  tabindex="2" >
        <option value='<?php echo "$pesca"; ?>'><?php echo "$pesca"; ?></option>
       <option value='Familiar'>Familiar</option>
        <option value='Caderno'>Caderno</option>
         <option value='Biometria'>Biometria</option>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>

     <tr>
       <td>1) Espécie:</td>
       <td><label for="limno">
       <SELECT name='esp' id="esp" type='text' >

           <?php

                if ($esp == 38){$espe = "Dourada";}
           else if ($esp == 16){$espe = "Babão";}
           else if ($esp == 119){$espe = "Filhote";}
           else if ($esp == 64){$espe = "Piramutaba";}
            else if ($esp == 39){$espe = "Filhote/Piraíba";}
              if($flag == 1)
                 {echo "<option value=\"".$esp."\">".$espe."</option>";}
           ?>
           <option value='#'>Selecione</option>
           <option value='38'>Dourada</option>
           <option value='16'>Babão</option>
           <option value='119'>Filhote</option>
            <option value='39'>Filhote/Piraíba</option>
           <option value='64'>Piramutaba</option>

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




    <!-- RESULTADO -->
    <?php
    if ($flag == 1)
    {
    include_once "pesca_mostrar.php";
    }
    ?>