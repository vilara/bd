 <?php
  $lista = new ManipulateData();

?>
<div id="conteudo">
   <h3>Parâmetros da Consulta de Pesca Familiar</h3>

   <form name="navegador" id="formulario" method="post" action="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=1&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>" enctype="multipart/form-data">
   <fieldset>

    <table cellpadding="0" cellspacing="0" border="0px" align="center" class="bordasimples">

    <tr class="linha_tit">
      <td  width="200">Parâmetro</td><td width="220">Condicionante</td><td width="100">Operador</td> <td width="100">Var1</td> <td width="100">Var2</td>
    </tr>











    </table>
    <br />&nbsp;&nbsp;&nbsp;
        <!-- <center><input type="submit" value="Submeter" class="botao2"  /></center> -->
    </fieldset>
    </form>
</div>




    <!-- RESULTADO -->
    <?php

    include_once "categorias_mostrar.php";

    ?>