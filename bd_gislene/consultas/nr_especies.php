
 <?php
include_once "log_auth.php";
$flag = $_GET["flag"];
if ($flag == 1)
{
 $apar = $_POST["aparelho"];
  $ex = $_POST["exc"];
  $lo = $_POST["loc"];
    $pes = $_POST["peso"];
         $bio = $_POST["bio_nr"];
}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do número de espécies capturadas</h3>

 <form id="formulario" method="post" action="index.php?secoes=consultas/nr_especies&flag=1" enctype="multipart/form-data">





    <fieldset>
    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

        <tr class="linha_tit">
    <td  width="200">Parâmetro</td><td width="200">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>
    <tr>
     <td>1) Excursão:</td><td><label for="limno"><SELECT name='exc' type='text'  tabindex="1" >
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
        </select></label></td><td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
    </tr>





    <tr>
    <td>2) Aparelho de pesca:</td><td><label for="inicial">
 <SELECT NAME='aparelho' type='text' id='aparelho' tabindex="1">
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
                 <option value='Malha + Rede'>Malha + Rede</option>
                </select>

</label></td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
    </tr>



<tr>
    <td>
3) Redinha Nr: </td><td><label for="inicial"><SELECT NAME='bio_nr' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$bio."\">".$bio."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

               <?php
                $lista = new ManipulateData();
                $lista->geraListaBio();
            ?>
                </select>

</label> &nbsp;&nbsp;&nbsp;</td><td>&nbsp;</td> <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>

   <!-- <tr>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
    </tr>-->


    </table>






            <br />



 &nbsp;&nbsp;&nbsp;



   <center><input type="submit" value="Submeter" class="botao2"  /></center>
<!--Área editável fim     -->
 </fieldset>



 </form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "nr_especies_mostrar.php";
}
          ?>