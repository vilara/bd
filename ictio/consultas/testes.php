
 <?php
//  include_once "log_auth.php";
$flag = $_GET["flag"];
if ($flag == 1)
{
       $nr = $_POST["nr"];
}

?>
<div id="conteudo">
<h3>Parâmetros da consulta </h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/testes&flag=1" enctype="multipart/form-data">
    <fieldset>

         <label for="nr">
              1)Nr: </label>
              <input name="nr" type="text" id="det" tabindex="4"  size="8" />



   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
  include_once "testes_mostrar.php";
}
          ?>