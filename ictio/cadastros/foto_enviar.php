

<?php

$especie = $_POST["especie"];

$pnot = $_FILES["arquivo"]["tmp_name"];
$ptipo = $_FILES["arquivo"]["type"];
$pname = $_FILES["arquivo"]["name"];
$psize = $_FILES["arquivo"]["size"];
$perror = $_FILES["arquivo"]["error"];
$uploadfile = 'img/fotos/';
move_uploaded_file($pnot, $uploadfile . $pname);
$nome = "$pname";
$autor = $_POST["autor"];
$coment = $_POST["coment"];
$ematur = $_POST["ematur"];


$cadastra = new ManipulateData();
$cadastra->setTable("tb_foto_especime");
$cadastra->setFields(" `id_foto`,`foto_esp`,`foto_autor`,`foto_ematur`,`foto_coment`,`foto_nome`");
$cadastra->setDados("NULL , '$especie', '$autor', '$ematur', '$coment', '$nome'");
$cadastra->insert();
?>

<script>parent.location.href='index.php?secoes=cadastros/foto_inserir'</script>;

