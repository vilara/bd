<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>
 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>            -->
       <!-- <h3>Cadastro de dados Limnológicos</h3>   -->
        <h3>Cadastro inserido com sucesso</h3>
<!--Área editável início     -->


<?php
// include "config.php";
$apar = $_GET["apar"];
$excu = $_GET["excu"];
$cod = $_GET["cod"];
$loc = $_GET["loc"];
$tam =$_GET["tam"];
$data = $_GET["data"];





$col1 = $_POST["tec1"];
if (empty($col1))
{}
else{$lim_colet = $col1;$v1 = "; ";
}

$col2 = $_POST["tec2"];
if (empty($col2))
{}
else
{$lim_colet = $lim_colet . $v1 . $col2;$v1 = "; ";
}

$col3 = $_POST["pes1"];
if (empty($col3))
{}
else
{$lim_colet = $lim_colet . $v1 . $col3;$v1 = "; ";
}

$col4 = $_POST["pes2"];
if (empty($col4))
{}
else
{$lim_colet = $lim_colet . $v1 . $col4;$v1 = "; ";
}


$lat_g = $_POST["lat_g"];
$lat_m = $_POST["lat_m"];
$lat_s = $_POST["lat_s"];
$long_g = $_POST["long_g"];
$long_m = $_POST["long_m"];
$long_s = $_POST["long_s"];
$proj = $_POST["proj"];
$padr = $_POST["padr"];
$form_geo = $_POST["form_geo"];
$phidro = $_POST["phidro"];
$amb = $_POST["amb"];
$integ = $_POST["integ"];
$hora = $_POST["hora"];
$min = $_POST["min"];

$hora_ini = "$hora:$min:00";

$ph = $_POST["ph"];
$temp = $_POST["temp"];
$condut = $_POST["condut"];
$o2diss = $_POST["o2diss"];
$o2sat = $_POST["o2sat"];
$tipoag = $_POST["tipoag"];
$ordem = $_POST["ordem"];
$veloc = $_POST["veloc"];
$larg_rio = $_POST["larg_rio"];
$vaz = $_POST["vaz"];
$prof_med = $_POST["prof_med"];
$prof_max = $_POST["prof_max"];
$transp = $_POST["transp"];
$dossel = $_POST["dossel"];
$are = $_POST["are"];
$arg = $_POST["arg"];
$litg = $_POST["litg"];
$litf =  $_POST["litf"];
$tronc = $_POST["tronc"];
$macrof = $_POST["macrof"];
$raiz = $_POST["raiz"];
$obs = $_POST["obs"];

$cadastra = new ManipulateData();
$cadastra->setTable("tb_limnologia");
$cadastra->setFields("`idlimnologia` , `codigo` , `aparelho` , `excursao` , `local` , `data` , `pad` ,  `obs` , `coletor` , `pescador`");
$cadastra->setDados("NULL , '$cod', '$apar', '$excu', '$loc','$data', '$padr' , '$obs', '$lim_colet', '$lim_pesc'");
$cadastra->insert();

$sql = mysql_query("SELECT idlimnologia FROM tb_limnologia");
                           while($registro = mysql_fetch_row($sql))
                                {$idlimnologia =  $registro[0];}


$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno_ig");
$cadastra->setFields
("`id_tb_limno` ,
`lim_ig_aparelho` ,
`lim_ig_proj` ,
`lim_ig_excursao` ,
`lim_ig_cod` ,
`lim_ig_padr` ,
`lim_ig_local` ,
`lim_ig_lat_g` ,
`lim_ig_lat_m` ,
`lim_ig_lat_s` ,
`lim_ig_long_g` ,
`lim_ig_long_m` ,
`lim_ig_long_s` ,
`lim_ig_form_geo` ,
`lim_ig_tam`  ,
`lim_ig_data`,
`lim_ig_phidro`  ,
`lim_ig_amb` ,
`lim_ig_integ` ,
`lim_ig_hora_ini` ,
`lim_ig_ph`  ,
`lim_ig_temp`  ,
`lim_ig_condut` ,
`lim_ig_o2diss` ,
`lim_ig_o2sat` ,
`lim_ig_tipoag` ,
`lim_ig_ordem` ,
`lim_ig_veloc` ,
`lim_ig_larg_rio` ,
`lim_ig_vaz` ,
`lim_ig_prof_med` ,
`lim_ig_prof_max` ,
`lim_ig_transp` ,
`lim_ig_dossel` ,
`lim_ig_are` ,
`lim_ig_arg`  ,
`lim_ig_litg`  ,
`lim_ig_litf` ,
`lim_ig_tronc` ,
`lim_ig_macrof` ,
`lim_ig_raiz`  ,
`lim_ig_colet` ,
`lim_ig_obs`,
`idlimnologia`");
$cadastra->setDados
("NULL ,
'$apar',
'$proj',
'$excu',
'$cod',
'$padr',
'$loc',
'$lat_g',
'$lat_m',
'$lat_s',
'$long_g',
'$long_m',
'$long_s',
'$form_geo',
'$tam',
'$data',
'$phidro',
'$amb',
'$integ',
'$hora_ini',
'$ph',
'$temp',
'$condut',
'$o2diss',
'$o2sat',
'$tipoag',
'$ordem',
'$veloc',
'$larg_rio',
'$vaz',
'$prof_med',
'$prof_max',
'$transp' ,
'$dossel' ,
'$are' ,
'$arg' ,
'$litg' ,
'$litf' ,
'$tronc',
'$macrof' ,
'$raiz' ,
'$lim_colet' ,
'$obs',
'$idlimnologia'
");
$cadastra->insert();

 ?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/limno_inserir">Novo cadastro</a></div>
</div>
