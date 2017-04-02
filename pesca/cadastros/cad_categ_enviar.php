<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Cadastro de Categoria</h3><br />
        <h4><center>Categoria cadastrada com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_especie");
$cadastra->setFields("`id_esp` ,`cat`");
$cadastra->setDados("NULL ,"."'".$_POST["categ"]."'"."");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=cadastros/cad_categ">Novo cadastro</a></div>
</div>
</div>