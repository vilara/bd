<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%;}
#edicao h3 { font-size: 120%; text-align: center; text-decoration: underline;}
</style>



<!--�rea edit�vel in�cio     -->
<?php

$idd = $_GET["idd"];
$lista = new ManipulateData();




$lista->setTable("usu_dados");
$lista->setFieldId("id_usu_dados");
$lista->setvalueId("$idd");
$lista->delete();

$lista->setTable("usu_senha");
$lista->setFieldId("id_usu");
$lista->setvalueId("$idd");
$lista->delete();

?>
   <div id="edicao">
        <h3>Registro exclu�do com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form></div>
