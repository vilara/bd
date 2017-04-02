<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>



<script language=javascript>

function destino(){
url = document.navegador.lim_aparelho.options[document.navegador.lim_aparelho.selectedIndex].value
if (url != " no") window.location = url;
}

function destino1(){
url = document.navegador.subprog.options[document.navegador.subprog.selectedIndex].value
if (url != " no") window.location = url;
}

</script>
<?php
$filt = " ";
$aparelho = $_GET["aparelho"];
$subprog = $_GET["subprog"];
$flag = $_GET["flag"];
?>

<?php include "log_auth1.php"; ?>
     <div id="edicao">
        <!--<h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Inserir dados de limnologia</h3>

<!--Área editável início     -->



<form name="navegador" id="formulario1" method="post" action="?secoes=cadastros/limno_inserir1&aparelho=<?php echo"$aparelho"; ?>" enctype="multipart/form-data">
             <fieldset>

     <?php

      if ($aparelho == "Malhadeira")
      {$filt = "Ma"; $ma = "selected";}
      else if ($aparelho == "Redinha")
      {$filt = "Ma"; $re = "selected";}
      else if ($aparelho == "Arrasto de fundo")
      {$filt = "Arras"; $ar = "selected";}
      else if ($aparelho == "Puça")
      {$filt = "Ma"; $pu = "selected";}
      else if ($aparelho == "Tarrafa")
      {$filt = "Ma"; $ta = "selected";}
      else if ($aparelho == "Covo")
      {$filt = "Ma"; $co = "selected";}
      else if ($aparelho == "Espinhel")
      {$filt = "Ma"; $es = "selected";}
      else if ($aparelho == "Manual")
      {$filt = "Ma"; $mn = "selected";}
      else if ($aparelho == "Caniço")
      {$filt = "Ma"; $ca = "selected";}
      else if ($aparelho == "Outros")
      {$filt = "Ma"; $ou = "selected";}

      ?>


      <label for="aparelho">

      1) Aparelho:  </label>
      <SELECT NAME='lim_aparelho' onchange="destino()" type='text' id='lim_aparelho' tabindex="4">
      <option value='no'>Selecione</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Redinha&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$re";?>>Redinha</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Malhadeira&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$ma";?>>Malhadeira</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Arrasto de fundo&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$ar";?>>Arrasto Bentônico</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Puça&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$pu";?>>Puçá</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Tarrafa&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$ta";?>>Tarrafa</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Espinhel&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$es";?>>Espinhel</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Caniço&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$ca";?>>Caniço</option>
      <option value='index.php?secoes=cadastros/limno_inserir&aparelho=Outros&subprog=<?php echo"$subprog";?>&flag=10' <?php echo"$ou";?>>Outros</option>
      </select>

      <label for="Excurcao">
      2) Excursão:  </label>
      <SELECT name='lim_excursao' type='text' id='lim_excursao' >
      <option value='Geral'>Geral</option>  
      <?php
      $res = mysql_query("SELECT * FROM tb_excursao");
      while($registro = mysql_fetch_row($res))
      {
      $id_excursao = $registro[0];
      $ex_numero = $registro[1];
      echo "<option value=\"$id_excursao\">$ex_numero</option>\n";
      }
      ?></select>



      <label for="Primeiro nome">
      3) Código de campo: </label>
      <input name="lim_cod" type="text" id="lim_cod" tabindex="2" accesskey="p" size="15" />



      <label for="local">
      4) Local:  </label>
      <SELECT name='lim_local' type='text' id='lim_excursao' tabindex="3" ><OPTION>
      <?php

      $res = mysql_query("SELECT * FROM tb_local WHERE loc_aparelho LIKE '%$filt%' AND verif ='s'");
      while($registro = mysql_fetch_row($res))
      {
      $id_local = $registro[0];
      $local = $registro[1];

      echo "<option value=\"$id_local\">$local</option>\n";
      }
      ?></select>


      <label for="lim_data">
      5) Data: </label>
      <SELECT name='lim_dia' type='text' id='lim_dia' tabindex="5">
      <option value='#'></option>
      <option value='01'>01</option>
      <option value='02'>02</option>
      <option value='03'>03</option>
      <option value='04'>04</option>
      <option value='05'>05</option>
      <option value='06'>06</option>
      <option value='07'>07</option>
      <option value='08'>08</option>
      <option value='09'>09</option>
      <option value='10'>10</option>
      <option value='11'>11</option>
      <option value='12'>12</option>
      <option value='13'>13</option>
      <option value='14'>14</option>
      <option value='15'>15</option>
      <option value='16'>16</option>
      <option value='17'>17</option>
      <option value='18'>18</option>
      <option value='19'>19</option>
      <option value='20'>20</option>
      <option value='21'>21</option>
      <option value='22'>22</option>
      <option value='23'>23</option>
      <option value='24'>24</option>
      <option value='25'>25</option>
      <option value='26'>26</option>
      <option value='27'>27</option>
      <option value='28'>28</option>
      <option value='29'>29</option>
      <option value='30'>30</option>
      <option value='31'>31</option>
      </select>&nbsp;
      <SELECT name='lim_mes' type='text' id='lim_mes' tabindex="6">
      <option value='#'></option>
      <option value='01'>01</option>
      <option value='02'>02</option>
      <option value='03'>03</option>
      <option value='04'>04</option>
      <option value='05'>05</option>
      <option value='06'>06</option>
      <option value='07'>07</option>
      <option value='08'>08</option>
      <option value='09'>09</option>
      <option value='10'>10</option>
      <option value='11'>11</option>
      <option value='12'>12</option>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="lim_ano" type="text" id="lim_ano" tabindex="7"  size="4"  /> dd/mm/aaaa

              </fieldset>


   <center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>


<!--Área editável fim     -->



</div>
