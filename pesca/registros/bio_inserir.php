<script language=javascript>

function destino(){
url = document.navegador.exc.options[document.navegador.exc.selectedIndex].value
if (url != " no") window.location = url;
}

</script>

 <?php // include "log_auth.php"; ?>

 <?php
$lista = new ManipulateData();
$exc = $_GET["exc"];
$cod = $_GET["cod"];
$flag = $_GET["flag"];

$lista->setTable("tb_limno");
$lista->setFieldId("id_tb_limno ='$cod'");
$lista->setFieldNr("1"); $cod1 = $lista->data_filter();


// include "log_auth.php";
?>

<div id="conteudo1">

        <div id="caixa1_1">
        <h1>Biologia de amostras</h1>
        <h3>&nbsp;</h3>

<!--Área editável início     -->
<form name="navegador" method="post" action="index.php?secoes=registros/bio_enviar&flag=1&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">

 <fieldset>

    <label for="exc">1) Excursao:
    <SELECT name='exc' onchange="destino()"  type='text' id='exc' tabindex="1" >
      <option value='index.php?secoes=registros/bio_inserir&flag=1'><?php echo"$exc"; ?></option>

    <?php
    $lista->geraListaExc1($flag);
    ?>
    </select>
    </label>

    <?php
    if ($flag == 1)
    {
    ?>
    <label for="cod">2) Código:
    <SELECT name='cod' type='text' id='cod' tabindex="2" >
    <option value='<?php echo"$cod"; ?>'><?php echo"$cod1"; ?></option>
    <?php
    $lista->geraListaCod($exc);
    ?>
    </select>
    </label>
    <?php
    $res = mysql_query("SELECT * FROM tb_limno WHERE exc = '$exc' ");
    $num = mysql_num_rows($res);
    if ($num > 0)
    {
    ?>
    <label for="esp">3) Espécie:
            <SELECT name='esp' type='text' id='esp' tabindex="3" >
            <?php
            $lista->geraListaEspecies();
            ?>
            </select>
            <!--<a href="index.php?secoes=cadastros/esp_inserir" title="Inserir nova espécie" target="_blank">Cadastrar espécie</a>-->
       </label>

    <label for="dlarval">4) Desenvolvimento larval:
    <select name='dlarval' type='text' id='dlarval' tabindex="4">
        <option value=''>&nbsp;</option>
        <option value='I'>Vitelina</option>
        <option value='II'>Pré-Flexão</option>
        <option value='III'>Flexão</option>
        <option value='IV'>Pós-Flexão</option>
        <option value='V'>Juvenil</option>
    </select></label>

    <label for="cp">5) Comprimento:
    <input name="cp" type="text" id="cp" tabindex="5" size="10" /> mm </label>


</fieldset>


   <br />
   <input type="submit" value="ENVIAR" class="botao2"  />
   <?php
   }
   }
   ?> <br />
</form>

<!--Área editável fim     -->

</div>
</div>

