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

<?php include "log_auth1.php"; ?>
     <div id="edicao">
        <h3>Inserir dados de limnologia</h3>

<!--Área editável início     -->

<form name="navegador" id="formulario1" method="post" action="?secoes=cadastros/limno_inserir1_ig" enctype="multipart/form-data">
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
      {$filt = "Ma"; $ca = "selected";}     ?>
      <label for="aparelho">

1) Aparelho:  </label>
<SELECT NAME='apar' type='text' id='apar' tabindex="1">
<option value='Redinha'>Redinha</option>
<option value='Puça'>Puça</option>
<option value='Covos'>Covos</option>
<option value='Fikenet'>Fikenet</option>
<option value='Detector'>Detector</option>
</select>

<label for="Excurcao">
2) Excursão:  </label>
<SELECT name='excu' type='text' id='excu' >
<option value='0'>Geral</option>
<?php
$res = mysql_query("SELECT * FROM tb_excursao");
while($registro = mysql_fetch_row($res))
{$id_excursao = $registro[0];
$ex_numero = $registro[1];
echo "<option value=\"$id_excursao\">$ex_numero</option>\n";
}
?></select>

<label for="codigo">
3) Código de campo: </label>
<input name="cod" type="text" id="cod" tabindex="2" accesskey="p" size="15" />



<label for="local">
4) Local:  </label>
<SELECT name='loc' type='text' id='loc' tabindex="3" >
<?php
$res = mysql_query("SELECT * FROM tb_local_ig WHERE id_tab_local > 0");
while($registro = mysql_fetch_row($res))
{ $id_local = $registro[0];
$local = $registro[1];
echo "<option value=\"$id_local\">$local</option>\n";
}
?></select>


<label for="tam">
5) Tamanho do trecho:  </label>
<SELECT NAME='tam' type='text' id='tam' tabindex="4">
<option value='50m'>50m</option>
<option value='100m'>100m</option>
<option value='150m'>150m</option>
<option value='200m'>200m</option>
</select>


<label for="data">
6) Data: </label>
<SELECT name='dia' type='text' id='dia' tabindex="5">
<?php
$lista = new ManipulateData();
$lista->ListaDias();
?>
</select>
<SELECT name='mes' type='text' id='mes' tabindex="5">
<?php
$lista->ListaMeses();
?>
</select>
<input name="ano" type="text" id="ano" tabindex="6"  size="4" class="checkbox1" /> dd/mm/aaaa


</fieldset>


<center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
</form>


<!--Área editável fim     -->



</div>
