<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
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
        <!--<h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>    -->

<!--Área editável início     -->

<?php

$flag = $_GET["flag"];




if ($flag == 1)
{
$proced = $_POST["proced"];
$cod = $_POST["cod"];
$local = $_POST["local"];
$localidade = $_POST["localidade"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";
$data1 = "$dia/$mes/$ano";
}
else
{
$proced = $_GET["proced"];
$cod = $_GET["cod"];
$local = $_GET["local"];
$localidade = $_GET["localidade"];
$data = $_GET["data"];
$data1 = $_GET["data1"];
}

 ?>

<h3>Código:<span class="red"><?php echo" $cod";   ?></span> </h3>
<h3>Procedência:<span class="red"><?php echo" $proced";   ?></span> </h3>
<h3>Data:<span class="red"><?php echo" $data1";   ?></span> </h3>




    <form id="forms" method="post" action="index.php?secoes=registros/pesc_enviar&proced=<?php echo "$proced"; ?>&cod=<?php echo "$cod"; ?>&local=<?php echo "$local"; ?>&localidade=<?php echo "$localidade"; ?>&data=<?php echo "$data"; ?>&data1=<?php echo "$data1"; ?>" enctype="multipart/form-data">
      <fieldset>

        <label for="especie">
        1) Espécie:  </label>
            <SELECT name='especie' type='text' id='malh_especie' tabindex="1" ><OPTION>
            <?php
           $lista = new ManipulateData();
           $lista->geraListaEspecies();
            ?>
            </select>
            <a href="index.php?secoes=cadastros/esp_inserir" title="Inserir nova espécie" target="_blank">Cadastrar espécie</a>

        <label for="comprimento">
        2) Comprimento padrão: </label>
            <input name="cpp" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" />cm

        <label for="comprimento">
        3) Comprimento total: </label>
            <input name="cpt" type="text" id="malh_cp" tabindex="3" accesskey="p" size="5" />cm

        <label for="comprimento">
        4) Comprimento da cabeça: </label>
            <input name="cpc" type="text" id="malh_cp" tabindex="4" accesskey="p" size="5" />cm

            <label for="comprimento">
        4) Comprimento total com cabeça: </label>
            <input name="cptc" type="text" id="cptc" tabindex="4" accesskey="p" size="5" />cm

        <label for="ptt">
        5) Peso total: </label>
            <input name="ptt" type="text" id="malh_pt" tabindex="5" accesskey="c" size="5" />g

      <label for="ptc">
        6) Peso sem cabeça: </label>
            <input name="ptc" type="text" id="malh_pt" tabindex="6" accesskey="c" size="5" />g

            <label for="pte">
        7) Peso eviscerado e sem cabeça: </label>
            <input name="pte" type="text" id="malh_pt" tabindex="7" accesskey="c" size="5" />g

        <label for="gr">
        8) Grau de repleção: </label>
            <input type="radio" name="gr" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="3"  class="checkbox"/>3

           <label for="gg">
        9) Grau de Gordura:</label>
            <input type="radio" name="gg" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="3"  class="checkbox"/>3

        <label for="sexo">
        10) Sexo:  </label>
            <SELECT NAME='sexo' type='text' id='malh_sexo' tabindex="4">
            <option value='#'>Select</option>
            <option value='Macho'>Macho</option>
            <option value='Fêmea'>Fêmea</option>
            <option value='Indeterminado'>Indeterminado</option>
            <option value='Não determinado'>Não determinado</option>
            <option value='Deteriorado'>Deteriorado</option>
            </select>


        <label for="ematur">
        11) Estágio de maturação: </label>
            <SELECT NAME='ematur' type='text' id='malh_ematur' tabindex="5">
            <option value='#'>Select</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            </select>

         <label for="aparelho">
        12) Histologia:  </label>
            <input type="radio" name="histo"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="histo" value="Não"  class="checkbox" checked>Não

        <label for="aparelho">
        13) Tecido:  </label>
            <input type="radio" name="teci"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="teci" value="Não"  class="checkbox" checked>Não

        <label for="transparencia">
        14) Crescimento:  </label>
            <input type="radio" name="cresc"  value="Nenhum"  class="checkbox" >Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc" value="Otólito"  class="checkbox">Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc"  value="Escama"  class="checkbox" >Escama
      <br /> <br />Otólito Esquerdo  <input name="oe" type="text" id="oe" tabindex="7" accesskey="c" size="5" /><br /><br />Otólito direito &nbsp;&nbsp;&nbsp;&nbsp;<input name="od" type="text" id="od" tabindex="7" accesskey="c" size="5" />

        <label for="ref">
        15) Referência: </label>
            <input name="ref" type="text" id="ref" tabindex="6" accesskey="c" size="5" />g

       <label for="aparelho">

        15) Observações:  </label>
            <textarea type="radio" name="obs" cols="50" rows="5" tabindex="7"></textarea>





             <!--
             <label for="determinador">
        18) Análise: </label>
        <input type="radio" name="malh_anali"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_anali" value="Não"  class="checkbox" checked>Não
            -->
            
          </fieldset>
 <center> <input type="submit" value="ENVIAR" class="botao2"  />  </center>


 

       </form>



<!--Área editável fim     -->



</div>
