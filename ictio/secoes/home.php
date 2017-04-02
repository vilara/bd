<script language=javascript>
function destino(){
url = document.navegador.op.options[document.navegador.op.selectedIndex].value
if (url != " no") window.location = url;
}
</script>

<?php

$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];


        if ($nivel >= 1)
		{
		?>
 <div id="conteudo">

<h3>Bem Vindo!</h3>
 <h4>Este é o Sistema de Banco de Dados do Projeto Madeira.</h4>

        <?php
    	}
		else
		{
		?>
        <div id="conteudo">
        <form id="forms" method="post" action="log_entra.php" enctype="multipart/form-data">
        Usuário&nbsp;&nbsp;<input name="usu" type="text" tabindex="1" accesskey="p"  class="input" />&nbsp;&nbsp;    Senha&nbsp;&nbsp;<input name="senha" type="password"  tabindex="2" accesskey="c"  class="input" /><input type="submit" name="ENVIAR" align="center" value="OK" class="submit"  />
        </form>
        </div>


  <?php
     }
     ?>
 </div>
