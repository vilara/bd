
 <?php

//  include_once "log_auth.php";
$flag = $_GET["flag"];
if ($flag == 1)
{
 $apar = $_POST["aparelho"];
  $ex = $_POST["exc"];
     $bio = $_POST["bio_nr"];
}
 $l = $_POST["l"];
     if ($l == ""){$l = "Todos";}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do número de espécies capturadas</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/lista_pres_nt&flag=1" enctype="multipart/form-data">
    <fieldset>

        <label for="limno">
            1) Excursão:

             <input name='exc' type='text' value = 'Nova_terra'  tabindex="1" >
              <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$ex."\">".$ex."</option>" ;
}
?>

           <!--  <option value='Nova_Terra'>Nova_Terra</option>


        </select>-->

            </label>&nbsp;&nbsp;&nbsp;



<label for="inicial">
2) Aparelho de pesca: <input NAME='aparelho' type='text' value='Todos' tabindex="1">
         <?php
/*$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$apar."\">".$apar."</option>" ;
}*/
?>

              <!--<option value='Todos'>Todos</option>-->
              <!--   <option value='Todo'>Todo</option>
                <option value='Malhadeira'>Malhadeira</option>
                 <option value='Redinha'>Redinha</option>
                 <option value='Arrasto de fundo'>Arrasto Bentônico</option>
                 <option value='Espinhel'>Espinhel</option>
                 <option value='Puça'>Puça</option>-->
                <!-- <option value='Malha + Rede'>Malha + Rede</option>  -->
                <!--</select>   -->

</label> &nbsp;&nbsp;&nbsp;



   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "lista_pres_mostrar_nt.php";
}
          ?>