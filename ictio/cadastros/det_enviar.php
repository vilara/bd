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
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->

        <h3>Determinador cadastrado com sucesso. </h3>
<!--Área editável início     -->
<?php

$det = $_POST["det"];
$cit = $_POST["cit"];
$func = $_POST["func"];


$cadastra = new ManipulateData();
$cadastra->setTable("usu_det");
$cadastra->setFields("`nome`,`cit`,`func`");
$cadastra->setDados("'$det' ,'$cit', '$func'");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/det_inserir">Novo cadastro</a></div>
</div>
