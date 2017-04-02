<style type="text/css">

</style>

<div id="conteudo1">
        <div id="caixa1_1">
        <h1>Código de Campo</h1>
        <h3>Cadastro inserido com sucesso</h3>
<!--Área editável início     -->

<?php
$data = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];

$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno");
$cadastra->setFields("`id_tb_limno`, `cod`, `local`, `exc`, `data`, `rede`, `pos`, `lat_g`, `lat_m`, `lat_s`, `long_g`, `long_m`, `long_s`, `tempo`, `arede`, `dist`, `flux`, `lua`, `temp`, `veg`, `temper`, `ph`, `o2diss`, `condut`, `turb`, `veloc`, `prof`");
$cadastra->setDados("NULL, "."'".$_POST["cod"]."'".", ".$_POST["loc"].", ".$_POST["exc"].", "."'".$_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"]."'".", "."'".$_POST["rede"]."'".", "."'".$_POST["pos"]."'"."
                    , ".$_POST["lat_g"].", ".$_POST["lat_m"].", ".$_POST["lat_s"].", ".$_POST["long_g"].", ".$_POST["long_m"].", ".$_POST["long_s"]."
                    , ".$_POST["tempo"].", ".$_POST["arede"].", ".$_POST["dist"].", ".$_POST["fluxi"].", "."'".$_POST["lua"]."'".", "."'".$_POST["ctemp"]."'".", "."'".$_POST["veg"]."'".", "."'".$_POST["temp"]."'".", "."'".$_POST["ph"]."'"."
                    , "."'".$_POST["o2"]."'".", "."'".$_POST["condut"]."'".", "."'".$_POST["turb"]."'"."
                    , "."'".$_POST["veloc"]."'".", "."'".$_POST["prof"]."'"."");
$cadastra->insert();

 ?>



<!--Área editável fim     -->
 <br />

<div id="botao1"><a href="index.php?secoes=registros/cod_inserir">Novo cadastro</a></div>
</div>
</div>