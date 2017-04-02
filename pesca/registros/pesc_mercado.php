<script language=javascript>



function destino(){

url = document.navegador.exc.options[document.navegador.exc.selectedIndex].value

if (url != " no") window.location = url;

}



</script>



 <?php include "log_auth1.php"; ?>



 <?php

$lista = new ManipulateData();

$exc = $_GET["exc"];

$cod = $_GET["cod"];

$flag = $_GET["flag"];



$lista->setTable("tb_limno");

$lista->setFieldId("id_tb_limno ='$cod'");

$lista->setFieldNr("1"); $cod1 = $lista->data_filter();



$empre = $_GET["empre"];

$dia = $_GET["dia"];

$mes = $_GET["mes"];

$ano = $_GET["ano"];

$categ = $_GET["categ"];

$lista->setTable("pesc_especie");

$lista->setFieldId("id_esp ='$categ'");

$lista->setFieldNr("1"); $categ1 = $lista->data_filter();



$loc = $_GET["loc"];

$lista->setTable("pesc_localidade");

$lista->setFieldId("id_locali ='$loc'");

$lista->setFieldNr("1"); $loc1 = $lista->data_filter();





// include "log_auth.php";

?>



<div id="conteudo1">



        <div id="caixa1_1">

        <h1>Registro de Biometria</h1>

        <h3>&nbsp;</h3>



<!--Área editável início     -->

<form name="navegador" method="post" action="index.php?secoes=registros/pesc_mercado_enviar&flag=1&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">



 <fieldset>

     <?php

      if($empre == "JM")

               {$e = "selected";}

               else if($empre == "JS")

		       {$ee = "selected";}

               else if($empre == "SM")

		       {$eee = "selected";}

               else if($empre == "SJ")

		       {$eeee = "selected";}

           ?>

                 <label for="ref">19) Referência:

    <input name="ref" type="text" id="ref" tabindex="9" size="6" /></label>





         <label for="empre">1) Empreendimento:

            <select name='empre' type='text' id='empre' tabindex="1">

        <option value='JM' <?php echo"$e";?>   >Jirau Montante</option>

        <option value='JS' <?php echo"$ee";?>   >Jirau Jusante</option>

        <option value='SM' <?php echo"$eee";?>   >Santo Antônio Montante</option>

        <option value='SJ' <?php echo"$eeee";?>   >Santo Antônio Jusante</option>



        </select>

     </label>



 <label for="data">2) Data:

        <SELECT name='dia' type='text' id='dia' tabindex="4">

           <option value='<?php echo "$dia"; ?>'><?php echo"$dia"; ?></option>

        <?php

        $lista->ListaDias();

        ?>

        </select>

        <SELECT name='mes' type='text' id='mes' tabindex="5">

           <option value='<?php echo "$mes"; ?>'><?php echo"$mes"; ?></option>

        <?php

        $lista->ListaMeses();

        ?>

        </select>

        <select name='ano' type='text' id='ano' tabindex="6">

        <option value='<?php echo "$ano"; ?>'><?php echo "$ano"; ?></option>

        <option value='2008'>2008</option>

        <option value='2009'>2009</option>

 <option value='2010'>2010</option>

  <option value='2011'>2011</option>

    <option value='2012' "selected">2012</option>

     <option value='2013' "selected">2013</option>  
<option value='2014' "selected">2014</option>
<option value='2015' "selected">2015</option>
<option value='2016' "selected">2016</option>
<option value='2017' "selected">2017</option>

        </select> dd/mm/aaaa

     </label>



    <label for="loc">3) Localidade:

    <SELECT name='loc'  type='text' id='loc' tabindex="1" >

     <option value='<?php echo "$loc"; ?>'><?php echo"$loc1"; ?></option>



    <?php

    $lista->geraListaLocali();

    ?>

    </select>

    </label>



    <label for="cat">4) Categoria:

     <SELECT name='cat' type='text' id='esp' tabindex="3" >

      <option value='<?php echo "$categ"; ?>'><?php echo"$categ1"; ?></option>

            <?php

            $lista->geraListaCateg();

            ?>

            </select></label>



    <label for="ct">5) Comprimento Total:

    <input name="ct" type="text" id="ct" tabindex="9" size="6" />cm</label>



      <!--<label for="ct_corr">6) Comprimento total Corrigido:

    <input name="ct_corr" type="text" id="ct_corr" tabindex="9" size="6" />mm</label>-->



    <label for="cp">7) Comprimento Padrão:

    <input name="cp" type="text" id="cp" tabindex="9" size="6" />cm</label>















     <label for="cp_corr">8) Comprimento padrão Corrigido:

    <input name="cp_corr" type="text" id="cp_corr" tabindex="9" size="6" />cm</label>



     <label for="cf">37) Comprimento Furcal:

    <input name="cf" type="text" id="cf" tabindex="9" size="6" />cm</label>



     <label for="cf_corr">38) Comprimento Furcal Corrigido:

    <input name="cf_corr" type="text" id="cf_corr" tabindex="9" size="6" />cm</label>



    <label for="pt">9) Peso:

    <input name="pt" type="text" id="pt" tabindex="9" size="6" />Kg</label>



     <label for="pt_corr">10) Peso Corr:

    <input name="pt_corr" type="text" id="pt_corr" tabindex="9" size="6" />Kg</label>





               <label for="go">

        33) Gônoda:  </label>

            <input type="radio" name="go"  value="S"  class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;

            <input type="radio" name="go" value="N"  class="checkbox">Não



             <label for="sexo">

        20) Sexo:  </label>

            <SELECT NAME='sexo' type='text' id='sexo' tabindex="4">

            <option value='#'>Select</option>

            <option value='M'>Macho</option>

            <option value='F'>Fêmea</option>

            <option value='I'>Indeterminado</option>

            <option value='N'>Não determinado</option>

            <option value='D'>Deteriorado</option>

            </select>



      <label for="ematur">

        21) Estágio de maturação: </label>

            <SELECT NAME='ematur' type='text' id='ematur' tabindex="5">

            <option value='#'>Select</option>

            <option value='1'>1</option>

            <option value='2'>2</option>

            <option value='3'>3</option>

            <option value='4'>4</option>

            <option value='5'>5</option>

            <option value='6'>6</option>

            </select>







             <label for="est">

        34) Estômago:  </label>

            <input type="radio" name="est"  value="S"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;

            <input type="radio" name="est" value="N"  class="checkbox" checked>Não







             <label for="gr">

        26) Grau de repleção:

            <input type="radio" name="gr" value="0"  class="checkbox"/>0&nbsp;&nbsp;

            <input type="radio" name="gr"  value="1"  class="checkbox"/>1&nbsp;&nbsp;

            <input type="radio" name="gr" value="2"  class="checkbox"/>2&nbsp;&nbsp;

            <input type="radio" name="gr"  value="3"  class="checkbox"/>3&nbsp;&nbsp; 

               <input type="radio" name="gr"  value="9"  class="checkbox"/>NO  </label>







<!--        <label for="peg">16) Peso da Gônoda:

    <input name="pgono" type="text" id="pgono" tabindex="9" size="6" />g</label>-->



      <label for="cab">17) Cabeça:

    <select name='cab' type='text' id='cab' tabindex="4">

        <option value=''>&nbsp;</option>

        <option value='S'>Sim</option>

        <option value='N'>Não</option>

        </select></label>





     <label for="cpc">

        11) Comprimento da cabeça:

            <input name="cpc" type="text" id="cpc" tabindex="4" accesskey="p" size="5" />cm  </label>



            <label for="cptc">

        12) Comprimento total sem cabeça:

            <input name="cptc" type="text" id="cptc" tabindex="4" accesskey="p" size="5" />cm  </label>



            <label for="cppc">

        13) Comprimento padrão sem cabeça:

            <input name="cppc" type="text" id="cppc" tabindex="4" accesskey="p" size="5" />cm  </label>







       <!-- <label for="esto">14) Estômago:

    <select name='esto' type='text' id='esto' tabindex="4">

        <option value=''>&nbsp;</option>

        <option value='0'>0</option>

        <option value='1'>1</option>

        <option value='2'>2</option>

        <option value='3'>3</option>

        </select></label>



         <label for="go">15) Gônoda:

    <select name='gono' type='text' id='gono' tabindex="4">

        <option value=''>&nbsp;</option>

        <option value='0'>0</option>

        <option value='1'>1</option>

        <option value='2'>2</option>

        <option value='3'>3</option>

        <option value='4'>4</option>

        <option value='5'>5</option>

        <option value='6'>6</option>

        </select></label>-->







       <!--

        <label for="nf">18) Número da foto:

    <input name="nf" type="text" id="nf" tabindex="9" size="6" /></label>

-->







    <label for="aparelho">

        22) Histologia:  </label>

            <input type="radio" name="histo"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="histo" value="Não"  class="checkbox" checked>Não



             <label for="aparelho">

        23) Tecido:  </label>

            <input type="radio" name="teci"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;

            <input type="radio" name="teci" value="Não"  class="checkbox" checked>Não



             <label for="transparencia">

        24) Crescimento:  </label>

            <input type="radio" name="cresc"  value="N"  class="checkbox" >Nenhum&nbsp;&nbsp;&nbsp;

            <input type="radio" name="cresc" value="O"  class="checkbox">Otólito&nbsp;&nbsp;&nbsp;

            <input type="radio" name="cresc"  value="E"  class="checkbox" >Escama

              <!-- <br /> <br />Otólito Esquerdo  <input name="oe" type="text" id="oe" tabindex="7" accesskey="c" size="5" /><br /><br />Otólito direito &nbsp;&nbsp;&nbsp;&nbsp;<input name="od" type="text" id="od" tabindex="7" accesskey="c" size="5" />-->

        <!--

 <label for="gg">

        25) Grau de Gordura:

            <input type="radio" name="gg" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;

            <input type="radio" name="gg"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;

            <input type="radio" name="gg" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;

            <input type="radio" name="gg"  value="3"  class="checkbox"/>3   </label>

-->





         <!--



        <label for="ematur">

        27) Estágio de maturação macroscópica: </label>

            <SELECT NAME='ematur_mac' type='text' id='ematur_mac' tabindex="5">

            <option value='#'>Select</option>

            <option value='1'>1</option>

            <option value='2'>2</option>

            <option value='3'>3</option>

            <option value='4'>4</option>

            <option value='5'>5</option>

            <option value='6'>6</option>

            </select>-->



       <label for="gen">

        28) Gen:  </label>

            <input type="radio" name="gen"  value="S"  class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;

            <input type="radio" name="gen" value="N"  class="checkbox">Não





        <label for="od">

        29) Origem do dado: </label>

            <SELECT NAME='od' type='text' id='od' tabindex="5">

            <option value='ec' selected="selected">Equipe de crescimento</option>

            <option value='p'>Pesca</option>

            <option value='n'>Naturae</option>



            </select>







              <label for="ap">

        30) Arte da pesca: </label>

            <SELECT NAME='ap' type='text' id='ap' tabindex="5">

            <option value='gro' selected="selected">Groseira</option>

            <option value='fis'>Fisga</option>

            <option value='tar'>Tarrafa</option>

            <option value='esp'>Espinhel</option>

            <option value='cov'>Covo</option>

            <option value='cac'>Caçoeira</option>

            <option value='mal'>Malhadeira</option>

            </select>



             <label for="anali">

        31) Análise:  </label>

            <input type="radio" name="anali"  value="S"  class="checkbox"  checked >Sim&nbsp;&nbsp;&nbsp;

            <input type="radio" name="anali" value="N"  class="checkbox">Não



         <label for="bor">

        32)Borda: </label>

            <SELECT NAME='bor' type='text' id='bor' tabindex="5">

            <option value='o' selected="selected">Opaca</option>

            <option value='h'>Hialina</option>





            </select>







         <label for="im"> 35) Incremento marginal:

    <input name="im" type="text" id="im" tabindex="9" size="6" /></label>





   <label for="obs">36) Obs: <br />

   <textarea type="radio" name="obs" cols="25" rows="5" tabindex="7"></textarea></label>









    <label for="do">39) Distância entre os olhos:

    <input name="do" type="text" id="do" tabindex="9" size="6" />cm</label>



     <label for="lda">40) Lapillus direito altura:

    <input name="lda" type="text" id="lda" tabindex="9" size="6" /></label>

     <label for="lea">41) Lapillus esquerdo altura:

    <input name="lea" type="text" id="lea" tabindex="9" size="6" /></label>



     <label for="ldl">42) Lapillus direito largura:

    <input name="ldl" type="text" id="ldl" tabindex="9" size="6" /></label>

     <label for="lel">43) Lapillus esquerdo largura:

    <input name="lel" type="text" id="lel" tabindex="9" size="6" /></label>



     <label for="ldp">44) Lapillus direito peso:

    <input name="ldp" type="text" id="ldp" tabindex="9" size="6" /></label>

     <label for="lep">45) Lapillus esquerdo peso:

    <input name="lep" type="text" id="lep" tabindex="9" size="6" /></label>



         <!--

         <label for="ada">46) Asteriscus direito altura:

    <input name="ada" type="text" id="ada" tabindex="9" size="6" /></label>

     <label for="aea">47) Asteriscus esquerdo altura:

    <input name="aea" type="text" id="aea" tabindex="9" size="6" /></label>



     <label for="adl">48) Asteriscus direito largura:

    <input name="adl" type="text" id="adl" tabindex="9" size="6" /></label>

     <label for="ael">49) Asteriscus esquerdo largura:

    <input name="ael" type="text" id="ael" tabindex="9" size="6" /></label>



     <label for="adp">50) Asteriscus direito peso:

    <input name="adp" type="text" id="adp" tabindex="9" size="6" /></label>

     <label for="aep">51) Asteriscus esquerdo peso:

    <input name="aep" type="text" id="aep" tabindex="9" size="6" /></label>















             <label for="sda">52) Sagitta direito altura:

    <input name="sda" type="text" id="sda" tabindex="9" size="6" /></label>

     <label for="sea">53) Sagitta esquerdo altura:

    <input name="sea" type="text" id="sea" tabindex="9" size="6" /></label>



     <label for="sdl">54) Sagitta direito largura:

    <input name="sdl" type="text" id="sdl" tabindex="9" size="6" /></label>

     <label for="sel">55) Sagitta esquerdo largura:

    <input name="sel" type="text" id="sel" tabindex="9" size="6" /></label>



     <label for="sdp">56) Sagitta direito peso:

    <input name="sdp" type="text" id="sdp" tabindex="9" size="6" /></label>

     <label for="sep">57) Sagitta esquerdo peso:

    <input name="sep" type="text" id="sep" tabindex="9" size="6" /></label>

-->

      <label for="rt">58) Raio total:

    <input name="rt" type="text" id="rt" tabindex="9" size="6" /></label>

     <label for="r1">59) Raio1:

    <input name="r1" type="text" id="r1" tabindex="9" size="6" /></label>

     <label for="r2">60) Raio2:

    <input name="r2" type="text" id="r2" tabindex="9" size="6" /></label>

     <label for="r3">61) Raio3:

    <input name="r3" type="text" id="r3" tabindex="9" size="6" /></label>

     <label for="r4">62) Raio4:

    <input name="r4" type="text" id="r4" tabindex="9" size="6" /></label>

     <label for="r5">63) Raio5:

    <input name="r5" type="text" id="r5" tabindex="9" size="6" /></label>

     <label for="r6">64) Raio6:

    <input name="r6" type="text" id="r6" tabindex="9" size="6" /></label>

     <label for="r7">65) Raio7:

    <input name="r7" type="text" id="r7" tabindex="9" size="6" /></label>

     <label for="r8">66) Raio8:

    <input name="r8" type="text" id="r8" tabindex="9" size="6" /></label>

     <label for="r9">67) Raio9:

    <input name="r9" type="text" id="r9" tabindex="9" size="6" /></label>

     <label for="r10">68) Raio10:

    <input name="r10" type="text" id="r10" tabindex="9" size="6" /></label>

     <label for="r11">69) Raio11:

    <input name="r11" type="text" id="r11" tabindex="9" size="6" /></label>

     <label for="r12">70) Raio12:

    <input name="r12" type="text" id="r12" tabindex="9" size="6" /></label>

     <label for="r13">71) Raio13:

    <input name="r13" type="text" id="r13" tabindex="9" size="6" /></label>

     <label for="r14">72) Raio14:

    <input name="r14" type="text" id="r14" tabindex="9" size="6" /></label>

     <label for="r15">73) Raio15:

    <input name="r15" type="text" id="r15" tabindex="9" size="6" /></label>

     <label for="r16">74) Raio16:

    <input name="r16" type="text" id="r16" tabindex="9" size="6" /></label>

     <label for="r17">75) Raio17:

    <input name="r17" type="text" id="r17" tabindex="9" size="6" /></label>

     <label for="r18">76) Raio18:

    <input name="r18" type="text" id="r18" tabindex="9" size="6" /></label>

      <label for="r19">77) Raio19:

    <input name="r19" type="text" id="r19" tabindex="9" size="6" /></label>

     <label for="r20">78) Raio20:

    <input name="r20" type="text" id="r20" tabindex="9" size="6" /></label>



     <label for="ida">79) Idade:

    <input name="ida" type="text" id="ida" tabindex="9" size="6" /></label>





</fieldset>





   <br />

   <input type="submit" value="ENVIAR" class="botao2"  /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=registros/pesc_mercado">Novo</a>

   <?php





   ?> <br />

</form>



<!--Área editável fim     -->



</div>

</div>



