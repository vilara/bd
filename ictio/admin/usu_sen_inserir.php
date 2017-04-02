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
<?php // include "../log_auth3.php"; ?>
   <div id="edicao">

       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de nova senha</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=admin/usu_sen_enviar" enctype="multipart/form-data">
             <fieldset>

                          <label for="usuario">
             1) Usuário:  </label>
             <SELECT name='usu' type='text' id=usu' tabindex="1" ><OPTION>
             <?php
                $lista = new ManipulateData();
                $lista->geraListaUsu();
           	 ?>
            </select>
               <label for="senha">
             2) Nova senha:  </label>
              <input name="usu_senha" type="password" id="usu_senha" tabindex="16" size="10" /><span class="notas">(6 caracteres)</span>
             <label for="conf_senha">
             3) Confirmar nova senha:  </label>
              <input name="usu_csenha" type="password" id="usu_csenha" tabindex="17"  size="10" />
              </fieldset>

            <center> <input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>



<!--Área editável fim     -->
</div>
