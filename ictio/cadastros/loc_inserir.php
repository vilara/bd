<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

<?php include "../log_auth.php"; ?>
     <div id="edicao">

        <!--<h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Cadastro de local</h3>

<!--Área editável início     -->


<form id="formulario1" method="post" action="?secoes=cadastros/loc_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="codigo">
              1)Código:  </label>
              <input name="loc_codigo" type="text"  id="loc_codigo" tabindex="1" accesskey="n" size="3" />


              <label for="descricao">
              2) Descrição: </label>
              <textarea name="loc_descricao" type="text" id="loc_descricao" tabindex="2" accesskey="p" cols="40" rows="3"></textarea>

               <label for="localidade">
              3) Localidade: </label>
              <input name="loc_localidade" type="text" id="loc_localidade" tabindex="3" accesskey="c" size="30" />

              <label for="municipio">
              4) Munucípio: </label>
              <input name="loc_municipio" type="text" id="loc_municipio" tabindex="4"  size="25" />


              <label for="estado">
              5) Estado: </label>
              <input name="loc_estado" type="text" id="loc_estado" tabindex="5"  size="12" />



               <label for="latitude">
              6) Latitude:  </label>
              <input name="loc_latitude" type="text" id="loc_latitude" tabindex="6" size="2" />Graus
               &nbsp;&nbsp;&nbsp;&nbsp; <input name="loc_latitude" type="text" id="loc_latitude" tabindex="6" size="2" />Min
                 &nbsp;&nbsp;&nbsp;&nbsp; <input name="loc_latitude" type="text" id="loc_latitude" tabindex="6" size="2" />Seg
             <label for="longitude">
              7) Longitude:  </label>
              <input name="loc_longitude" type="text" id="loc_longitude" tabindex="6" size="2" />Graus
                &nbsp;&nbsp;&nbsp;&nbsp;<input name="loc_longitude" type="text" id="loc_latitude" tabindex="6" size="2" />Min
                &nbsp;&nbsp;&nbsp;&nbsp;  <input name="loc_longitude" type="text" id="loc_latitude" tabindex="6" size="2" />Seg


              </fieldset>



               <br />
  <center> <input type="submit" value="ENVIAR" class="botao2"  />  </center>
             </form>





<!--Área editável fim     -->



</div>
