 <style type="text/css">

</style>


 <?php // include "log_auth.php"; ?>

 <?php

$lista = new ManipulateData();
// include "log_auth.php";
?>

<div id="conteudo1">

        <div id="caixa1_1">
        <h1>Código de Campo</h1>
        <h3>&nbsp;</h3>

<!--Área editável início     -->
<form name="navegador" method="post" action="index.php?secoes=registros/cod_enviar&flag=1" enctype="multipart/form-data">

 <fieldset>

    <label for="cod">1) Código:
    <input name="cod" type="text" id="cod" tabindex="1" accesskey="c" size="10" /></label>

    <label for="loc">2) Local:
    <SELECT name='loc' type='text' id='arr_lim' tabindex="2" ><OPTION>
    <?php
    $lista = new ManipulateData();
    $lista->geraListaLoc();
    ?>
    </select>
    </label>

    <label for="exc">2) Excursao:
    <SELECT name='exc' type='text' id='exc' tabindex="3" ><OPTION>
    <?php
    $lista->geraListaExc();
    ?>
    </select>
    </label>

    <label for="data">4) Data:
        <SELECT name='dia' type='text' id='dia' tabindex="4">
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="5">
        <?php
        $lista->ListaMeses();
        ?>
        </select>
        <select name='ano' type='text' id='ano' tabindex="6">
        <option value=''>&nbsp;</option>
        <option value='2008'>2008</option>
        <option value='2009' "selected">2009</option>
          <option value='2010' "selected">2010</option>
            <option value='2011' "selected">2011</option>
        </select> dd/mm/aaaa
     </label>

    <label for="rede">3) Rede:
    <select name='rede' type='text' id='rede' tabindex="3">
        <option value=''>&nbsp;</option>
        <option value='ICS'>ICS</option>
        <option value='ICF'>ICF</option>
        <option value='TRA'>TRA</option>
    </select></label>

    <label for="pos">4) Posição:
    <select name='pos' type='text' id='pos' tabindex="4">
        <option value=''>&nbsp;</option>
        <option value='MD'>MD</option>
        <option value='ME'>ME</option>
        <option value='CA'>CA</option>
    </select> </label>

    <label for="latitude">5) Latitude:
        <input name="lat_g" type="text" id="lat_g" tabindex="5" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="lat_m" type="text" id="lat_m" tabindex="6" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="lat_s" type="text" id="lat_s" tabindex="7" accesskey="c" size="5" />Seg </label>

    <label for="longitude">6) Longitude:
        <input name="long_g" type="text" id="long_g" tabindex="8" accesskey="c" size="5" />Graus&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="long_m" type="text" id="long_m" tabindex="9" accesskey="c" size="5" />Min &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="long_s" type="text" id="long_s" tabindex="10" accesskey="c" size="5" />Seg </label>

    <label for="tempo">7) Tempo:
    <input name="tempo" type="text" id="tempo" tabindex="11" size="10" /> min </label>

    <label for="arede">8) Área da rede:
    <input name="arede" type="text" id="arede" tabindex="12" size="10" /> min </label>

    <label for="dist">9) Distância percorrida:
    <input name="dist" type="text" id="dist" tabindex="13" size="10" /> m </label>

    <label for="fluxi">10) Fluxímetro:
    <input name="fluxi" type="text" id="fluxi" tabindex="14" size="10" /> </label>

    <label for="lua">11) Lua:
    <select name='lua' type='text' id='lua' tabindex="15">
        <option value=''>&nbsp;</option>
        <option value='CH'>Cheia</option>
        <option value='MI'>Minguante</option>
        <option value='NO'>Nova</option>
        <option value='CR'>Crescente</option>
    </select></label>

    <label for="ctemp">12) Condição de tempo:
    <select name='ctemp' type='text' id='ctemp' tabindex="16">
        <option value=''>&nbsp;</option>
        <option value='CH'>Chuva</option>
        <option value='NU'>Nublado</option>
        <option value='SO'>Sol</option>
    </select></label>

    <label for="veg">13) Vegetação:
    <select name='veg' type='text' id='veg' tabindex="17">
        <option value=''>&nbsp;</option>
        <option value='CF'>Capim flutuante</option>
        <option value='CE'>Capim enraizado</option>
        <option value='OM'>Outras macróitas</option>
    </select></label>

    <label for="temp">14) Temperatura:
    <input name="temp" type="text" id="temp" tabindex="18" size="10" /> ºC </label>

    <label for="ph">15) PH:
    <input name="ph" type="text" id="ph" tabindex="19" size="10" /></label>

    <label for="o2">16) O2 Dissolvido:
    <input name="o2" type="text" id="o2" tabindex="20" size="10" /> mg/l </label>

    <label for="condut">17) Condutividade:
    <input name="condut" type="text" id="condut" tabindex="21" size="10" /> </label>

    <label for="turb">18) Turbidez:
    <input name="turb" type="text" id="turb" tabindex="22" size="10" /> </label>

    <label for="veloc">19) Velocidade:
    <input name="veloc" type="text" id="veloc" tabindex="23" size="10" />  </label>

    <label for="prof">20) Profundidade:
    <input name="prof" type="text" id="prof" tabindex="24" size="10" /> </label>

</fieldset>


   <br />
   <input type="submit" value="ENVIAR" class="botao2"  />
</form>

<!--Área editável fim     -->

</div>
</div>

