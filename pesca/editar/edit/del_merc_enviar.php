<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%;}
#edicao h3 { font-size: 120%; text-align: center; text-decoration: underline;}
</style>



<!--Área editável início     -->
<?php
$aparelho = $_GET["aparelho"];
$idd = $_GET["idd"];
$lista = new ManipulateData();


if($aparelho == 'Biometria')
{

$lista->setTable("pesc_col_mercado");
$lista->setFieldId("id_familiar");
$lista->setvalueId("$idd");
$lista->delete();

?>
   <div id="edicao">
        <h3>Registro excluído com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php
}



else if($aparelho == 'Familiar')
{
$lista->setTable("pesc_col_familiar");
$lista->setFieldId("id_merc");
$lista->setvalueId("$idd");
$lista->delete();


?>
   <div id="edicao">
        <h3>Registro excluído com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php
}



else if($aparelho == 'Caderno')
{
$lista->setTable("pesc_col_caderno");
$lista->setFieldId("id_cad");
$lista->setvalueId("$idd");
$lista->delete();


?>
   <div id="edicao">
        <h3>Registro excluído com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php
}
?>


</div>
