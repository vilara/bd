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

<?php include "log_auth1.php"; ?>
     <div id="edicao">

       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de Determinador</h3>
<form id="formulario1" method="post" action="?secoes=cadastros/det_enviar" enctype="multipart/form-data">
             <fieldset>


              <label for="especie">
              1)Nome completo: </label>
              <input name="det" type="text" id="det" tabindex="4"  size="20" />

             <label for="especie">
             2)Citação: </label>
              <input name="cit" type="text" id="cit" tabindex="4"  size="20" /> (Exemplo:  Torrente-Vilara, G.)

              <label for="especie">
             3)Função: </label>
             <SELECT NAME='func' type='text' id='func' tabindex="17">
            <option value='#'>Select</option>
             <option value='Pesquisador'>Pesquisador</option>
             <option value='Tecnico'>Técnico</option>
              <option value='Consultor'>Consultor</option>
               <option value='Pescador'>Pescador</option>
               <option value='Colaborador'>Colaborador</option>
           </select>
              </fieldset>



               <br />
  <center> <input type="submit" value="ENVIAR" class="botao2"  />   </center>
             </form>



<!--Área editável fim     -->



</div>
