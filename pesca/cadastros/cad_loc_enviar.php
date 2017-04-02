<style type="text/css">

</style>

<div id="conteudo1">
    
        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Cadastro de Localidade</h3><br />
        <h4><center>Localidade cadastrada com sucesso!</center></h4><br />
<!--Área editável início     -->
<?php

$cadastra = new ManipulateData();
$cadastra->setTable("pesc_localidade");
$cadastra->setFields("`id_locali` ,`locali`, `mun`, `cod`");
$cadastra->setDados("NULL ,"."'".$_POST["loc"]."'"." ,"."'".$_POST["mun"]."'".","."'".$_POST["cod"]."'"."");
$cadastra->insert();

?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php?secoes=cadastros/cad_loc">Novo cadastro</a></div>
</div>
</div>