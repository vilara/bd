<style type="text/css">
#edicao { margin: 0; padding: 0; width: 800px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

 <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>   -->


<!--Área editável início     -->

<?php

$apar = $_POST["apar"];
$excu = $_POST["excu"];
$cod = $_POST["cod"];
$loc = $_POST["loc"];
$tam =$_POST["tam"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";

?>
<h3>Inserir dados de limnologia de Igarapés</h3>

<form id="forms" method="post" action="?secoes=cadastros/limno_enviar_ig
&apar=<?php echo "$apar"; ?>
&excu=<?php echo "$excu"; ?>
&cod=<?php echo "$cod"; ?>
&loc=<?php echo "$loc"; ?>
&tam=<?php echo "$tam"; ?>
&data=<?php echo "$data"; ?>" enctype="multipart/form-data">

<fieldset>


<label for="proj">
1) Projeto: </label>
<input name="proj" type="text" id="proj" tabindex="1" size="12" value="Igarapés" />

<label for="padronizado">
2) Padronizado:  </label>
<input type="radio" name="padr"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="padr"  class="checkbox"  value="Não" >Não

<label for="lat">
3) Latitude: </label>
<input name="lat_g" type="text" id="lat_g" tabindex="2" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
<input name="lat_m" type="text" id="lat_m" tabindex="3" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
<input name="lat_s" type="text" id="lat_s" tabindex="4" accesskey="c" size="5" />Seg

<label for="long">
4) Longitude:  </label>
<input name="long_g" type="text" id="long_g" tabindex="5" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
<input name="long_m" type="text" id="long_m" tabindex="6" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
<input name="long_s" type="text" id="long_s" tabindex="7" accesskey="c" size="5" />Seg


<label for="form_geo">
5) Formação Geológica: </label>
<input name="form_geo" type="text" id="form_geo" tabindex="8" size="35" />

<label for="phidro">
6) Período Hidrológico: </label>
<SELECT NAME='phidro' type='text' id='phidro' tabindex="9">
<option value='Seca' >Seca</option>
<option value='Chuvoso'>Chuvoso</option>
</select>

<label for="amb">
7) Ambiente: </label>
<SELECT NAME='amb' type='text' id='amb' tabindex="10">
<option value='Igapó' >Igapó</option>
<option value='Várzea'>Várzea</option>
<option value='Terra Firme'>Terra Firme</option>
</select>

<label for="integ">
8) Integ: </label>
<SELECT NAME='integ' type='text' id='integ' tabindex="11">
<option value='Alterado' >Alterado</option>
<option value='Íntegro'>Íntegro</option>
</select>


<label for="hora">
9) Horário da coleta: </label>
<SELECT name='hora' type='text' id='hora' tabindex='12' >
<?php
$lista = new ManipulateData();
$lista->ListaHoras();
?>
</select>
<SELECT name='min' type='text' id='min' tabindex='13'>
<?php
$lista->ListaMinutos();
?>
</select>

<label for="ph">
10) PH: </label>
<input name="ph" type="text" id="ph" tabindex="14" accesskey="c" size="12" /> (pH)

<label for="temp">
11) Temperatura:  </label>
<input name="temp" type="text"  id="temp" tabindex="15" accesskey="n" size="5" /> (ºC)

<label for="condut">
12) Condutividade: </label>
<input name="condut" type="text" id="condut" tabindex="16" accesskey="p" size="8" />(&micro;s)

<label for="02dissolvido">
13) O2 Dissolvido:  </label>
<input name="o2diss" type="text"  id="o2diss" tabindex="17" accesskey="n" size="10" /> (mg/l)

<label for="o2saturado">
14) O2 Saturado: </label>
<input name="o2sat" type="text" id="o2sat" tabindex="18" accesskey="p" size="10" /> (%)

<label for="tipoag">
15) Tipo de Água: </label>
<SELECT NAME='tipoag' type='text' id='integ' tabindex="11">
<option value='Clara' >Clara</option>
<option value='Branca'>Branca</option>
<option value='Preta'>Preta</option>
</select>

<label for="ordem">
16) Ordem: </label>
<SELECT NAME='ordem' type='text' id='ordem' tabindex="11">
<option value='1' >1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option></select>

<label for="velocidade">
17) Velocidade da corrente:  </label>
<input name="veloc" type="text"  id="veloc" tabindex="21" accesskey="n" size="8" />(cm/s)<br /><br />

<label for="largura do rio">
18) Largura do Canal: </label>
<input name="larg_rio" type="text" id="larg_rio" tabindex="22" accesskey="c" size="12" /> (m)

<label for="vazao">
19) Vazão: </label>
<input name="vaz" type="text" id="vaz" tabindex="23" accesskey="p" size="10" /> (m&sup3;/s)

<label for="prof_med">
20) Profundidade média: </label>
<input name="prof_med" type="text" id="prof_med" tabindex="24" accesskey="p" size="5" />(m)

<label for="prof_max">
21) Profundidade máxima: </label>
<input name="prof_max" type="text" id="prof_max" tabindex="25" accesskey="p" size="5" />(m)

<label for="Transparencia">
22) Transparência: </label>
<input name="transp" type="text" id="transp" tabindex="26" accesskey="c" size="12" />(cm)

<label for="dossel">
23) Dossel: </label>
<input name="dossel" type="text" id="dossel" tabindex="27" accesskey="c" size="12" />(%)

<label for="Areia">
24) Areia: </label>
<input name="are" type="text" id="are" tabindex="28" accesskey="c" size="12" />(% relativa da amostra)

<label for="Argila">
25) Argila: </label>
<input name="arg" type="text" id="arg" tabindex="29" accesskey="c" size="12" />(% relativa da amostra)

<label for="Liteira Grossa">
26) Liteira Grossa: </label>
<input name="litg" type="text" id="litg" tabindex="30" accesskey="c" size="12" />(% relativa da amostra)

<label for="Liteira Fina">
27) Liteira Fina: </label>
<input name="litf" type="text" id="litf" tabindex="31" accesskey="c" size="12" />(% relativa da amostra)

<label for="troncos">
28) Troncos: </label>
<input name="tronc" type="text" id="tronc" tabindex="32" accesskey="c" size="12" />(% relativa da amostra)

<label for="macrofitas">
29) Macrófitas: </label>
<input name="macrof" type="text" id="macrof" tabindex="33" accesskey="c" size="12" />(% relativa da amostra)

<label for="macrofitas">
30) Raízes: </label>
<input name="raiz" type="text" id="raiz" tabindex="33" accesskey="c" size="12" />(% relativa da amostra)

<label for="Coletores">
31) Coletores:  </label> <br />
<table align="left" cellpadding="0" cellspacing="0" border="0" bordercolor="#000000" width="700px">
<tr>
<td><input type="checkbox" name="col6" value="Amadio, S.A." class="checkbox">Amadio, S.A.</td>
<td> <input type="checkbox" name="col15" value="Araújo, T.R." class="checkbox">Araújo, T.R. </td>
<td><input type="checkbox" name="col7" value="Ayalla, D.M." class="checkbox">Ayalla, D.M.</td>
<td><input type="checkbox" name="col8" value="Barros, B.S.F." class="checkbox">Barros, B.S.F.</td>
<td><input type="checkbox" name="col1" value="Cella-Ribeiro, A." class="checkbox">Cella-Ribeiro, A.</td>
</tr>
<tr>
<td><input type="checkbox" name="col8" value="Doria, C.R.C." class="checkbox">Doria, C.R.C.</td>
<td><input type="checkbox" name="col9" value="Dutra, D.L." class="checkbox">Dutra, D.L.</td>
<td><input type="checkbox" name="col14" value="Fernandes, T.R.C." class="checkbox">Fernandes, T.R.C. </td>
<td><input type="checkbox" name="col3" value="Galuch, A.V." class="checkbox">Galuch, A.V.</td>
<td><input type="checkbox" name="col10" value="Leite, R.G." class="checkbox">Leite, R.G. </td>
</tr>
<tr>
<td><input type="checkbox" name="col16" value="Lima, H.M." class="checkbox">Lima, H.M. </td>
<td><input type="checkbox" name="col17" value="Lima, M.A.L." class="checkbox">Lima, M.A.L. </td>
<td><input type="checkbox" name="col18" value="Lima, P.A." class="checkbox">Lima, P.A.</td>
<td><input type="checkbox" name="col19" value="Martins, R.A.S.B." class="checkbox">Martins, R.A.S.B.</td>
<td><input type="checkbox" name="col20" value="Melo, L.C.R." class="checkbox">Melo, L.C.R.</td>
</tr>
<tr>
<td><input type="checkbox" name="col7" value="Mota, A.C.F." class="checkbox">Mota, A.C.F. </td>
<td><input type="checkbox" name="col22" value="Mounic, C.E." class="checkbox">Mounic, C.E. </td>
<td><input type="checkbox" name="col21" value="Monteiro-Neto, J.M." class="checkbox">Monteiro-Neto, J.M. </td>
<td><input type="checkbox" name="col23" value="Pires, T.H.S." class="checkbox">Pires, T.H.S.</td>
<td><input type="checkbox" name="col2" value="Queiroz, L.J." class="checkbox">Queiroz, L.J.</td>
</tr>

<tr>
<td><input type="checkbox" name="col4" value="Röpke, C.P." class="checkbox">Röpke, C.P. </td>
<td><input type="checkbox" name="col11" value="Sant Anna, I.R.A." class="checkbox">Sant'Anna, I.R.A.</td>
<td><input type="checkbox" name="col24" value="Santos, A.R." class="checkbox">Santos, A.R.</td>
<td><input type="checkbox" name="col13" value="Santos, R.N." class="checkbox">Santos, R.N.</td>
<td><input type="checkbox" name="col9" value="Silva, E.R." class="checkbox">Silva, E.R. </td>
</tr>
<tr>
<td><input type="checkbox" name="col25" value="Silva, J.V.V." class="checkbox">Silva, J.V.V.</td>
<td><input type="checkbox" name="col6" value="Torrente-Vilara, G." class="checkbox">Torrente-Vilara, G.</td>
<td><input type="checkbox" name="col12" value="Vieira, F.G." class="checkbox">Vieira, F.G.</td>
<td><input type="checkbox" name="col10" value="Vieira, F.G." class="checkbox">Vieira, F.G.</td>
<td><input type="checkbox" name="col5" value="Zuanon, J."class="checkbox">Zuanon, J. </td>
</tr>

<tr>
<td><input type="checkbox" name="col26" value="Matsuzaki, A.A." class="checkbox">Matsuzaki, A.A.</td>
<td><input type="checkbox" name="col27" value="Queiroz, A." class="checkbox">Queiroz, A.</td>
<td><input type="checkbox" name="col28" value="Prado, R.P." class="checkbox">Prado, R.P.</td>
<td><input type="checkbox" name="col29" value="Artemis, F.V." class="checkbox">Artemis, F.V.</td>
<td><input type="checkbox" name="col30" value="Eleutério, C.L."class="checkbox">Eleutério, C.L.</td>
</tr>

<tr>
<td><input type="checkbox" name="col31" value="Ohara, W.M." class="checkbox">Ohara, W.M.</td>
<td><input type="checkbox" name="col32" value="Souza, D.S." class="checkbox">Souza, D.S.</td>
<td><input type="checkbox" name="col33" value="Rapp Py-Daniel, L.H." class="checkbox">Rapp Py-Daniel, L.H.</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<br /><br /><br /><br /><br /><br /><br /><br /> <br />
<label for="Obs">
32) Observação:  </label>
<textarea name="obs" cols="50" rows="2" tabindex="26"></textarea>

</fieldset>


<center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
</form>




<!--Área editável fim     -->


</div>
