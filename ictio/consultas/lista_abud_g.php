
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
<h3>Parâmetros da consulta do número de espécies capturadas agrupadas por Sub_bacias</h3>
 <form id="formulario" method="post" action="index.php?secoes=consultas/lista_abud_g&flag=1" enctype="multipart/form-data">
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
             <option value='Expandidas'>Expandidas (1,6,9,12,16,19,23)</option>
               <option value='Expandidas Cheia'>Expandidas Cheia(1,12,19)</option>
                 <option value='Expandidas Seca'>Expandidas Seca(6,9,16,23)</option>
              <option value='Cheia piloto'>Cheia piloto (1,2)</option>
              <option value='Seca 1'>Seca ano 1 (4,5,6,7,8,9)</option>
               <option value='Seca 2'>Seca ano 2 (16,17,18)</option>
                <option value='Seca 3'>Seca ano 3 (22,23,24)</option>
                <option value='Secas'>Secas (4,5,6,7,8,9,16,17,18,22,23,24)</option>
                  <option value='Cheia 1'>Cheia ano 1 (3,10,11,12,13,14)</option>
                   <option value='Cheia 2'>Cheia ano 2 (15,19,20)</option>
                    <option value='Cheia 3'>Cheia ano 3 (21,25)</option>
                     <option value='Cheias'>Cheias (3,10,11,12,13,14,15,19,20,21,25)</option>
                      <option value='ANO I'>ANO I (3 a 14)</option>
                     <option value='ANO II'>ANO II (15 a 20)</option>
                      <option value='ANO III'>ANO III (21 a 25)</option>
                      <option value='2008'>2008 (1 e 2)</option>
                     <option value='2009'>2009 (3 a 11)</option>
                      <option value='2010'>2010 (12 a 19)</option>
                      <option value='2011'>2011 (20 a 25)</option>

             <?php
                $lista = new ManipulateData1();
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
                   <option value='Todos'>Todos</option>  <!-- -->
                  <option value='Malhadeira'>Malhadeira</option>
               <option value='Redinha'>Redinha</option>
             <option value='Arrasto de fundo'>Arrasto Bentônico</option>
                 <option value='Espinhel'>Espinhel</option>
                   <option value='Tarrafa'>Tarrafa</option>
                  <option value='Puça'>Puça</option>
                  <option value='Caniço'>Caniço</option>
                  <option value='Manual'>Manual</option>
               <!-- <option value='Malha + Rede'>Malha + Rede</option>    -->
                </select>

</label> &nbsp;&nbsp;&nbsp;

<?php
if ($apar == "Arrasto de fundo"){


?>
<label for="larva">
3)Larva:

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

</label> &nbsp;&nbsp;&nbsp;

<label for="larva">
4)Pontos:

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

</label> &nbsp;&nbsp;&nbsp;


  <?php





 }


  ?>

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

   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>

          </div>

                    <?php
if ($flag == 1)
{
		include_once "lista_abud_g_mostrar.php";
}
          ?>