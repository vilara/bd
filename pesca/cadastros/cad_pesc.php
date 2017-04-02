 <?php  include "log_auth1.php"; ?>
<?php // include "log_auth3.php"; ?>
<div id="conteudo1">

<div id="caixa1_1">


        <h3>Cadastro de Pescadores</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=cadastros/cad_pesc_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="municipio">
              1) Nome completo:  </label>
              <input name="nome" type="text"  id="nome" tabindex="1" accesskey="n" size="50" /><span class="notas">Sem abreviaturas</span>


              <label for="Primeiro nome">
              2) Apelido: </label>
              <input name="apelido" type="text" id="apelido" tabindex="2" accesskey="p" size="15" /><span class="notas"></span>

               <label for="rgp">3) Registro Geral de Pescador: </label>
    <input name="rgp" type="text" id="rgp" tabindex="9" size="10" /> (Sem hífen)

     <label for="loc">4) Localidade:   </label>
    <SELECT name='loc'  type='text' id='loc' tabindex="5" >
     <option value='#'>&nbsp;</option>
    <?php

$lista = new ManipulateData();
    $lista->geraListalocali();
    ?>
    </select>




        <label for="ori">5) Origem:  </label>
            <select name='ori' type='text' id='ori' tabindex="1">

        <option value='F'>Familiar</option>
        <option value='C'>Caderno</option>
         <option value='A'>Ambos</option>


        </select>
              </fieldset>
                     <br />
             <input type="submit" value="ENVIAR" class="botao2"  />
             </form>


</div>
<!--Área editável fim     -->
</div>
