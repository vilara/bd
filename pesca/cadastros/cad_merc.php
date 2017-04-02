 <?php  include "log_auth1.php"; ?>
<?php // include "log_auth3.php"; ?>
<div id="conteudo1">

<div id="caixa1_1">


        <h3>Cadastro de Mercado</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=cadastros/cad_merc_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="municipio">
              1) Nome:  </label>
              <input name="nome" type="text"  id="nome" tabindex="1" accesskey="n" size="50" /><span class="notas"></span>



              <label for="municipio">
              2) Município:  </label>
              <SELECT name='mun'  type='text' id='mun' tabindex="1" >
              <option>&nbsp;</option>
    <?php
    $lista = new ManipulateData();
    $lista->geraListaMun();
    ?>
    </select>

              </fieldset>
                     <br />
             <input type="submit" value="ENVIAR" class="botao2"  />
             </form>


</div>
<!--Área editável fim     -->
</div>
