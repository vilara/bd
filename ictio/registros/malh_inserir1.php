
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=580,height=450,scrollbars=YES")
}
</script>

<style type="text/css">
#edicao { margin: 0; padding: 0; width: 1000px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:20px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>


   <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
         <h3>Inserir dados de coleta de Malhadeira</h3>
<!--Área editável início     -->

<?php

$flag = $_GET["flag"];

$dado = new ManipulateData();
$dado->setTable("tb_malhadeira_biotico");
$dado->setFieldOrder("id_tb_malhadeira");
$dado->setFieldID("5");$malh_numero5 = $dado->getLastId();
$malh_numero4 = $malh_numero5 + 1;

$malh_voucher11 = $_GET["malh_voucher11"];
if ($malh_voucher11 == "")
{
$dado->setTable("cons_voucher");
$dado->setFieldOrder("id_cons_voucher");
$dado->setFieldID("1");$nr_voucher3 = $dado->getLastId();
}
else{$nr_voucher3 = $malh_voucher11;}
$dado->setTable("cons_gen");
$dado->setFieldOrder("id_cons_gen");
$dado->setFieldID("1");$nr_gen = $dado->getLastId();

$nr_gen3 = $nr_gen + 1;

if ($flag == 1)
{

$malh_lim = $_POST["malh_lim"];


$dado->setTable("tb_limno");
$dado->setFieldID("id_tb_limno");
$dado->setFieldNr("0"); $id_tab_limno1 = $dado->DadosFiltrados("$malh_lim");
$dado->setFieldNr("2"); $malh_cod = $dado->DadosFiltrados("$malh_lim");

$hora = $_POST["hora"];
$min = $_POST["min"];
$malh_hora = "$hora:$min:00";
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$malh_data = "$ano-$mes-$dia";
$malh_col11 = "Não";

$malh_excursao = $_POST["lim_exc"];
}else
{
$malh_excursao = $_GET["malh_excursao"];
$malh_local = $_GET["malh_local"];
$malh_lim = $_GET["malh_lim"];
$malh_voucher = $_GET["malh_voucher"];

$dado->setTable("tb_limno");
$dado->setFieldID("id_tb_limno");
$dado->setFieldNr("0");
$id_tab_limno1 = $dado->DadosFiltrados("$malh_lim");
$dado->setFieldNr("2");
$malh_cod = $dado->DadosFiltrados("$malh_lim");


$malh_hora = $_GET["malh_hora"];
$malh_data = $_GET["malh_data"];
$malh_especie11 = $_GET["malh_especie"];

$dado->setTable("tb_especies");
$dado->setFieldID("id_tab_especie");
$dado->setFieldNr("3");
$esp = $dado->DadosFiltrados("$malh_especie11");


		   
$malh_col66 = $_GET["col"];
}
// echo $malh_excursao;
 ?>

<h4>Código Campo:<span class="red"><?php echo" $malh_cod";   ?></span> &nbsp;&nbsp;
Registro Nr:<span class="red"><?php echo" $malh_numero4";   ?></span> &nbsp;&nbsp;
   Horário:<span class="red"><?php echo" $malh_hora";   ?></span> </h4>


     <?php if ($malh_col66 == "Sim")
{
?>

      
     <div align="center">Último registro para Coleção:<span class="red">(Esp: <?php echo"$esp";  ?>&nbsp;&nbsp;<?php echo"$malh_voucher";  ?>)</span></div>
  <?php
   }
   ?>
    <form id="forms" method="post" action="index.php?secoes=registros/malh_enviar&malh_excursao=<?php echo "$malh_excursao"; ?>&malh_lim=<?php echo "$malh_lim"; ?>&malh_hora=<?php echo "$malh_hora"; ?>&malh_data=<?php echo "$malh_data"; ?>" enctype="multipart/form-data">
      <fieldset>
                 <br />

       <b> 1) Espécie:</b>
            <SELECT name='malh_especie' type='text' id='malh_especie' tabindex="1" ><OPTION>
            <?php
           $lista = new ManipulateData();
           $lista->geraListaEspecies();
            ?>
            </select>
            <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/esp_inserir')">Cadastrar espécie</a>


                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>2) Determinador:   </b>
            <SELECT NAME='malh_det' type='text' id='malh_ematur' tabindex="2">
            <option value=''>&nbsp;</option>
             <?php
             $lista->geraListaPesq();
             ?>
            </select>

        <label for="comprimento">     <label for="pt">   </label>   <label for="sexo"> </label>
         </label>
        <b>  3) Comprimento: </b>  <input name="malh_cp" type="text" id="malh_cp" tabindex="3" accesskey="p" size="5" />mm

    &nbsp;
         <b> 4) Peso:  </b>
            <input name="malh_pt" type="text" id="malh_pt" tabindex="4" accesskey="c" size="5" />g

                     &nbsp;

        <b>5) Sexo: </b>
            <SELECT NAME='malh_sexo' type='text' id='malh_sexo' tabindex="5">
            <option value='#'>Select</option>
            <option value='Macho'>Macho</option>
            <option value='Fêmea'>Fêmea</option>
            <option value='Indeterminado'>Indeterminado</option>
            <option value='Não determinado'>Não determinado</option>
            <option value='Deteriorado'>Deteriorado</option>
            </select>


      <!--  <label for="ematur">
        </label>-->
         <b>  6) Estágio de maturação: </b>
          <SELECT NAME='malh_ematur' type='text' id='malh_ematur' tabindex="6">
            <option value='#'>Select</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            </select>
                   <br />
     <br />      <br />

      <b>7) Peso de Gônada:</b>
            <input name="malh_pg" type="text" id="malh_pg" accesskey="c" size="5"  tabindex="7" />g



      <!--  <label for="gg">  </label>-->
       <b>8) Grau de Gordura: </b>

             <SELECT NAME='malh_gg' type='text' id='malh_gg' tabindex="8">
            <option value='#'>Select</option>
             <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </select>


        <!--    <label for="gr">      </label>      -->
    &nbsp;&nbsp;&nbsp; <b>   9) Grau de repleção:</b>
           <SELECT NAME='malh_gr' type='text' id='malh_gr' tabindex="9">
            <option value='#'>Select</option>
             <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </select>

         <!--  <label for="transparencia">   </label> -->
          &nbsp;&nbsp;  <b>10) Histologia:</b>
           <SELECT NAME='malh_histo' type='text' id='malh_histo' tabindex="10">
            <option value='#'>Select</option>
             <option value='Sim'>Sim</option>
            <option value='Não' selected="selected">Não</option>
           </select>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="malh_histo_conf" value="Sim"  class="checkbox" >Confirmado

                                     <br /><br /><br />
                 <!-- <label for="aparelho"> -->


       <!-- </label>  -->
           <!-- <label for="fecundidade">  </label>  -->
    <b>   11) Fecundidade:</b>
            <SELECT NAME='malh_fecund' type='text' id='malh_histo' tabindex="11">
            <option value='#'>Select</option>
             <option value='Sim'>Sim</option>
            <option value='Não' selected="selected">Não</option>
           </select>



       <b> 12) Estômago:</b>
           <SELECT NAME='malh_esto' type='text' id='malh_col' tabindex="12">
            <option value='#'>Select</option>
             <option value='Sim'>Sim</option>
            <option value='Não' selected="selected">Não</option>
           </select> <!--    -->

          &nbsp;&nbsp; <b> 13) Coleção: </b> <!--  <label for="aparelho">      </label>  -->
            <SELECT NAME='malh_col' type='text' id='malh_col' tabindex="13">
            <option value='#'>Select</option>
             <option value='Sim'>Sim</option>
            <option value='Não' selected="selected">Não</option>
           </select>

            &nbsp;
            <input name="malh_voucher1" type="text" id="malh_voucher1" size="8"  tabindex="14" />


        &nbsp;&nbsp;   <b>14) Crescimento: </b>
      <SELECT NAME='malh_cresc' type='text' id='malh_cresc' tabindex="15">
            <option value='#'>Select</option>
             <option value='Nenhum'>Nenhum</option>
            <option value='Otólito'>Otólito</option>
            <option value='Escama'>Escama</option>

            </select>

              <br /><br /><br />
           <!-- <label for="aparelho">    </label>  -->
  &nbsp;&nbsp;   <b>  15) Tecido:</b>
            <input name="malh_teci" type="text" id="malh_teci" accesskey="c" size="20"  tabindex="16" />


            <!--<label for="aparelho"> </label>-->
    &nbsp;&nbsp;&nbsp;  <b>  16) Foto: </b>
            <SELECT NAME='malh_foto' type='text' id='malh_histo' tabindex="17">
            <option value='#'>Select</option>
             <option value='Sim'>Sim</option>
            <option value='Não' selected="selected">Não</option>
           </select>



      <!--Escolher voucher utilizado:  -->
          <!--  <SELECT name='malh_voucher1' type='text' id='malh_voucher1' ><OPTION>   -->
            <?php
           //    $lista->geraListaVoucher();
            ?>
          <!--  </select>     <label for="aparelho">       -->



                  <br />

       <B> 17) Observações: </B>
          <textarea type="radio" name="malh_obs" cols="50" rows="5" tabindex="17"></textarea>



       <!--  <label for="determinador">     </label>    -->



             <!--<label for="determinador">
        18) Análise: </label>
        <input type="radio" name="malh_anali"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_anali" value="Não"  class="checkbox" checked>Não

                      -->

         </fieldset>
  <center> <input type="submit" value="ENVIAR" class="botao2" tabindex="18"  />   </center>




       </form>



<!--Área editável fim     -->



</div>
