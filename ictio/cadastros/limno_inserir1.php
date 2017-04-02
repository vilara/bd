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
$lim_excursao = $_POST["lim_excursao"];
$lim_cod = $_POST["lim_cod"];
$lim_aparelho = $_GET["aparelho"];

$sql = mysql_query("SELECT lim_cod FROM tb_limno WHERE lim_cod = '$lim_cod' AND lim_aparelho != 'Redinha'");$num = mysql_num_rows($sql);

$sql = mysql_query("SELECT lim_arr_cod FROM tb_limno_arr WHERE lim_arr_cod = '$lim_cod'");$num1 = mysql_num_rows($sql);

$sql = mysql_query("SELECT lim_outr_cod FROM tb_limno_outr WHERE lim_outr_cod = '$lim_cod'");$num2 = mysql_num_rows($sql);



/*    */



$lim_local = $_POST["lim_local"];
$lim_dia = $_POST["lim_dia"];
$lim_mes = $_POST["lim_mes"];
$lim_ano = $_POST["lim_ano"];
$lim_data = "$lim_ano-$lim_mes-$lim_dia";
$lim_dren = "Rio Madeira";


if ($lim_aparelho == "Redinha" OR  $lim_aparelho == "Malhadeira")
{
?>
 <h3>Inserir dados de limnologia</h3>
    <form id="forms" method="post" action="?secoes=cadastros/limno_enviar_malh_red&lim_data=<?php echo "$lim_data"; ?>&lim_cod=<?php echo "$lim_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_aparelho"; ?>&lim_dren=<?php echo "$lim_dren"; ?>" enctype="multipart/form-data">

      <?php if($num > 0 OR $num1 > 0 OR $num2 > 0){ echo " <center><h2>Este código já foi cadastrado</h2></center>" ;?>
      <center><h2>  <a href='javascript:history.go(-1)'>Voltar</a>  </h2></center>
      <?php Break; } ?>



             <fieldset>




      <label for="padronizado">
          1) Padronizado:  </label>
              <input type="radio" name="lim_padronizado"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="lim_padronizado"  class="checkbox"  value="Não" >Não

              <label for="padronizado">
              Análise:  </label>
              <input type="radio" name="lim_an"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="lim_an"  class="checkbox"  value="Não" >Não


      <?php
                 if($lim_aparelho == "Malhadeira")
                 {
                ?>
                    <br /><br />
               <label for="hora_ini">
            2) Horário da armação do aparelho: </label>
            <SELECT name='hora_ini' type='text' id='hora_ini' tabindex="1">

            <option value=''></option>
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
              <SELECT name='min_ini' type='text' id='min_ini' tabindex="2">
               <option value=''></option>
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
               
                <label for="localidade">
                3) Localidade:  </label>
            <textarea type="radio" name="lim_localidade" cols="50" rows="2" tabindex="3"></textarea>

     
               <label for="drenagem">
              4) Drenagem: </label>
              <input name="lim_dren" type="text" id="lim_dre" tabindex="4" accesskey="c" size="12" value="Rio Madeira" />


                     <label for="latitude">
              5) Latitude: </label>
              <input name="lim_lat_g" type="text" id="lim_lat_g" tabindex="5" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_lat_m" type="text" id="lim_lat_m" tabindex="6" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_lat_s" type="text" id="lim_lat_s" tabindex="7" accesskey="c" size="5" />Seg

               <label for="longitude">
              6) Longitude:  </label>
              <input name="lim_long_g" type="text" id="lim_long_g" tabindex="8" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_long_m" type="text" id="lim_long_m" tabindex="9" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_long_s" type="text" id="lim_long_s" tabindex="10" accesskey="c" size="5" />Seg


              <label for="Coletores">
               7) Coletores:  </label>
                   <table align="left" cellpadding="0" cellspacing="0" border="0" bordercolor="#000000" width="700px">
                 <tr>

                  <td>

         <label for="determinador">
        Técnco1: </label>
            <SELECT NAME='tec1' type='text'  tabindex="7">
             <option value=''>&nbsp;</option>
             <?php
               $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>
                   <td>

         <label for="determinador">
        Técnico2: </label>
            <SELECT NAME='tec2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>


                   <td> <label for="determinador">
        Pescador1: </label>
            <SELECT NAME='pes1' type='text' tabindex="7">
              <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>




                   <td><label for="determinador">
        Pescador2: </label>
            <SELECT NAME='pes2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>



                   <td>&nbsp;</td>
                 </tr>

               </table>
                      <br /> <br /><br /><br /><br /> <br /><br />
                 <!--
                  <label for="pescadores">
               8) Pescadores:  </label>

                <table align="left">
                <tr>
                  <td><input type="checkbox" name="pesc4" value="Sr Chico Maia" class="checkbox">Sr Chico Maia</td>
                  <td><input type="checkbox" name="pesc8" value="Sr Galego" class="checkbox">Sr Galego</td>
                  <td><input type="checkbox" name="pesc3" value="Sr Jorge Ramos" class="checkbox">Sr Jorge Ramos</td>
                  <td><input type="checkbox" name="pesc5" value="Sr José Hosana" class="checkbox">Sr José Hosana</td>
                  <td><input type="checkbox" name="pesc9" value="Sr Juarez Rocha" class="checkbox">Sr Juarez Rocha</td>

                </tr>
                <tr>
                  <td><input type="checkbox" name="pesc2" value="Sr Manuel" class="checkbox">Sr Manuel</td>
                  <td><input type="checkbox" name="pesc6" value="Sr Paulo Souza" class="checkbox">Sr Paulo Souza</td>
                  <td><input type="checkbox" name="pesc7" value="Sr Roberval Pinto Ribeiro" class="checkbox">Sr Roberval Pinto Ribeiro</td>
                  <td><input type="checkbox" name="pesc1" value="Sr Zacaria Santos" class="checkbox">Sr Zacaria Santos </td>
                  <td></td>
                </tr>
              </table>


                 <br /><br /><br /><br />-->


                <label for="velocidade">
              9) Velocidade da corrente:  </label>
              <input name="lim_fluxo1" type="text"  id="lim_fluxo1" tabindex="11" accesskey="n" size="8" />(m/s)<br /><br />
              <!--<input name="lim_fluxo2" type="text"  id="lim_fluxo2" tabindex="12" accesskey="n" size="8" />Final (m/s)<br />-->

              <label for="Profundidade">
              10) Profundidade: </label>
              <input name="lim_prof" type="text" id="lim_prof" tabindex="13" accesskey="p" size="5" />(m)
              
               <label for="Transparencia">
              11) Transparência: </label>
              <input name="lim_transp" type="text" id="lim_transp" tabindex="14" accesskey="c" size="12" />(cm)


               <label for="Turbidez">
              12) Turbidez:  </label>
              <input name="lim_turb1" type="text"  id="lim_turb1" tabindex="15" accesskey="n" size="8" />Turb1 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input name="lim_turb2" type="text"  id="lim_turb2" tabindex="16" accesskey="n" size="8" />Turb2 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input name="lim_turb3" type="text"  id="lim_turb3" tabindex="17" accesskey="n" size="8" />Turb3 (FTU)

                    
              <label for="condutividade">
              13) Condutividade: </label>
              <input name="lim_condut" type="text" id="lim_condut" tabindex="18" accesskey="p" size="8" />Condut 1 (&micro;s)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input name="lim_condut2" type="text"  id="lim_condut2" tabindex="19" accesskey="n" size="8" />Condut 2  (&micro;s)
                  
               <label for="ph">
              14) PH: </label>
              <input name="lim_ph" type="text" id="lim_ph" tabindex="20" accesskey="c" size="12" /> (pH)
              
              <label for="02dissolvido">
              15) O2 Dissolvido:  </label>
              <input name="lim_o2diss" type="text"  id="lim_o2diss" tabindex="21" accesskey="n" size="50" /> (mg/l)
                 

              <label for="o2saturado">
              16) O2 Saturado: </label>
              <input name="lim_o2sat" type="text" id="lim_o2sat" tabindex="22" accesskey="p" size="50" /> (%)
                   
                 <label for="temperatura">
              17) Temperatura:  </label>
              <input name="lim_temp" type="text"  id="lim_temp" tabindex="23" accesskey="n" size="5" /> (ºC)

                       

               <label for="largura do canal">
              18) Largura do Canal: </label>
              <input name="lim_larg_rio" type="text" id="lim_lar_rio" tabindex="24" accesskey="c" size="12" /> (m)

                  



                <label for="substrato">
              19) Substrato:  </label>
                  <SELECT NAME='lim_substr' type='text' id='lim_substr' tabindex="25">
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


             
               <label for="habitat">
                20) Habitat:  </label>
            <textarea type="radio" name="lim_habitat" cols="50" rows="2" tabindex="26"></textarea>


            <label for="Obs">
                21) Observação:  </label>
            <textarea name="lim_obs" cols="50" rows="2" tabindex="26"></textarea>
              </fieldset>


   <center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>



<?php
}
else {
if ($lim_aparelho == "Arrasto de fundo")
{
?>
 <h3>Inserir dados de limnologia de Arrasto</h3>
    <form id="forms" method="post" action="?secoes=cadastros/limno_enviar_arrasto&lim_data=<?php echo "$lim_data"; ?>&lim_cod=<?php echo "$lim_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_aparelho"; ?>" enctype="multipart/form-data">

       <?php if($num > 0 OR $num1 > 0 OR $num2 > 0){ echo " <center><h2>Este código já foi cadastrado</h2></center>" ;?>
      <center><h2>  <a href='javascript:history.go(-1)'>Voltar</a>  </h2></center>
      <?php Break; } ?>

             <fieldset>

             <label for="padronizado">
                1) Padronizado:  </label>
           <input type="radio" name="lim_arr_padronizado"  value="Sim" class="checkbox" checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_padronizado" class="checkbox" value="Não" >Não

            <label for="padronizado">
                Análise:  </label>
           <input type="radio" name="lim_arr_an"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_an"  class="checkbox"  value="Não" >Não
         

              <label for="arr_hora_ini">
              2) Horário inicial da coleta: </label>
            <SELECT name='hora_ini' type='text' id='hora_ini' tabindex="1">
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
              <SELECT name='min_ini' type='text' id='min_ini' tabindex="2">
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
             

                 <label for="arr_hora_fim">
              3) Horário final da coleta: </label>
            <SELECT name='hora_fim' type='text' id='hora_fim' tabindex="3">
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
              <SELECT name='min_fim' type='text' id='min_fim' tabindex="4">
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
           


               <label for="localidade">
                4) Localidade:  </label>
            <textarea type="radio" name="lim_arr_localidade" cols="50" rows="2" tabindex="5"></textarea>

                       

             <label for="drenagem">
              5) Drenagem:  </label>
              <input name="lim_dren" type="text"  id="lim_dren" tabindex="6" size="15" value="Rio Madeira" />

                         
               <label for="latitude_ini">
               6) Latitude Inicial: </label>
              <input name="lim_arr_lat_g_ini" type="text" id="lim_arr_g_ini" tabindex="7" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp; <input name="lim_arr_lat_m_ini" type="text" id="lim_arr_m_ini" tabindex="8" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp; <input name="lim_arr_lat_s_ini" type="text" id="lim_arr_s_ini" tabindex="9" accesskey="c" size="5" />Seg

               <label for="longitude_ini">
              7) Longitude Inicial:  </label>
              <input name="lim_arr_long_g_ini" type="text" id="lim_arr_long_g_ini" tabindex="10" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;<input name="lim_arr_long_m_ini" type="text" id="lim_arr_long_m_ini" tabindex="11" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp; <input name="lim_arr_long_s_ini" type="text" id="lim_arr_long_s_ini" tabindex="12" accesskey="c" size="5" />Seg

                

                <label for="latitude_fim">
               8) Latitude Final: </label>
              <input name="lim_arr_lat_g_fim" type="text" id="lim_arr_lat_g_fim" tabindex="13" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;<input name="lim_arr_lat_m_fim" type="text" id="lim_arr_lat_m_fim" tabindex="14" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;<input name="lim_arr_lat_s_fim" type="text" id="lim_arr_lat_s_fim" tabindex="15" accesskey="c" size="5" />Seg

               <label for="longitude_ini">
              9) Longitude Final:  </label>
              <input name="lim_arr_long_g_fim" type="text" id="lim_arr_long_g_fim" tabindex="16" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;<input name="lim_arr_long_m_fim" type="text" id="lim_arr_long_m_fim" tabindex="17" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;<input name="lim_arr_long_s_fim" type="text" id="lim_arr_long_s_fim" tabindex="18" accesskey="c" size="5" />Seg
       
                             <label for="Coletores">
              10) Coletores:  </label>
                                     <table align="left" cellpadding="0" cellspacing="0" border="0" bordercolor="#000000" width="700px">
                <tr>

                  <td>

         <label for="determinador">
        Técnco1: </label>
            <SELECT NAME='tec1' type='text'  tabindex="7">
             <option value=''>&nbsp;</option>
             <?php
               $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>
                   <td>

         <label for="determinador">
        Técnico2: </label>
            <SELECT NAME='tec2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>


                   <td> <label for="determinador">
        Pescador1: </label>
            <SELECT NAME='pes1' type='text' tabindex="7">
              <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>




                   <td><label for="determinador">
        Pescador2: </label>
            <SELECT NAME='pes2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>



                   <td>&nbsp;</td>
                 </tr>
              </table>
                     <br /><br /><br />
                <label for="fluxo_ini">
              12) Velocidade da corrente:  </label>
              <input name="lim_arr_veloc_ini" type="text"  id="lim_arr_veloc_ini" tabindex="19" size="5" /> (m/s)



                <label for="fluxo_ini">
              14) Profundidade Inicial:  </label>
              <input name="lim_arr_prof_ini" type="text"  id="lim_arr_prof_ini" tabindex="21" size="5" />(m)


                <label for="fluxo_fim">
              15) Profundidade Final:  </label>
              <input name="lim_arr_prof_fim" type="text"  id="lim_arr_prof_fim" tabindex="22"  size="5" />(m)


                <label for="fluxo_fim">
              16) Profundidades parciais: (m) </label>
              <input name="lim_arr_prof1" type="text"  id="lim_arr_prof1" tabindex="23"  size="5" />Prof 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof2" type="text"  id="lim_arr_prof2" tabindex="24"  size="5" />Prof 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof3" type="text"  id="lim_arr_prof3" tabindex="25"  size="5" />Prof 3<br />
              <input name="lim_arr_prof4" type="text"  id="lim_arr_prof4" tabindex="26"  size="5" />Prof 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof5" type="text"  id="lim_arr_prof5" tabindex="27"  size="5" />Prof 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof6" type="text"  id="lim_arr_prof6" tabindex="28"  size="5" />Prof 6<br />
              <input name="lim_arr_prof7" type="text"  id="lim_arr_prof7" tabindex="29"  size="5" />Prof 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof8" type="text"  id="lim_arr_prof8" tabindex="30"  size="5" />Prof 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lim_arr_prof9" type="text"  id="lim_arr_prof9" tabindex="31"  size="5" />Prof 9
        


               <label for="cpf">
              17) Transparência: </label>
                            <input name="lim_arr_transp" type="text" id="lim_arr_transp" tabindex="32" accesskey="c" size="12" />(cm)
                     
               <label for="Nome">
              18) Turbidez:  </label>
              <input name="lim_arr_turb" type="text"  id="lim_turb" tabindex="33" accesskey="n" size="8" />Turb1 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;  <input name="lim_arr_turb2" type="text"  id="lim_turb2" tabindex="34" accesskey="n" size="8" />Turb2 (FTU)&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input name="lim_arr_turb3" type="text"  id="lim_turb3" tabindex="35" accesskey="n" size="8" />Turb3 (FTU)


              <label for="condutividade">
              19) Condutividade: </label>
               <input name="lim_arr_condut" type="text"  id="lim_condut" tabindex="36" accesskey="n" size="8" />Condut (&micro;s)&nbsp;&nbsp;&nbsp;&nbsp; Superfície
            &nbsp;&nbsp;&nbsp;  <input name="lim_arr_condut2" type="hidden"  id="lim_condut2" tabindex="37" accesskey="n" size="8" value"0" />
            <br />
         <input name="lim_arr_condut_fun" type="text"  id="lim_condut" tabindex="36" accesskey="n" size="8" />Condut (&micro;s)&nbsp;&nbsp;&nbsp;&nbsp; Fundo
            &nbsp;&nbsp;&nbsp;  <input name="lim_arr_condut2_fun" type="hidden"  id="lim_condut2" tabindex="37" accesskey="n" size="8" value"0" />

            
               <label for="ph">
              20) PH: </label>
              <input name="lim_arr_ph" type="text" id="lim_arr_ph" tabindex="38" accesskey="c" size="12" />(pH) Superfície<br />
              <input name="lim_arr_ph_fun" type="text" id="lim_arr_ph_fun" tabindex="38" accesskey="c" size="12" />(pH) Fundo

              <label for="oxigenio">
              21) O2 Dissolvido:  </label>
              <input name="lim_arr_o2diss" type="text"  id="lim_arr_o2diss" tabindex="39" accesskey="n" size="12" />(mg/l) Superfície<br />
              <input name="lim_arr_o2diss_fun" type="text"  id="lim_arr_o2diss_fun" tabindex="39" accesskey="n" size="12" />(mg/l) Fundo
              
              <label for="o2sat">
              22) O2 Saturado: </label>
              <input name="lim_arr_o2sat" type="text" id="lim_arr_o2sat" tabindex="40" accesskey="p" size="12" /> (%) Superfície<br />
              <input name="lim_arr_o2sat_fun" type="text" id="lim_arr_o2sat_fun" tabindex="40" accesskey="p" size="12" /> (%) Fundo

              <label for="temperatura">
              23) Temperatura:  </label>
              <input name="lim_arr_temp" type="text"  id="lim_arr_temp" tabindex="41" accesskey="n" size="5" /> (ºC) Superfície<br />
               <input name="lim_arr_temp_fun" type="text"  id="lim_arr_temp_fun" tabindex="41" accesskey="n" size="5" /> (ºC) Fundo

             <label for="largura_canal">
              24) Largura canal: </label>
              <input name="lim_arr_larg_rio" type="text" id="lim_arr_lar_rio" tabindex="42" accesskey="c" size="5" /> (m)




               <label for="Margem">
              25) Margem:  </label>

                <input type="radio" name="lim_arr_marg" class="checkbox"  value="Direita" >Direita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="lim_arr_marg" class="checkbox" value="Esquerda">Esquerda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="lim_arr_marg" class="checkbox" value="Meio">Meio (Calha)


               <label for="habitat">
                26) Habitat:  </label>
            <textarea type="radio" name="lim_arr_habitat" cols="50" rows="2" tabindex="43"></textarea>

                <label for="padronizado">
                27) Abundância:  </label>
         <input type="radio" name="lim_arr_abun"  value="Sim" class="checkbox" checked >N > 0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_arr_abun" class="checkbox" value="Não" >N = 0

                 <label for="Ponto de coleta">
              28) Ponto de coleta: </label>
              <input name="lim_arr_ponto" type="text" id="lim_arr_ponto" tabindex="44" accesskey="c" size="5" />



            <label for="Obs">
                29) Observação:  </label>
            <textarea  name="lim_arr_obs" cols="50" rows="2" tabindex="45"></textarea>
              </fieldset>



               <br />
       <center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>


<?php
}


// Aparelho Outros, Tarrafa, Puça ..................
else
{
		?>

<h3>Inserir dados de limnologia de Outros aparelhos</h3>
    <form id="forms" method="post" action="?secoes=cadastros/limno_enviar_outro&lim_data=<?php echo "$lim_data"; ?>&lim_cod=<?php echo "$lim_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_aparelho"; ?>" enctype="multipart/form-data">
    <?php


  if($num > 0 OR $num1 > 0 OR $num2 > 0){ echo " <center><h2>Este código já foi cadastrado</h2></center>" ;?>
      <center><h2>  <a href='javascript:history.go(-1)'>Voltar</a>  </h2></center>
      <?php Break; }

      ?>

             <fieldset>

         <?php




          if ($lim_aparelho == "Outros") {
         ?>
         <label for="Aparr">
              Aparelho:  </label>
                <input type="radio" name="aparr" class="checkbox"  value="Manual" >Manual&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="aparr" class="checkbox" value="Covo">Covo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="aparr" class="checkbox" value="Caniço">Caniço
        <?php
                                        }
        ?>





              <label for="Coletores">
               1) Coletores:  </label>

               <table align="left" cellpadding="0" cellspacing="0" border="0" bordercolor="#000000" width="700px">
                  <tr>

                  <td>

         <label for="determinador">
        Técnco1: </label>
            <SELECT NAME='tec1' type='text'  tabindex="7">
             <option value=''>&nbsp;</option>
             <?php
               $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>
                   <td>

         <label for="determinador">
        Técnico2: </label>
            <SELECT NAME='tec2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select>

                   </td>


                   <td> <label for="determinador">
        Pescador1: </label>
            <SELECT NAME='pes1' type='text' tabindex="7">
              <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>




                   <td><label for="determinador">
        Pescador2: </label>
            <SELECT NAME='pes2' type='text' tabindex="7">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select></td>



                   <td>&nbsp;</td>
                 </tr>
              </table>





                   <br /><br /><br />





                 <label for="localidade">
                3) Localidade:  </label>
            <textarea type="radio" name="lim_outr_localidade" cols="50" rows="2" tabindex="21"></textarea>


               <label for="habitat">
                4) Habitat:  </label>
            <textarea type="radio" name="lim_outr_habitat" cols="50" rows="2" tabindex="22"></textarea>



                              <label for="latitude">
              5) Latitude: </label>
              <input name="lim_outr_lat_g" type="text" id="lim_outr_lat_g" tabindex="5" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_outr_lat_m" type="text" id="lim_outr_lat_m" tabindex="6" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_outr_lat_s" type="text" id="lim_outr_lat_s" tabindex="7" accesskey="c" size="5" />Seg

               <label for="longitude">
              6) Longitude:  </label>
              <input name="lim_outr_long_g" type="text" id="lim_outr_long_g" tabindex="8" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
               <input name="lim_outr_long_m" type="text" id="lim_outr_long_m" tabindex="9" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="lim_outr_long_s" type="text" id="lim_outr_long_s" tabindex="10" accesskey="c" size="5" />Seg


                        <label for="padronizado">
                7) Padronizado:  </label>
           <input type="radio" name="lim_outr_padronizado"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_outr_padronizado"  class="checkbox"  value="Não" >Não

             <label for="padronizado">
                8) Análise:  </label>
           <input type="radio" name="lim_outr_an"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_outr_an"  class="checkbox"  value="Não" >Não

            <label for="Obs">
                9) Observação:  </label>
            <textarea  name="lim_outr_obs" cols="50" rows="2" tabindex="11"></textarea>

                    </fieldset>

<center>   <input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>

<?php
}}

?>



<!--Área editável fim     -->


</div>
