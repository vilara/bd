<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Cadastro de Pescadores</h3><br />
        <h4><center>Pescador cadastrado com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_pescador");
$cadastra->setFields("`id_pescador` ,`nome`, `apelido`, `rgp`, `locali`, `ori`");
$cadastra->setDados("NULL ,"."'".$_POST["nome"]."'"." ,"."'".$_POST["apelido"]."'".","."'".$_POST["rgp"]."'"."
,"."'".$_POST["loc"]."'".","."'".$_POST["ori"]."'"."");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=cadastros/cad_pesc">Novo cadastro</a></div>
</div>
</div>