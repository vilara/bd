 <?php

    include_once "log_auth1.php";

   $aparelho = "Malhadeira";
  $exc = $_POST["exc"];
  $loc = $_POST["loc"];
  $t = $_POST["t"];
    $flag = $_GET["flag"];


?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>
   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/ematur&flag=1" enctype="multipart/form-data">

   <fieldset>

         <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

          <tr class="linha_tit">
            <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
          </tr>

          <tr>

            <td>1) Excursão:</td>
            <td>
            <label for="limno"><SELECT name='exc' id="exc" type='text'  tabindex="1">
                <?php
                 if($flag == 1)
                 {echo "<option value=\"".$exc."\">".$exc."</option>";}
                ?>
                 <option value='#'>Selecione</option>
               <option value='Todas'>Todas</option>
             <option value='Expandidas'>Expandidas (1,6,9,12,16,20)</option>
              <option value='Cheia piloto'>Cheia piloto (1,2)</option>
              <option value='Seca 1'>Seca 1 (3,4,5,6,7,8)</option>
               <option value='Seca 2'>Seca 2 (15,16,17)</option>
                <option value='Secas'>Secas (3,4,5,6,7,8,15,16,17)</option>


                  <option value='Cheia 1'>Cheia 1 (9,10,11,12,13,14)</option>
                   <option value='Cheia 2'>Cheia 2 (18,19,20)</option>
                     <option value='Cheias'>Cheias (9,10,11,12,13,14,18,19,20)</option>
                      <option value='ANO I'>ANO I (3 a 14)</option>
                     <option value='ANO II'>ANO II (15 a 20)</option>
                      <option value='2008'>2008 (1 e 2)</option>
                     <option value='2009'>2009 (3 a 11)</option>
                      <option value='2010'>2010 (12 a 19)</option>
                 <?php
                     $lista = new ManipulateData1();
                     $lista->geraListaExc();
                 ?>

            </select></label>
            </td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
          </tr>


          <tr>
          <td>2) Local:</td>
          <td><label for="inicial">

           <SELECT NAME='loc' type='text' id='lim_aparelho' tabindex="4">
           <?php
               $lista = new ManipulateData1();
               $NomeLoc = $lista->NomeLoc($loc);
              if($flag == 1)
                 {echo "<option value=\"".$loc."\">".$NomeLoc."</option>";}
           ?>
           <option value='#'>Selecione</option>
             <?php

               $lista = new ManipulateData1();
               $lista->geraListaLocc();
           ?>

           </select></label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>


    <tr>

            <td>3) Parâmetro:</td>
            <td>
            <label for="limno"><SELECT name='t' id="t" type='text'>
                <?php
                 if ($t == 'F'){$te = "Reprodução";}
           else if ($t == 'GG'){$te = "Grau de Gordura";}
           else if ($t == 'GR'){$te = "Grau de Repleção";}

                 if($flag == 1)
                 {echo "<option value=\"".$t."\">".$te."</option>";}
                ?>
                 <option value='F'>Reprodução</option>
                 <option value='GG'>Grau de Gordura</option>
                 <option value='GR'>Grau de Repleção</option>

            </select></label>
            </td>
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
    include_once "ematur_mostrar.php";
    }
    ?>


