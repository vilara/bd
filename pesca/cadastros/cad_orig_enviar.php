<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Cadastro de Origem do Pescado</h3><br />
        <h4><center>Mercado cadastrado com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_origem");
$cadastra->setFields("`id_ori` ,`ori`");
$cadastra->setDados("NULL ,"."'".$_POST["ori"]."'"."");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=cadastros/cad_orig">Novo cadastro</a></div>
</div>
</div>