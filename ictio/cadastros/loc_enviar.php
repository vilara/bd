<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>
 <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>     -->
        <h3>Cadastro de Local</h3>
        <h3>Nova local cadastrado com sucesso. </h3>
<!--Área editável início     -->
<?php
// include "config.php";
$loc_descricao = $_POST["loc_descricao"];
$loc_codigo = $_POST["loc_codigo"];
$loc_localidade = $_POST["loc_localidade"];
$loc_municipio = $_POST["loc_municipio"];
$loc_estado = $_POST["loc_estado"];
$loc_latitude = $_POST["loc_latitude"];
$loc_longitude = $_POST["loc_longitude"];

$cadastra = new ManipulateData();
$cadastra->setTable("tb_local");
$cadastra->setFields("`id_tab_local` ,`loc_descricao` ,`loc_codigo` ,`loc_localidade` ,`loc_municipio` ,`loc_estado` ,`loc_latitude` ,`loc_longitude` ");
$cadastra->setDados("NULL , '$loc_descricao', '$loc_codigo', '$loc_localidade', '$loc_municipio', '$loc_estado', '$loc_latitude', '$loc_longitude'");
$cadastra->insert();

//echo " $loc_codigo-$loc_descricao-$loc_estado-$loc_latitude-$loc_localidade-$loc_longitude-$loc_municipio ";
?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/loc_inserir">Novo cadastro</a></div>
</div>

