
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=580,height=450,scrollbars=YES")
}
</script>

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
       <!-- <h1>Banco de dados do Laborat�rio de Ictiologia da UNIR</h1>      -->
      <h3>Inserir dados de coleta de Redinha</h3>
<!--�rea edit�vel in�cio     -->
 

<?php

$flag = $_GET["flag"];

$dado = new ManipulateData();
$dado->setTable("tb_redinha_biotico");
$dado->setFieldOrder("id_tb_redinha");
$dado->setFieldID("5");$red_numero5 = $dado->getLastId();

$red_numero4 = $red_numero5 + 1;



$dado->setTable("cons_voucher");
$dado->setFieldOrder("id_cons_voucher");
$dado->setFieldID("1");$nr_voucher3 = $dado->getLastId();

/*$res7 = mysql_query("SELECT * FROM cons_gen ");
while($registro = mysql_fetch_row($res7))
{$nr_gen = $registro[1];}
$nr_gen3 = $nr_gen + 1;*/

if ($flag == 1)
{
$red_lim = $_POST["red_lim"];
$hora = $_POST["hora"];
$min = $_POST["min"];
$red_hora = "$hora:$min:00";
}else
{
$red_lim = $_GET["red_lim"];
$red_hora = $_GET["red_hora"];
$red_especie= $_GET["red_especie"];
$red_voucher= $_GET["red_voucher"];

$dado->setTable("tb_especies");
$dado->setFieldID("id_tab_especie");
$dado->setFieldNr("3");
$esp = $dado->DadosFiltrados("$red_especie");
}

$dado->setTable("tb_limno");
$dado->setFieldID("id_tb_limno");
$dado->setFieldNr("5");
$lim_data = $dado->DadosFiltrados("$red_lim");
$dado->setFieldNr("2");
$cod = $dado->DadosFiltrados("$red_lim");

$red_col66 = $_GET["col"];

          // echo"$lim_data";

//echo " $malh_excursao--$malh_local--$malh_lim--$malh_hora--$malh_data";
 ?>


<h4>Registro Nr:&nbsp;<span class="red"><?php echo"$red_numero4 de $cod";  ?></span></h4>
<br />
    <!--Tecido:&nbsp;&nbsp;GEN<?php echo"$nr_gen3";  ?> <br /> -->
     <?php
     if ($red_col66 == "Sim")
       {
      ?>
    <div align="center">�ltimo registro para Cole��o:<span class="red"> (Esp: <?php echo"$esp";  ?>&nbsp;&nbsp;<?php echo"$red_voucher";  ?>)</span></div>
       <?php
       }
       ?>
    <form id="forms" method="post" action="index.php?secoes=registros/red_enviar&red_lim=<?php echo "$red_lim"; ?>&red_hora=<?php echo "$red_hora"; ?>&lim_data=<?php echo "$lim_data"; ?>" enctype="multipart/form-data">
      <fieldset>

        <label for="especie">
        1) Esp�cie:  </label>
            <SELECT name='red_especie' type='text' id='red_especie' tabindex="1" ><OPTION>
            <?php
           $lista = new ManipulateData();
           $lista->geraListaEspecies();
            ?>
            </select><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/esp_inserir')">Cadastrar esp�cie</a>


        <label for="comprimento">
        2) Quantidade: </label>
            <input name="red_qtde" type="text" id="red_qtde" tabindex="2" accesskey="p" size="5" />







        <label for="comprimento">
                    3) Comprimento padr�o: </label>
                    <input name="cpp" type="text" id="malh_cp" tabindex="3" accesskey="p" size="5" />cm

                    <label for="comprimento">
                    4) Comprimento total: </label>
                    <input name="cpt" type="text" id="malh_cp" tabindex="4" accesskey="p" size="5" />cm

                    <label for="comprimento">
                    5) Comprimento da cabe�a: </label>
                    <input name="cpc" type="text" id="malh_cp" tabindex="5" accesskey="p" size="5" />cm

                    <label for="ptt">
                    6) Peso total: </label>
                    <input name="ptt" type="text" id="malh_pt" tabindex="6" accesskey="c" size="5" />g

                    <label for="ptc">
                    7) Peso sem cabe�a: </label>
                    <input name="ptc" type="text" id="malh_pt" tabindex="7" accesskey="c" size="5" />g

                    <label for="pte">
                    8) Peso eviscerado e sem cabe�a: </label>
                    <input name="pte" type="text" id="malh_pt" tabindex="8" accesskey="c" size="5" />g

                    <label for="gr">
                    9) Grau de reple��o: </label>
                    <input type="radio" name="gr" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr"  value="3"  class="checkbox"/>3

                    <label for="gg">
                    10) Grau de Gordura:</label>
                    <input type="radio" name="gg" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg"  value="3"  class="checkbox"/>3

                    <label for="sexo">
                    11) Sexo:  </label>
                    <SELECT NAME='sexo' type='text' id='malh_sexo' tabindex="9">
                    <option value='#'>Select</option>
                    <option value='Macho'>Macho</option>
                    <option value='F�mea'>F�mea</option>
                    <option value='Indeterminado'>Indeterminado</option>
                    <option value='N�o determinado'>N�o determinado</option>
                    <option value='Deteriorado'>Deteriorado</option>
                    </select>

                    <label for="ematur">
                    12) Est�gio de matura��o: </label>
                    <SELECT NAME='ematur' type='text' id='malh_ematur' tabindex="10">
                    <option value='#'>Select</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    </select>

                    <label for="aparelho">
                    13) Histologia:  </label>
                    <input type="radio" name="histo"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="histo" value="N�o"  class="checkbox" checked>N�o



                    <label for="transparencia">
                    14) Crescimento:  </label>
                    <input type="radio" name="cresc"  value="Nenhum"  class="checkbox" >Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="cresc" value="Ot�lito"  class="checkbox">Ot�lito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="cresc"  value="Escama"  class="checkbox" >Escama




















           <label for="aparelho">
        15) Tecido:  </label>  <input name="red_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="20" />
            <!--<input type="radio" name="red_teci"  value="Sim" class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_teci" value="N�o" class="checkbox"  checked>N�o-->







            <label for="aparelho">
        16) Foto:  </label>
            <input type="radio" name="red_foto"  value="Sim" class="checkbox"  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_foto" value="N�o" class="checkbox"  checked>N�o

        <label for="aparelho">
        17) Cole��o:  </label>
            <input type="radio" name="red_col"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_col" value="N�o"  class="checkbox" checked>N�o

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="red_voucher1" type="text" id="red_voucher1" size="8" />
           <!-- Escolher voucher utilizado:
            <SELECT name='red_voucher1' type='text' id='malh_voucher1' ><OPTION>-->
            <?php
         //      $lista->geraListaVoucher();
            ?>
         <!--   </select>    -->


            <label for="aparelho">

        18) Observa��es:  </label>
            <textarea type="radio" name="red_obs" cols="50" rows="5" tabindex="12"></textarea>


         <label for="determinador">
        19) Determinador: </label>
            <SELECT NAME='red_det' type='text' id='malh_ematur' tabindex="13">
            <option value="&nbsp;">&nbsp;</option>
            <?php
             $lista->geraListaPesq();
             ?>
            </select>

             <!--<label for="determinador">
        8) An�lise: </label>
        <input type="radio" name="red_anali"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_anali" value="N�o"  class="checkbox" checked>N�o-->

            <label for="aparelho">
        20) Tecido:  </label>

      </fieldset>

   

   <center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
    </form>




<!--�rea edit�vel fim     -->



</div>