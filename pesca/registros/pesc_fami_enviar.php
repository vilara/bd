<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Registro de Pesca Familiar</h3><br />
        <h4><center>Registro cadastrado com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php
$ano =  $_POST["ano"];
$mes =  $_POST["mes"];
$dia =  $_POST["dia"];
$indiv =  $_POST["varios"];
$data = "$ano-$mes-$dia";
$loc =  $_POST["loc"];
$pesc =  $_POST["pesc"];
$esp =  $_POST["categ"];
$qv =  $_POST["qv"];
$qc =  $_POST["qc"];
$obs =  $_POST["obs"];
$empr =  $_POST["empr"];
$peso =  $_POST["peso"];
$comp =  $_POST["comp"];

$peso_m =  $_POST["peso_m"];
$comp_m =  $_POST["comp_m"];

$sit =  $_POST["sit"];
$qtde =  $_POST["qtde"];
$peso_g =  $_POST["peso_g"];

if ($indiv == "")
{$indiv = "S";}

if ($indiv == "N")
{$qtde = "0";}

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_col_familiar");
$cadastra->setFields("`id_merc` , `data` , `localidade`, `pescador`,`esp` ,`esp_sec` ,`qtdev` ,`qtdec` ,`obs` ,`empr` ,`peso` ,`comp` ,`sit` ,`qtde` ,`peso_g` ,`indiv`,`peso_m` ,`comp_m`");
$cadastra->setDados("NULL ,'$data','$loc','$pesc','$esp','$esp','$qv','$qc','$obs','$empr','$peso','$comp','$sit','$qtde','$peso_g','$indiv','$peso_m','$comp_m'");
$cadastra->insert();

?>


<script>parent.location.href='index.php?secoes=registros/pesc_fami&ano=<?php echo "$ano"; ?>&mes=<?php echo "$mes"; ?>&dia=<?php echo "$dia"; ?>&loc=<?php echo "$loc"; ?>&pesc=<?php echo "$pesc"; ?>&empr=<?php echo "$empr"; ?>&flag=2'</script>


<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=registros/pesc_fami">Novo registro</a></div>
</div>
</div>