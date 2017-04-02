<style type="text/css">

</style>

<div id="conteudo1">

        <div id="caixa1_1">
        <h1>Banco de dados da Pesca</h1>
        <h3>Registro do Mercado Pesqueiro</h3><br />
        <h4><center>Registro cadastrado com sucesso!!</center></h4><br />
<!--Área editável início     -->
<?php
$dado_fim = new ManipulateData();
$dado_fim->setTable("pesc_col_mercado");
$dado_fim->setFieldOrder("nr");
$dado_fim->setFieldID("1");$nr = $dado_fim->getLastId();


$nr = $nr + 1;

$dia =  $_POST["dia"];
$mes =  $_POST["mes"];
$ano =  $_POST["ano"];
$data = "$ano-$mes-$dia";


$cadastra = new ManipulateData();
$cadastra->setTable("pesc_col_mercado");
$cadastra->setFields("`id_familiar`, `nr`, `empre`, `data`, `loc` , `cat` ,`ct`,`cp` ,`pt`, `cpc` ,`cptc` ,`cppc`,`esto` ,`gono` ,`pgono`
,`cab` ,`nr_foto`,`ref`,`sexo`,`ematur`,`histo`,`teci`,`cresc`,`gg`,`gr`

,`obs`
,`cf`
,`do`
,`lda`
,`lea`
,`ldl`
,`lel`
,`ldp`
,`lep`
,`ada`
,`aea`
,`adl`
,`ael`
,`adp`
,`aep`

,`sda`
,`sea`
,`sdl`
,`sel`
,`sdp`
,`sep`

,`rt`
,`r1`
,`r2`
,`r3`
,`r4`
,`r5`
,`r6`
,`r7`
,`r8`
,`r9`
,`r10`
,`r11`
,`r12`
,`r13`
,`r14`
,`r15`
,`r16`
,`r17`
,`r18`
,`r19`
,`r20`
,`ida`

,`ematur_mac`
,`gen`
,`od`
,`ap`
,`anali`
,`bor`
,`im`
,`go`
,`est`
,`pt_corr`
,`ct_corr`
,`cf_corr`

  ");
$cadastra->setDados("NULL , '$nr', "."'".$_POST["empre"]."'".", '$data', "."'".$_POST["loc"]."'".","."'".$_POST["cat"]."'".",
"."'".$_POST["ct"]."'".","."'".$_POST["cp"]."'"." ,"."'".$_POST["pt"]."'".", "."'".$_POST["cpc"]."'".","."'".$_POST["cptc"]."'"." ,
"."'".$_POST["cppc"]."'".","."'".$_POST["esto"]."'".", "."'".$_POST["gono"]."'".", "."'".$_POST["pgono"]."'".",
"."'".$_POST["cab"]."'"." ,"."'".$_POST["nf"]."'".","."'".$_POST["ref"]."'".","."'".$_POST["sexo"]."'".","."'".$_POST["ematur"]."'".",
"."'".$_POST["histo"]."'".","."'".$_POST["teci"]."'".","."'".$_POST["cresc"]."'".","."'".$_POST["gg"]."'".","."'".$_POST["gr"]."'"."


,"."'".$_POST["obs"]."'"."

,"."'".$_POST["cf"]."'"."
,"."'".$_POST["do"]."'"."

,"."'".$_POST["lda"]."'"."
,"."'".$_POST["lea"]."'"."

,"."'".$_POST["ldl"]."'"."
,"."'".$_POST["lel"]."'"."

,"."'".$_POST["ldp"]."'"."
,"."'".$_POST["lep"]."'"."


,"."'".$_POST["ada"]."'"."
,"."'".$_POST["aea"]."'"."

,"."'".$_POST["adl"]."'"."
,"."'".$_POST["ael"]."'"."

,"."'".$_POST["adp"]."'"."
,"."'".$_POST["aep"]."'"."



,"."'".$_POST["sda"]."'"."
,"."'".$_POST["sea"]."'"."

,"."'".$_POST["sdl"]."'"."
,"."'".$_POST["sel"]."'"."

,"."'".$_POST["sdp"]."'"."
,"."'".$_POST["sep"]."'"."

,"."'".$_POST["rt"]."'"."
,"."'".$_POST["r1"]."'"."
,"."'".$_POST["r2"]."'"."
,"."'".$_POST["r3"]."'"."

,"."'".$_POST["r4"]."'"."
,"."'".$_POST["r5"]."'"."
,"."'".$_POST["r6"]."'"."
,"."'".$_POST["r7"]."'"."

,"."'".$_POST["r8"]."'"."
,"."'".$_POST["r9"]."'"."
,"."'".$_POST["r10"]."'"."
,"."'".$_POST["r11"]."'"."

,"."'".$_POST["r12"]."'"."
,"."'".$_POST["r13"]."'"."
,"."'".$_POST["r14"]."'"."
,"."'".$_POST["r15"]."'"."

,"."'".$_POST["r16"]."'"."
,"."'".$_POST["r17"]."'"."
,"."'".$_POST["r18"]."'"."
,"."'".$_POST["r19"]."'"."

,"."'".$_POST["r20"]."'"."
,"."'".$_POST["ida"]."'"."

,"."'".$_POST["ematur_mac"]."'"."
,"."'".$_POST["gen"]."'"."
,"."'".$_POST["od"]."'"."
,"."'".$_POST["ap"]."'"."
,"."'".$_POST["anali"]."'"."
,"."'".$_POST["bor"]."'"."
,"."'".$_POST["im"]."'"."
,"."'".$_POST["go"]."'"."
,"."'".$_POST["est"]."'"."
,"."'".$_POST["pt_corr"]."'"."
,"."'".$_POST["ct_corr"]."'"."
,"."'".$_POST["cf_corr"]."'"."

        ");
$cadastra->insert();


?>


 <script>parent.location.href='index.php?secoes=registros/pesc_mercado&ano=<?php echo "$ano"; ?>&mes=<?php echo "$mes"; ?>&dia=<?php echo "$dia"; ?>&loc=<?php echo "$_POST[loc]"; ?>&categ=<?php echo "$_POST[cat]"; ?>&empre=<?php echo "$_POST[empre]"; ?>&flag=2'</script>

<!--Área editável fim
-->


<div id="botao1"><a href="index.php?secoes=registros/pesc_mercado">Novo registro</a></div>
</div>
</div>