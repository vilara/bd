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
$subpro = $_COOKIE["subpro"];
     
$contar = new ManipulateData();
        $contar->setTable("usu_senha");
        $contar->setFieldID("usu_senha");
        $nums = $contar->getContarDados("$senha");

        if ($nums >= 1 AND ($subpro == "pesca" OR $subpro == "Todos"))
		{
		?>
<div id="conteudo">

<h3>Bem Vindo!</h3>
 <p><h4>Este � o Portal do Banco de Dados do Laborat�rio de Pesca da Funda��o Universidade Federal de Rond�nia.</h4></p>
  <?php
		}
      	else
		{
		?>
 <div id="conteudo">
        <form id="forms" method="post" action="log_entra.php" enctype="multipart/form-data">
        Usu�rio&nbsp;&nbsp;<input name="usu" type="text" tabindex="1" accesskey="p"  class="input" />&nbsp;&nbsp;    Senha&nbsp;&nbsp;<input name="senha" type="password"  tabindex="2" accesskey="c"  class="input" /><input type="submit" name="ENVIAR" align="center" value="OK" class="submit"  />
        </form>
        </div>


  <?php
     }
     ?>
   </div>
<!-- RESULTADO -->
    <?php
    if ($flag == 1)
    {
    include_once "consulta/colecao_mostrar.php";
   }
    ?>