
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
         $ord = $_POST["ord"];
         $fam = $_POST["fam"];
         $esp = $_POST["esp"];

       $sexo = $_POST["sexo"];
}
?>
<div id="conteudo">
<h3>Parâmetros da consulta de espécies capturadas</h3>

 <form id="formulario" method="post" action="index.php?secoes=consultas/especies&flag=1" enctype="multipart/form-data">





    <fieldset>
    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

        <tr class="linha_tit">
    <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
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


</label> &nbsp;&nbsp;&nbsp;</td>

<td>&nbsp;</td>


 <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>







       <tr>
    <td>
4) Ordem: </td><td><label for="inicial"><SELECT NAME='ord' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$ord."\">".$ord."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

               <?php
                $lista = new ManipulateData();
                $lista->geraListaOrdem();
            ?>
                </select>


</label> &nbsp;&nbsp;&nbsp;</td>

<td>&nbsp;</td>


 <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>







   <tr>
    <td>
5) Família: </td><td><label for="inicial"><SELECT NAME='fam' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$fam."\">".$fam."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

               <?php
                $lista = new ManipulateData();
                $lista->geraListaFam();
            ?>
                </select>


</label></td>

<td>&nbsp;</td>


 <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>



       <tr>
    <td>
6) Espécie: </td><td><label for="inicial"><SELECT NAME='esp' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$esp."\">".$esp."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

               <?php
                $lista = new ManipulateData();
                $lista->geraListaEspecie();
            ?>
                </select>


</label> &nbsp;&nbsp;&nbsp;</td>

<td>&nbsp;</td>


 <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>




    <!--<tr>
    <td>7) Sexo</td><td><label for="inicial">
 <SELECT NAME='sexo' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$sexo."\">".$sexo."</option>" ;
}
?>

              <option value='Todos'>Todos</option>

                <option value='Macho'>Macho</option>
                 <option value='Fêmea'>Fêmea</option>
                 <option value='Indeterminado'>Indeterminado</option>
                                 </select></label></td><td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
    </tr>-->






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
		include_once "especies_mostrar.php";
}
          ?>