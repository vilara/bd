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
  $em = $_POST["em"];

   $nr_ref = $_POST["nr_ref"];

   $local = $_POST["local"];
   // echo "$nr_ref";

  if ($em == ""){$emm = "";}
  else if ($em == "Todos"){$emm = "";}
   else if ($em == "SAE"){$emm = " AND (empre = 'SJ' OR empre = 'SM')";}
   else if ($em == "Jirau"){$emm = " AND (empre = 'JS' OR empre = 'JM')";}

  $an = $_POST["an"];
   if ($an == ""){$ann = "";}
  else if ($an == "Todos"){$ann = "";}
   else if ($an == "S"){$ann = " AND anali = 'S'";}
    else if ($an == "N"){$ann = " AND anali = 'N'";}

      $dia_i = $_POST["dia_i"];
      $mes_i = $_POST["mes_i"];
      $ano_i = $_POST["ano_i"];
  $data_i = "$ano_i-$mes_i-$dia_i";
      $dia_f = $_POST["dia_f"];
      $mes_f = $_POST["mes_f"];
      $ano_f = $_POST["ano_f"];
  $data_f = "$ano_f-$mes_f-$dia_f";

   if ($data_i > 1900-01-01 AND $data_f > 1900-01-01){$dataa = "AND data BETWEEN '$data_i' AND '$data_f'";}
  else {$dataa = "";}


// echo "$esp-$em-$an-$data_i-$data_f";
 /* $loc = $_POST["loc"];  */
  $flag = $_GET["flag"];
  $exc = $_GET["exc"];
  $flag1 = $_GET["flag1"];

  $flag2 = $_GET["flag2"];
 ?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/bagres_pesc&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
<fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>
     <tr>
       <td>1) Empreendimento:</td>
       <td><label for="limno">
       <SELECT name='em' id="em" type='text' >

           <?php

              if($flag == 1)
                 {echo "<option value=\"".$em."\">".$em."</option>";}
           ?>
           <option value='Todos'>Todos</option>
           <option value='SAE'>SAE</option>
           <option value='Jirau'>Jirau</option>

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
           <option value='64'>Piramutaba</option>

            <option value='36'>Curimatã</option>
           <option value='42'>Jaraqui escama grossa</option>
           <option value='26'>Branquinha comum</option>
           <option value='71'>Pirapitinga</option>
             <option value='83'>Tambaqui</option>



       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
       <td>1) Nr Ref:</td>
       <td><label for="limno">


            <input name="nr_ref" type="text" id="nr_ref" tabindex="2" accesskey="p" size="5" value="<?php echo "$nr_ref"; ?>" />


   </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


       <tr>
       <td>3) Local:</td>
       <td><label for="local">

        <SELECT name='local' id="local" type='text'  tabindex="2" >
       <?php
         if ($loc >= 1) {
       $lista = new ManipulateData();
       $NomeLoc = $lista->NomeLocal($loc);

       ?>
         <option value='<?php echo "$loc"; ?>'><?php echo "$NomeLoc"; ?></option>
       <?php
       }
        ?>

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


     <?php

       $lista = new ManipulateData();

     ?>
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
         <option value='2005'>2005</option>
        <option value='2006'>2006</option>
         <option value='2007'>2007</option>


        <option value='2008'>2008</option>
        <option value='2009'>2009</option>
         <option value='2010'>2010</option>
          <option value='2011'>2011</option>
           <option value='2012'>2012</option>
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
         <option value='<?php echo "$ano_f"; ?>'><?php echo "$ano_f"; ?></option>
         <option value='2005'>2005</option>
        <option value='2006'>2006</option>
         <option value='2007'>2007</option>


        <option value='2008'>2008</option>
        <option value='2009'>2009</option>
         <option value='2010'>2010</option>
          <option value='2011'>2011</option>
           <option value='2012'>2012</option>
        </select>


       </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
       <td>1) Análise:</td>
       <td><label for="limno">
       <SELECT name='an' id="an" type='text' >

           <?php

              if($flag == 1)
                 {echo "<option value=\"".$an."\">".$an."</option>";}
           ?>
           <option value='Todos'>Todos</option>
           <option value='S'>Sim</option>
           <option value='N'>Não</option>

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
    include_once "bagres_pesc_mostrar.php";
    }
    ?>


