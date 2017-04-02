<link type="text/css" href="estilos/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>

<script language=javascript>
function destino(){
url = document.navegador.lim_aparelho.options[document.navegador.lim_aparelho.selectedIndex].value
if (url != " no") window.location = url;
}
function destino1(){
url = document.navegador.exc.options[document.navegador.exc.selectedIndex].value
if (url != " no") window.location = url;
}


	$(document).ready(function(){
				 	$(".data").datepicker({
						dateFormat: 'yy-mm-dd',
						dayNames: ['Domingo','Segunda','Ter&ccedil;a','Quarta','Quinta','Sexta','S&aacute;bado','Domingo'],
						dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
						dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab','Dom'],
						monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
						monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
						nextText: 'Pr&oacute;ximo',
						prevText: 'Anterior'
					});
			});
</script>
 <?php

   //  include_once "log_auth.php";

    $flag = $_GET["flag"];
    $pesca =  $_POST["pesca"];
      $dia_i = $_POST["dia_i"];
                       $mes_i = $_POST["mes_i"];
                        $ano_i = $_POST["ano_i"];
                        $data_i = $_POST["data_i"];

                        $dia_f = $_POST["dia_f"];
                       $mes_f = $_POST["mes_f"];
                        $ano_f = $_POST["ano_f"];
                        $data_f = $_POST["data_f"];

      $esp =  $_POST["esp"];
        $esp1 =  $_POST["esp1"];
          $esp2 =  $_POST["esp2"];
          $esp3 =  $_POST["esp3"];
          $pesc =  $_POST["pesc"];
  if ($pesc != "Todas"){$pescc = " AND pescador = $pesc";}else {$pescc = "";}
      //  echo $pesca;
    $loc = $_POST["local"];
       //    echo $loc;
$parenteses = " ";
if ($loc != "Todos"){$local = " AND loc = $loc";}else {$local = "";}





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
   <h3>Parâmetros da Consulta de Registros</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/registros&flag=1" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

     <!-- LINHA DA SALEÇÃO DE EXCURSÃO -->
    <tr>
       <td>1) Data Inicial:</td>
       <td><label for="limno">

       <input type="text" name="data_i" class="data" />

       </label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>



    <tr>
       <td>2) Data Final:</td>
       <td><label for="limno">
        <input type="text" name="data_f" class="data" />
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



     <tr>
       <td>4) Pesca:</td>
       <td><label for="pesca">
       <SELECT name='pesca' id="pesca" type='text'  tabindex="2" >
        <?php
         if($pesca != ""){


        ?>

        <option value='<?php echo "$pesca"; ?>'><?php echo "$pesca"; ?></option>
      <?php
         }
        else {

      ?>
        <option value='Selecione'>Selecione</option>

      <?php
       }


      ?>
       <option value='Familiar'>Familiar</option>
        <option value='Caderno'>Caderno</option>
         <option value='Biometria'>Biometria</option>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


      <tr>
       <td>5) Espécie:</td>
       <td><label for="limno">
       <SELECT name='esp' id="esp" type='text' >
         <?php
        if ($esp >= 1) {

        $lista = new ManipulateData();
         $NomeCateg = $lista->NomeCateg($esp);
             ?>
         <option value='<?php echo "$esp"; ?>'><?php echo"$NomeCateg"; ?></option>
         <?php
        }
         ?>
       <option value='Todas'>Todas</option>


            <?php

            $lista->geraListaCateg();
            ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>

          <tr>
       <td>6) Espécie 1:</td>
       <td><label for="limno">
       <SELECT name='esp1' id="esp" type='text' >
         <?php
        if ($esp1 >= 1) {

        $lista = new ManipulateData();
         $NomeCateg = $lista->NomeCateg($esp1);
             ?>
         <option value='<?php echo "$esp1"; ?>'><?php echo"$NomeCateg"; ?></option>
         <?php
        }
         ?>
       <option value='Todas'>Todas</option>


            <?php

            $lista->geraListaCateg();
            ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>




     <tr>
       <td>7) Espécie 2:</td>
       <td><label for="limno">
       <SELECT name='esp2' id="esp" type='text' >
         <?php
        if ($esp2 >= 1) {

        $lista = new ManipulateData();
         $NomeCateg = $lista->NomeCateg($esp2);
             ?>
         <option value='<?php echo "$esp2"; ?>'><?php echo"$NomeCateg"; ?></option>
         <?php
        }
         ?>
       <option value='Todas'>Todas</option>


            <?php

            $lista->geraListaCateg();
            ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>




       <tr>
       <td>8) Espécie 3:</td>
       <td><label for="limno">
       <SELECT name='esp3' id="esp" type='text' >
         <?php
        if ($esp3 >= 1) {

        $lista = new ManipulateData();
         $NomeCateg = $lista->NomeCateg($esp3);
             ?>
         <option value='<?php echo "$esp3"; ?>'><?php echo"$NomeCateg"; ?></option>
         <?php
        }
         ?>
       <option value='Todas'>Todas</option>


            <?php

            $lista->geraListaCateg();
            ?>

       </select></label></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>


     <tr>
       <td>9) Pescador:</td>
       <td><label for="limno">
       <SELECT name='pesc' id="pesc" type='text' >
         <?php
       /* if ($esp4 >= 1) {

        $lista = new ManipulateData();
         $pesc = $lista->geraListaPescF();*/
             ?>
        <!-- <option value='<?php echo "$pesc"; ?>'><?php echo"$pesc"; ?></option> -->
         <?php
       //  }
         ?>
       <option value='Todas'>Todos</option>


            <?php

            $pesc = $lista->geraListaPescF();
            ?>

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
    include_once "registros_mostrar.php";
    }
    ?>