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


 //echo "$nome--$cit--$funcao";


$res = mysql_query("UPDATE `usu_det` SET
`nome` = '$nome',
 `cit` = '$cit',
 `func` = '$funcao'
 WHERE `id_det` = $id LIMIT 1 ;");


// echo "<script>parent.location.href='index2.php?id=relatorios/rel_esp_cad.php'</script>";
//  echo "tezste";

?>
        <h3>Usuário editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


</div>
