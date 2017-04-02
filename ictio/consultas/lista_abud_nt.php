
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

     $p = $_POST["p"];
     if ($p == ""){$p = "Grupados";}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do número de espécies capturadas</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/lista_abud_nt&flag=1" enctype="multipart/form-data">
    <fieldset>

        <label for="limno">
            1) Excursão:

             <SELECT name='exc' type='text'  tabindex="1" >
              <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$ex."\">".$ex."</option>" ;
}
?>


             <option value='Nova_Terra'>Nova_Terra</option>


        </select>

            </label>&nbsp;&nbsp;&nbsp;



<label for="inicial">
2) Aparelho de pesca: <SELECT NAME='aparelho' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$apar."\">".$apar."</option>" ;
}
?>

           <!-- <option value='Todos'>Todos</option>-->
                     <option value='Todo'>Todo</option>

                 <!--<option value='Malha + Rede'>Malha + Rede</option>    -->
                </select>

</label> &nbsp;&nbsp;&nbsp;



   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "lista_abud_mostrar_nt.php";
}
          ?>