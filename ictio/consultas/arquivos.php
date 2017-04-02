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
   $categoria = $_POST["categoria"];
   $flag = $_GET["flag"];


?>
<div id="conteudo">
   <h3>Parâmetros da consulta de espécies capturadas</h3>

      <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/arquivos&flag=1" enctype="multipart/form-data">

   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>

            <tr>
            <td>1)Categoria:</td>
            <td><label for="inicial">

                    <SELECT NAME='categoria' type='text' id='categoria' tabindex="5">
                    <option value='#'>Select</option>
                    <option value='backup'>Backup</option>
                    <option value='fichas_campo'>Ficha de Campo</option>
                    <option value='invoice'>Invoice</option>
                    <option value='diversos'>Diversos</option>
                    <option value='imagens'>Imagens</option>
                    <option value='resumos'>Resumo de Registros</option>
                      </select>

            </label> &nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            </tr>



    </table>
    <br />&nbsp;&nbsp;&nbsp;
         <center><input type="submit" value="Submeter" class="botao2"  /></center>
    </fieldset>
    </form>
</div>



    <!-- RESULTADO -->
    <?php



    if ($flag == 1 )
    {
    include_once "arquivos_mostrar.php";
    }
    ?>