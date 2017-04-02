 <?php include "log_auth1.php"; ?>
<?php // include "log_auth3.php"; ?>
<div id="conteudo1">

<div id="caixa1_1">


        <h3>Cadastro de localidades</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=cadastros/cad_loc_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="municipio">
              1) Município:  </label>
              <SELECT name='mun'  type='text' id='mun' tabindex="1" >
              <option>&nbsp;</option>
    <?php
    $lista = new ManipulateData();
    $lista->geraListaMun();
    ?>
    </select>


              <label for="localidade">
              2) Localidade: </label>
              <input name="loc" type="text" id="loc" tabindex="2" accesskey="p" size="30" /><span class="notas"></span>

                 <label for="localidade">
              3) Código: </label>
              <input name="cod" type="text" id="loc" tabindex="3" accesskey="p" size="6" /><span class="notas"></span>

              </fieldset>
                     <br />
             <input type="submit" value="ENVIAR" class="botao2"  />
             </form>


</div>
<!--Área editável fim     -->
</div>
