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

<?php include "log_auth3.php"; ?>
     <div id="edicao">

       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de Excursão</h3>
<form id="formulario1" method="post" action="?secoes=cadastros/exc_enviar" enctype="multipart/form-data">
             <fieldset>

                <label for="exc">
              1)Número da Excursão: </label>
              <input name="exc" type="text" id="exc" tabindex="4"  size="8" />


              <label for="especie">
               1)Mês: </label>
               <SELECT name='mes' type='text' id='mes' tabindex="5">
                 <?php
                $lista = new ManipulateData();
                $lista->ListaMeses();
                ?>
              </select>


              <label for="ano"> 3) Ano:  </label>
              <SELECT name='ano' type='text' id='ano' tabindex="15">

                <option value='2008'>2008</option>
                 <option value='2009'>2009</option>
                  <option value='2010'>2010</option>
 <option value='2011'>2011</option>

                  <option value='2012'>2012</option>
                                    <option value='2013' selected="selected">2013</option>

               </select>


              </fieldset>



               <br />
  <center> <input type="submit" value="ENVIAR" class="botao2"  />   </center>
             </form>



<!--Área editável fim     -->



</div>
