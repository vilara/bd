<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Registro do Caderno do Pescador</h3><br />
        <h4><center>Registro cadastrado com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php
$dia =  $_POST["dia"];
$mes =  $_POST["mes"];
$ano =  $_POST["ano"];
$data = "$ano-$mes-$dia";
$empr =  $_POST["empr"];
$loc =  $_POST["loc"];

$func = $_POST["func"]   ;
$pesc = $_POST["pesc"]    ;
$tx = $_POST["tx"]          ;
$va = $_POST["va"]         ;
$re = $_POST["re"]           ;
$que = $_POST["que"]          ;
$fo = $_POST["fo"]             ;
$esp = $_POST["esp"]            ;
$obs = $_POST["obs"]             ;
$ori = $_POST["ori"]              ;
$qtde = $_POST["qtde"]             ;

// echo "'$data','$mes','$ano','$loc','$func','00','$pesc','$tx','$va','$re','$que','$fo','$esp','$obs','$empr','$ori','$qtde'";

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_col_caderno");
$cadastra->setFields("`id_cad`, `data`, `mes`, `ano`  ,`func` ,`rg` ,`pescador` ,`taxa` ,`valor` ,`rend` ,`quest` ,`fonte` ,`esp` ,`obs` ,`empr` ,`ori` ,`peso`,`loc`");
$cadastra->setDados("NULL,'$data','$mes','$ano','$func','00','$pesc','$tx','$va','$re','$que','$fo','$esp','$obs','$empr','$ori','$qtde','$loc'");
$cadastra->insert();/**/

?>


<!--<script>parent.location.href='index.php?secoes=registros/pesc_caderno&ano=<?php echo "$ano"; ?>&mes=<?php echo "$mes"; ?>&dia=<?php echo "$dia"; ?>&loc=<?php echo "$loc"; ?>&empr=<?php echo "$empr"; ?>&flag=2'</script>-->


<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=registros/pesc_caderno">Novo registro</a></div>
</div>
</div>