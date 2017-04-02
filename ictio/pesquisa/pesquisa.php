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

  include_once "log_auth1.php";

    $pesq = $_POST["pesq"];
    $flag = $_GET["flag"];
    $para = $_POST["para"];
    $vou = $_POST["vou"];
?>
<div id="conteudo">
   <h3>Parâmetros da Pesquisa</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=pesquisa/pesquisa&flag=1" enctype="multipart/form-data">
   <fieldset>
         <br />
        <center>Digite o dado para consulta no campo abaixo:<br /> <input type="text" name="pesq" size="60" /> </center><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


          <input type="radio" name="para" value="familia"  class="checkbox" />Família&nbsp;&nbsp;&nbsp;
        <input type="radio" name="para" value="especie"  class="checkbox" />Espécie&nbsp;&nbsp;&nbsp;
        <input type="radio" name="para" value="cod_campo"  class="checkbox"/>Cod Campo&nbsp;&nbsp;&nbsp;
        <input type="radio" name="para" value="registro"  class="checkbox"/>Registro&nbsp;&nbsp;&nbsp;
          <input type="radio" name="para" value="local"  class="checkbox"/>Local&nbsp;&nbsp;&nbsp;
         <input type="radio" name="para" value="voucher"  class="checkbox"/>Tombo
          <input type="radio" name="para" value="gen"  class="checkbox"/>Gen
          <input type="radio" name="para" value="NI"  class="checkbox"/>NI

                   <!-- <input type="radio" name="para" value="EB"  class="checkbox"/>EB
-->
                               <br /><br />
         <center><input type="submit" value="Pesquisar" class="botao2"  /></center>
    </fieldset>
    </form>
</div>




    <!-- RESULTADO -->
    <?php
   //  echo "$flag - $para";


     if ($flag == 1 AND $para == "familia")
    {
    include_once "pesquisa_mostrar_familia.php";
    }
    if ($flag == 1 AND $para == "especie")
    {
    include_once "pesquisa_mostrar.php";
    }

    if ($flag == 1 AND $para == "cod_campo")
    {
    include_once "pesquisa_mostrar_cod_campo.php";
    }

    if ($flag == 1 AND $para == "registro")
    {
    include_once "pesquisa_mostrar_registro.php";
    }

    if ($flag == 1 AND $para == "voucher")
    {
    include_once "pesquisa_mostrar_voucher.php";
    }

    if ($flag == 1 AND $para == "gen")
    {
    include_once "pesquisa_mostrar_gen.php";
    }


    if ($flag == 1 AND $para == "local")
    {
    include_once "pesquisa_mostrar_local.php";
    }


     if ($flag == 1 AND $para == "NI")
    {
    include_once "pesquisa_NI.php";
    }

     /* if ($flag == 1 AND $para == "EB")
    {
    include_once "pesquisa_EB.php";
    }*/

    ?>

