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


       <div id="edicao">

<?php
$aparelho = $_GET["aparelho"];
$id = $_GET["idd"];
$flag = $_GET["flag"];
$lista = new ManipulateData();
// echo "$id";

//Inicio da Edicao da Biometria ----------------------------------------------------- início
if ($aparelho  == "Biometria")
{
$res = mysql_query("SELECT * FROM pesc_col_mercado WHERE id_familiar = '$id'");
while($registro = mysql_fetch_row($res))
{
$reg =  $registro[0];
$regi =  $registro[1];
$empr = $registro[2];
if ($empr == "JM"){$empr1 = "Jirau Montante";}
else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
$data = $registro[3];
$data11 = explode("-", $data);
$dia = $data11[2];
$mes = $data11[1];
$ano = $data11[0];
$mun = $registro[4];
$lista->setTable("pesc_localidade");
$lista->setFieldId("id_locali ='$mun'");
$lista->setFieldNr("1"); $mun1 = $lista->data_filter();
$categ = $registro[5];
$lista->setTable("pesc_especie");
$lista->setFieldId("id_esp ='$categ'");
$lista->setFieldNr("1"); $categ1 = $lista->data_filter();
$ct = $registro[6]; if ($ct == 0){$ct = "";}
$cp = $registro[7];if ($cp == 0){$cp = "";}
$pt = $registro[8];if ($pt == 0){$pt = "";}
$pt_corr = $registro[77];if ($pt_corr == 0){$pt_corr = "";}
$esto = $registro[12];
$go = $registro[13];
$peg = $registro[14];if ($peg == 0){$peg = "";}
$ca = $registro[15];
if ($ca == "S"){$ca1 = "Sim";}
else if ($ca == "N"){$ca1 = "Não";}
$nf = $registro[16];
$ref = $registro[17];
$sexo = $registro[18];
$ematur = $registro[19];if ($ematur == 0){$ematur = "";}
$histo = $registro[20];
$cresc = $registro[22];
$teci = $registro[21];
$gg = $registro[23];
$gr = $registro[24];
$cpc = $registro[9];if ($cpc == 0){$cpc = "";}
$cptc = $registro[10];if ($cptc == 0){$cptc = "";}
$cppc = $registro[11];if ($cppc == 0){$cppc = "";}
$obs = $registro[25];
$cf =  $registro[26]; if ($cf == 0){$cf = "";}
$do =  $registro[27];
$ematur_mac =  $registro[68];if ($ematur_mac == 0){$ematur_mac = "";}
$gen =  $registro[69];
$od =  $registro[70];
$ap =  $registro[71];
$anali =  $registro[72];
$bor =  $registro[73];
$im =  $registro[74];
$go =  $registro[75];
$est =  $registro[76];

$ct_corr =  $registro[78]; if ($ct_corr == 0){$ct_corr = "";}
$cf_corr =  $registro[79]; if ($cf_corr == 0){$cf_corr = "";}



$ldl =  $registro[28];if ($ldl == 0){$ldl = "";}
$lel =  $registro[29];if ($lel == 0){$lel = "";}
$ldp =  $registro[30]; if ($ldp == 0){$ldp = "";}
$lep =  $registro[31];if ($lep == 0){$lep = "";}
$lda =  $registro[32]; if ($lda == 0){$lda = "";}
$lea =  $registro[33];if ($lea == 0){$lea = "";}

$adl =  $registro[34]; if ($adl == 0){$adl = "";}
$ael =  $registro[35];if ($ael == 0){$ael = "";}
$adp =  $registro[36];if ($adp == 0){$adp = "";}
$aep =  $registro[37];if ($aep == 0){$aep = "";}
$ada =  $registro[38];if ($ada == 0){$ada = "";}
$aea =  $registro[39];if ($aea == 0){$aea = "";}

$sdl =  $registro[40];if ($sdl == 0){$sdl = "";}
$sel =  $registro[41];if ($sel == 0){$sel = "";}
$sdp =  $registro[42];if ($sdp == 0){$sdp = "";}
$sep =  $registro[43];if ($sep == 0){$sep = "";}
$sda =  $registro[44];if ($sda == 0){$sda = "";}
$sea =  $registro[45];if ($sea == 0){$sea = "";}

$r1 =  $registro[47];
$r2 =  $registro[48];
$r3 =  $registro[49];
$r4 =  $registro[50];
$r5 =  $registro[51];
$r6 =  $registro[52];
$r7 =  $registro[53];
$r8 =  $registro[54];
$r9 =  $registro[55];
$r10 =  $registro[56];
$r11 =  $registro[57];
$r12 =  $registro[58];
$r13 =  $registro[59];
$r14 =  $registro[60];
$r15 =  $registro[61];
$r16 =  $registro[62];
$r17 =  $registro[63];
$r18 =  $registro[64];
$r19 =  $registro[65];
$r20 =  $registro[66];

$rt =  $registro[47];



}
?>
<!-- Inicio da Edicao da Biometria Pesca -->
<?php
if ($flag == 0){


?>

<h3>Editar registro de Pesca Biometria</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_merc_enviar&idd=<?php echo"$reg";?>&flag=0&aparelho=Biometria" enctype="multipart/form-data">
    <fieldset>
     <label for="empr">1) Empreendimento:
        <select name='empr' type='text' id='empr' tabindex="1">
        <option value="<?php echo "$empr"; ?>"><?php echo "$empr1"; ?></option>
        <option value='JM'>Jirau Montante</option>
        <option value='JS'>Jirau Jusante</option>
        <option value='SM'>Santo Antônio Montante</option>
        <option value='SJ'>Santo Antônio Jusante</option>
        </select>
     </label>

       <label for="ct">2) Nr Ref:
    <input name="n_ref" type="text" id="ct" tabindex="9" size="6" value="<?php echo "$ref"; ?>" /></label>

      <label for="data">2) Data:
        <SELECT name='dia' type='text' id='dia' tabindex="4">
         <option value="<?php echo "$dia"; ?>"><?php echo "$dia"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="5">
         <option value="<?php echo "$mes"; ?>"><?php echo "$mes"; ?></option>
        <?php
        $lista->ListaMeses();
        ?>
        </select>
        <select name='ano' type='text' id='ano' tabindex="6">
        <option value='<?php echo "$ano"; ?>'><?php echo "$ano"; ?></option>
          <option value='2006'>2006</option>
         <option value='2007'>2007</option>
         <option value='2008'>2008</option>
        <option value='2009'>2009</option>
         <option value='2010'>2010</option>
         <option value='2011'>2011</option>
          <option value='2012'>2012</option>
        </select> dd/mm/aaaa
     </label>


    <label for="mun">3) Localidade:
        <SELECT name='mun'  type='text' id='merc' tabindex="1" >
            <option value='<?php echo "$mun"; ?>'><?php echo "$mun1"; ?></option>

            <?php
            $lista->geraListaLocali();
            ?>
        </select>
    </label>

     <label for="esp">4) Categoria:
     <SELECT name='categ' type='text' id='esp' tabindex="3" >
      <option value='<?php echo "$categ"; ?>'><?php echo "$categ1"; ?></option>
            <?php
            $lista->geraListaCateg();
            ?>
            </select></label>


    <label for="ct">5) Comprimento Total:
    <input name="ct" type="text" id="ct" tabindex="9" size="6" value="<?php echo "$ct"; ?>" />mm</label>

    <label for="cp">6) Comprimento Padrão:
    <input name="cp" type="text" id="cp" tabindex="9" size="6" value="<?php echo "$cp"; ?>" />mm</label>

    <label for="cpc">
        7) Comprimento da cabeça:
            <input name="cpc" type="text" id="cpc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cpc"; ?>" />mm  </label>

            <label for="cptc">
        8) Comprimento total sem cabeça:
            <input name="cptc" type="text" id="cptc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cptc"; ?>" />mm  </label>

              <label for="cppc">
        9) Comprimento padrão sem cabeça:
            <input name="cppc" type="text" id="cppc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cppc"; ?>" />mm  </label>




    <label for="pt">10) Peso:
    <input name="pt" type="text" id="pt" tabindex="9" size="6" value="<?php echo "$pt"; ?>" />g</label>

         <label for="peg">13) Peso da Gônoda:
    <input name="peg" type="text" id="peg" tabindex="9" size="6" value="<?php echo "$peg"; ?>" />g</label>

        <label for="ca">14) Cabeça:
    <select name='ca' type='text' id='ca' tabindex="4">
        <option value='<?php echo "$ca"; ?>'><?php echo "$ca1"; ?></option>
        <option value='S'>Sim</option>
        <option value='N'>Não</option>
        </select></label>

       <label for="nf">15) Número da foto:
    <input name="nf" type="text" id="nf" tabindex="9" size="6" value="<?php echo "$nf"; ?>" /></label>

     <label for="ref">16) Referência:
    <input name="ref" type="text" id="ref" tabindex="9" size="6" value="<?php echo "$ref"; ?>" /></label>

     <label for="sexo">
        17) Sexo:  </label>
            <SELECT NAME='sexo' type='text' id='sexo' tabindex="4">
             <option value='<?php echo "$sexo"; ?>'><?php echo "$sexo"; ?></option>
            <option value='M'>Macho</option>
            <option value='F'>Fêmea</option>
            <option value='I'>Indeterminado</option>
            <option value='N'>Não determinado</option>
            <option value='D'>Deteriorado</option>
            </select>

      <label for="ematur">
        18) Estágio de maturação: </label>
            <SELECT NAME='ematur' type='text' id='malh_ematur' tabindex="5">
            <option value='<?php echo "$ematur"; ?>'><?php echo "$ematur"; ?></option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>

            </select>

     <?php
      if ($histo == "Sim"){$h = "checked";}
      else if ($histo == "Não"){$hh = "checked";}
      ?>

       <label for="aparelho">
        19) Histologia:  </label>
            <input type="radio" name="histo"  value="Sim"  class="checkbox" <?php echo "$h"; ?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="histo" value="Não"  class="checkbox" <?php echo "$hh"; ?> >Não
        <?php
      if ($teci == "Sim"){$t = "checked";}
      else if ($teci == "Não"){$tt = "checked";}
      ?>
         <!-- <label for="aparelho">
        20) Tecido:  </label>
            <input type="radio" name="teci"  value="Sim"  class="checkbox" <?php echo "$t"; ?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="teci" value="Não"  class="checkbox"<?php echo "$tt"; ?>>Não-->

            <label for="aparelho">
        20) Tecido:  </label>
         <input name="teci" type="text" id="teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$teci"; ?>" />

         <?php
      if ($cresc == "N"){$c = "checked";}
      else if ($cresc == "O"){$cc = "checked";}
       else if ($cresc == "E"){$ccc = "checked";}

      ?>
             <label for="transparencia">
        21) Crescimento:  </label>
            <input type="radio" name="cresc"  value="N"  class="checkbox" <?php echo "$c"; ?>>Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc" value="O"  class="checkbox" <?php echo "$cc"; ?>>Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc"  value="E"  class="checkbox" <?php echo "$ccc"; ?>>Escama
             <!--  <br /> <br />Otólito Esquerdo  <input name="oe" type="text" id="oe" tabindex="7" accesskey="c" size="5" /><br /><br />Otólito direito &nbsp;&nbsp;&nbsp;&nbsp;<input name="od" type="text" id="od" tabindex="7" accesskey="c" size="5" /> -->
        <?php
      if ($gg == "0"){$g = "checked";}
      else if ($gg == "1"){$gg1 = "checked";}
       else if ($gg == "2"){$ggg = "checked";}
        else if ($gg == "3"){$gggg = "checked";}
             else if ($gg == "9"){$ggggg = "checked";}
      ?>
 <label for="gg">
        22) Grau de Gordura:
            <input type="radio" name="gg" value="0"  class="checkbox" <?php echo "$g"; ?>>0&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="1"  class="checkbox" <?php echo "$gg1"; ?>>1&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg" value="2"  class="checkbox" <?php echo "$ggg"; ?>>2&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="3"  class="checkbox" <?php echo "$gggg"; ?>>3 &nbsp;&nbsp;&nbsp;

             <input type="radio" name="gg"  value="9"  class="checkbox" <?php echo "$ggggg"; ?>>NO   </label>
            <?php
      if ($gr == "0"){$r = "checked";}
      else if ($gr == "1"){$rr = "checked";}
       else if ($gr == "2"){$rrr = "checked";}
        else if ($gr == "3"){$rrrr = "checked";}
           else if ($gr == "9"){$rrrrr = "checked";}
      ?>
              <label for="gr">
        23) Grau de repleção:
            <input type="radio" name="gr" value="0"  class="checkbox" <?php echo "$r"; ?>>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="1"  class="checkbox" <?php echo "$rr"; ?>>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr" value="2"  class="checkbox" <?php echo "$rrr"; ?>>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="3"  class="checkbox" <?php echo "$rrrr"; ?>>3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="gr"  value="9"  class="checkbox" <?php echo "$rrrrr"; ?>>NO  </label>


   <label for="obs">24) Obs: <br />
   <textarea type="radio" name="obs" cols="25" rows="5" tabindex="7" ><?php echo "$obs"; ?></textarea></label>


             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>
  <?php
  }
/* ---------------Termino da Edicao da Biometria Pesca----------------------- */


/* ---------------Inicio da Edicao da Biometria Ecobio pag1----------------------- */




else if ($flag == 1){


?>

<h3>Editar registro de Pesca Biometria</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_merc_enviar&idd=<?php echo"$id";?>&aparelho=Biometria&flag=1" enctype="multipart/form-data">
    <fieldset>
       <label for="ct">2) Nr Ref:
    <input name="n_ref" type="text" id="ct" tabindex="9" size="6" value="<?php echo "$ref"; ?>" /></label>


     <label for="empr">1) Empreendimento:
        <select name='empr' type='text' id='empr' tabindex="1">
        <option value="<?php echo "$empr"; ?>"><?php echo "$empr1"; ?></option>
        <option value='JM'>Jirau Montante</option>
        <option value='JS'>Jirau Jusante</option>
        <option value='SM'>Santo Antônio Montante</option>
        <option value='SJ'>Santo Antônio Jusante</option>
        </select>
     </label>


    <label for="mun">2) Localidade:
        <SELECT name='mun'  type='text' id='mun' tabindex="1" >
            <option value='<?php echo "$mun"; ?>'><?php echo "$mun1"; ?></option>

            <?php
            $lista->geraListaLocali();
            ?>
        </select>
    </label>



     <label for="esp">4) Categoria:
     <SELECT name='categ' type='text' id='esp' tabindex="3" >
      <option value='<?php echo "$categ"; ?>'><?php echo "$categ1"; ?></option>
            <?php
            $lista->geraListaCateg();
            ?>
            </select></label>


     <label for="data">2) Data:
        <SELECT name='dia' type='text' id='dia' tabindex="4">
         <option value="<?php echo "$dia"; ?>"><?php echo "$dia"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="5">
         <option value="<?php echo "$mes"; ?>"><?php echo "$mes"; ?></option>
        <?php
        $lista->ListaMeses();
        ?>
        </select>
        <select name='ano' type='text' id='ano' tabindex="6">
        <option value='<?php echo "$ano"; ?>'><?php echo "$ano"; ?></option>
          <option value='2006'>2006</option>
         <option value='2007'>2007</option>
         <option value='2008'>2008</option>
        <option value='2009'>2009</option>
         <option value='2010'>2010</option>
         <option value='2011'>2011</option>
          <option value='2012'>2012</option>
        </select> dd/mm/aaaa
     </label>




    <label for="pt">3) Peso Total:
    <input name="pt" type="text" id="pt" tabindex="9" size="6" value="<?php echo "$pt"; ?>" />g</label>

      <label for="pt_corr">4) Peso Corrigido:
    <input name="pt_corr" type="text" id="pt_corr" tabindex="9" size="6" value="<?php echo "$pt_corr"; ?>" />g</label>


    <label for="ct">5) Comprimento Total:
    <input name="ct" type="text" id="ct" tabindex="9" size="6" value="<?php echo "$ct"; ?>" />mm</label>

     <label for="ct_corr">5) Comprimento Total Corrigido:
    <input name="ct_corr" type="text" id="ct_corr" tabindex="9" size="6" value="<?php echo "$ct_corr"; ?>" />mm</label>

    <label for="cp">6) Comprimento Padrão:
    <input name="cp" type="text" id="cp" tabindex="9" size="6" value="<?php echo "$cp"; ?>" />mm</label>


     <label for="cf">7) Comprimento Furcal:
    <input name="cf" type="text" id="cf" tabindex="9" size="6" value="<?php echo "$cf"; ?>" />mm</label>

     <label for="cf_corr">7) Comprimento Furcal Corrigido:
    <input name="cf_corr" type="text" id="cf_corr" tabindex="9" size="6" value="<?php echo "$cf_corr"; ?>" />mm</label>

          <label for="ca">8) Cabeça:
    <select name='ca' type='text' id='ca' tabindex="4">
        <option value='<?php echo "$ca"; ?>'><?php echo "$ca1"; ?></option>
        <option value='S'>Sim</option>
        <option value='N'>Não</option>
        </select></label>

    <label for="cpc">
        8) Comprimento da Cabeça:
            <input name="cpc" type="text" id="cpc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cpc"; ?>" />mm  </label>



         <label for="sexo">
        9) Sexo:  </label>
            <SELECT NAME='sexo' type='text' id='sexo' tabindex="4">
             <option value='<?php echo "$sexo"; ?>'><?php echo "$sexo"; ?></option>
            <option value='M'>Macho</option>
            <option value='F'>Fêmea</option>
            <option value='I'>Indeterminado</option>
            <option value='N'>Não determinado</option>
            <option value='D'>Deteriorado</option>
            </select>

        <?php
            if ($go == "S"){$goo = "Sim";}
            else if ($go == "N"){$goo = "Não";}
            ?>
            <label for="go">
        10) Gônoda: </label>
            <SELECT NAME='go' type='text' id='go' tabindex="5">
            <option value='<?php echo "$go"; ?>'><?php echo "$goo"; ?></option>
            <option value='S'>Sim</option>
            <option value='N'>Não</option></select>

         <label for="peg">11) Peso da Gônoda:
    <input name="peg" type="text" id="peg" tabindex="9" size="6" value="<?php echo "$peg"; ?>" />g</label>


        <label for="ematur_mac">
        12) Estágio de maturação macroscópica: </label>
            <SELECT NAME='ematur_mac' type='text' id='ematur_mac' tabindex="5">
            <option value='<?php echo "$ematur_mac"; ?>'><?php echo "$ematur_mac"; ?></option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>

            </select>

         <label for="ematur">
        13) Estágio de maturação histológico: </label>
            <SELECT NAME='ematur' type='text' id='ematur' tabindex="5">
            <option value='<?php echo "$ematur"; ?>'><?php echo "$ematur"; ?></option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>

            </select>




         <label for="cptc">
        14) Comprimento total sem cabeça:
            <input name="cptc" type="text" id="cptc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cptc"; ?>" />mm  </label>

              <label for="cppc">
        15) Comprimento padrão sem cabeça:
            <input name="cppc" type="text" id="cppc" tabindex="4" accesskey="p" size="5" value="<?php echo "$cppc"; ?>" />mm  </label>




           <?php
            if ($est == "S"){$estt = "Sim";}
      else if ($est == "N"){$estt = "Não";}
          ?>


             <label for="est">
        16) Estômago: </label>
            <SELECT NAME='est' type='text' id='est' tabindex="5">
            <option value='<?php echo "$est"; ?>'><?php echo "$estt"; ?></option>
            <option value='S'>Sim</option>
            <option value='N'>Não</option>

            </select>

          <?php
      if ($gr == "0"){$r = "checked";}
      else if ($gr == "1"){$rr = "checked";}
       else if ($gr == "2"){$rrr = "checked";}
        else if ($gr == "3"){$rrrr = "checked";}
           else if ($gr == "9"){$rrrrr = "checked";}
      ?>
        <label for="gr">
        17) Grau de repleção: </label>

            <input type="radio" name="gr" value="0"  class="checkbox" <?php echo "$r"; ?>>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="1"  class="checkbox" <?php echo "$rr"; ?>>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr" value="2"  class="checkbox" <?php echo "$rrr"; ?>>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="3"  class="checkbox" <?php echo "$rrrr"; ?>>3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="gr"  value="9"  class="checkbox" <?php echo "$rrrrr"; ?>>NO






            <?php
              if ($teci == "Sim" OR $teci == "S"){$tecii = "Sim";}
            else if ($teci == "Não" OR $teci == "N"){$tecii = "Não";}
                       ?>
         <label for="teci">
        18) Tecido: </label>
            <SELECT NAME='teci' type='text' id='teci' tabindex="5">
            <option value='<?php echo "$teci"; ?>'><?php echo "$tecii"; ?></option>
            <option value='S'>Sim</option>
            <option value='N'>Não</option></select>


       <label for="gen">
        19) Nr GEN:
            <input name="gen" type="text" id="gen" tabindex="4" accesskey="p" size="5" value="<?php echo "$gen"; ?>" />  </label>


              <?php
            if ($ap == "gro"){$app = "Groseira";}
      else if ($ap == "fis"){$app = "Fisga";}
       else if ($ap == "tar"){$app = "Tarrafa";}
        else if ($ap == "esp"){$app = "Espinhel";}
         else if ($ap == "cov"){$app = "Covo";}
          else if ($ap == "cac"){$app = "Caçoeira";}
           else if ($ap == "mal"){$app = "Malhadeira";}
          ?>

           <?php
            if ($od == "ec"){$odd = "Equipe de crescimento";}
      else if ($od == "p"){$odd = "Pesca";}
       else if ($od == "n"){$odd = "Naturae";}

          ?>

             <label for="od">
        20) Origem do dado: </label>
            <SELECT NAME='od' type='text' id='od' tabindex="5">
            <option value='<?php echo "$od"; ?>'><?php echo "$odd"; ?></option>
            <option value='ec'>Equipe de crescimento</option>
            <option value='p'>Pesca</option>
            <option value='n'>Naturae</option>

            </select>


             <label for="ap">
        21) Arte da Pesca: </label>
            <SELECT NAME='ap' type='text' id='ap' tabindex="5">
            <option value='<?php echo "$ap"; ?>'><?php echo "$app"; ?></option>
            <option value='gro'>Groseira</option>
            <option value='fis'>Fisga</option>
            <option value='tar'>Tarrafa</option>
            <option value='esp'>Espinhel</option>
            <option value='cov'>Covo</option>
            <option value='cac'>Caçoeira</option>
            <option value='mal'>Malhadeira</option>


            </select>


         <?php
            if ($anali == "S"){$analii = "Sim";}
      else if ($anali == "N"){$analii = "Não";}
          ?>


             <label for="est">
        22) Análise: </label>
            <SELECT NAME='anali' type='text' id='anali' tabindex="5">
            <option value='<?php echo "$anali"; ?>'><?php echo "$analii"; ?></option>
            <option value='S'>Sim</option>
            <option value='N'>Não</option>

            </select>




   <label for="obs">23) Obs: <br />
   <textarea type="radio" name="obs" cols="25" rows="5" tabindex="7" ><?php echo "$obs"; ?></textarea></label>


             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>
  <?php
  }



/* ---------------Termino da Edicao da Biometria Ecobio pag1----------------------- */



/* ---------------Inicio da Edicao da Biometria Ecobio pag2----------------------- */


else if ($flag == 2){


?>

<h3>Editar registro de Pesca Biometria</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_merc_enviar&idd=<?php echo"$id";?>&aparelho=Biometria&flag=2" enctype="multipart/form-data">
    <fieldset>
     <label for="empr">1) Empreendimento:
        <select name='empr' type='text' id='empr' tabindex="1">
        <option value="<?php echo "$empr"; ?>"><?php echo "$empr1"; ?></option>
        <option value='JM'>Jirau Montante</option>
        <option value='JS'>Jirau Jusante</option>
        <option value='SM'>Santo Antônio Montante</option>
        <option value='SJ'>Santo Antônio Jusante</option>
        </select>
     </label>






    <label for="pt">10) Peso:
    <input name="pt" type="text" id="pt" tabindex="9" size="6" value="<?php echo "$pt"; ?>" />g</label>



     <label for="ref">16) Referência:
    <input name="ref" type="text" id="ref" tabindex="9" size="6" value="<?php echo "$ref"; ?>" /></label>







        <label for="od">
        24) Origem do dado: </label>
            <SELECT NAME='od' type='text' id='od' tabindex="5">

            <option value= "<?php echo "$od"; ?>"> <?php echo "$od"; ?></option>
            <option value='ec' >Equipe de crescimento</option>
            <option value='p'>Pesca</option>
            <option value='n'>Naturae</option>

            </select>


                <label for="cf">25) Comprimento Furcal:
    <input name="cf" type="text" id="cf" tabindex="9" size="6" value="<?php echo "$cf"; ?>" />mm</label>

     <label for="cf_corr">25) Comprimento Furcal Corrigido:
    <input name="cf_corr" type="text" id="cf_corr" tabindex="9" size="6" value="<?php echo "$cf_corr"; ?>" />mm</label>


    <label for="do">26) Distância entre os olhos:
    <input name="do" type="text" id="do" tabindex="9" size="6" value="<?php echo "$do"; ?>" />mm</label>




     <label for="bor">
        24)Borda: </label>
            <SELECT NAME='bor' type='text' id='bor' tabindex="5">
             <option value= "<?php echo "$bor"; ?>"> <?php echo "$bor"; ?></option>
            <option value='o' selected="selected">Opaca</option>
            <option value='h'>Hialina</option>


            </select>




         <label for="im"> 15) Incremento marginal:
    <input name="im" type="text" id="im" tabindex="9" size="6" value="<?php echo "$im"; ?>" /></label>









     <label for="lda">27) Lapillus direito altura:
    <input name="lda" type="text" id="lda" tabindex="9" size="6" value="<?php echo "$lda"; ?>" /></label>
     <label for="lea">28) Lapillus esquerdo altura:
    <input name="lea" type="text" id="lea" tabindex="9" size="6" value="<?php echo "$lea"; ?>" /> </label>

     <label for="ldl">29) Lapillus direito largura:
    <input name="ldl" type="text" id="ldl" tabindex="9" size="6" value="<?php echo "$ldl"; ?>" /></label>
     <label for="lel">30) Lapillus esquerdo largura:
    <input name="lel" type="text" id="lel" tabindex="9" size="6" value="<?php echo "$lel"; ?>" /></label>

     <label for="ldp">31) Lapillus direito peso:
    <input name="ldp" type="text" id="ldp" tabindex="9" size="6" value="<?php echo "$ldp"; ?>" /></label>
     <label for="lep">27) Lapillus esquerdo peso:
    <input name="lep" type="text" id="lep" tabindex="9" size="6" value="<?php echo "$lep"; ?>" /></label>


         <label for="ada">27) Asteriscus direito altura:
    <input name="ada" type="text" id="ada" tabindex="9" size="6" value="<?php echo "$ada"; ?>" /></label>
     <label for="aea">27) Asteriscus esquerdo altura:
    <input name="aea" type="text" id="aea" tabindex="9" size="6" value="<?php echo "$aea"; ?>" /></label>

     <label for="adl">27) Asteriscus direito largura:
    <input name="adl" type="text" id="adl" tabindex="9" size="6" value="<?php echo "$adl"; ?>" /></label>
     <label for="ael">27) Asteriscus esquerdo largura:
    <input name="ael" type="text" id="ael" tabindex="9" size="6" value="<?php echo "$ael"; ?>" /></label>

     <label for="adp">27) Asteriscus direito peso:
    <input name="adp" type="text" id="adp" tabindex="9" size="6" value="<?php echo "$adp"; ?>" /></label>
     <label for="aep">27) Asteriscus esquerdo peso:
    <input name="aep" type="text" id="aep" tabindex="9" size="6" value="<?php echo "$aep"; ?>" /></label>







             <label for="sda">27) Sagitta direito altura:
    <input name="sda" type="text" id="sda" tabindex="9" size="6" value="<?php echo "$sda"; ?>" /></label>
     <label for="sea">27) Sagitta esquerdo altura:
    <input name="sea" type="text" id="sea" tabindex="9" size="6" value="<?php echo "$sea"; ?>" /></label>

     <label for="sdl">27) Sagitta direito largura:
    <input name="sdl" type="text" id="sdl" tabindex="9" size="6" value="<?php echo "$sdl"; ?>" /></label>
     <label for="sel">27) Sagitta esquerdo largura:
    <input name="sel" type="text" id="sel" tabindex="9" size="6" value="<?php echo "$sel"; ?>" /></label>

     <label for="sdp">27) Sagitta direito peso:
    <input name="sdp" type="text" id="sdp" tabindex="9" size="6" value="<?php echo "$sdp"; ?>" /></label>
     <label for="sep">27) Sagitta esquerdo peso:
    <input name="sep" type="text" id="sep" tabindex="9" size="6" value="<?php echo "$sep"; ?>" /></label>

      <label for="rt">27) Raio total:
    <input name="rt" type="text" id="rt" tabindex="9" size="6" value="<?php echo "$rt"; ?>" /></label>
     <label for="r1">27) Raio1:
    <input name="r1" type="text" id="r1" tabindex="9" size="6" value="<?php echo "$r1"; ?>" /></label>
     <label for="r2">27) Raio2:
    <input name="r2" type="text" id="r2" tabindex="9" size="6" value="<?php echo "$r2"; ?>" /></label>
     <label for="r3">27) Raio3:
    <input name="r3" type="text" id="r3" tabindex="9" size="6" value="<?php echo "$r3"; ?>" /></label>
     <label for="r4">27) Raio4:
    <input name="r4" type="text" id="r4" tabindex="9" size="6" value="<?php echo "$r4"; ?>" /></label>
     <label for="r5">27) Raio5:
    <input name="r5" type="text" id="r5" tabindex="9" size="6" value="<?php echo "$r5"; ?>" /></label>
     <label for="r6">27) Raio6:
    <input name="r6" type="text" id="r6" tabindex="9" size="6" value="<?php echo "$r6"; ?>" /></label>
     <label for="r7">27) Raio7:
    <input name="r7" type="text" id="r7" tabindex="9" size="6" value="<?php echo "$r7"; ?>" /></label>
     <label for="r8">27) Raio8:
    <input name="r8" type="text" id="r8" tabindex="9" size="6" value="<?php echo "$r8"; ?>" /></label>
     <label for="r9">27) Raio9:
    <input name="r9" type="text" id="r9" tabindex="9" size="6" value="<?php echo "$r9"; ?>" /></label>
     <label for="r10">27) Raio10:
    <input name="r10" type="text" id="r10" tabindex="9" size="6" value="<?php echo "$r10"; ?>" /></label>
     <label for="r11">27) Raio11:
    <input name="r11" type="text" id="r11" tabindex="9" size="6" value="<?php echo "$r11"; ?>" /></label>
     <label for="r12">27) Raio12:
    <input name="r12" type="text" id="r12" tabindex="9" size="6" value="<?php echo "$r12"; ?>" /></label>
     <label for="r13">27) Raio13:
    <input name="r13" type="text" id="r13" tabindex="9" size="6" value="<?php echo "$r13"; ?>" /></label>
     <label for="r14">27) Raio14:
    <input name="r14" type="text" id="r14" tabindex="9" size="6" value="<?php echo "$r14"; ?>" /></label>
     <label for="r15">27) Raio15:
    <input name="r15" type="text" id="r15" tabindex="9" size="6" value="<?php echo "$r15"; ?>" /></label>
     <label for="r16">27) Raio16:
    <input name="r16" type="text" id="r16" tabindex="9" size="6" value="<?php echo "$r16"; ?>" /></label>
     <label for="r17">27) Raio17:
    <input name="r17" type="text" id="r17" tabindex="9" size="6" value="<?php echo "$r17"; ?>" /></label>
     <label for="r18">27) Raio18:
    <input name="r18" type="text" id="r18" tabindex="9" size="6" value="<?php echo "$r18"; ?>" /></label>
      <label for="r19">27) Raio19:
    <input name="r19" type="text" id="r19" tabindex="9" size="6" value="<?php echo "$r19"; ?>" /></label>
     <label for="r20">27) Raio20:
    <input name="r20" type="text" id="r20" tabindex="9" size="6" value="<?php echo "$r20"; ?>" /></label>
   <!--
     <label for="ida">27) Idade:
    <input name="ida" type="text" id="ida" tabindex="9" size="6"  value="<?php echo "$ida"; ?>" /></label>-->



             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>
  <?php
  }





/* ---------------Termino da Edicao da Biometria Ecobio pag2----------------------- */


/* ---------------Termino da Edicao da Biometria----------------------- */
 }









//Editar aparelho Pesca Mercado----------------------------------------------------- fim






//Editar aparelho Pesca familiar----------------------------------------------------- início
else if ($aparelho  == "Familiar")
{
$res = mysql_query("SELECT * FROM pesc_col_familiar WHERE id_merc = '$id'");
while($registro = mysql_fetch_row($res))
{
$id = $registro[0];
$empr = $registro[9];
if ($empr == "JM"){$empr1 = "Jirau Montante";}
else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
$data = $registro[1];
$data11 = explode("-", $data);
$dia = $data11[2];
$mes = $data11[1];
$ano = $data11[0];
$mun = $registro[2];

$lista->setTable("pesc_localidade");
$lista->setFieldId("id_locali ='$mun'");
$lista->setFieldNr("1"); $mun1 = $lista->data_filter();

$pesc = $registro[3];
$lista->setTable("pesc_pescador");
$lista->setFieldId("id_pescador ='$pesc'");
$lista->setFieldNr("1"); $pesc1 = $lista->data_filter();

$sit = $registro[12];

$categ = $registro[4];
$lista->setTable("pesc_especie");
$lista->setFieldId("id_esp ='$categ'");
$lista->setFieldNr("1"); $categ1 = $lista->data_filter();

$indiv = $registro[15];
$peso = $registro[10];

$peso = $registro[10];
$peso_m = $registro[16];

$peso_g = $registro[14];
$comp = $registro[11];
$comp_m = $registro[17];

$qtdv = $registro[6];
$qtdc = $registro[7];
$obs = $registro[8];

}
?>
<h3>Editar registro de Pesca familiar</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_merc_enviar&idd=<?php echo"$id";?>&aparelho=Familiar" enctype="multipart/form-data">
             <?php
               if($empr == "JM")
               {$e = "selected";}
               else if($empr == "JS")
		       {$ee = "selected";}
               else if($empr == "SM")
		       {$eee = "selected";}
               else if($empr == "SJ")
		       {$eeee = "selected";}
             ?>
 <fieldset>
        <label for="empr">1) Empreendimento:
            <select name='empr' type='text' id='empr' tabindex="1">
            <option value='' >&nbsp;</option>
        <option value='JM' <?php echo"$e";?>   >Jirau Montante</option>
        <option value='JS' <?php echo"$ee";?>>Jirau Jusante</option>
        <option value='SM' <?php echo"$eee";?>>Santo Antônio Montante</option>
        <option value='SJ' <?php echo"$eeee";?>>Santo Antônio Jusante</option>

        </select>
     </label>



         <label for="data">2) Data:
        <SELECT name='dia' type='text' id='dia' tabindex="4">
         <option value="<?php echo "$dia"; ?>"><?php echo "$dia"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="5">
         <option value="<?php echo "$mes"; ?>"><?php echo "$mes"; ?></option>
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
        <option value='2012'>2012</option>
        </select> dd/mm/aaaa
     </label>

     <label for="loc">3) Localidade:
    <SELECT name='loc'  type='text' id='loc' tabindex="5" >
     <option value='<?php echo "$mun"; ?>'><?php echo"$mun1"; ?></option>
    <?php
    $lista->geraListalocali();
    ?>
    </select>
    </label>

      <label for="pesc">4) Pescador:
    <SELECT name='pesc'  type='text' id='pesc' tabindex="6" >
      <option value='<?php echo "$pesc"; ?>'><?php echo"$pesc1"; ?></option>

    <?php
    $lista->geraListaPescF();
    ?>
    </select>
    </label>
       <?php
      if ($sit == "SPE"){$s = "checked";}
      else if ($sit == "NPE"){$ss = "checked";}
       else if ($sit == "ZPE"){$sss = "checked";}



      ?>
     <label for="sit">
        5) Situação:  </label>
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit"  value="SPE"  class="checkbox" <?php echo "$s"; ?>>Houve Pesca<br />
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit" value="NPE"  class="checkbox" <?php echo "$ss"; ?>>Não houve pesca<br />
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit"  value="ZPE"  class="checkbox" <?php echo "$sss"; ?>>Houve pesca nula

      <label for="categ">6) Categoria:
     <SELECT name='categ' type='text' id='esp' tabindex="3" >
      <option value='<?php echo "$categ"; ?>'><?php echo "$categ1"; ?></option>
            <?php
            $lista->geraListaCateg();
            ?>
            </select></label>
       <?php
        if ($indiv == "N"){$i = "checked";}
       ?>
     <label for="qtde">7) Qtde:
    <input name="qtde" type="text" id="qtde" tabindex="8" size="3" value="1" />  &nbsp;&nbsp;<input type="checkbox" name="indiv" value="N" class="checkbox" <?php echo "$i"; ?>  />Vários</label>


    <label for="peso">8) Peso menor:
    <input name="peso" type="text" id="peso" tabindex="9" size="6" value="<?php echo "$peso"; ?>" />Kg</label>

      <label for="peso_m">9) Peso maior:
    <input name="peso_m" type="text" id="peso_m" tabindex="9" size="6" value="<?php echo "$peso_m"; ?>" />Kg</label>


    <label for="peso_g">10) Peso geral:
    <input name="peso_g" type="text" id="peso_g" tabindex="10" size="6" value="<?php echo "$peso_g"; ?>" />Kg</label>

    <label for="comp">11) Comprimento menor:
    <input name="comp" type="text" id="comp" tabindex="11" size="6" value="<?php echo "$comp"; ?>" />cm</label>

     <label for="comp_m">12) Comprimento maior:
    <input name="comp_m" type="text" id="comp_m" tabindex="11" size="6" value="<?php echo "$comp_m"; ?>" />cm</label>


   <label for="qtdv">13) Quantidade venda:
    <input name="qtdv" type="text" id="qv" tabindex="12" size="6" value="<?php echo "$qtdv"; ?>" /></label>

    <label for="qtdc">14) Quantidade consumo:
    <input name="qtdc" type="text" id="qc" tabindex="13" size="6" value="<?php echo "$qtdc"; ?>" /></label>

     <label for="obs">15) Observações: <br />
    <textarea type="text" name="obs" cols="25" rows="5" tabindex="14"><?php echo "$obs"; ?></textarea></label>



             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<?php
  }
//Editar aparelho Pesca Familiar----------------------------------------------------- fim









//Editar aparelho Pesca Caderno----------------------------------------------------- início
else if ($aparelho  == "Caderno")
{
$res = mysql_query("SELECT * FROM pesc_col_caderno WHERE id_cad = '$id'");
while($registro = mysql_fetch_row($res))
{
$id = $registro[0];
$empr = $registro[13];
if ($empr == "JM"){$empr1 = "Jirau Montante";}
else if ($empr == "JS"){$empr1 = "Jirau Jusante";}
else if ($empr == "SM"){$empr1 = "Santo Antônio Montante";}
else if ($empr == "SJ"){$empr1 = "Santo Antônio Jusante";}
$data = $registro[1];
$data11 = explode("-", $data);
$dia = $data11[2];
$mes = $data11[1];
$ano = $data11[0];
$loc = $registro[2];

$func = $registro[3];
if ($func == "P"){$func1 = "Pescador";}
else if ($func == "A"){$func1 = "Atravessador";}
else if ($func == "PA"){$func1 = "Ambos";}

$lista->setTable("pesc_localidade");
$lista->setFieldId("id_locali ='$loc'");
$lista->setFieldNr("1"); $loc1 = $lista->data_filter();

$pesc = $registro[6];
$lista->setTable("pesc_pescador");
$lista->setFieldId("id_pescador ='$pesc'");
$lista->setFieldNr("1"); $pesc1 = $lista->data_filter();

$tx = $registro[7];
$va = $registro[8];
$re = $registro[9];

$categ = $registro[12];
$lista->setTable("pesc_especie");
$lista->setFieldId("id_esp ='$categ'");
$lista->setFieldNr("1"); $categ1 = $lista->data_filter();
$qtde = $registro[16];

$ori = $registro[15];
if ($ori == "P"){$ori1 = "Barco pescador";}
else if ($ori == "R"){$ori1 = "Barco recreio";}
else if ($ori == "CN"){$ori1 = "Canoa";}
else if ($ori == "CR"){$ori1 = "Carro";}

$que = $registro[10];
if ($que == "S"){$que1 = "Sim";}
else if ($que == "N"){$que1 = "Não";}

$obs = $registro[13];

}
?>
<h3>Editar registro de Pesca do Caderno</h3>
<?php

echo "";

 ?>


<form id="forms" method="post" action="index.php?secoes=edit/editar_merc_enviar&idd=<?php echo"$id";?>&aparelho=Caderno" enctype="multipart/form-data">
             <?php
               if($empr == "JM")
               {$e = "selected";}
               else if($empr == "JS")
		       {$ee = "selected";}
               else if($empr == "SM")
		       {$eee = "selected";}
               else if($empr == "SJ")
		       {$eeee = "selected";}
             ?>
 <fieldset>
        <label for="empr">1) Empreendimento:
            <select name='empr' type='text' id='empr' tabindex="1">
            <option value='' >&nbsp;</option>
        <option value='JM' <?php echo"$e";?>   >Jirau Montante</option>
        <option value='JS' <?php echo"$ee";?>>Jirau Jusante</option>
        <option value='SM' <?php echo"$eee";?>>Santo Antônio Montante</option>
        <option value='SJ' <?php echo"$eeee";?>>Santo Antônio Jusante</option>

        </select>
     </label>



         <label for="data">2) Data:
        <SELECT name='dia' type='text' id='dia' tabindex="4">
         <option value="<?php echo "$dia"; ?>"><?php echo "$dia"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="5">
         <option value="<?php echo "$mes"; ?>"><?php echo "$mes"; ?></option>
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
        <option value='2012'>2012</option>
        </select> dd/mm/aaaa
     </label>

     <label for="loc">3) Localidade:
    <SELECT name='loc'  type='text' id='loc' tabindex="5" >
     <option value='<?php echo "$loc"; ?>'><?php echo"$loc1"; ?></option>
    <?php
    $lista->geraListalocali();
    ?>
    </select>
    </label>


        <label for="func">4) Função:
    <select name='func' type='text' id='func' tabindex="4">
         <option value='<?php echo "$func"; ?>'><?php echo "$func1"; ?></option>
        <option value='P' selected="selected">Pescador</option>
        <option value='A'>Atravessador</option>
        <option value='PA'>Ambos</option>
        </select></label>






      <label for="pesc">5) Pescador:
    <SELECT name='pesc'  type='text' id='pesc' tabindex="6" >
      <option value='<?php echo "$pesc"; ?>'><?php echo"$pesc1"; ?></option>

    <?php
    $lista->geraListaPescC();
    ?>
    </select>
    </label>


     <label for="tx">6) Taxa de 5%:
    <input name="tx" type="text" id="tx" tabindex="5" size="10" value="<?php echo"$tx"; ?>" />R$</label>

    <label for="va">7) Valor de 100%:
    <input name="va" type="text" id="va" tabindex="5" size="10" value="<?php echo"$va"; ?>" />R$</label>

    <label for="re">8) Rendimento:
    <input name="re" type="text" id="re" tabindex="5" size="10" value="<?php echo"$re"; ?>" />Kg</label>

     <label for="categ">9) Categoria:
     <SELECT name='categ' type='text' id='esp' tabindex="3" >
      <option value='<?php echo "$categ"; ?>'><?php echo "$categ1"; ?></option>
            <?php
            $lista->geraListaCateg();
            ?>
            </select></label>

     <label for="qtde">10) Quantidade:
    <input name="qtde" type="text" id="qtde" tabindex="5" size="10" value="<?php echo"$qtde"; ?>" />Kg</label>



     <label for="ori">11) Origem:
    <select name='ori' type='text' id='ori' tabindex="4">
      <option value='<?php echo "$ori"; ?>'><?php echo "$ori1"; ?></option>
        <option value='P'>Barco pescador</option>
        <option value='R'>Barco recreio</option>
         <option value='CN'>Canoa</option>
        <option value='CR'>Carro</option>
        </select></label>


            <label for="que">12) Questionário:
    <select name='que' type='text' id='que' tabindex="4">

          <option value='<?php echo "$que"; ?>'><?php echo "$que1"; ?></option>
            <option value='S'>Sim</option>
        <option value='N'>Não</option>
        </select></label>

            <label for="obs">13) Obs:<br />
   <textarea type="text" name="obs" cols="25" rows="5" tabindex="7"><?php echo "$obs"; ?></textarea></label>






             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<?php
  }
//Editar aparelho Pesca Caderno----------------------------------------------------- fim
?>




</div>
