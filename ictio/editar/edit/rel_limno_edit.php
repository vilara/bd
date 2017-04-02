<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

<script language=javascript>


</script>

       <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>          -->


<!--Área editável início     -->

<?php
$lim_aparelho = $_GET["lim_aparelho"];
$lim_excursao = $_GET["lim_excursao"];
  $idd = $_GET["idd"];



// echo "$idd--$lim_aparelho";
if($lim_aparelho == 'Malhadeira' OR $lim_aparelho == 'Redinha')
{

$res1 = mysql_query("SELECT * FROM `tb_limno` WHERE `id_tb_limno` = '$idd'");
while($registro1 = mysql_fetch_row($res1))
 {

$lim_excursao =  $registro1[1];
$lim_cod =  $registro1[2];
$lim_aparelho =  $registro1[3];
$lim_local =  $registro1[4];

// echo "$lim_excursao-$lim_cod-$lim_aparelho-$lim_local<br>";

$res2 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = '$lim_local'");
while($registro2 = mysql_fetch_row($res2))
 {$loc_descricao = $registro2[1];}
 //   echo "$loc_descricao";
$lim_data =  $registro1[5];

$data11 = explode("-", $lim_data);
$lim_dia = $data11[2];
$lim_mes = $data11[1];
$lim_ano = $data11[0];

$lim_dren =  $registro1[6];
$lim_lat_g = $registro1[7];   //  echo "--$lim_dren--$lim_lat_g";
$lim_long_g =  $registro1[8];
$lim_colet =  $registro1[9];
$lim_pesc =  $registro1[10];
$lim_fluxo1 =  $registro1[11];
$lim_fluxo2 =  $registro1[12];
$lim_prof =  $registro1[13];
$lim_transp =  $registro1[14];
$lim_turb1 =  $registro1[15];
$lim_turb2 =  $registro1[16];
$lim_turb3 =  $registro1[17];
$lim_condut =  $registro1[18];
$lim_ph =  $registro1[19];
$lim_o2diss =  $registro1[20];
$lim_o2sat =  $registro1[21];
$lim_temp =  $registro1[22];
$lim_larg_rio =  $registro1[23];
$lim_substr =  $registro1[24];
$lim_localidade =  $registro1[25];
$lim_habitat =  $registro1[26];
$lim_padronizado =  $registro1[27];
$lim_hora_ini =  $registro1[28];
$hora11 = explode(":", $lim_hora_ini);
$lim_h = $hora11[0];
$lim_m = $hora11[1];
$lim_condut2 =  $registro1[29];
$lim_lat_m = $registro1[30];
$lim_lat_s = $registro1[31];  //  echo "--$lim_lat_s";
$lim_long_m =  $registro1[32];

$lim_long_s =  $registro1[33];
$lim_an =  $registro1[34];
$lim_obs =  $registro1[35];
}
//echo"$lim_padronizado--$lim_hora_ini--$lim_h--$lim_m";
 ?>

<h3>Editar dados de limnologia</h3>
    <form id="forms" method="post" action="index.php?secoes=edit/rel_limno_edit_enviar&lim_data=<?php echo "$lim_data"; ?>&idd=<?php echo "$idd"; ?>&lim_cod=<?php echo "$lim_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_aparelho"; ?>" enctype="multipart/form-data">
          <fieldset>
                  <br />
                   <label for="Exc">
              1) Exc: </label>
              <input name="exc" type="text" id="exc" tabindex="9" accesskey="p" size="5" value="<?php echo"$lim_excursao";?>" />
                           <br /><br />


      <label for="Codigo do campo">
              1) Código de campo: </label>
              <input name="lim_cod" type="text" id="lim_cod" tabindex="2" accesskey="p" size="15"  value="<?php echo"$lim_cod";?>" />


                <br />




                 <?php
              if($lim_padronizado == "Sim")
               {$i = "checked";}
               else{
		       if($lim_padronizado == "Não")
               {$ii = "checked";}
               else{
               		}}
               ?>

            <br />

             <label for="lim_data">
              2) Data: </label>
               <SELECT name='lim_dia' type='text' id='lim_dia' tabindex="4">

               <OPTION selected="selected" value="<?php echo"$lim_dia";?>" ><?php echo"$lim_dia";?></option>
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
              </select>
              <SELECT name='lim_mes' type='text' id='lim_mes' tabindex="5">
                 <OPTION selected="selected" value="<?php echo"$lim_mes";?>" ><?php echo"$lim_mes";?></option>
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
              </select>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="lim_ano" type="text" id="lim_ano" tabindex="6"  size="4" value="<?php echo "$lim_ano"; ?>" /> dd/mm/aaaa

                  <br /><br />
                             <?php
              if($lim_an == "Sim")
               {$an = "checked";}
               else{
		       if($lim_an == "Não")
               {$ann = "checked";}
               else{
               		}}
               ?>
            <label for="aparelho">
        3) Padronizado:  </label> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_padronizado"  value="Sim"  <?php echo"$i"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_padronizado" value="Não" <?php echo"$ii"; ?>>Não

        <br /><br />
     <!--  <label for="aparelho">
        Análise:  </label>   &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_an"  value="Sim"  <?php echo"$an"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_an" value="Não" <?php echo"$ann"; ?>>Não

        <br /><br />-->


         <label for="local">
              4) Rio:  </label>
             <SELECT name='lim_local' type='text' id='lim_excursao' >
             <OPTION selected="selected" value="<?php echo"$lim_local";?>"><?php echo"$loc_descricao";?>
             <?php

			$res = mysql_query("SELECT * FROM tb_local  WHERE verif ='s'");
		while($registro = mysql_fetch_row($res))
		{
		    $id_tab_loc = $registro[0];
			$loc_localidade = $registro[1];

			echo "<option value=\"$id_tab_loc\">$loc_localidade</option>\n";
		}
	?></select>
    <br /><br />



         <?php
          if($lim_aparelho == "Malhadeira")
          {
         ?>
        <label for="lim_hora_ini">
             5) Horário do início da coleta: </label>
                <SELECT name='lim_h' type='text' id='lim_h' tabindex="2">
                <OPTION selected="selected" value="<?php echo"$lim_h";?>" ><?php echo"$lim_h";?></option>
                <option value='#'></option>
                <option value='00'>00</option>
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
              </select>:
              <SELECT name='lim_m' type='text' id='lim_m' tabindex="3">
              <OPTION selected="selected" value="<?php echo"$lim_m"; ?>" ><?php echo"$lim_m"; ?></option>
                <option value='#'></option>
                <option value='00'>00</option>
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
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
              </select>
 <?php
  }
 ?>


               <br /><br />
            <label for="localidade">
                6) Localidade:  </label>
            <textarea type="radio" name="lim_localidade" cols="50" rows="2" tabindex="21"  value="<?php echo"$lim_localidade";?>"><?php echo"$lim_localidade";?></textarea>

                      <br /><br />
               <label for="drenagem">
              7) Drenagem: </label>
                <input name="lim_dren" type="text"  id="lim_condut" tabindex="12" accesskey="n" size="15" value="<?php echo"$lim_dren";?>" />&nbsp;&nbsp;&nbsp;&nbsp;



                 <br /><br />






<label for="latitude">
              8) Latitude: </label>
              <input name="lim_lat_g" type="text" id="lim_lat_g" tabindex="1" accesskey="c" size="5" value="<?php echo"$lim_lat_g";?>" />Graus&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              <input name="lim_lat_m" type="text" id="lim_lat_m" tabindex="1" accesskey="c" size="5" value="<?php echo"$lim_lat_m";?>" />Min&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              <input name="lim_lat_s" type="text" id="lim_lat_s" tabindex="1" accesskey="c" size="5" value="<?php echo"$lim_lat_s";?>" />Seg
               <br />

               <label for="longitude">
              9) Longitude:  </label>
              <input name="lim_long_g" type="text" id="lim_long_g" tabindex="4" accesskey="c" size="5" value="<?php echo"$lim_long_g";?>" /> Graus&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
             <input name="lim_long_m" type="text" id="lim_long_m" tabindex="4" accesskey="c" size="5" value="<?php echo"$lim_long_m";?>" /> Min&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              <input name="lim_long_s" type="text" id="lim_long_s" tabindex="4" accesskey="c" size="5" value="<?php echo"$lim_long_s";?>" />Seg

                    <br /><br />
              <label for="Coletores">
              10) Coletores:  </label>
                 <textarea name="lim_colet" type="text"  id="lim_colet" tabindex="7" cols="30" rows="5" value="<?php echo"$lim_colet";?>"><?php echo"$lim_colet";?></textarea>
                 <br />   <br />
                  <label for="coletores">
              11) Pescadores:  </label>
                 <textarea name="lim_pesc" type="text"  id="lim_pesc" tabindex="17" cols="30" rows="5"  value="<?php echo"$lim_pesc";?>"><?php echo"$lim_pesc";?></textarea>
                        <br /><br />
                <label for="velocidade">
              12) Velocidade da corrente:  </label>
              <input name="lim_fluxo1" type="text"  id="lim_fluxo1" tabindex="8" accesskey="n" size="5" value="<?php echo"$lim_fluxo1";?>" />(m/s)<br /><!--<input name="lim_fluxo2" type="text"  id="lim_fluxo2" tabindex="8" accesskey="n" size="5" value="<?php echo"$lim_fluxo2";?>" />Final<br />(Tempo: 60 segundos) -->
                          <br /><br />
              <label for="Profundidade">
              13) Profundidade: </label>
              <input name="lim_prof" type="text" id="lim_prof" tabindex="9" accesskey="p" size="5" value="<?php echo"$lim_prof";?>" />(m)
                           <br /><br />
               <label for="Transparencia">
              14) Transparência: </label>
              <input name="lim_transp" type="text" id="lim_transp" tabindex="10" accesskey="c" size="12" value="<?php echo"$lim_transp";?>" />(cm)
                                <br /><br />

               <label for="Turbidez">
              15) Turbidez:  </label>
              <input name="lim_turb1" type="text"  id="lim_turb1" tabindex="11" accesskey="n" size="8" value="<?php echo"$lim_turb1";?>" />Turb1 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
              <input name="lim_turb2" type="text"  id="lim_turb2" tabindex="12" accesskey="n" size="8" value="<?php echo"$lim_turb2";?>" />Turb2 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
              <input name="lim_turb3" type="text"  id="lim_turb3" tabindex="13" accesskey="n" size="8" value="<?php echo"$lim_turb3";?>" />Turb3 (FTU)

                                 <br /><br />
              <label for="condutividade">
              16) Condutividade: </label>
                <input name="lim_condut" type="text"  id="lim_condut" tabindex="12" accesskey="n" size="8" value="<?php echo"$lim_condut";?>" />Condut 1 (&micro;s)&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
              <input name="lim_condut2" type="text"  id="lim_condut2" tabindex="13" accesskey="n" size="8" value="<?php echo"$lim_condut2";?>" />Condut 2 (&micro;s)

                              <br /><br />
               <label for="ph">
              17) PH: </label>
              <input name="lim_ph" type="text" id="lim_ph" tabindex="15" accesskey="c" size="5" value="<?php echo"$lim_ph";?>" />(pH)
                            <br /><br />
              <label for="02dissolvido">
              18) O2 Dissolvido:  </label>
              <input name="lim_o2diss" type="text"  id="lim_o2diss" tabindex="16" accesskey="n" size="5" value="<?php echo"$lim_o2diss";?>" />(mg/l)

                                 <br /><br />
              <label for="o2saturado">
              19) O2 Saturado: </label>
              <input name="lim_o2sat" type="text" id="lim_o2sat" tabindex="17" accesskey="p" size="5" value="<?php echo"$lim_o2sat";?>" />(%)
                                 <br /><br />
                 <label for="temperatura">
              20) Temperatura:  </label>
              <input name="lim_temp" type="text"  id="lim_temp" tabindex="18" accesskey="n" size="5" value="<?php echo"$lim_temp";?>" />(ºC)

                                <br /><br />

               <label for="largura do canal">
              21) Largura do Canal: </label>
              <input name="lim_larg_rio" type="text" id="lim_lar_rio" tabindex="19" accesskey="c" size="12" value="<?php echo"$lim_larg_rio";?>" />(m)



                                    <br /><br />

                <label for="substrato">
              22) Substrato:  </label>
                  <SELECT NAME='lim_substr' type='text' id='lim_substr' tabindex="20">
                  <OPTION selected="selected" value="<?php echo"$lim_substr";?>" ><?php echo"$lim_substr";?></option>
              <option value='#'></option>
                <option value='Areia'>Areia</option>
                <option value='Lama'>Lama</option>
                <option value='Seixo'>Seixo</option>
                 <option value='Lage/Pedral'>Lage/Pedral</option>
                <option value='Liteira fina'>Liteita fina</option>
                <option value='Liteira grossa'>Liteira grossa</option>
                 <option value='Raízes'>Raízes</option>
                <option value='Troncos'>Troncos</option>
                <option value='Macrófitas'>Macrófitas</option>
                </select>
                                  <br /><br />

              <label for="habitat">
                23) Habitat:  </label>
            <textarea type="radio" name="lim_habitat" cols="50" rows="2" tabindex="22"  value="<?php echo"$lim_habitat";?>"><?php echo"$lim_habitat";?></textarea>

               <?php
               if($lim_an == "Sim")
               {$oaa = "checked";}
               else{
		       if($lim_an == "Não")
               {$oann = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>
            <label for="analise"> 24) Análise:  </label>
            <input type="radio" name="lim_an"  value="Sim"  <?php echo"$oaa"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_an" value="Não" <?php echo"$oann"; ?>>Não

               <label for="obs">
                25) Observações:  </label>
            <textarea name="lim_obs" cols="50" rows="2" tabindex="22"  value="<?php echo"$lim_obs";?>"><?php echo"$lim_obs";?></textarea>



              </fieldset>



               <br />
  <div id="botao1"><input type="submit" value="Editar" /> <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>




<?php


 // echo "<script>parent.location.href='../index2.php?id=relatorios/rel_limno_cad.php&lim_aparelho=$lim_aparelho&lim_excursao=$lim_excursao&flag=1'</script>";








}

else
{
if ($lim_aparelho == 'Arrasto de fundo')
 {






$res1 = mysql_query("SELECT * FROM `tb_limno_arr` WHERE `id_tb_limno_arr` = '$idd'");
while($registro1 = mysql_fetch_row($res1))
 {
$lim_arr_cod =  $registro1[1];
$lim_arr_excursao =  $registro1[2];

$lim_arr_loc =  $registro1[3];
// echo"$lim_arr_loc";
$res2 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = '$lim_arr_loc'");
while($registro2 = mysql_fetch_row($res2))
 {$loc_descricao = $registro2[1];}
 // echo"loc_descricao";
$lim_arr_aparelho =  "Arrasto de fundo";


$lim_arr_excursao =  $registro1[2];


$lim_arr_data =  $registro1[34];

$data11 = explode("-", $lim_arr_data);
$lim_arr_dia = $data11[2];
$lim_arr_mes = $data11[1];
$lim_arr_ano = $data11[0];


$lim_arr_hora_ini =  $registro1[4];
$hora11 = explode(":", $lim_arr_hora_ini);
$lim_arr_hi = $hora11[0];
$lim_arr_mi = $hora11[1];


$lim_arr_hora_fim =  $registro1[5];
$hora12 = explode(":", $lim_arr_hora_fim);
$lim_arr_hf = $hora12[0];
$lim_arr_mf = $hora12[1];


$lim_arr_lat_g_ini =  $registro1[6];
$lim_arr_lat_g_fim =  $registro1[7];
$lim_arr_long_g_ini =  $registro1[8];
$lim_arr_long_g_fim =  $registro1[9];
$lim_arr_colet =  $registro1[10];
$lim_arr_pesc =  $registro1[11];
$lim_arr_veloc_ini =  $registro1[12];
$lim_arr_veloc_fim =  $registro1[13];
$lim_arr_prof_ini =  $registro1[14];
$lim_arr_prof1 =  $registro1[15];
$lim_arr_prof2 =  $registro1[16];
$lim_arr_prof3 =  $registro1[17];
$lim_arr_prof4 =  $registro1[18];
$lim_arr_prof5 =  $registro1[19];
$lim_arr_prof6 =  $registro1[20];
$lim_arr_prof7 =  $registro1[21];
$lim_arr_prof8 =  $registro1[22];
$lim_arr_prof9 =  $registro1[23];
$lim_arr_prof_fim =  $registro1[24];
$lim_arr_transp =  $registro1[25];
$lim_arr_turb =  $registro1[26];
$lim_arr_ph =  $registro1[27];
$lim_arr_o2diss =  $registro1[28];
$lim_arr_o2sat =  $registro1[29];
$lim_arr_condut =  $registro1[30];
$lim_arr_temp =  $registro1[31];
$lim_arr_larg_rio =  $registro1[32];
$lim_arr_marg =  $registro1[33];

$lim_dren =  "Rio Madeira";
$lim_arr_localidade =  $registro1[36];
$lim_arr_habitat =  $registro1[37];
$lim_arr_padronizado =  $registro1[38];
$lim_arr_turb2 =  $registro1[39];
$lim_arr_turb3 =  $registro1[40];
$lim_arr_condut2 =  $registro1[41];

$lim_arr_lat_m_ini =  $registro1[42];
$lim_arr_lat_s_ini =  $registro1[43];
$lim_arr_lat_m_fim =  $registro1[44];
$lim_arr_lat_s_fim =  $registro1[45];

$lim_arr_long_m_ini =  $registro1[46];
$lim_arr_long_s_ini =  $registro1[47];
$lim_arr_long_m_fim =  $registro1[48];
$lim_arr_long_s_fim =  $registro1[49];
$lim_arr_an =  $registro1[50];
$lim_arr_condut_fun =  $registro1[51];
$lim_arr_condut2_fun =  $registro1[52];
$lim_arr_ph_fun =  $registro1[53];
$lim_arr_o2diss_fun =  $registro1[54];

$lim_arr_o2sat_fun =  $registro1[55];
$lim_arr_temp_fun =  $registro1[56];
$lim_arr_abun =  $registro1[57];
$lim_arr_ponto =  $registro1[58];
$lim_arr_obs =  $registro1[59];
 }
?>

<h3>Editar dados de limnologia</h3>
    <form id="forms" method="post" action="index.php?secoes=edit/rel_limno_edit_enviar&lim_data=<?php echo "$lim_arr_data"; ?>&idd=<?php echo "$idd"; ?>&lim_arr_cod=<?php echo "$lim_arr_cod"; ?>&lim_arr_local=<?php echo "$lim_arr_loc"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_arr_aparelho"; ?>" enctype="multipart/form-data">

             <fieldset>

          <label for="localidade">
                1) Excursão  </label>
            <input type="text" name="lim_arr_excursao"   size="8" value="<?php echo"$lim_arr_excursao";?>" />
                           <br /><br />
             <?php
               if($lim_arr_padronizado == "Sim")
               {$p = "checked";}
               else{
		       if($lim_arr_padronizado == "Não")
               {$pp = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

             <br />

            <label for="aparelho">
        1) Padronizado:  </label> &nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_padronizado"  value="Sim"  <?php echo"$p";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_padronizado" value="Não"  <?php echo"$pp";?> >Não


                        <br /><br />
              <?php
               if($lim_arr_an == "Sim")
               {$ra = "checked";}
               else{
		       if($lim_arr_an == "Não")
               {$ran = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>
                         <label for="aparelho">
        Análise:  </label>  </label> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_an"  value="Sim"  <?php echo"$ra"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_an" value="Não" <?php echo"$ran"; ?>>Não

        <br /><br />

             <label for="Codigo do campo">
              2) Código de campo: </label>
              <input name="lim_arr_cod" type="text" id="lim_arr_cod" tabindex="2" accesskey="p" size="15"  value="<?php echo"$lim_arr_cod";?>" />


                   <br /><br />

    <label for="local">
              3) Rio:  </label>
             <SELECT name='lim_arr_loc' type='text' id='lim_arr_loc' ><OPTION>
             <OPTION selected="selected" value="<?php echo"$lim_arr_loc";?>"
 ><?php echo"$loc_descricao";?>
             <?php

			$res = mysql_query("SELECT * FROM tb_local WHERE verif ='s'");
		while($registro = mysql_fetch_row($res))
		{
		    $id_tab_loc = $registro[0];
			$loc_localidade = $registro[1];

			echo "<option value=\"$id_tab_loc\">$loc_localidade</option>\n";
		}
	?></select>


                      <br /><br />

              <label for="lim_data">
              4) Data: </label>
               <SELECT name='lim_arr_dia' type='text' id='lim_arr_dia' tabindex="4">

               <OPTION selected="selected" value="<?php echo"$lim_arr_dia";?>" ><?php echo"$lim_arr_dia";?></option>
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
                <option value='25'>24</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
              </select>
              <SELECT name='lim_arr_mes' type='text' id='lim_mes' tabindex="5">
                 <OPTION selected="selected" value="<?php echo"$lim_arr_mes";?>" ><?php echo"$lim_arr_mes";?></option>
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
              </select>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="lim_arr_ano" type="text" id="lim_arr_ano" tabindex="6"  size="4" value="<?php echo "$lim_arr_ano"; ?>" /> dd/mm/aaaa

                       <br />

  <label for="arr_hora_ini">
              5) Horário inicial da coleta: </label>
            <SELECT name='lim_arr_hi' type='text' id='hora_ini' tabindex="1">
            <OPTION selected="selected" value="<?php echo"$lim_arr_hi";?>" ><?php echo"$lim_arr_hi ";?></option>
                <option value='00'>00</option>
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
              </select>:
              <SELECT name='lim_arr_mi' type='text' id='min_ini' tabindex="2">
              <OPTION selected="selected" value="<?php echo"$lim_arr_mi";?>" ><?php echo"$lim_arr_mi";?></option>
                       <option value='00'>00</option>
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
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
              </select>
              <br /><br />

                 <label for="arr_hora_fim">
              6) Horário final da coleta: </label>
            <SELECT name='lim_arr_hf' type='text' id='hora_fim' tabindex="3">
            <OPTION selected="selected" value="<?php echo"$lim_arr_hf";?>" ><?php echo"$lim_arr_hf";?></option>
                <option value='00'>00</option>
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
              </select>:
              <SELECT name='lim_arr_mf' type='text' id='min_fim' tabindex="4">
              <OPTION selected="selected" value="<?php echo"$lim_arr_mf";?>" ><?php echo"$lim_arr_mf";?></option>
                       <option value='00'>00</option>
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
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>
              </select>
              <br /><br />



              <label for="localidade">
                7) Localidade:  </label>
            <textarea type="radio" name="lim_arr_localidade" cols="50" rows="2" tabindex="21"  value="<?php echo"$lim_arr_localidade";?>"><?php echo"$lim_arr_localidade";?></textarea>
                           <br /><br />
                 <label for="drenagem">
              8) Drenagem:  </label>
              <input name="lim_dren" type="text"  id="lim_dren" tabindex="16" size="15" value="<?php echo"$lim_dren";?>" />

                                           <br /><br />
               <label for="latitude_ini">
               9) Latitude Inicial: </label>
              <input name="lim_arr_lat_g_ini" type="text" id="lim_arr_lat_g_ini" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_g_ini";?>" />Graus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_lat_m_ini" type="text" id="lim_arr_lat_m_ini" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_m_ini";?>" />Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_lat_s_ini" type="text" id="lim_arr_lat_s_ini" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_s_ini";?>" />Seg

                            <br /><br />
               <label for="longitude_ini">
              10) Longitude Inicial:  </label>
            <input name="lim_arr_long_g_ini" type="text" id="lim_arr_long_g_ini" tabindex="5" accesskey="c" size="5"  value="<?php echo"$lim_arr_long_g_ini";?>" /> Graus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_long_m_ini" type="text" id="lim_arr_long_m_ini" tabindex="5" accesskey="c" size="5"  value="<?php echo"$lim_arr_long_m_ini";?>" />Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_long_s_ini" type="text" id="lim_arr_long_s_ini" tabindex="5" accesskey="c" size="5"  value="<?php echo"$lim_arr_long_s_ini";?>" />Seg
            <br /><br />

                <label for="latitude_fim">
               11) Latitude Final: </label>
            <input name="lim_arr_lat_g_fim" type="text" id="lim_arr_lat_g_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_g_fim";?>" />Graus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_lat_m_fim" type="text" id="lim_arr_lat_m_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_m_fim";?>" />Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_lat_s_fim" type="text" id="lim_arr_lat_s_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_lat_s_fim";?>" />Seg
                             <br /><br />
               <label for="longitude_fim">
              12) Longitude Final:  </label>
            <input name="lim_arr_long_g_fim" type="text" id="lim_arr_long_g_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_long_g_fim";?>" />Graus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_long_m_fim" type="text" id="lim_arr_long_m_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_long_m_fim";?>" /> Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="lim_arr_long_s_fim" type="text" id="lim_arr_long_s_fim" tabindex="5" accesskey="c" size="5" value="<?php echo"$lim_arr_long_s_fim";?>" />Seg

                <br /><br />
               <label for="coletores">
              13) Coletores:  </label>
                 <textarea name="lim_arr_colet" type="text"  id="lim_arr_colet" tabindex="17" cols="30" rows="5"  value="<?php echo"$lim_arr_colet";?>"><?php echo"$lim_arr_colet";?></textarea>
                  <br /><br />
                  <label for="coletores">
              14) Pescadores:  </label>
                 <textarea name="lim_arr_pesc" type="text"  id="lim_arr_pesc" tabindex="17" cols="30" rows="5"  value="<?php echo"$lim_arr_pesc";?>"><?php echo"$lim_arr_pesc";?></textarea>
                  <br /><br />
                <label for="fluxo_ini">
              15) Velocidade da corrente:  </label>
              <input name="lim_arr_veloc_ini" type="text"  id="lim_arr_veloc_ini" tabindex="18" size="10" value="<?php echo"$lim_arr_veloc_ini";?>" /> (m/s)
                         <br /><br />

               <!-- <label for="fluxo_fim">
              16) Fluxômetro Final:  </label>
              <input name="lim_arr_veloc_fim" type="text"  id="lim_arr_veloc_fim" tabindex="19"  size="10" value="<?php echo"$lim_arr_veloc_fim";?>" /><br />(Tempo: 60 segundos)
               <br /><br />-->


                <label for="fluxo_ini">
              17) Profundidade Inicial:  </label>
              <input name="lim_arr_prof_ini" type="text"  id="lim_arr_prof_ini" tabindex="20" size="5" value="<?php echo"$lim_arr_prof_ini";?>" /> (m)
                           <br /><br />

                <label for="fluxo_fim">
              18) Profundidade Final:  </label>
              <input name="lim_arr_prof_fim" type="text"  id="lim_arr_prof_fim" tabindex="21"  size="5" value="<?php echo"$lim_arr_prof_fim";?>" />(m)

                                   <br /><br />
                <label for="fluxo_fim">
              19) Profundidades parciais: (m) </label>
              <input name="lim_arr_prof1" type="text"  id="lim_arr_prof1" tabindex="22"  size="5" value="<?php echo"$lim_arr_prof1";?>" />Prof 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof2" type="text"  id="lim_arr_prof2" tabindex="23"  size="5" value="<?php echo"$lim_arr_prof2";?>" />Prof 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof3" type="text"  id="lim_arr_prof3" tabindex="24"  size="5" value="<?php echo"$lim_arr_prof3";?>" />Prof 3<br />
              <input name="lim_arr_prof4" type="text"  id="lim_arr_prof4" tabindex="25"  size="5" value="<?php echo"$lim_arr_prof4";?>" />Prof 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof5" type="text"  id="lim_arr_prof5" tabindex="26"  size="5" value="<?php echo"$lim_arr_prof5";?>" />Prof 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof6" type="text"  id="lim_arr_prof6" tabindex="27"  size="5" value="<?php echo"$lim_arr_prof6";?>" />Prof 6<br />
              <input name="lim_arr_prof7" type="text"  id="lim_arr_prof7" tabindex="28"  size="5" value="<?php echo"$lim_arr_prof7";?>" />Prof 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof8" type="text"  id="lim_arr_prof8" tabindex="29"  size="5" value="<?php echo"$lim_arr_prof8";?>" />Prof 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof9" type="text"  id="lim_arr_prof9" tabindex="30"  size="5" value="<?php echo"$lim_arr_prof9";?>" />Prof 9
               <br /><br />


               <label for="cpf">
              20) Transparência: </label>
              <input name="lim_arr_transp" type="text" id="lim_arr_transp" tabindex="31" accesskey="c" size="12" value="<?php echo"$lim_arr_transp";?>" />(cm)
                          <br /><br />
               <label for="Nome">
              21) Turbidez:  </label>
               <input name="lim_arr_turb" type="text"  id="lim_arr_turb" tabindex="11" accesskey="n" size="8" value="<?php echo"$lim_arr_turb";?>" />Turb1 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_turb2" type="text"  id="lim_arr_turb2" tabindex="12" accesskey="n" size="8" value="<?php echo"$lim_arr_turb2";?>" />Turb2 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_turb3" type="text"  id="lim_arr_turb3" tabindex="13" accesskey="n" size="8" value="<?php echo"$lim_arr_turb3";?>" />Turb3 (FTU)
                                              <br /><br />

              <label for="condutividade">
              22) Condutividade: </label>
                 <input name="lim_arr_condut" type="text"  id="lim_arr_condut" tabindex="11" accesskey="n" size="8" value="<?php echo"$lim_arr_condut";?>" />Condut 1(&micro;s)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_condut2" type="text"  id="lim_arr_condut2" tabindex="12" accesskey="n" size="8" value="<?php echo"$lim_arr_condut2";?>" />Condut 2(&micro;s) Superfície&nbsp;&nbsp;&nbsp;&nbsp;

              <br />
              <input name="lim_arr_condut_fun" type="text"  id="lim_arr_condut" tabindex="11" accesskey="n" size="8" value="<?php echo"$lim_arr_condut_fun";?>" />Condut 1(&micro;s)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="lim_arr_condut2_fun" type="text"  id="lim_arr_condut2" tabindex="12" accesskey="n" size="8" value="<?php echo"$lim_arr_condut2_fun";?>" />Condut 2(&micro;s) Fundo&nbsp;&nbsp;&nbsp;&nbsp;

                          <br /><br />
               <label for="ph">
              23) PH: </label>
              <input name="lim_arr_ph" type="text" id="lim_arr_ph" tabindex="34" accesskey="c" size="12" value="<?php echo"$lim_arr_ph";?>" />(pH) Superfície <br />
              <input name="lim_arr_ph_fun" type="text" id="lim_arr_ph" tabindex="34" accesskey="c" size="12" value="<?php echo"$lim_arr_ph_fun";?>" />(pH) Fundo
                          <br /><br />

              <label for="oxigenio">
              24) O2 Dissolvido:  </label>
              <input name="lim_arr_o2diss" type="text"  id="lim_arr_o2diss" tabindex="35" accesskey="n" size="12" value="<?php echo"$lim_arr_o2diss";?>" />(mg/l) Superfície <br />
              <input name="lim_arr_o2diss_fun" type="text"  id="lim_arr_o2diss" tabindex="35" accesskey="n" size="12" value="<?php echo"$lim_arr_o2diss_fun";?>" />(mg/l) Fundo

                          <br /><br />
              <label for="o2sat">
              25) O2 Saturado: </label>
              <input name="lim_arr_o2sat" type="text" id="lim_arr_o2sat" tabindex="36" accesskey="p" size="12" value="<?php echo"$lim_arr_o2sat";?>" />(%) Superfície <br />
              <input name="lim_arr_o2sat_fun" type="text" id="lim_arr_o2sat" tabindex="36" accesskey="p" size="12" value="<?php echo"$lim_arr_o2sat_fun";?>" />(%) Fundo
                        <br /><br />
              <label for="temperatura">
              26) Temperatura:  </label>
              <input name="lim_arr_temp" type="text"  id="lim_arr_temp" tabindex="37" accesskey="n" size="5" value="<?php echo"$lim_arr_temp";?>" />(ºC) Superfície<br />
               <input name="lim_arr_temp_fun" type="text"  id="lim_arr_temp" tabindex="37" accesskey="n" size="5" value="<?php echo"$lim_arr_temp_fun";?>" />(ºC) Fundo
                             <br /><br />
             <label for="largura_canal">
              27) Largura canal: </label>
              <input name="lim_arr_larg_rio" type="text" id="lim_arr_lar_rio" tabindex="38" accesskey="c" size="12" value="<?php echo"$lim_arr_larg_rio";?>" /> (m)
                              <br /><br />

               <?php
               if($lim_arr_marg == "Direita")
               {$a = "checked";}
               else{
		       if($lim_arr_marg == "Esquerda")
               {$aa = "checked";}
               else{
               		if($lim_arr_marg == "Meio")
                {$aaa = "checked";}
                else{
               }}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>

               <label for="Margem">
              28) Margem:  </label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lim_arr_marg"  value="Direita"  <?php echo"$a";?>>Direita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lim_arr_marg" value="Esquerda" <?php echo"$aa";?>>Esquerda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lim_arr_marg" value="Meio" <?php echo"$aaa";?>>Meio (Calha)
                               <br /><br />

                               <?php
               if($lim_arr_abun == "Sim")
               {$ab = "checked";}
               else{
		       if($lim_arr_abun == "Não")
               {$abb = "checked";}

                else{
               }}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>

               <label for="Abun">
              29) Abundância:  </label>

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_arr_abun"  value="Sim"  <?php echo"$ab";?>>N > 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_arr_abun" value="Não" <?php echo"$abb";?>>N = 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                               <br /><br />

                  <label for="habitat">
                30) Habitat:  </label>
            <textarea type="radio" name="lim_arr_habitat" cols="50" rows="2" tabindex="22"  value="<?php echo"$lim_arr_habitat";?>"><?php echo"$lim_arr_habitat";?></textarea>

            <label for="ponto">
              31) Ponto de coleta:  </label>
              <input name="lim_arr_ponto" type="text"  id="lim_arr_ponto" tabindex="23" size="5" value="<?php echo"$lim_arr_ponto";?>" />
                           <br /><br />

             <label for="obs">
                32) Observação:  </label>
            <textarea name="lim_arr_obs" cols="50" rows="2" tabindex="24"  value="<?php echo"$lim_arr_obs";?>"><?php echo"$lim_arr_obs";?></textarea>

              </fieldset>



               <br />
  <div id="botao1"><input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>



  <?php




}


else
{



$res1 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `id_tb_limno_outr` = '$idd'");
while($registro1 = mysql_fetch_row($res1))
 {

$lim_outr_excursao =  $registro1[1];
$lim_outr_aparelho =  $registro1[2];
$lim_local =  $registro1[3];

$lim_outr_data =  $registro1[4];
$data13 = explode("-", $lim_outr_data);
$lim_outr_dia = $data13[2];
$lim_outr_mes = $data13[1];
$lim_outr_ano = $data13[0];

$lim_outr_cod =  $registro1[5];
$lim_outr_colet =  $registro1[6];
$lim_outr_pesc =  $registro1[7];
$lim_outr_localidade =  $registro1[8];
$lim_outr_habitat =  $registro1[9];

$lim_outr_lat_g = $registro1[10];
$lim_outr_lat_m = $registro1[11];
$lim_outr_lat_s = $registro1[12];

$lim_outr_long_g = $registro1[13];
$lim_outr_long_m = $registro1[14];
$lim_outr_long_s = $registro1[15];

$lim_outr_padronizado = $registro1[16];
$lim_outr_an = $registro1[17];
$lim_outr_obs = $registro1[18];

$res2 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = '$lim_local'");
while($registro2 = mysql_fetch_row($res2))
 {$loc_descricao = $registro2[1];}

}
?>

<h3>Editar dados de limnologia de outros aparelhos</h3>
    <form id="forms" method="post" action="index.php?secoes=edit/rel_limno_edit_enviar&lim_data=<?php echo "$lim_outr_data"; ?>&idd=<?php echo "$idd"; ?>&lim_outr_cod=<?php echo "$lim_outr_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_outr_excursao=<?php echo "$lim_outr_excursao"; ?>&lim_outr_aparelho=<?php echo "$lim_outr_aparelho"; ?>" enctype="multipart/form-data">

             <fieldset>

               <label for="excursao">

              1) Excursão:  </label>
             <SELECT name='lim_outr_excursao' type='text' id='lim_outr_excursao' >
              <OPTION selected="selected" value="<?php echo"$lim_outr_excursao";?>"

 ><?php echo"$lim_outr_excursao";?></option>
 <OPTION value="0"  >Geral</option>
             <?php
             // include "config.php";
			$res = mysql_query("SELECT * FROM tb_excursao");
		while($registro = mysql_fetch_row($res))
		{
		    $id_excursao = $registro[0];
			$ex_numero = $registro[1];

			echo "<option value=\"$id_excursao\">$ex_numero</option>\n";
		}
	?></select>

             <label for="Codigo do campo">
              2) Código de campo: </label>
              <input name="lim_outr_cod" type="text" id="lim_outr_cod" tabindex="2" accesskey="p" size="15"  value="<?php echo"$lim_outr_cod";?>" />


               <label for="Aparelho">
              3) Aparelho:  </label>
              <SELECT NAME='lim_outr_aparelho' type='text' id='lim_outr_aparelho' tabindex="1">
              <OPTION selected="selected" value="<?php echo"$lim_outr_aparelho";?>"

 ><?php echo"$lim_outr_aparelho";?> </option>


                <option value='Puça'>Puçá</option>
                <option value='Tarrafa'>Tarrafa</option>
                <option value='Covo'>Covo</option>
                 <option value='Espinhel'>Espinhel</option>
                <option value='Trawnet'>Trawnet</option>
                <option value='Manual'>Manual</option>
                </select>


    <label for="local">
              4) Localidade:  </label>
             <SELECT name='lim_local' type='text' id='lim_local' ><OPTION>
             <OPTION selected="selected" value="<?php echo"$lim_local";?>"

 ><?php echo"$loc_descricao";?>
             <?php

			$res = mysql_query("SELECT * FROM tb_local WHERE verif ='s'");
		while($registro = mysql_fetch_row($res))
		{
		    $id_tab_loc = $registro[0];
			$loc_localidade = $registro[1];

			echo "<option value=\"$id_tab_loc\">$loc_localidade</option>\n";
		}
	?></select>




              <label for="lim_data">
              5) Data: </label>
               <SELECT name='lim_outr_dia' type='text' id='lim_outr_dia' tabindex="4">

               <OPTION selected="selected" value="<?php echo"$lim_outr_dia";?>" ><?php echo"$lim_outr_dia";?></option>
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
                <option value='25'>24</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
              </select>
              <SELECT name='lim_outr_mes' type='text' id='lim_outr_mes' tabindex="5">
                 <OPTION selected="selected" value="<?php echo"$lim_outr_mes";?>" ><?php echo"$lim_outr_mes";?></option>
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
              </select>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="lim_outr_ano" type="text" id="lim_outr_ano" tabindex="6"  size="4" value="<?php echo "$lim_outr_ano"; ?>" /> dd/mm/aaaa

      <label for="coletores">
    6) Coletores:  </label>
                 <textarea name="lim_outr_colet" type="text"  id="lim_outr_colet" tabindex="17" cols="30" rows="5"  value="<?php echo"$lim_outr_colet";?>"><?php echo"$lim_outr_colet";?></textarea>
                  <br />
                  <label for="coletores">
              Pescadores:  </label>
                 <textarea name="lim_outr_pesc" type="text"  id="lim_outr_pesc" tabindex="17" cols="30" rows="5"  value="<?php echo"$lim_outr_pesc";?>"><?php echo"$lim_outr_pesc";?></textarea>
                 <br />
            <label for="localidade">
                7) Localidade:  </label>
            <textarea type="radio" name="lim_outr_localidade" cols="50" rows="2" tabindex="21"  value="<?php echo"$lim_outr_localidade";?>"><?php echo"$lim_outr_localidade";?></textarea>
                    <br />
             <label for="localidade">
                8) Habitat:  </label>
            <textarea type="radio" name="lim_outr_habitat" cols="50" rows="2" tabindex="21"  value="<?php echo"$lim_outr_habitat";?>"><?php echo"$lim_outr_habitat";?></textarea>


             <label for="latitude">
              5) Latitude: </label>
              <input name="lim_outr_lat_g" type="text" id="lim_outr_lat_g" tabindex="5" accesskey="c" size="5"   value="<?php echo"$lim_outr_lat_g";?>"/>Graus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_outr_lat_m" type="text" id="lim_outr_lat_m" tabindex="6" accesskey="c" size="5"   value="<?php echo"$lim_outr_lat_m";?>" />Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_outr_lat_s" type="text" id="lim_outr_lat_s" tabindex="7" accesskey="c" size="5"   value="<?php echo"$lim_outr_lat_s";?>" />Seg

               <label for="longitude">
              6) Longitude:  </label>
              <input name="lim_outr_long_g" type="text" id="lim_outr_long_g" tabindex="8" accesskey="c" size="5" value="<?php echo"$lim_outr_long_g";?>" />Graus&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_outr_long_m" type="text" id="lim_outr_long_m" tabindex="9" accesskey="c" size="5" value="<?php echo"$lim_outr_long_m";?>" />Min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_outr_long_s" type="text" id="lim_outr_long_s" tabindex="10" accesskey="c" size="5" value="<?php echo"$lim_outr_long_s";?>" />Seg


                        <label for="padronizado">
                7) Padronizado:  </label>

           <?php
               if($lim_outr_padronizado == "Sim")
               {$p = "checked";}
               else{
		       if($lim_outr_padronizado == "Não")
               {$pp = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>




           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_outr_padronizado"  value="Sim"  <?php echo"$p";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_outr_padronizado" value="Não"  <?php echo"$pp";?> >Não



               <?php
               if($lim_outr_an == "Sim")
               {$oa = "checked";}
               else{
		       if($lim_outr_an == "Não")
               {$oan = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>
                         <label for="aparelho">
       8)Análise:  </label>   &nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_outr_an"  value="Sim"  <?php echo"$oa"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="lim_outr_an" value="Não" <?php echo"$oan"; ?>>Não

        <br /><br />

       <label for="obs">
                9) Observação:  </label>
            <textarea name="lim_outr_obs" cols="50" rows="2" tabindex="24"  value="<?php echo"$lim_outr_obs";?>"><?php echo"$lim_outr_obs";?></textarea>


                    </fieldset>

               <br />
  <div id="botao1"><input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>


<?php


}



}





?>

<!--Área editável fim     -->



</div>
