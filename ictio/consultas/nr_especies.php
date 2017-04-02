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
   $esp_catrof = $_POST["esp_catrof"];
   if (empty($esp_catrof)){
    $esp_catrof = $_GET["esp_catrof"];}

     $flag3 = $_POST["flag3"];
   if (empty($flag3)){
    $flag3 = $_GET["flag3"];}

   $aparelho = $_GET["aparelho"];
  $exc = $_GET["exc"];
  $loc = $_POST["loc"];
     $bio_nr = $_POST["bio_nr"];
     $ponto = $_POST["ponto"];
     if ($ponto == ""){$ponto = "Agrupados";}
     $l = $_POST["l"];
     if ($l == ""){$l = "Todos";}

    $exc = $_GET["exc"];

    $aparelho = $_GET["aparelho"];

$flag = $_GET["flag"];
$flag1 = $_GET["flag1"];
$flag2 = $_GET["flag2"];

$flag4 = $_GET["flag4"];
$flag5 = $_GET["flag5"];


// echo "$aparelho";
?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/nr_especies&flag=1&flag1=1&flag2=1&flag3=1&flag4=0&flag5=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>" enctype="multipart/form-data">
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
<option value='index.php?secoes=consultas/nr_especies&flag=0'>Selecione</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Todas&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Todas</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Expandidas&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Expandidas (1,6,9,12,16,19,23)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Expandidas Cheia&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Expandidas Cheia(1,12,19)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Expandidas Seca&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Expandidas Seca(6,9,16,23)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Cheia piloto&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Cheia piloto (1,2)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Seca 1&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Seca ano 1 (4,5,6,7,8,9)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Seca 2&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Seca ano 2 (16,17,18)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Seca 3&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Seca ano 3 (22,23,24)</option>

<option value='index.php?secoes=consultas/nr_especies&exc=Secas&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Secas (4,5,6,7,8,9,16,17,18,22,23,24)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Cheia 1&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Cheia ano 1 (3,10,11,12,13,14)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Cheia 2&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Cheia ano 2 (15,19,20)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=Cheia 3&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Cheia ano 3 (21,25)</option>

<option value='index.php?secoes=consultas/nr_especies&exc=Cheias&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>Cheias (3,10,11,12,13,14,15,19,20,21,25)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=ANO I&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>ANO I (3 a 14)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=ANO II&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>ANO II (15 a 20)</option>

<option value='index.php?secoes=consultas/nr_especies&exc=ANO III&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>ANO III (21 a 25)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=2008&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>2008 (1 e 2)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=2009&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>2009 (3 a 11)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=2010&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>2010 (12 a 19)</option>
<option value='index.php?secoes=consultas/nr_especies&exc=2011&flag=1&aparelho=<?php echo"$aparelho"; ?>&flag1=<?php echo"$flag1"; ?>&flag2=<?php echo"$flag2"; ?>&flag3=<?php echo"$flag3"; ?>&flag4=<?php echo"$flag4"; ?>&esp_catrof=<?php echo"$esp_catrof"; ?>'>2011 (20 a 25)</option>

             <?php
               $lista = new ManipulateData1();
               $lista->geraListaExc1($aparelho,$flag1,nr_especies);
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
              else if ($aparelho == "Espinhel")
              {$filt = "esp"; $esp = "selected";}
               else if ($aparelho == "Puça")
              {$filt = "pu"; $pu = "selected";}
              else if ($aparelho == "Todos")
              {$filt = "Todo"; $to = "selected";}


               else if ($aparelho == "Caniço")
              {$filt = "ca"; $ca = "selected";}
               else if ($aparelho == "Tarrafa")
              {$filt = "tarr"; $tarr = "selected";}



            ?>
           <SELECT NAME='aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
              <option value='index.php?secoes=consultas/nr_especies&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=0&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>'>Selecione</option>
              <!--  <option value='index.php?secoes=consultas/registros&aparelho=Todos&exc=<?php echo"$exc";?>&flag=3&flagg=1' <?php echo"$to";?>>Todos</option>-->
             <option value='index.php?secoes=consultas/nr_especies&aparelho=Redinha&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$re";?>>Redinha</option>
             <option value='index.php?secoes=consultas/nr_especies&aparelho=Malhadeira&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$ma";?>>Malhadeira</option>
             <option value='index.php?secoes=consultas/nr_especies&aparelho=Arrasto de fundo&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$ar";?>>Arrasto Bentônico</option>
             <option value='index.php?secoes=consultas/nr_especies&aparelho=Puça&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$pu";?>>Puça</option>
         <option value='index.php?secoes=consultas/nr_especies&aparelho=Espinhel&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$esp";?>>Espinhel</option>

                  <option value='index.php?secoes=consultas/nr_especies&aparelho=Caniço&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$ca";?>>Caniço</option>
         <option value='index.php?secoes=consultas/nr_especies&aparelho=Tarrafa&exc=<?php echo"$exc";?>&flag=1&flag2=1&flag1=1&esp_catrof=<?php echo"$esp_catrof"; ?>&flag3=<?php echo"$flag3"; ?>' <?php echo"$tarr";?>>Tarrafa</option>



           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
      <?php
       }

       if($flag2 == 1){
        ?>

    <tr>
       <td>2) Esp Catrof:</td>
       <td><label for="limno">
       <SELECT name='esp_catrof' type='text'  tabindex="1" >




       <?php

           if($flag3 == 1)
                 {echo "<option value=\"".$esp_catrof."\">".$esp_catrof."</option>";}

          ?>
               <option value='Todas'>Todas</option>
           <?php


               $lista = new ManipulateData1();
               $lista->EspCatrof();
           ?>
       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>



    <?php
     }



    if($aparelho == "Arrasto de fundo")
    {
    ?>
    <!-- LINHA DE LOCAIS -->
        <tr>
        <td>3) Locais:</td>
        <td><label for="inicial">
        <SELECT NAME='ponto' type='text' id='ponto' tabindex="1">
        <?php
        if ($flag == 1)
        {
        echo "<option value=\"".$ponto."\">".$ponto."</option>" ;
        }
        ?>


         <option value='Agrupados'>Agrupados</option>

        <option value='Separados'>Separados</option>
         <option value='Consolidados'>Consolidados</option> 
        </select></label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>


                <tr>
        <td>4)Larva:</td>
        <td><label for="inicial">
        <SELECT NAME='l' type='text' id='l' tabindex="1">
         <?php
        if ($flag == 1)
        {
        echo "<option value=\"".$l."\">".$l."</option>" ;
        }

          ?>
        <option value='Todos'>Todos</option>
        <option value='Larva'>Larva</option>
        <option value='Não larva'>Não larva</option>
        </select></label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
    if ($flag5 == 1)
    {
    include_once "nr_especies_mostrar.php";
    }
    ?>


