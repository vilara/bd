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
$lim_local = $_POST["lim_local"];
$lim_dia = $_POST["lim_dia"];
$lim_mes = $_POST["lim_mes"];
$lim_ano = $_POST["lim_ano"];
$lim_data = "$lim_ano-$lim_mes-$lim_dia";
$lim_dren = "Rio Madeira";

// echo"$lim_excursao--$lim_cod--$lim_local--$lim_data--$lim_aparelho";

?>
 <h3>Inserir dados de limnologia de Corredeiras</h3>
    <form id="forms" method="post" action="?secoes=cadastros/limno_enviar_corr&lim_data=<?php echo "$lim_data"; ?>&lim_cod=<?php echo "$lim_cod"; ?>&lim_local=<?php echo "$lim_local"; ?>&lim_excursao=<?php echo "$lim_excursao"; ?>&lim_aparelho=<?php echo "$lim_aparelho"; ?>&lim_dren=<?php echo "$lim_dren"; ?>" enctype="multipart/form-data">

             <fieldset>




               <label for="padronizado">
                1) Padronizado:  </label>
           <input type="radio" name="lim_padronizado"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_padronizado"  class="checkbox"  value="Não" >Não

             <label for="padronizado">
                Análise:  </label>
           <input type="radio" name="lim_an"  value="Sim" class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="lim_an"  class="checkbox"  value="Não" >Não



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
                      <br /> <br /><br /><br /><br /> <br /><br />

                  <label for="pescadores">
             <br />  8) Pescadores:  </label>

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


                 <br /><br /><br /><br />


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




<!--Área editável fim     -->


</div>
