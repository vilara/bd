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

$empr = $_GET["empr"];
$dia = $_GET["dia"];
$mes = $_GET["mes"];
$ano = $_GET["ano"];


$loc = $_GET["loc"];
$lista->setTable("pesc_localidade");
$lista->setFieldId("id_locali ='$loc'");
$lista->setFieldNr("1"); $loc1 = $lista->data_filter();


// include "log_auth.php";
?>

<div id="conteudo1">

        <div id="caixa1_1">
        <h1>Registros de caderno</h1>
        <h3>&nbsp;</h3>

<!--Área editável início     -->
<form name="navegador" method="post" action="index.php?secoes=registros/pesc_caderno_enviar&flag=1&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">

 <fieldset>
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
      <label for="empr">1) Empreendimento:
            <select name='empr' type='text' id='empr' tabindex="1">
        <option value='JM' <?php echo"$e";?> >Jirau Montante</option>
        <option value='JS' <?php echo"$ee";?> >Jirau Jusante</option>
        <option value='SM' <?php echo"$eee";?> >Santo Antônio Montante</option>
        <option value='SJ' <?php echo"$eeee";?> >Santo Antônio Jusante</option>

        </select>
     </label>
 <label for="data">1) Data:
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
        </select> dd/mm/aaaa
     </label>

    <label for="loc">2) Localidade:
    <SELECT name='loc'  type='text' id='merc' tabindex="1" >
      <option value='<?php echo "$loc"; ?>'><?php echo"$loc1"; ?></option>
      <option></option>

    <?php
    $lista->geraListaLocali();
    ?>
    </select>
    </label>


        <label for="func">3) Função:
    <select name='func' type='text' id='func' tabindex="4">
        <option value=''>&nbsp;</option>
        <option value='P' selected="selected">Pescador</option>
        <option value='A'>Atravessador</option>
        <option value='PA'>Ambos</option>
        </select></label>


     <label for="pesc">5) Pescador:
    <SELECT name='pesc'  type='text' id='pesc' tabindex="1" >
      <option>&nbsp;</option>

    <?php
    $lista->geraListaPescC();
    ?>
    </select>
    </label>

    <label for="tx">6) Taxa de 5%:
    <input name="tx" type="text" id="tx" tabindex="5" size="10" />R$</label>

    <label for="va">7) Valor de 100%:
    <input name="va" type="text" id="va" tabindex="5" size="10" />R$</label>

    <label for="re">8) Rendimento:
    <input name="re" type="text" id="re" tabindex="5" size="10" />Kg</label>





 <label for="esp">9) Categoria:
     <SELECT name='esp' type='text' id='esp' tabindex="3" >
       <option value=''>&nbsp;</option>
       <option value='Geral'>Geral</option>

     <?php
            $lista->geraListaCateg();
            ?>
            </select></label>

      <label for="qtde">9) Qtde:   <input type="text" name="qtde" size="5" tabindex="7" /></label>

      <label for="ori">9) Origem:
    <select name='ori' type='text' id='ori' tabindex="4">
        <option value='B'>Barco pescador</option>
        <option value='R'>Barco recreio</option>
         <option value='CN'>Canoa</option>
        <option value='CR'>Carro</option>
        </select></label>


            <label for="que">10) Questionário:
    <select name='que' type='text' id='que' tabindex="4">

        <option value='S'>Sim</option>
        <option value='N' selected >Não</option>
        </select></label>

 <label for="fo">11) Fonte:
    <input name="fo" type="text" id="fo" tabindex="5" size="20" value="Caderno do cai n`água" /></label>

   <label for="obs">12) Obs:<br />
   <textarea type="text" name="obs" cols="25" rows="5" tabindex="7"></textarea></label>



</fieldset>


   <br />
   <input type="submit" value="ENVIAR" class="botao2"  />
   <?php


   ?> <br />
</form>

<!--Área editável fim     -->

</div>
</div>

