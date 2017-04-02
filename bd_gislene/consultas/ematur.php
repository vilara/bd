
 <?php
 include_once "log_auth.php";
$flag = $_GET["flag"];
if ($flag == 1)
{
 $apar = $_POST["aparelho"];
  $ex = $_POST["exc"];
  $loc = $_POST["loc"];
  $catr = $_POST["catrof"];
       $bio = $_POST["bio_nr"];
}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do Estágio de Maturação</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/ematur&flag=1" enctype="multipart/form-data">
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
             <option value="Cheia">Cheia</option>
             <option value="Seca">Seca</option>
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

                <option value='Malhadeira'>Malhadeira</option>

                </select>

</label> &nbsp;&nbsp;&nbsp;


<label for="inicial">
3) Local: <SELECT NAME='loc' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$loc."\">".$loc."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

               <?php
                $lista = new ManipulateData();
                $lista->geraListaLoc();
            ?>
                </select>

</label> &nbsp;&nbsp;&nbsp;


   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "ematur_mostrar.php";
}
          ?>