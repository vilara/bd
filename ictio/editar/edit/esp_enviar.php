<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
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
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Cadastro de nova espécie</h3>
        <h3>Nova espécie cadastrada com sucesso. </h3>
<!--Área editável início     -->
<?php

$esp_ordem = $_POST["esp_ordem"];
$esp_familia = $_POST["esp_familia"];
$esp_catrof = $_POST["esp_catrof"];
$esp_especie = $_POST["esp_especie"];

$cadastra = new ManipulateData();
$cadastra->setTable("tb_especies");
$cadastra->setFields("`id_tab_especie` ,`esp_ordem` ,`esp_familia` ,`esp_especie` ,`esp_catrof`");
$cadastra->setDados("NULL , '$esp_ordem', '$esp_familia', '$esp_especie', '$esp_catrof'");
$cadastra->insert();

?>

   <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>

<!--Área editável fim     -->


<!--<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/esp_inserir">Novo cadastro</a></div>  -->
</div>
