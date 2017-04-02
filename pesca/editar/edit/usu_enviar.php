<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>

<div id="edicao">

        
<!--Área editável início     -->
<?php

$id = $_GET["id"];



$nome = $_POST["nome"];
$cit = $_POST["cit"];
$funcao = $_POST["funcao"];
$institu = $_POST["institu"];
$lp = $_POST["lp"];
$titulacao = $_POST["titulacao"];
$email = $_POST["email"];
$lates = $_POST["lates"];
$public = $_POST["public"];
$subprog = $_POST["subprog"];
$nivel = $_POST["nivel"];
$usu = $_POST["usu"];

$pnot = $_FILES["foto"]["tmp_name"];
$ptipo = $_FILES["foto"]["type"];
$pname = $_FILES["foto"]["name"];
$psize = $_FILES["foto"]["size"];
$perror = $_FILES["foto"]["error"];
$uploadfile = '../img/fotos/';
move_uploaded_file($pnot, $uploadfile . $pname);
$foto = "$pname";

//  echo "$foto";


$res = mysql_query("UPDATE `ictiomadeira`.`usu_dados` SET
`usu_nome_com` = '$nome',
`usu_foto` = '$foto',
`usu_cit` = '$cit',
`funcao` = '$funcao',
`institu` = '$institu',
`lp` = '$lp',
`titulacao` = '$titulacao',
`email` = '$email',
`lates` = '$lates',
`public` = '$public'
 WHERE `usu_dados`.`id_usu_dados` = $id LIMIT 1 ;");

 $res1 = mysql_query("UPDATE `ictiomadeira`.`usu_senha` SET
`usu_nivel` = '$nivel',
`usu_usuario` = '$usu',
`subpro` = '$subprog'
 WHERE `usu_senha`.`id_usu` = $id LIMIT 1 ;");


// echo "<script>parent.location.href='index2.php?id=relatorios/rel_esp_cad.php'</script>";
//  echo "tezste";

?>
        <h3>Usuário editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


</div>
