

<?php

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data =  "$ano-$mes-$dia";
echo "$dia-$mes-$ano---$data"  ;
$pnot = $_FILES["arquivos"]["tmp_name"];
$ptipo = $_FILES["arquivos"]["type"];
$pname = $_FILES["arquivos"]["name"];
$psize = $_FILES["arquivos"]["size"];
$perror = $_FILES["arquivos"]["error"];


$uploadfile = "arq/"."$categoria"."/";
// echo "$uploadfile";
move_uploaded_file($pnot, $uploadfile . $pname);



$cadastra = new ManipulateData();
$cadastra->setTable("tb_arquivos");
$cadastra->setFields(" `id_arquivos`,`nome`,`data`,`categoria`,`arquivo`");
$cadastra->setDados("NULL , '$nome', '$data', '$categoria', '$pname'");
$cadastra->insert();
?>

<!-- <script>parent.location.href='index.php?secoes=cadastros/arquivo_inserir'</script>;<!---->

