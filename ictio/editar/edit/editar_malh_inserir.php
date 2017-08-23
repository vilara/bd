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
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->


<!--Área editável início     -->

  <?php
$aparelho = $_GET["aparelho"];
$cod = $_GET["cod"];
$id = $_GET["idd"];

//Editar aparelho Pesca-----------------------------------------------------
if ($aparelho  == "pesc")
{

// echo"$data_i--$data_f";

$res = mysql_query("SELECT * FROM tb_pesc_biotico WHERE id_tb_pesc = '$id'");
while($registro = mysql_fetch_row($res))
 {
$id_tb_pesc = $registro[0];
$pesc_proced = $registro[2];

$pesc_lacalidade = $registro[4];

$pesc_data = $registro[6];
$data11 = explode("-", $pesc_data);
$pesc_dia = $data11[2];
$pesc_mes = $data11[1];
$pesc_ano = $data11[0];

$pesc_esp = $registro[7];
$pesc_cpp = $registro[8];
$pesc_cpt = $registro[9];
$pesc_cpc = $registro[10];
$pesc_ptt = $registro[11];
$pesc_ptc = $registro[12];
$pesc_pte = $registro[13];
$gr = $registro[14];
$gg = $registro[15];
$sexo = $registro[16];
$ematur = $registro[17];
$histo = $registro[18];
$teci = $registro[19];
$cresc = $registro[20];
$pescad = $registro[21];
$colet = $registro[22];
$obs = $registro[23];
$oe = $registro[24];
$od = $registro[25];

?>


<h3>Editar registro de Pesca</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=pesc&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">

    <fieldset>

        <label for="limno">
        1) Código:  </label>
            <input name="cod" type="text" id="cod" tabindex="1"  size="15" value="<?php echo "$registro[1]"; ?>" class="checkbox1" />

        <label for="pesc_data">
        2) Data: </label>
            <SELECT name='dia' type='text' id='dia' tabindex="2">
            <option value="<?php echo "$pesc_dia"; ?>"><?php echo "$pesc_dia"; ?></option>
            <?php
            $lista = new ManipulateData();
            $lista->ListaDias();
            ?>
            </select>
            <SELECT name='mes' type='text' id='mes' tabindex="3">
            <option value="<?php echo "$pesc_mes"; ?>"><?php echo "$pesc_mes"; ?></option>
            <?php
            $lista->ListaMeses();
            ?>
            </select>
            <input name="ano" type="text" id="ano" tabindex="4"  size="4" value="<?php echo "$pesc_ano"; ?>" class="checkbox1" /> dd/mm/aaaa

        <?php
        if($pesc_proced == "Resgate"){$a = "selected";}
        else if($pesc_proced == "Pesca"){$b = "selected";}
        ?>
        <label for="aparelho">
        3) Procedência:  </label>
            <SELECT NAME='proced' type='text' id='proced' tabindex="5">
            <option value='no'>Selecione</option>
            <option value='Resgate' <?php echo"$a";?>>Resgate</option>
            <option value='Pesca' <?php echo"$b";?>>Pesca</option>
            </select>

        <label for="local">
        4) Local:  </label>
            <input name="local" type="text" id="cod" tabindex="6"  size="15" value="<?php echo "$registro[3]"; ?>" class="checkbox1" />

        <label for="localidade">
        5) Localidade:  </label>
            <input name="localidade" type="text" id="cod" tabindex="7"  size="15" value="<?php echo "$registro[4]"; ?>" class="checkbox1" />


        <?php
        $esp1 = $lista->NomeEspecie($registro[7]);
        ?>
        <label for="Especie">
        6) Espécie:  </label>
           <SELECT NAME='esp' type='text' id='esp' tabindex="7">
           <option value='<?php echo "$pesc_esp"; ?>'><?php echo "$esp1"; ?></option>
            <?php
            $lista->GeraListaEspecies();
            ?>
           </select>

         <label for="cpp">
        7) Cpp:  </label>
            <input name="cpp" type="text" id="cpp" tabindex="8"  size="15" value="<?php echo "$registro[8]"; ?>" class="checkbox1" />

        <label for="cpp">
        7) Cpt:  </label>
            <input name="cpt" type="text" id="cpt" tabindex="9"  size="15" value="<?php echo "$registro[9]"; ?>" class="checkbox1" />

<label for="cpp">
        9) Cpc:  </label>
            <input name="cpc" type="text" id="cpc" tabindex="10"  size="15" value="<?php echo "$registro[10]"; ?>" class="checkbox1" />

         <label for="cpp">
        10) Ptt:  </label>
            <input name="ptt" type="text" id="cpp" tabindex="11"  size="15" value="<?php echo "$registro[11]"; ?>" class="checkbox1" />

        <label for="cpp">
        11) Ptc:  </label>
            <input name="ptc" type="text" id="cpp" tabindex="12"  size="15" value="<?php echo "$registro[12]"; ?>" class="checkbox1" />

        <label for="cpp">
        12) Pte:  </label>
            <input name="pte" type="text" id="cpp" tabindex="13"  size="15" value="<?php echo "$registro[13]"; ?>" class="checkbox1" />

        <?php
        if($gg == 0){$c = "checked";}
        else if($gg == 1){$cc = "checked";}
        else if($gg == 2){$ccc = "checked";}
        else if($gg == 3){$cccc = "checked";}
        ?>
         <label for="gg">
        13) Grau de Gordura:</label>
            <input type="radio" name="gg" value="0" <?php echo"$c";?> />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="1" <?php echo"$cc";?>/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg" value="2" <?php echo"$ccc";?>/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="3" <?php echo"$cccc";?>/>3

        <?php
        if($gr == 0){$d = "checked";}
        else if($gr == 1){$dd = "checked";}
        else if($gr == 2){$ddd = "checked";}
        else if($gr == 3){$dddd = "checked";}
        ?>
        <label for="malh_grgr">
        14) Grau de repleção: </label>
            <input type="radio" name="gr" value="0" <?php echo"$d";?>  />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="1" <?php echo"$dd";?>  />1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr" value="2"  <?php echo"$ddd";?> />2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="3"  <?php echo"$dddd";?> />3


         <label for="sexo">
        15) Sexo:  </label>
            <SELECT NAME='sexo' type='text' id='malh_sexo' tabindex="4">
            <OPTION selected="selected" value="<?php echo"$sexo";?>" ><?php echo"$sexo";?></option>
            <option value='Macho'>Macho</option>
            <option value='Fêmea'>Fêmea</option>
            <option value='Indeterminado'>Indeterminado</option>
            <option value='Não determinado'>Não determinado</option>
            <option value='Deteriorado'>Deteriorado</option>
            </select>


            <label for="ematur">
        15) Ematur:  </label>
            <SELECT NAME='ematur' type='text' id='ematur' tabindex="4">
            <OPTION selected="selected" value="<?php echo"$ematur";?>" ><?php echo"$ematur";?></option>
            <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
             <option value='6'>6</option>
            </select>


             <?php
               if($histo == "Sim"){$e = "checked";}
               else if($histo == "Não"){$ee = "checked";}
		       ?>
            <label for="aparelho">
        16) Histologia:  </label>
            <input type="radio" name="histo"  value="Sim" <?php echo"$e";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="histo" value="Não" <?php echo"$ee";?> >Não

       <?php
               if($histo == "Sim"){$f = "checked";}
               else if($histo == "Não"){$ff = "checked";}
		       ?>
            <label for="aparelho">
        12) Tecido:  </label>
         <input name="teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$teci"; ?>" />
            <!--<input type="radio" name="teci"  value="Sim"  <?php echo"$f";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="teci" value="Não" <?php echo"$ff";?> >Não-->


           <?php
               if($cresc == "Nenhum"){$g = "checked";}

               else if($cresc == "Otólito"){$gg = "checked";}
               else if($cresc == "Escama"){$ggg = "checked";}
               ?>

            <label for="transparencia">
        9) Crescimento:  </label>
            <input type="radio" name="cresc"  value="Nenhum"  <?php echo"$g";?>  />Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc" value="Otólito" <?php echo"$gg";?>  />Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="cresc"  value="Escama"  <?php echo"$ggg";?>  />Escama
                 <br /> <br />Otólito Esquerdo  <input name="oe" type="text" id="oe" tabindex="7" accesskey="c" size="5" value="<?php echo "$oe"; ?>" /><br /><br />Otólito direito &nbsp;&nbsp;&nbsp;&nbsp;<input name="od" type="text" id="od" tabindex="7" accesskey="c" size="5" value="<?php echo "$od"; ?>" />


            <label for="obs">
          20) Pescadores:  </label>
            <textarea type="radio" name="pescad" cols="50" rows="5" tabindex="7" value="<?php echo"$pescad";?>" ><?php echo"$pescad";?></textarea>

        <label for="obs">
          20) Coletadores:  </label>
            <textarea type="radio" name="colet" cols="50" rows="5" tabindex="7" value="<?php echo"$colet";?>" ><?php echo"$colet";?></textarea>


        <label for="obs">
          20) Observações:  </label>
            <textarea type="radio" name="obs" cols="50" rows="5" tabindex="7" value="<?php echo"$obs";?>" ><?php echo"$obs";?></textarea>

<?php
}
?>








             </fieldset>




          <div id="botao1">   <input type="submit" value="Editar" /> <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

























<?php
   }
else if ($aparelho  == "Malhadeira")
{

// echo"$data_i--$data_f";

$res = mysql_query("SELECT * FROM tb_malhadeira_biotico WHERE id_tb_malhadeira = '$id'");
while($registro = mysql_fetch_row($res))
 {
 		$id_tb_malhadeira = $registro[0];
 $malh_lim = $registro[1];
  //  echo"$malh_lim" ;
$malh_hora = $registro[2];
$hora11 = explode(":", $malh_hora);
$malh_h = $hora11[0];
$malh_m = $hora11[1];

$malh_data = $registro[3];
$data11 = explode("-", $malh_data);
$malh_dia = $data11[2];
$malh_mes = $data11[1];
$malh_ano = $data11[0];



$malh_cat_hora = $registro[4];
$malh_numero = $registro[5];
$malh_especie = $registro[6];
$malh_cp = $registro[7];
$malh_pt = $registro[8];

$malh_sexo = $registro[9];
$malh_ematur = $registro[10];
$malh_pg = $registro[11];
$malh_gg = $registro[12];
$malh_gr = $registro[13];
$malh_cresc = $registro[14];
$malh_histo = $registro[15];
$malh_fecund = $registro[16];
$malh_teci = $registro[17];
$malh_foto = $registro[18];
$malh_col = $registro[19];
$malh_voucher = $registro[20];
$malh_obs = $registro[21];
$malh_det = $registro[22];
// echo" $malh_lim";
}
$num = mysql_num_rows($res);
//echo "$esp_ordem";



			$res6 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = '$malh_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$malh_cod = $registro6[2];

                      		    }
            //  echo"$cod";
?>


<h3>Editar registro de malhadeira</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Malhadeira&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>

        <label for="limno">
            1) Código de campo:<?php echo"$cod";?>
        </label>
        <?php
        $res4 = mysql_query("SELECT * FROM tb_limno WHERE lim_aparelho = 'Malhadeira' AND id_tb_limno = '$malh_lim'");
		    while($registro4 = mysql_fetch_row($res4))
		    {$id_tab_limno4 = $registro4[0];$lim_cod4 = $registro4[2];}
        ?>
             <SELECT name='malh_lim' type='text' id='malh_lim' tabindex="1" ><OPTION>
             <OPTION selected="selected" value="<?php echo"$id_tab_limno4";?>" ><?php echo"$lim_cod4";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno WHERE lim_aparelho = 'Malhadeira'");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[2];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="malh_hora">
              2) Horário da coleta: </label>
            <SELECT name='malh_h' type='text' id='malh_h' tabindex="2">
            <OPTION selected="selected" value="<?php echo"$malh_h";?>" ><?php echo"$malh_h";?></option>
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
              <SELECT name='malh_m' type='text' id='min' tabindex="3">
              <OPTION selected="selected" value="<?php echo"$malh_m";?>" ><?php echo"$malh_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


               <label for="malh_data">
              3) Data da coleta: </label>
              <SELECT name='malh_dia' type='text' id='dia' tabindex="4">
              <OPTION selected="selected" value="<?php echo"$malh_dia";?>" ><?php echo"$malh_dia";?></option>
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
              <SELECT name='malh_mes' type='text' id='mes' tabindex="5">
                <OPTION selected="selected" value="<?php echo"$malh_mes";?>" ><?php echo"$malh_mes";?></option>
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
              <input name="malh_ano" type="text" id="malh_ano" tabindex="6"  size="4" value="<?php echo"$malh_ano"; ?>" /> dd/mm/aaaa

<label for="especie">
        1) Espécie:  </label>
            <SELECT name='malh_especie' type='text' id='malh_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $malh_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$malh_especie6 = $registro6[3];}
            ?>
            <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$malh_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {$id_tab_especie = $registro[0];$malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a>  -->


        <label for="comprimento">
        2) Comprimento: </label>
            <input name="malh_cp" class="input" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$malh_cp";?>" />mm


        <label for="pt">
        3) Peso: </label>
            <input name="malh_pt" type="text" id="malh_pt" tabindex="3" accesskey="c" size="5" value="<?php echo"$malh_pt";?>" />g


        <label for="sexo">
        4) Sexo:  </label>
            <SELECT NAME='malh_sexo' type='text' id='malh_sexo' tabindex="4">
            <OPTION selected="selected" value="<?php echo"$malh_sexo";?>" ><?php echo"$malh_sexo";?></option>
            <option value='Macho'>Macho</option>
            <option value='Fêmea'>Fêmea</option>
            <option value='Indeterminado'>Indeterminado</option>
            <option value='Não determinado'>Não determinado</option>
            <option value='Deteriorado'>Deteriorado</option>
            </select>


        <label for="ematur">
        5) Estágio de maturação: </label>
            <SELECT NAME='malh_ematur' type='text' id='malh_ematur' tabindex="5">

            <OPTION selected="selected" value="<?php echo"$malh_ematur";?>" ><?php echo"$malh_ematur";?></option>
            <option value='#'>#</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            </select>


        <label for="pg">
        6) Peso de Gônada: </label>
            <input name="malh_pg" type="text" id="malh_pg" tabindex="3" accesskey="c" size="6"  value="<?php echo"$malh_pg";?>" />g
            <br /><br />
           <?php
               if($malh_gg == "0")
               {$a = "checked";}
               else{
		       if($malh_gg == "1")
               {$aa = "checked";}
               else{
               		if($malh_gg == "2")
                {$aaa = "checked";}
                else{
               	if($malh_gg == "3")
                {$aaaa = "checked";}
                else{
               }}}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
        <label for="gg">
        7) Grau de Gordura:</label>
            <input type="radio" name="malh_gg" value="0" <?php echo"$a";?> />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gg"  value="1" <?php echo"$aa";?>/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gg" value="2" <?php echo"$aaa";?>/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gg"  value="3" <?php echo"$aaaa";?>/>3



            <?php
               if($malh_gr == "0")
               {$b = "checked";}
               else{
		       if($malh_gr == "1")
               {$bb = "checked";}
               else{
               		if($malh_gr == "2")
                {$bbb = "checked";}
                else{
               	if($malh_gr == "3")
                {$bbbb = "checked";}
                else{
               }}}}
                // echo"$malh_gr--$bb";
               ?>

            <label for="malh_grgr">
        8) Grau de repleção: </label>
            <input type="radio" name="malh_gr" value="0" <?php echo"$b";?>  />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gr"  value="1" <?php echo"$bb";?>  />1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gr" value="2"  <?php echo"$bbb";?> />2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_gr"  value="3"  <?php echo"$bbbb";?> />3


              <?php
               if($malh_cresc == "Nenhum")
               {$j = "checked";}
               else{
		       if($malh_cresc == "Otólito")
               {$jj = "checked";}
               else{
               		if($malh_cresc == "Escama")
                {$jjj = "checked";}
                else{

               }}}
                // echo"$malh_gr--$bb";
               ?>

            <label for="transparencia">
        9) Crescimento:  </label>
            <input type="radio" name="malh_cresc"  value="Nenhum"  <?php echo"$j";?>  />Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_cresc" value="Otólito" <?php echo"$jj";?>  />Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_cresc"  value="Escama"  <?php echo"$jjj";?>  />Escama <br />


         <br /><br />


             <?php
               if($malh_histo == "Sim")
               {$c = "checked";}
               else{
		       if($malh_histo == "Não")
               {$cc = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        10) Histologia:  </label>
            <input type="radio" name="malh_histo"  value="Sim" <?php echo"$c";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_histo" value="Não" <?php echo"$cc";?> >Não



             <?php
               if($malh_fecund == "Sim")
               {$d = "checked";}
               else{
		       if($malh_fecund == "Não")
               {$dd = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="fecundidade">
        11) Fecundidade:  </label>
            <input type="radio" name="malh_fecund"  value="Sim" <?php echo"$d";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_fecund" value="Não" <?php echo"$dd";?> >Não



             <?php
               if($malh_teci == "Sim")
               {$e = "checked";}
               else{
		       if($malh_teci == "Não")
               {$ee = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        12) Tecido:  </label>
            <!--<input type="radio" name="malh_teci"  value="Sim"  <?php echo"$e";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_teci" value="Não" <?php echo"$ee";?> >Não-->
           <input name="malh_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$malh_teci"; ?>" />


             <?php
               if($malh_foto == "Sim")
               {$f = "checked";}
               else{
		       if($malh_foto == "Não")
               {$ff = "checked";}
               else{
               		}}

                    //echo"$malh_foto";
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        13) Foto:  </label>
            <input type="radio" name="malh_foto"  value="Sim" <?php echo"$f";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_foto" value="Não" <?php echo"$ff";?> >Não



             <?php
               if($malh_col == "Sim")
               {$g = "checked";}
               else{
		       if($malh_col == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
          <label for="aparelho">
       14) Coleção:  </label>
           <!-- <input type="radio" name="malh_col"  value="Sim"  <?php echo"$g";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_col" value="Não" <?php echo"$gg";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->Número de voucher:
            <!--<SELECT name='malh_voucher1' type='text' id='malh_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$malh_voucher";?>" ><?php echo"$malh_voucher";?></option> --><!--  -->
           <input name="malh_voucher1" type="text" id="malh_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$malh_voucher"; ?>" />





            <label for="aparelho">

        16) Observações:  </label>
            <textarea type="radio" name="malh_obs" cols="50" rows="5" tabindex="7" value="<?php echo"$malh_obs";?>" ><?php echo"$malh_obs";?></textarea>


         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='malh_det' type='text' id='malh_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$malh_det";?>"><?php echo"$malh_det";?> </option>
            <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>




             </fieldset>




          <div id="botao1">   <input type="submit" value="Editar" /> <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>


<?php
 }


 else if($aparelho  == "Redinha")


 {

 ?>
<!--  Redinha   start -->
<?php


$res = mysql_query("SELECT * FROM tb_redinha_biotico WHERE id_tb_redinha = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_redinha = $registro[0];
 $red_qtde = $registro[1];
 $red_lim = $registro[2];

$red_data = $registro[3];
$data11 = explode("-", $red_data);
$red_dia = $data11[2];
$red_mes = $data11[1];
$red_ano = $data11[0];

$red_hora = $registro[4];
$hora11 = explode(":", $red_hora);
$red_h = $hora11[0];
$red_m = $hora11[1];

$red_numero = $registro[5];
$red_especie = $registro[6];
$red_teci = $registro[7];
$red_foto = $registro[8];
$red_col = $registro[9];

$red_voucher = $registro[10];
$red_obs = $registro[11];
$red_det = $registro[12];

}
$num = mysql_num_rows($res);




			$res6 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = '$red_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$red_cod = $registro6[2];


		    }

            //  echo"$cod";
?>


<h3>Editar registro de Redinha</h3>

<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Redinha&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                 <label for="limno">
                   1) Código de campo:
        </label>
             <SELECT name='red_lim' type='text' id='red_lim' tabindex="1" ><OPTION>
             <OPTION selected="selected" value="<?php echo"$red_lim";?>" ><?php echo"$red_cod";?></option>
            <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno WHERE lim_aparelho = 'Redinha' AND id_tb_limno = '$red_lim'");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[2];

                        echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='red_hh' type='text' id='red_hh' tabindex="2">
                <OPTION selected="selected" value="<?php echo"$red_h";?>" ><?php echo"$red_h";?></option>
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
              <SELECT name='red_min' type='text' id='red_min' tabindex="3">
               <OPTION selected="selected" value="<?php echo"$red_m";?>" ><?php echo"$red_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>

             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='red_especie' type='text' id='red_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $red_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$red_especie6 = $registro6[3];}
             ?>
            <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$red_especie6";?></option>

            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a>  -->


        <label for="quantidade">
        4) Quantidade: </label>
            <input name="red_qtde" type="text" id="red_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$red_qtde";?>" />


         <label for="quantidade">
         <?php
               if($red_col == "Sim")
               {$g = "checked";}
               else{
		       if($red_col == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        4) Coleção:  </label>
                   <input name="red_voucher1" type="text" id="red_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$red_voucher"; ?>" />

        <!--    <input type="radio" name="red_col"  value="Sim"  <?php echo"$g";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_col" value="Não" <?php echo"$gg";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='red_voucher1' type='text' id='red_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$red_voucher";?>" ><?php echo"$red_voucher";?></option>-->
       <!--</select> -->
           <label for="aparelho">
        5) Tecido:  </label>
            <!--<input type="radio" name="red_teci"  value="Sim" <?php echo"$g"; ?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_teci" value="Não"  <?php echo"$gg"; ?> >Não
-->
                    <input name="red_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$red_teci"; ?>" />





               <?php
               if($red_foto == "Sim")
               {$h = "checked";}
               else{
		       if($red_foto == "Não")
               {$hh = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        6) Foto:  </label>
            <input type="radio" name="red_foto"  value="Sim" <?php echo"$h"; ?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="red_foto" value="Não" <?php echo"$hh"; ?>>Não




            <label for="aparelho">

        7) Observações:  </label>
            <textarea type="radio" name="red_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$red_obs";?>" ><?php echo"$red_obs";?> </textarea>


         <label for="determinador">
        8) Determinador: </label>
            <SELECT NAME='red_det' type='text' id='red_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$red_det";?>"><?php echo"$red_det";?> </option>
            <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>




             </fieldset>
            <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!--  malhadeira   end -->
 <?php


 }
  else if ($aparelho  == "Espinhel")


   {


   $res = mysql_query("SELECT * FROM tb_espinhel_biotico WHERE id_tb_espi = '$id'");
while($registro = mysql_fetch_row($res))
 {
 		$id_tb_espi = $registro[0];
 $espi_lim = $registro[3];
/* $espi_data = $registro[6];
$data11 = explode("-", $espi_data);
$espi_dia = $data11[2];
$espi_mes = $data11[1];
$espi_ano = $data11[0];*/
$espi_especie = $registro[4];
$qtde = $registro[1];
$cpp = $registro[5];
$cpt = $registro[6];
$cpc = $registro[7];
$ptt = $registro[8];
$ptc = $registro[9];
$pte = $registro[10];
$gr = $registro[11];
$gg = $registro[12];
$sexo = $registro[13];
$ematur = $registro[14];
$histo = $registro[15];
$teci = $registro[16];
$cresc = $registro[17];
$foto = $registro[18];
$col = $registro[19];
$voucher = $registro[20];
$det = $registro[21];
$obs = $registro[22];


$malh_pg = $registro[11];




$malh_fecund = $registro[16];



// echo" $malh_lim";          $malh_obs = $registro[21];
}
$num = mysql_num_rows($res);
//echo "$esp_ordem";

			$res6 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = '$malh_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$malh_cod = $registro6[2];

                      		    }

  ?>
<h3>Editar registro de Espinhel</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Espinhel&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>

        <label for="limno">
            1) Código de campo:<?php echo"$cod";?>
        </label>
        <?php
        $res4 = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Espinhel' AND id_tb_limno_outr = '$espi_lim'");
		    while($registro4 = mysql_fetch_row($res4))
		    {$id_tab_limno4 = $registro4[0];$lim_cod4 = $registro4[5];}
        ?>
             <SELECT name='lim' type='text' id='lim' tabindex="1" ><OPTION>
             <OPTION selected="selected" value="<?php echo"$id_tab_limno4";?>" ><?php echo"$lim_cod4";?></option>
             <?php
          //   include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Espinhel'");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$lim_cod\">$lim_cod</option>\n";
		    }
	        ?>
            </select>




<label for="especie">
        2) Espécie:  </label>
            <SELECT name='esp' type='text' id='esp' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $espi_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$malh_especie6 = $registro6[3];}
            ?>
            <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$malh_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {$id_tab_especie = $registro[0];$malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a>-->


 <label for="qtde">
        3) Quantidade: </label>
            <input name="qtde" type="text" id="qtde" tabindex="2" accesskey="p" size="5" value="<?php echo"$qtde";?>" />


        <label for="comprimento">
        4) Cpp: </label>
            <input name="cpp" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$cpp";?>" />mm

        <label for="comprimento">
        5) Cpt: </label>
            <input name="cpt" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$cpt";?>" />mm

        <label for="comprimento">
        6) Cpc: </label>
            <input name="cpc" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$cpc";?>" />mm

<label for="comprimento">
        7) Ptt: </label>
            <input name="ptt" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$ptt";?>" />mm

          <label for="comprimento">
        8) Ptc: </label>
            <input name="ptc" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$ptc";?>" />mm

        <label for="comprimento">
        9) Pte: </label>
            <input name="pte" type="text" id="malh_cp" tabindex="2" accesskey="p" size="5" value="<?php echo"$pte";?>" />mm
          <?php
               if($gr == "0")
               {$b = "checked";}
               else{
		       if($gr == "1")
               {$bb = "checked";}
               else{
               		if($gr == "2")
                {$bbb = "checked";}
                else{
               	if($gr == "3")
                {$bbbb = "checked";}
                else{
               }}}}
                // echo"$malh_gr--$bb";
               ?>
 <label for="gr">
        10) Grau de repleção: </label>
            <input type="radio" name="gr" value="0" <?php echo"$b";?>  />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="1" <?php echo"$bb";?>  />1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr" value="2"  <?php echo"$bbb";?> />2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gr"  value="3"  <?php echo"$bbbb";?> />3



          <?php
               if($gg == "0")
               {$a = "checked";}
               else{
		       if($gg == "1")
               {$aa = "checked";}
               else{
               		if($gg == "2")
                {$aaa = "checked";}
                else{
               	if($gg == "3")
                {$aaaa = "checked";}
                else{
               }}}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
        <label for="gg">
        11) Grau de Gordura:</label>
            <input type="radio" name="gg" value="0" <?php echo"$a";?> />0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="1" <?php echo"$aa";?>/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg" value="2" <?php echo"$aaa";?>/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gg"  value="3" <?php echo"$aaaa";?>/>3

         <label for="sexo">
        12) Sexo:  </label>
            <SELECT NAME='sexo' type='text' id='sexo' tabindex="4">
            <OPTION selected="selected" value="<?php echo"$sexo";?>" ><?php echo"$sexo";?></option>
            <option value='Macho'>Macho</option>
            <option value='Fêmea'>Fêmea</option>
            <option value='Indeterminado'>Indeterminado</option>
            <option value='Não determinado'>Não determinado</option>
            <option value='Deteriorado'>Deteriorado</option>
            </select>
         <label for="ematur">
        13) Estágio de maturação: </label>
            <SELECT NAME='ematur' type='text' id='ematur' tabindex="5">

            <OPTION selected="selected" value="<?php echo"$ematur";?>" ><?php echo"$ematur";?></option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            </select>

         <?php
               if($histo == "Sim")
               {$c = "checked";}
               else{
		       if($histo == "Não")
               {$cc = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        14) Histologia:  </label>
            <input type="radio" name="histo"  value="Sim" <?php echo"$c";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="histo" value="Não" <?php echo"$cc";?> >Não


             <?php
               if($teci == "Sim")
               {$e = "checked";}
               else{
		       if($teci == "Não")
               {$ee = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        15) Tecido:  </label>
           <!-- <input type="radio" name="teci"  value="Sim"  <?php echo"$e";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="teci" value="Não" <?php echo"$ee";?> >Não-->
                    <input name="teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$teci"; ?>" />



              <?php
               if($cresc == "Nenhum")
               {$j = "checked";}
               else{
		       if($cresc == "Otólito")
               {$jj = "checked";}
               else{
               		if($cresc == "Escama")
                {$jjj = "checked";}
                else{

               }}}
                // echo"$malh_gr--$bb";
               ?>
            <label for="transparencia">
        16) Crescimento:  </label>
            <input type="radio" name="malh_cresc"  value="Nenhum"  <?php echo"$j";?>  />Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_cresc" value="Otólito" <?php echo"$jj";?>  />Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="malh_cresc"  value="Escama"  <?php echo"$jjj";?>  />Escama
            <br /><br />


             <?php
               if($foto == "Sim")
               {$f = "checked";}
               else{
		       if($foto == "Não")
               {$ff = "checked";}
               else{
               		}}

                    //echo"$malh_foto";
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
            <label for="aparelho">
        17) Foto:  </label>
            <input type="radio" name="foto"  value="Sim" <?php echo"$f";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="foto" value="Não" <?php echo"$ff";?> >Não



             <?php
               if($col == "Sim")
               {$g = "checked";}
               else{
		       if($col == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
           <label for="aparelho">
        18) Coleção:  </label>
                           <input name="esp_voucher1" type="text" id="esp_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$voucher"; ?>" />

           <!--  <input type="radio" name="col"  value="Sim"  <?php echo"$g";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="col" value="Não" <?php echo"$gg";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='voucher1' type='text' id='malh_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$voucher";?>" ><?php echo"$voucher";?></option>-->

         <!--</select>  -->


          <label for="determinador">
        19) Determinador: </label>
            <SELECT NAME='det' type='text' id='ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$det";?>"><?php echo"$det";?> </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>


          <label for="obs">
          20) Observações:  </label>
            <textarea type="radio" name="obs" cols="50" rows="5" tabindex="7" value="<?php echo"$obs";?>" ><?php echo"$obs";?></textarea>













            <br /><br />


























             </fieldset>




          <div id="botao1">   <input type="submit" value="Editar" /> <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>


  <?php


   }
 else if ($aparelho  == "Arrasto de fundo")
   {

  ?>

 <!--  Arrasto   start -->
  <?php

$res = mysql_query("SELECT * FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_arrastofundo = $registro[0];
 $arr_qtde = $registro[1];
 $arr_lim = $registro[2];

$arr_data = $registro[3];
$data11 = explode("-", $arr_data);
$arr_dia = $data11[2];
$arr_mes = $data11[1];
$arr_ano = $data11[0];

$arr_hora = $registro[4];
$hora11 = explode(":", $arr_hora);
$arr_h = $hora11[0];
$arr_m = $hora11[1];

$arr_numero = $registro[5];
$arr_especie = $registro[6];
$arr_teci = $registro[7];
$arr_foto = $registro[8];
$arr_col = $registro[9];

$arr_voucher = $registro[10];
$arr_obs = $registro[11];
$arr_det = $registro[12];
$arr_larva = $registro[15];
}
$num = mysql_num_rows($res);




			$res6 = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = '$arr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$arr_cod = $registro6[1];
            }
             // echo"$arr_cod";
            //  echo"$cod";

  ?>

<h3>Editar registro de Arrasto de fundo</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Arrasto de fundo&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='arr_lim' type='text' id='arr_lim' tabindex="1" ><OPTION>

              <OPTION selected="selected" value="<?php echo"$arr_lim";?>" ><?php echo"$arr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_arr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[1];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='arr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$arr_h";?>" ><?php echo"$arr_h";?></option>
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
              <SELECT name='arr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$arr_m";?>" ><?php echo"$arr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='arr_especie' type='text' id='arr_especie' tabindex="1" ><OPTION>
             <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $arr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$arr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$arr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="arr_qtde" type="text" id="arr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$arr_qtde";?>" />



         <?php
               if($arr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($arr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
        <label for="quantidade">
        5) Coleção: </label>
                   <input name="arr_voucher1" type="text" id="arr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$arr_voucher"; ?>" />

          <!--    <input type="radio" name="arr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="arr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='arr_voucher1' type='text' id='arr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$arr_voucher";?>" ><?php echo"$arr_voucher";?></option>-->

        <!--</select> -->


               <?php
               if($arr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($arr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
             echo"$arr_col";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="arr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="arr_teci" value="Não" <?php echo"$gg";?> >Não-->
                    <input name="arr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$arr_teci"; ?>" />



              <?php
               if($arr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($arr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="arr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="arr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="arr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$arr_obs";?>"><?php echo"$arr_obs";?></textarea>


         <label for="determinador">
        9) Determinador: </label>
            <SELECT NAME='arr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$arr_det";?>"><?php echo"$arr_det";?> </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>
          <?php
               if($arr_larva == "N")
               {$l = "checked";}
               else{
		       if($arr_larva == "L")
               {$ll = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
          <label for="larva">
        8) Larva:  </label>
            <input type="radio" name="arr_larva"  value="N" class="checkbox" <?php echo"$l";?>   >Não Larva&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="arr_larva" value="L" class="checkbox" <?php echo"$ll";?>  >Larva



             </fieldset>

  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!--  Arrasto   end -->
  <?php

   }
   else if($aparelho == "Puça")
   {

   $res = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_outros = $registro[0];
 $outr_qtde = $registro[1];
 $outr_lim = $registro[2];

$outr_data = $registro[3];
$data11 = explode("-", $outr_data);
$outr_dia = $data11[2];
$outr_mes = $data11[1];
$outr_ano = $data11[0];

$outr_hora = $registro[4];
$hora11 = explode(":", $outr_hora);
$outr_h = $hora11[0];
$outr_m = $hora11[1];

$outr_numero = $registro[5];
$outr_especie = $registro[6];
$outr_teci = $registro[7];
$outr_foto = $registro[8];
$outr_col = $registro[9];
$outr_voucher = $registro[10];
$outr_obs = $registro[11];
$outr_det = $registro[12];

}
$num = mysql_num_rows($res);
     		$res6 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$outr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$outr_cod = $registro6[5];


		    }
    ?>

 <!--  Outros   start -->


<h3>Editar registro de Outros Aparelhos</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Outros&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                              <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='outr_lim' type='text' id='outr_lim' tabindex="1" ><OPTION>
              <OPTION selected="selected" value="<?php echo"$cad_lim";?>" ><?php echo"$outr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='outr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$outr_h";?>" ><?php echo"$outr_h";?></option>
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
              <SELECT name='outr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$outr_m";?>" ><?php echo"$outr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='outr_especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $outr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$outr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$outr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="outr_qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$outr_qtde";?>" />




         <?php
               if($outr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($outr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
       <label for="quantidade">
        5) Coleção: </label>
                           <input name="outr_voucher1" type="text" id="outr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$outr_voucher"; ?>" />

          <!--     <input type="radio" name="outr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$outr_voucher";?>" ><?php echo"$outr_voucher";?></option>-->

          <!--</select>    -->


               <?php
               if($outr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($outr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="outr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" <?php echo"$gg";?> >Não-->

                      <input name="outr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$outr_teci"; ?>" />


              <?php
               if($outr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($outr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="outr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="outr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$outr_obs";?>"><?php echo"$outr_obs";?></textarea>



         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='outr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$outr_det";?>"><?php echo"$outr_det";?>  </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>





             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!-- Outros   end -->
  <?php
  }





else if($aparelho == "Outros")
   {

   $res = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_outros = $registro[0];
 $outr_qtde = $registro[1];
 $outr_lim = $registro[2];

$outr_data = $registro[3];
$data11 = explode("-", $outr_data);
$outr_dia = $data11[2];
$outr_mes = $data11[1];
$outr_ano = $data11[0];

$outr_hora = $registro[4];
$hora11 = explode(":", $outr_hora);
$outr_h = $hora11[0];
$outr_m = $hora11[1];

$outr_numero = $registro[5];
$outr_especie = $registro[6];
$outr_teci = $registro[7];
$outr_foto = $registro[8];
$outr_col = $registro[9];
$outr_voucher = $registro[10];
$outr_obs = $registro[11];
$outr_det = $registro[12];

}
$num = mysql_num_rows($res);
     		$res6 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$outr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$outr_cod = $registro6[5];


		    }
    ?>

 <!--  Outros   start -->


<h3>Editar registro de Outros Aparelhos</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Outros&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                              <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='outr_lim' type='text' id='outr_lim' tabindex="1" ><OPTION>
              <OPTION selected="selected" value="<?php echo"$cad_lim";?>" ><?php echo"$outr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='outr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$outr_h";?>" ><?php echo"$outr_h";?></option>
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
              <SELECT name='outr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$outr_m";?>" ><?php echo"$outr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='outr_especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $outr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$outr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$outr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="outr_qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$outr_qtde";?>" />




         <?php
               if($outr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($outr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
       <label for="quantidade">
        5) Coleção: </label>
                           <input name="outr_voucher1" type="text" id="outr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$outr_voucher"; ?>" />

          <!--     <input type="radio" name="outr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$outr_voucher";?>" ><?php echo"$outr_voucher";?></option>-->

          <!--</select>    -->


               <?php
               if($outr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($outr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="outr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" <?php echo"$gg";?> >Não-->

                      <input name="outr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$outr_teci"; ?>" />


              <?php
               if($outr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($outr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="outr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="outr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$outr_obs";?>"><?php echo"$outr_obs";?></textarea>



         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='outr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$outr_det";?>"><?php echo"$outr_det";?>  </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>





             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!-- Outros   end -->
  <?php
  }



 else if($aparelho == "Manual")
   {

   $res = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_outros = $registro[0];
 $outr_qtde = $registro[1];
 $outr_lim = $registro[2];

$outr_data = $registro[3];
$data11 = explode("-", $outr_data);
$outr_dia = $data11[2];
$outr_mes = $data11[1];
$outr_ano = $data11[0];

$outr_hora = $registro[4];
$hora11 = explode(":", $outr_hora);
$outr_h = $hora11[0];
$outr_m = $hora11[1];

$outr_numero = $registro[5];
$outr_especie = $registro[6];
$outr_teci = $registro[7];
$outr_foto = $registro[8];
$outr_col = $registro[9];
$outr_voucher = $registro[10];
$outr_obs = $registro[11];
$outr_det = $registro[12];

}
$num = mysql_num_rows($res);
     		$res6 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$outr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$outr_cod = $registro6[5];


		    }
    ?>

 <!--  Outros   start -->


<h3>Editar registro de Outros Aparelhos</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Outros&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                              <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='outr_lim' type='text' id='outr_lim' tabindex="1" ><OPTION>
              <OPTION selected="selected" value="<?php echo"$cad_lim";?>" ><?php echo"$outr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='outr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$outr_h";?>" ><?php echo"$outr_h";?></option>
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
              <SELECT name='outr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$outr_m";?>" ><?php echo"$outr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='outr_especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $outr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$outr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$outr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="outr_qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$outr_qtde";?>" />




         <?php
               if($outr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($outr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
       <label for="quantidade">
        5) Coleção: </label>
                           <input name="outr_voucher1" type="text" id="outr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$outr_voucher"; ?>" />

          <!--     <input type="radio" name="outr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$outr_voucher";?>" ><?php echo"$outr_voucher";?></option>-->

          <!--</select>    -->


               <?php
               if($outr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($outr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="outr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" <?php echo"$gg";?> >Não-->

                      <input name="outr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$outr_teci"; ?>" />


              <?php
               if($outr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($outr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="outr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="outr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$outr_obs";?>"><?php echo"$outr_obs";?></textarea>



         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='outr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$outr_det";?>"><?php echo"$outr_det";?>  </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>





             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!-- Outros   end -->
  <?php
  }



  else if($aparelho == "Caniço")
   {

   $res = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_outros = $registro[0];
 $outr_qtde = $registro[1];
 $outr_lim = $registro[2];

$outr_data = $registro[3];
$data11 = explode("-", $outr_data);
$outr_dia = $data11[2];
$outr_mes = $data11[1];
$outr_ano = $data11[0];

$outr_hora = $registro[4];
$hora11 = explode(":", $outr_hora);
$outr_h = $hora11[0];
$outr_m = $hora11[1];

$outr_numero = $registro[5];
$outr_especie = $registro[6];
$outr_teci = $registro[7];
$outr_foto = $registro[8];
$outr_col = $registro[9];
$outr_voucher = $registro[10];
$outr_obs = $registro[11];
$outr_det = $registro[12];

}
$num = mysql_num_rows($res);
     		$res6 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$outr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$outr_cod = $registro6[5];


		    }
    ?>

 <!--  Outros   start -->


<h3>Editar registro de Outros Aparelhos</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Outros&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                              <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='outr_lim' type='text' id='outr_lim' tabindex="1" ><OPTION>
              <OPTION selected="selected" value="<?php echo"$cad_lim";?>" ><?php echo"$outr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='outr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$outr_h";?>" ><?php echo"$outr_h";?></option>
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
              <SELECT name='outr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$outr_m";?>" ><?php echo"$outr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='outr_especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $outr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$outr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$outr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="outr_qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$outr_qtde";?>" />




         <?php
               if($outr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($outr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
       <label for="quantidade">
        5) Coleção: </label>
                           <input name="outr_voucher1" type="text" id="outr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$outr_voucher"; ?>" />

          <!--     <input type="radio" name="outr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$outr_voucher";?>" ><?php echo"$outr_voucher";?></option>-->

          <!--</select>    -->


               <?php
               if($outr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($outr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="outr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" <?php echo"$gg";?> >Não-->

                      <input name="outr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$outr_teci"; ?>" />


              <?php
               if($outr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($outr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="outr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="outr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$outr_obs";?>"><?php echo"$outr_obs";?></textarea>



         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='outr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$outr_det";?>"><?php echo"$outr_det";?>  </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>





             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!-- Outros   end -->
  <?php
  }







else if($aparelho == "Tarrafa")
   {

   $res = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros = '$id'");
while($registro = mysql_fetch_row($res))
 {
 $id_tb_outros = $registro[0];
 $outr_qtde = $registro[1];
 $outr_lim = $registro[2];

$outr_data = $registro[3];
$data11 = explode("-", $outr_data);
$outr_dia = $data11[2];
$outr_mes = $data11[1];
$outr_ano = $data11[0];

$outr_hora = $registro[4];
$hora11 = explode(":", $outr_hora);
$outr_h = $hora11[0];
$outr_m = $hora11[1];

$outr_numero = $registro[5];
$outr_especie = $registro[6];
$outr_teci = $registro[7];
$outr_foto = $registro[8];
$outr_col = $registro[9];
$outr_voucher = $registro[10];
$outr_obs = $registro[11];
$outr_det = $registro[12];

}
$num = mysql_num_rows($res);
     		$res6 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$outr_lim'");
		    while($registro6 = mysql_fetch_row($res6))
		    {
		    $id_tab_limno1 = $registro6[0];
			$outr_cod = $registro6[5];


		    }
    ?>

 <!--  Outros   start -->


<h3>Editar registro de Outros Aparelhos</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_malh_enviar&idd=<?php echo"$id";?>&aparelho=Outros&cod=<?php echo"$cod"; ?>" enctype="multipart/form-data">
             <fieldset>
                              <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='outr_lim' type='text' id='outr_lim' tabindex="1" ><OPTION>
              <OPTION selected="selected" value="<?php echo"$cad_lim";?>" ><?php echo"$outr_cod";?></option>
             <?php
            include "config.php";
			$res = mysql_query("SELECT * FROM tb_limno_outr");
		    while($registro = mysql_fetch_row($res))
		    {
		    $id_tab_limno = $registro[0];
			$lim_cod = $registro[5];
            echo "<option value=\"$id_tab_limno\">$lim_cod</option>\n";
		    }
	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='outr_h' type='text' id='hora' tabindex="2">
                    <OPTION selected="selected" value="<?php echo"$outr_h";?>" ><?php echo"$outr_h";?></option>
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
              <SELECT name='outr_m' type='text' id='min' tabindex="3">
                            <OPTION selected="selected" value="<?php echo"$outr_m";?>" ><?php echo"$outr_m";?></option>
                <option value='00'>00</option>
                <option value='15'>15</option>
                <option value='30'>30</option>
                <option value='45'>45</option>
              </select>


             <label for="especie">
        3) Espécie:  </label>
            <SELECT name='outr_especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
            <?php
            $res6 = mysql_query("SELECT * FROM tb_especies WHERE id_tab_especie = $outr_especie");
            while($registro6 = mysql_fetch_row($res6)){$id_tab_especie6 = $registro6[0];$outr_especie6 = $registro6[3];}
             ?>
               <OPTION selected="selected" value="<?php echo"$id_tab_especie6";?>" ><?php echo"$outr_especie6";?></option>
            <?php
            include "config.php";
            $res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_especie ASC");
            while($registro = mysql_fetch_row($res))
            {
            $id_tab_especie = $registro[0];
            $malh_especie = $registro[3];
            echo "<option value=\"$id_tab_especie\">$malh_especie</option>\n";
            }
            ?></select><!--<a href="tb_especies_inserir.php" title="Inserir nova espécie" target="_blank">Nova espécie</a> -->


        <label for="comprimento">
        4) Quantidade: </label>
            <input name="outr_qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5"  value="<?php echo"$outr_qtde";?>" />




         <?php
               if($outr_col == "Sim")
               {$g1 = "checked";}
               else{
		       if($outr_col == "Não")
               {$gg1 = "checked";}
               else{
               		}}
                //echo"$lim_arr_marg--$a--$aa--$aaa";
               ?>
       <label for="quantidade">
        5) Coleção: </label>
                           <input name="outr_voucher1" type="text" id="outr_voucher1" tabindex="6" accesskey="c" size="8" value="<?php echo "$outr_voucher"; ?>" />

          <!--     <input type="radio" name="outr_col"  value="Sim"  <?php echo"$g1";?>>Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_col" value="Não" <?php echo"$gg1";?>>Não&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de voucher:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>
            <OPTION selected="selected" value="<?php echo"$outr_voucher";?>" ><?php echo"$outr_voucher";?></option>-->

          <!--</select>    -->


               <?php
               if($outr_teci == "Sim")
               {$g = "checked";}
               else{
		       if($outr_teci == "Não")
               {$gg = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>

           <label for="aparelho">
        6) Tecido:  </label>
           <!-- <input type="radio" name="outr_teci"  value="Sim" <?php echo"$g";?> >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" <?php echo"$gg";?> >Não-->

                      <input name="outr_teci" type="text" id="red_teci" tabindex="11" accesskey="c" size="8" value="<?php echo "$outr_teci"; ?>" />


              <?php
               if($outr_foto == "Sim")
               {$i = "checked";}
               else{
		       if($outr_foto == "Não")
               {$ii = "checked";}
               else{
               		}}
                //echo"$lim_outr_marg--$a--$aa--$aaa";
               ?>



            <label for="aparelho">
        7) Foto:  </label>
            <input type="radio" name="outr_foto"  value="Sim"  <?php echo"$i";?>  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_foto" value="Não"  <?php echo"$ii";?> >Não




            <label for="aparelho">

        8) Observações:  </label>
            <textarea type="radio" name="outr_obs" cols="50" rows="5" tabindex="7"  value="<?php echo"$outr_obs";?>"><?php echo"$outr_obs";?></textarea>



         <label for="determinador">
        17) Determinador: </label>
            <SELECT NAME='outr_det' type='text' id='outr_ematur' tabindex="8">
            <OPTION selected="selected" value="<?php echo"$outr_det";?>"><?php echo"$outr_det";?>  </option>
             <?php
             $lista = new ManipulateData();
             $lista->geraListaPesq();
             ?>
            </select>





             </fieldset>
              <br />
  <div id="botao1">   <input type="submit" value="Editar" /><!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<!-- Outros   end -->
  <?php
  }
















?>

<!--Área editável fim     -->



</div>
