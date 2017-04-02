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



$empr = $_GET["empr"];
$dia = $_GET["dia"];
$mes = $_GET["mes"];
$ano = $_GET["ano"];

$loc = $_GET["loc"];
$lista->setTable("pesc_localidade");
$lista->setFieldId("id_locali ='$loc'");
$lista->setFieldNr("1"); $loc1 = $lista->data_filter();


$pesc = $_GET["pesc"];
$lista->setTable("pesc_pescador");
$lista->setFieldId("id_pescador ='$pesc'");
$lista->setFieldNr("1"); $pesc1 = $lista->data_filter();
// include "log_auth.php";
?>

<div id="conteudo1">

        <div id="caixa1_1">
        <h1>Registros de Pesca Familiar</h1>
        <h3>&nbsp;</h3>

<!--Área editável início     -->
<form name="navegador" method="post" action="index.php?secoes=registros/pesc_fami_enviar&flag=1&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
  <?php
               if($empr == "JM")
               {$e = "selected";}
               else if($empr == "JS")
		       {$ee = "selected";}
               else if($empr == "SM")
		       {$eee = "selected";}
               else if($empr == "SJ")
		       {$eeee = "selected";}


                    //echo"$malh_foto";
                //echo"$lim_arr_marg--$a--$aa--$aaa";
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
        <SELECT name='dia' type='text' id='dia' tabindex="2">
         <option value='<?php echo "$dia"; ?>'><?php echo"$dia"; ?></option>
        <?php
        $lista->ListaDias();
        ?>
        </select>
        <SELECT name='mes' type='text' id='mes' tabindex="3">
        <option value='<?php echo "$mes"; ?>'><?php echo"$mes"; ?></option>
        <?php
        $lista->ListaMeses();
        ?>
        </select>
        <select name='ano' type='text' id='ano' tabindex="4">
        <option value='<?php echo "$ano"; ?>'><?php echo "$ano"; ?></option>
        <option value='2008'>2008</option>
        <option value='2009'>2009</option>
<option value='2010'>2010</option>
  <option value='2011'>2011</option>

           <option value='2012' "selected">2012</option>
            <option value='2013' "selected">2013</option>  
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

         <label for="pesc">4) Pescador:
    <SELECT name='pesc'  type='text' id='pesc' tabindex="6" >
      <option value='<?php echo "$pesc"; ?>'><?php echo"$pesc1"; ?></option>

    <?php
    $lista->geraListaPescF();
    ?>
    </select>
    </label>

    <label for="sit">
        5) Situação:  </label>
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit"  value="SPE"  class="checkbox" checked="checked" >Houve Pesca<br />
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit" value="NPE"  class="checkbox">Não houve pesca<br />
           &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sit"  value="ZPE"  class="checkbox" >Houve pesca nula

    <label for="categ">6) Categoria :
     <SELECT name='categ' type='text' id='categ' tabindex="7" >
     <option value=''>&nbsp;</option>
       <option value='Geral'>Geral</option>

      <?php
            $lista->geraListaCateg();
            ?>
            </select></label>



      <label for="qtde">7) Qtde:
    <input name="qtde" type="text" id="qtde" tabindex="8" size="3" value="1" />  &nbsp;&nbsp;<input type="checkbox" name="indiv" value="N" class="checkbox"  />Vários</label>

     <label for="peso_g">8) Peso total:
    <input name="peso_g" type="text" id="peso_g" tabindex="9" size="6" /><b style="color: #CC0000"  >Kg</b></label>

     <label for="qv">9) Peso venda:
    <input name="qv" type="text" id="qv" tabindex="10" size="6" /><b style="color: #CC0000"  >Kg</b></label>

    <label for="qc">10) Peso consumo:
    <input name="qc" type="text" id="qc" tabindex="11" size="6" /><b style="color: #CC0000"  >Kg</b></label>




    <label for="peso">11) Peso menor:
    <input name="peso" type="text" id="peso" tabindex="12" size="6" /><b style="color: #CC0000"  >Kg</b></label>

        <label for="comp">12) Comprimento menor:
    <input name="comp" type="text" id="comp" tabindex="13" size="6" /><b style="color: #CC0000"  >cm</b></label>

        <label for="peso_m">13) Peso maior:
    <input name="peso_m" type="text" id="peso_m" tabindex="14" size="6" /><b style="color: #CC0000"  >Kg</b></label>

        <label for="comp_m">14) Comprimento maior:
    <input name="comp_m" type="text" id="comp_m" tabindex="15" size="6" /><b style="color: #CC0000"  >cm</b></label>













           <!-- <label for="esp1">7) Categoria 2:
     <SELECT name='esp1' type='text' id='esp1' tabindex="3" > -->
            <?php
           //  $lista->geraListaCateg();
            ?>
           <!-- </select></label>  -->






   <label for="obs">15) Observações: <br />
    <textarea type="text" name="obs" cols="25" rows="5" tabindex="16"></textarea></label>



</fieldset>


   <br />
   <input type="submit" value="ENVIAR" class="botao2"  /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=registros/pesc_fami">Novo</a>
   <?php


   ?> <br />
</form>

<!--Área editável fim     -->

</div>
</div>

