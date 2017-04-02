<style type="text/css">

</style>

<div id="conteudo1">
        <div id="caixa1_1">
        <h1>Código de Campo</h1>
        <h3>Cadastro inserido com sucesso</h3>
<!--Área editável início     -->

<?php
$data = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];

$cod = $_POST["cod"];
$loc = $_POST["loc"];
$exc = $_POST["exc"];
$ano = $_POST["ano"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];
$data = "$ano-$mes-$dia";
$rede = $_POST["rede"];
$pos = $_POST["pos"];

$lat_g = $_POST["lat_g"];
$lat_m = $_POST["lat_m"];
$lat_s = $_POST["lat_s"];
$latitude = "$lat_g º  $lat_m'  $lat_s''  S";
// echo "$latitude";
$long_g = $_POST["long_g"];
$long_m = $_POST["long_m"];
$long_s = $_POST["long_s"];
$longitude = "$long_g º  $long_m'  $long_s''  S";

$tempo = $_POST["tempo"];
$arede = $_POST["arede"];
$dist = $_POST["dist"];
$fluxi = $_POST["fluxi"];
$lua = $_POST["lua"];
$ctemp = $_POST["ctemp"];
$veg = $_POST["veg"];
$temp = $_POST["temp"];
$ph = $_POST["ph"];
$o2 = $_POST["o2"];
$condut = $_POST["condut"];
$turb = $_POST["turb"];
$veloc = $_POST["veloc"];
$prof = $_POST["prof"];


$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno");
$cadastra->setFields("`id_tb_limno`, `cod`, `local`, `exc`, `data`, `rede`, `pos`, `lat_g`, `lat_m`, `lat_s`, `long_g`, `long_m`, `long_s`, `tempo`, `arede`, `dist`, `flux`, `lua`, `temp`, `veg`, `temper`, `ph`, `o2diss`, `condut`, `turb`, `veloc`, `prof`");
$cadastra->setDados("NULL,'$cod','$loc','$exc','$data','$rede','$pos','$lat_g','$lat_m','$lat_s','$long_g','$long_m','$long_s','$tempo','$arede','$dist','$fluxi','$lua','$ctemp','$veg','$temp','$ph','$o2','$condut','$turb','$veloc','$prof'");
$cadastra->insert();

//

 ?>


<!--Área editável fim     -->
 <br />

<div id="botao1"><a href="index.php?secoes=registros/cod_inserir">Novo cadastro</a></div>
</div>
</div>