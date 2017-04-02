<?php
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];?>

<div id="conteudo">
	<div id="login">
        <?php
        $contar = new ManipulateData();
        $contar->setTable("senha");
        $contar->setFieldID("pass_usu");
        $nums = $contar->getContarDados("$usu");
        if ($nums != 1)
		{
		?>

        <form id="forms" method="post" action="log_entra.php" enctype="multipart/form-data">
        Usuário&nbsp;&nbsp;<input name="usu" type="text" tabindex="1" accesskey="p"  class="input" />&nbsp;&nbsp;    Senha&nbsp;&nbsp;<input name="senha" type="password"  tabindex="2" accesskey="c"  class="input" /><input type="submit" name="ENVIAR" align="center" value="OK" class="submit"  />
        </form>

        <?php
		}
		else
		{
		?>
        </div>

<h3>Bem Vindo!</h3>
 <p>Banco de Dados da Tese de Doutorado de Gislene Torrente Vilara &nbsp;&nbsp;&nbsp;<a href="log_out.php">(Sair)</a></p>
     <?php
     }
     ?>
          </div>