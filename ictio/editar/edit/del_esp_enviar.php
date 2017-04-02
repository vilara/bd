<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%;}
#edicao h3 { font-size: 120%; text-align: center; text-decoration: underline;}
</style>



<!--Área editável início     -->
<?php

$idd = $_GET["idd"];
$lista = new ManipulateData();




$lista->setTable("tb_especies");
$lista->setFieldId("id_tab_especie");
$lista->setvalueId("$idd");
$lista->delete();



?>
   <div id="edicao">
        <h3>Espécie excluída com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form></div>

