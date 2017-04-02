<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>

<div id="edicao">

        
<!--Área editável início     -->
<?php

$id = $_GET["id"];



$ord = $_POST["esp_ordem"];
$fam = $_POST["esp_familia"];
$esp = $_POST["esp_especie"];
$cat_trof = $_POST["esp_catrof"];

//echo "$ord--$fam--$esp--$cat_trof--$id";


$res = mysql_query("UPDATE `ictiomadeira`.`tb_especies` SET
`esp_ordem` = '$ord',
`esp_familia` = '$fam',
`esp_especie` = '$esp',
`esp_catrof` = '$cat_trof'
 WHERE `tb_especies`.`id_tab_especie` = $id LIMIT 1 ;");


// echo "<script>parent.location.href='index2.php?id=relatorios/rel_esp_cad.php'</script>";
//  echo "tezste";

?>
        <h3>Espécie cadastrada editada com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


</div>
