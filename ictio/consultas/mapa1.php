<script language=javascript>
function destino(){
url = document.navegador.lim_aparelho.options[document.navegador.lim_aparelho.selectedIndex].value
if (url != " no") window.location = url;
}
function destino1(){
url = document.navegador.exc.options[document.navegador.exc.selectedIndex].value
if (url != " no") window.location = url;
}
</script>
 <?php
//  include_once "log_auth.php";
$flag = $_GET["flag"];
if ($flag == 1)
{
 $apar = $_POST["aparelho"];
  $ex = $_POST["exc"];

   $esp = $_POST["esp"];
       $bio = $_POST["bio_nr"];
}
 $l = $_POST["l"];
     if ($l == ""){$l = "Todos";}

     $p = $_POST["p"];
     if ($p == ""){$p = "Grupados";}
?>
<div id="conteudo">
<h3>Parâmetros da consulta do número de espécies capturadas</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/mapa1&flag=1" enctype="multipart/form-data">
    <fieldset>

       <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

        <tr class="linha_tit">
    <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>
    <tr>
     <td>1) Excursão:</td><td><label for="limno">

             <SELECT name='exc' type='text'  tabindex="1" >
              <?php
$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$ex."\">".$ex."</option>" ;
}
?>


             <option value='Todas'>Todas</option>
             <option value='Expandidas'>Expandidas (1,6,9,12,16,19)</option>

               <option value='Expandidas Cheia'>Expandidas Cheia(1,12,19)</option>
                 <option value='Expandidas Seca'>Expandidas Seca(6,9,16)</option>

              <option value='Cheia piloto'>Cheia piloto (1,2)</option>
              <option value='Seca 1'>Seca 1 (3,4,5,6,7,8)</option>
               <option value='Seca 2'>Seca 2 (15,16,17)</option>
                <option value='Secas'>Secas (3,4,5,6,7,8,15,16,17)</option>


                  <option value='Cheia 1'>Cheia 1 (9,10,11,12,13,14)</option>
                   <option value='Cheia 2'>Cheia 2 (18,19,20)</option>
                     <option value='Cheias'>Cheias (9,10,11,12,13,14,18,19,20)</option>
                      <option value='ANO I'>ANO I (3 a 14)</option>
                     <option value='ANO II'>ANO II (15 a 20)</option>
                      <option value='2008'>2008 (1 e 2)</option>
                     <option value='2009'>2009 (3 a 11)</option>
                      <option value='2010'>2010 (12 a 19)</option>

             <?php
                $lista = new ManipulateData1();
                $lista->geraListaExc();
            ?>
        </select>

           </label></td><td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
    </tr>






<tr>
    <td>2) Aparelho de pesca:</td><td><label for="inicial"><SELECT NAME='aparelho' type='text' id='aparelho' tabindex="1">
         <?php
$flag = $_GET["flag"];
if ($flag == 1)
{   if($apar == "Todos") {$cmp = "(Malh,Red,Puç,Espinhel,Manual,Tarr,Caniço)";}
 echo "<option value=\"".$apar."\">".$apar." ".$cmp."</option>" ;

}
?>

           <!-- <option value='Todos'>Todos</option>-->
                     <option value='Todos'>Todos (Malh,Red,Puç,Espinhel,Manual,Tarr,Caniço)</option>
                 <!-- <option value='Malhadeira'>Malhadeira</option>
                 <option value='Redinha'>Redinha</option>

                 <option value='Arrasto de fundo'>Arrasto Bentônico</option>
                <option value='Espinhel'>Espinhel</option>
                  <option value='Tarrafa'>Tarrafa</option>
                 <option value='Puça'>Puça</option>-->
                 <!--<option value='Malha + Rede'>Malha + Rede</option>    -->
                </select>
</label></td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
    </tr>



<tr>
    <td>
            3) Espécie:  </td><td><label for="inicial">

             <SELECT name='esp' type='text'  tabindex="1" >
              <?php
$flag = $_GET["flag"];

 $lista = new ManipulateData1();
    $NrEsp = $lista->NrEspecie($esp);
    $NomeEsp = $lista->NomeEspecie($esp);
    $NomeOrd = $lista->NomeOrd($esp);
    $NomeFam = $lista->NomeFam($esp);
if ($flag == 1)
{
 echo "<option value=\"".$esp."\">".$NomeEsp."</option>" ;
}
?>



             <?php
                $lista = new ManipulateData();
                $lista->geraListaEspecieMapa();
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










<?php
if ($apar == "Arrasto de fundo"){


?>
 <tr>
    <td>
3)Larva:   </td><td><label for="inicial">

        <SELECT NAME='l' type='text' id='l' tabindex="1">
         <?php
        if ($flag == 1)
        {
        echo "<option value=\"".$l."\">".$l."</option>" ;
        }

          ?>
        <option value='Todos'>Todos</option>
        <option value='Larva'>Larva</option>
        <option value='Não larva'>Não larva</option>
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

4)Pontos:   </td><td><label for="inicial">

        <SELECT NAME='p' type='text' id='l' tabindex="1">
         <?php
        if ($flag == 1)
        {
        echo "<option value=\"".$p."\">".$p."</option>" ;
        }

          ?>
        <option value='Grupados'>Grupados</option>
        <option value='Separados'>Separados</option>

        </select>


</label> &nbsp;&nbsp;&nbsp;</td>

<td>&nbsp;</td>


 <td align="center">
 &nbsp;

</td> <td align="center">
 &nbsp;

</td>
    </tr>

  <?php
 }
   ?>

       </table>






            <br />


<!--<label for="inicial">
3) Redinha Nr: <SELECT NAME='bio_nr' type='text' id='aparelho' tabindex="1">-->
         <?php
/*$flag = $_GET["flag"];
if ($flag == 1)
{

 echo "<option value=\"".$bio."\">".$bio."</option>" ;
}*/
?>

              <!--<option value='Todos'>Todos</option>        -->

               <?php
               /* $lista = new ManipulateData();
                $lista->geraListaBio();*/
            ?>
<!--                </select>

</label> &nbsp;&nbsp;&nbsp;-->


   <center><input type="submit" value="Submeter" class="botao2"  /></center>
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "mapa1_mostrar.php";
}
          ?>