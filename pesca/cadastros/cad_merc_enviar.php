<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Cadastro de Mercado Pesqueiro</h3><br />
        <h4><center>Mercado cadastrado com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_mercado");
$cadastra->setFields("`id_mercado` ,`nome`, `mun`");
$cadastra->setDados("NULL ,"."'".$_POST["nome"]."'"." ,"."'".$_POST["mun"]."'"."");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=cadastros/cad_pesc">Novo cadastro</a></div>
</div>
</div>