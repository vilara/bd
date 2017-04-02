<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>



<!--Área editável início     -->
<?php


$idd = $_GET["idd"];



$ig_especie = $_POST["ig_especie"];

$ig_qtde = $_POST["ig_qtde"];
$ig_lim = $_POST["ig_lim"];

$ig_biomass = $_POST["ig_biomass"];
$ig_gen = $_POST["ig_gen"];
$ig_foto = $_POST["ig_foto"];
$ig_voucher = $_POST["ig_voucher"];
$ig_numero = $_POST["ig_numero"];
$ig_det = $_POST["ig_det"];
$ig_obs = $_POST["ig_obs"];

// echo "$idd-$ig_especie-$ig_qtde-$ig_lim-$ig_biomass-$ig_gen-$ig_foto-$ig_voucher-$ig_numero-$ig_det-$ig_obs";

$res = mysql_query(" UPDATE `tb_ig_biotico` SET
`ig_especie` = '$ig_especie',
`ig_qtde` = '$ig_qtde',
`ig_biomass` = '$ig_biomass',
`ig_gen` = '$ig_gen',
`ig_foto` = '$ig_foto',
`ig_voucher` = '$ig_voucher',
`ig_det` = '$ig_det',
`ig_obs` = '$ig_obs'
 WHERE `id_tb_ig` = $idd LIMIT 1 ;");
/*,
`ig_numero` = '$ig_numero'*/
?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>

<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
-->




<!--Área editável fim     -->



</div>
</div>