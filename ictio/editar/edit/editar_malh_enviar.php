<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>



<!--Área editável início     -->
<?php




$aparelho = $_GET["aparelho"];
$cod = $_GET["cod"];
// echo"$aparelho";
$data_i = $_GET["data_i"];
$data_f = $_GET["data_f"];
// echo"$data_i--$data_f";
$id = $_GET["id"];
$idd = $_GET["idd"];

if($aparelho == 'Malhadeira')
{

$malh_lim = $_POST["malh_lim"];


$malh_h = $_POST["malh_h"];
$malh_m = $_POST["malh_m"];
$malh_hora = "$malh_h:$malh_m:00";

$malh_dia = $_POST["malh_dia"];
$malh_mes = $_POST["malh_mes"];
$malh_ano = $_POST["malh_ano"];
$malh_data = "$malh_ano-$malh_mes-$malh_dia";


if ($malh_hora > '16:00:00' AND $malh_hora < '20:00:00')
{$malh_cat_hora = " Crepúsculo vespertino";}

if ($malh_hora > '04:00:00' AND $malh_hora < '08:00:00')
{$malh_cat_hora = "Crepúsculo matutino";}

if ($malh_hora > '08:00:01' AND $malh_hora < '15:59:59')
{$malh_cat_hora = "Dia";}

if ($malh_hora > '20:00:01' AND $malh_hora < '00:00:00' OR $malh_hora > '00:00:01' AND $malh_hora < '03:59:59')
{$malh_cat_hora = "Noite";}

$malh_especie = $_POST["malh_especie"];

$malh_cp = $_POST["malh_cp"];
$malh_pt = $_POST["malh_pt"];
$malh_sexo = $_POST["malh_sexo"];
$malh_ematur = $_POST["malh_ematur"];
$malh_pg = $_POST["malh_pg"];
$malh_gg = $_POST["malh_gg"];
$malh_gr = $_POST["malh_gr"];
$malh_cresc = $_POST["malh_cresc"];
$malh_histo = $_POST["malh_histo"];

$malh_fecund = $_POST["malh_fecund"];
$malh_teci = $_POST["malh_teci"];
$malh_foto = $_POST["malh_foto"];
$malh_col = $_POST["malh_col"];
$malh_obs = $_POST["malh_obs"];
$malh_det = $_POST["malh_det"];
$malh_histo_conf = $_POST["malh_histo_conf"];
if ($malh_histo_conf == "" OR $malh_histo_conf == "Não")
{$malh_histo_conf = "Não";}
if ($malh_histo_conf == "Sim"){$color = "";}


$malh_voucher = $_POST["malh_voucher1"];
/*
if ($malh_col == 'Sim' AND $malh_voucher == 'Não' OR $malh_voucher == '')
{

$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;

        if ($malh_voucher1 != "")
        {$nr_voucher1 = $malh_voucher1;}

$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();

$malh_voucher = "UNIR" . "$nr_voucher1";
}
 else

{
//$malh_voucher = 'Não';
}

if ($malh_col == 'Não' AND $malh_voucher != 'Não')
{
$malh_voucher = "Não";
//echo "teste";
}
 else

{
//$malh_voucher = 'Não';
}
// echo "-$malh_voucher-$malh_col";
                                      */
$res = mysql_query("UPDATE `ictiomadeira`.`tb_malhadeira_biotico` SET
`malh_lim` = '$malh_lim',
`malh_hora` = '$malh_hora',
`malh_data` = '$malh_data',
`malh_cat_hora` = '$malh_cat_hora',
`malh_especie` = '$malh_especie',
`malh_cp` = '$malh_cp',
`malh_pt` = '$malh_pt',
`malh_sexo` = '$malh_sexo',
`malh_ematur` = '$malh_ematur',
`malh_pg` = '$malh_pg',
`malh_gg` = '$malh_gg',
`malh_gr` = '$malh_gr',
`malh_cresc` = '$malh_cresc',
`malh_histo` = '$malh_histo',
`malh_fecund` = '$malh_fecund',
`malh_teci` = '$malh_teci',
`malh_foto` = '$malh_foto',
`malh_col` = '$malh_col',
 `malh_voucher` = '$malh_voucher',
`malh_obs` = '$malh_obs',
`malh_det` = '$malh_det'

 WHERE `tb_malhadeira_biotico`.`id_tb_malhadeira` = $idd LIMIT 1 ;");


// echo "<script>parent.location.href='index2.php?id=relatorios/rel_esp_cad.php'</script>";
//  echo "tezste";       `malh_voucher` = '$malh_voucher',

?>
   <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>



<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php
}
else if ($aparelho == 'Redinha')
{

 $red_qtde = $_POST["red_qtde"];
  $red_lim = $_POST["red_lim"];



$red_hh = $_POST["red_hh"];
$red_min = $_POST["red_min"];
$red_hora = "$red_hh:$red_min:00";
// echo"$red_hora";

  $red_especie = $_POST["red_especie"];
  $red_teci = $_POST["red_teci"];
  $red_foto = $_POST["red_foto"];
   $red_col = $_POST["red_col"];
  $red_voucher = $_POST["red_voucher1"];
   $red_obs = $_POST["red_obs"];
      $red_det = $_POST["red_det"];

        /*
if ($red_col == 'Sim' AND $red_voucher == 'Não' OR $red_voucher == '')
{

$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;
        if ($malh_voucher1 != "")
        {$nr_voucher1 = $malh_voucher1;}

$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();

$red_voucher = "UNIR" . "$nr_voucher1";
}


 else

{
//$malh_voucher = 'Não';
}

if ($red_col == 'Não' AND $red_voucher != 'Não')
{
$red_voucher = "Não";
//$red_col = "Não";
//echo "teste";
}
 else

{
//$malh_voucher = 'Não';
}              */

$res = mysql_query(" UPDATE `ictiomadeira`.`tb_redinha_biotico` SET
 `red_qtde` = '$red_qtde',
`red_lim` = '$red_lim',
`red_hora` = '$red_hora',
`red_especie` = '$red_especie',
`red_teci` = '$red_teci',
`red_foto` = '$red_foto',
`red_col` = '$red_col',
 `red_voucher` = '$red_voucher',
`red_obs` = '$red_obs',
`red_det` = '$red_det'
 WHERE `tb_redinha_biotico`.`id_tb_redinha` = $idd LIMIT 1 ;");
//     `red_voucher` = '$red_voucher',
?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php

}
















else if ($aparelho == 'Espinhel')
{

$qtde = $_POST["qtde"];
$lim = $_POST["lim"];
$esp = $_POST["esp"];
$cpp = $_POST["cpp"];
$cpt = $_POST["cpt"];
$cpc = $_POST["cpc"];
$ptt = $_POST["ptt"];
$ptc = $_POST["ptc"];
$pte = $_POST["pte"];
$gr = $_POST["gr"];
$gg = $_POST["gg"];
$sexo = $_POST["sexo"];
$ematur = $_POST["ematur"];
$histo = $_POST["histo"];
$teci = $_POST["teci"];
$cresc = $_POST["cresc"];
$foto = $_POST["foto"];
$col = $_POST["col"];
$voucher = $_POST["esp_voucher1"];
$det = $_POST["det"];
$obs = $_POST["obs"];



 /*
if ($col == 'Sim' AND $voucher == 'Não' OR $voucher == '')
{

$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;

       if ($malh_voucher1 != "")
        {$nr_voucher1 = $malh_voucher1;}

$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();

$voucher = "UNIR" . "$nr_voucher1";
}


 else

{
//$malh_voucher = 'Não';
}

if ($col == 'Não' AND $voucher != 'Não')
{
$voucher = "Não";
//$red_col = "Não";
//echo "teste";
}
 else

{
//$malh_voucher = 'Não';
}         */

$res = mysql_query(" UPDATE `ictiomadeira`.`tb_espinhel_biotico` SET
`espi_qtde` = '$qtde',
`espi_lim` = '$lim',
`espi_esp` = '$esp',
`espi_cpp` = '$cpp',
`espi_cpt` = '$cpt',
`espi_cpc` = '$cpc',
`espi_ptt` = '$ptt',
`espi_ptc` = '$ptc',
`espi_pte` = '$pte',
`espi_gr` = '$gr',
`espi_gg` = '$gg',
`espi_sexo` = '$sexo',
`espi_ematur` = '$ematur',
`espi_histo` = '$histo',
`espi_teci` = '$teci',
`espi_cresc` = '$cresc',
`espi_foto` = '$foto',
`espi_col` = '$col',
`espi_voucher` = '$voucher',

`espi_det` = '$det',
`espi_obs` = '$obs'

 WHERE `tb_espinhel_biotico`.`id_tb_espi` = $idd LIMIT 1 ;");
 //     `espi_voucher` = '$voucher',
?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php

}






















else if ($aparelho == 'Arrasto de fundo')
 {
$arr_lim = $_POST["arr_lim"];

$arr_h = $_POST["arr_h"];
$arr_m = $_POST["arr_m"];
$arr_hora = "$arr_h:$arr_m:00";
$arr_qtde = $_POST["arr_qtde"];

$arr_especie = $_POST["arr_especie"];
$arr_teci = $_POST["arr_teci"];
$arr_foto = $_POST["arr_foto"];
$arr_voucher = $_POST["arr_voucher1"];
$arr_col = $_POST["arr_col"];


$arr_obs = $_POST["arr_obs"];
$arr_det = $_POST["arr_det"];
$arr_larva = $_POST["arr_larva"];
 /*
if ($arr_col == 'Sim' AND $arr_voucher == 'Não' OR $arr_voucher == '')
{

$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;

       if ($malh_voucher1 != "")
        {$nr_voucher1 = $malh_voucher1;}

$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();

$arr_voucher = "UNIR" . "$nr_voucher1";
}
 else

{

}

if ($arr_col == 'Não' AND $arr_voucher != 'Não')
{
$arr_voucher = "Não";
//$red_col = "Não";
//echo "teste";
}
 else

{
//$malh_voucher = 'Não';
}        */

$res = mysql_query("UPDATE `tb_arrastofundo_biotico` SET
`arr_qtde` = '$arr_qtde',
`arr_lim` = '$arr_lim',

`arr_hora` = '$arr_hora',

`arr_especie` = '$arr_especie',
`arr_teci` = '$arr_teci',
`arr_foto` = '$arr_foto',
 `arr_col` = '$arr_col',
   `arr_voucher` = '$arr_voucher',
`arr_obs` = '$arr_obs',
`arr_det` = '$arr_det',
`arr_larva` = '$arr_larva'
 WHERE `id_tb_arrastofundo` = $idd LIMIT 1 ;");

 //    `arr_voucher` = '$arr_voucher',
?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php

 }
else if ($aparelho == "Outros"){


$outr_lim = $_POST["outr_lim"];


$outr_h = $_POST["outr_h"];
$outr_m = $_POST["outr_m"];
$outr_hora = "$outr_h:$outr_m:00";


$outr_qtde = $_POST["outr_qtde"];




$res = mysql_query("SELECT outr_numero FROM tb_outros_biotico ");
		while($registro = mysql_fetch_row($res))
		{$outr_numero1 = $registro[0];}

$outr_numero = $outr_numero1 + 1;


$outr_especie = $_POST["outr_especie"];

$outr_teci = $_POST["outr_teci"];

$outr_foto = $_POST["outr_foto"];
$outr_col = $_POST["outr_col"];
$outr_voucher = $_POST["outr_voucher1"];
$outr_obs = $_POST["outr_obs"];
$outr_det = $_POST["outr_det"];
/*
if ($outr_col == 'Sim' AND $outr_voucher == 'Não' OR $outr_voucher == '')
{

$dado_fim = new ManipulateData();
$dado_fim->setTable("cons_voucher");
$dado_fim->setFieldOrder("id_cons_voucher");
$dado_fim->setFieldID("1");$nr_voucher = $dado_fim->getLastId();
		$nr_voucher1 = $nr_voucher + 1;

        if ($malh_voucher1 != "")
        {$nr_voucher1 = $malh_voucher1;}

$cadastra = new ManipulateData();
$cadastra->setTable("cons_voucher");
$cadastra->setFields("`id_cons_voucher` ,`nr_voucher`");
$cadastra->setDados("NULL , '$nr_voucher1'");
$cadastra->insert();                                                                                                                                                                                                

$outr_voucher = "UNIR" . "$nr_voucher1";
}
 else

{

}

if ($outr_col == 'Não' AND $outr_voucher != 'Não')
{
$outr_voucher = "Não";
// $red_col = "Não";
//echo "teste";
}
 else

{
//$malh_voucher = 'Não';
}

       */

$res = mysql_query("UPDATE `tb_outros_biotico` SET
 `outr_qtde` = '$outr_qtde',
`outr_hora` = '$outr_hora',

`outr_especie` = '$outr_especie',
`outr_teci` = '$outr_teci',
`outr_foto` = '$outr_foto',
 `outr_col` = '$outr_col',
  `outr_voucher` = '$outr_voucher',
`outr_obs` = '$outr_obs',
`outr_det` = '$outr_det'
 WHERE `id_tb_outros` = $idd LIMIT 1 ;");
//    `outr_voucher` = '$outr_voucher',
 ?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>


<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php


}



else if ($aparelho == 'pesc')
{

$ano = $_POST["ano"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];

$data = "$ano-$mes-$dia";
// echo "$data";
$cod = $_POST["cod"];
$proced = $_POST["proced"];
$local = $_POST["local"];
$localidade = $_POST["localidade"];
$esp = $_POST["esp"];
$cpp = $_POST["cpp"];
$cpt = $_POST["cpt"];
$cpc = $_POST["cpc"];
$ptt = $_POST["ptt"];
$ptc = $_POST["ptc"];
$pte = $_POST["pte"];
$gr = $_POST["gr"];
$gg = $_POST["gg"];
$sexo = $_POST["sexo"];
$ematur = $_POST["ematur"];
$histo = $_POST["histo"];
$teci = $_POST["teci"];
$cresc = $_POST["cresc"];
$pescad = $_POST["pescad"];
$colet = $_POST["colet"];
$obs = $_POST["obs"];
$oe = $_POST["oe"];
$od = $_POST["od"];
// echo "$esp";
/*,



,





*/

$res = mysql_query(" UPDATE `tb_pesc_biotico` SET
`pesc_cod` = '$cod',

`pesc_proced` = '$proced',
`pesc_local` = '$local',
`pesc_localidade` = '$localidade',
`pesc_data` = '$data',
`pesc_esp` = '$esp',
`pesc_cpp` = '$cpp',
`pesc_cpt` = '$cpt',
`pesc_cpc` = '$cpc',
`pesc_ptt` = '$ptt',
`pesc_ptc` = '$ptc',
`pesc_pte` = '$pte',
 `pesc_gg` = '$gg',
`pesc_gr` = '$gr',
`pesc_sexo` = '$sexo',
`pesc_ematur` = '$ematur',
`pesc_histo` = '$histo',
`pesc_teci` = '$teci',
`pesc_cresc` = '$cresc',
`pesc_pescad` = '$pescad',
`pesc_colet` = '$colet',
`pesc_obs` = '$obs',
`pesc_oe` = '$oe',
`pesc_od` = '$od'
 WHERE `id_tb_pesc` = $idd LIMIT 1 ;");
 // 
?>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Registro editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>

<!--<div id="botao1"><a href="index.php?secoes=consultas/registro_cod_mostrar&aparelho=<?php echo"$aparelho";?>&cod=<?php echo"$cod";?>&flag=1">Voltar</a></div>
--><?php

}

?>




<!--Área editável fim     -->



</div>
</div>