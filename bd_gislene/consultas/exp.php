
 <?php
$flag = $_GET["flag"];
if ($flag == 1)
{
 $apar = $_POST["aparelho"];
  $ex = $_POST["exc"];
  $catr = $_POST["catrof"];
}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do número de espécies por Categoria trófica</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/nr_especies_cattrof_ex&flag=1" enctype="multipart/form-data">
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

             <option value='Todas'>Todas</option>
             <?php
                $lista = new ManipulateData();
                $lista->geraListaExc();
            ?>
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

              <option value='Todos'>Todos</option>

                <option value='Malhadeira'>Malhadeira</option>
                 <option value='Rede de cerco'>Rede de cerco</option>
                 <option value='Arrasto de fundo'>Arrasto de fundo</option>
                </select>

</label> &nbsp;&nbsp;&nbsp;


<label for="limno">
            3) Categoria trófica:

             <SELECT name='catrof' type='text'  tabindex="1" >
              <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$catr."\">".$catr."</option>" ;
}
?>

                         <?php
                $lista = new ManipulateData();
                $lista->geraListaCattrof();
            ?>
        </select>

            </label>&nbsp;&nbsp;&nbsp;

   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "nr_especies_cattrof_mostrar_ex.php";
}
          ?>