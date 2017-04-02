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
$lim_excursao = $_GET["lim_excursao"];
$lim_cod = $_GET["lim_cod"];
$lim_aparelho = $_GET["lim_aparelho"];
$lim_local = $_GET["lim_local"];
$lim_data = $_GET["lim_data"];
$lim_dren = $_GET["lim_dren"];

$lim_lat_g = $_POST["lim_lat_g"];
$lim_lat_m = $_POST["lim_lat_m"];
$lim_lat_s = $_POST["lim_lat_s"];

$lim_long_g = $_POST["lim_long_g"];
$lim_long_m = $_POST["lim_long_m"];
$lim_long_s = $_POST["lim_long_s"];



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
{$lim_pesc= $lim_colet . $v1 . $col3;$v1 = "; ";
}

$col4 = $_POST["pes2"];
if (empty($col4))
{}
else
{$lim__pesc = $lim_colet . $v1 . $col4;$v1 = "; ";
}


$lim_fluxo1 = $_POST["lim_fluxo1"];
$lim_fluxo2 = $_POST["lim_fluxo2"];

$lim_prof = $_POST["lim_prof"];
$lim_transp = $_POST["lim_transp"];
$lim_turb1 = $_POST["lim_turb1"];
$lim_turb2 = $_POST["lim_turb2"];
$lim_turb3 = $_POST["lim_turb3"];
$lim_condut = $_POST["lim_condut"];
$lim_ph = $_POST["lim_ph"];
$lim_o2diss = $_POST["lim_o2diss"];
$lim_o2sat = $_POST["lim_o2sat"];
$lim_temp = $_POST["lim_temp"];
$lim_larg_rio = $_POST["lim_larg_rio"];
$lim_substr = $_POST["lim_substr"];
$lim_localidade = $_POST["lim_localidade"];
$lim_habitat = $_POST["lim_habitat"];
$lim_padronizado = $_POST["lim_padronizado"];
$lim_condut2 = $_POST["lim_condut2"];
$lim_hi = $_POST["hora_ini"];
$lim_mi = $_POST["min_ini"];
$lim_hora_ini = "$lim_hi:$lim_mi:00";
//echo"$lim_excursao-$lim_aparelho-$lim_local-$lim_velocidade-$lim_prof-$lim_secchi-$lim_turb
//-$lim_condut-$lim_ph-$lim_oxd-$lim_o2sat-$lim_lat-$lim_long-$lim_substr-$lim_larg_rio-$lim_transp";

$lim_an = $_POST["lim_an"];

$lim_obs = $_POST["lim_obs"];

// echo "$lim_cod---$lim_aparelho";

$cadastra = new ManipulateData();
$cadastra->setTable("tb_limnologia");
$cadastra->setFields("`idlimnologia` , `codigo` , `aparelho` , `excursao` , `local` , `data` , `pad` ,  `obs` , `coletor` , `pescador`");
$cadastra->setDados("NULL , '$lim_cod', '$lim_aparelho', '$lim_excursao', '$lim_local','$lim_data', '$lim_padronizado' , '$lim_obs', '$lim_colet', '$lim_pesc'");
$cadastra->insert();

$sql = mysql_query("SELECT idlimnologia FROM tb_limnologia");
                           while($registro = mysql_fetch_row($sql))
                                {$idlimnologia =  $registro[0];}


$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno");
$cadastra->setFields("`id_tb_limno` , `lim_excursao` , `lim_cod` , `lim_aparelho` , `lim_local` , `lim_data` , `lim_dren` ,  `lim_lat_g` , `lim_long_g` , `lim_colet` , `lim_pesc`  , `lim_fluxo1`, `lim_fluxo2`  , `lim_prof` , `lim_transp` , `lim_turb1` , `lim_turb2`  , `lim_turb3`  , `lim_condut` , `lim_ph` , `lim_o2diss` ,   `lim_o2sat` , `lim_temp` , `lim_larg_rio` , `lim_substr` , `lim_localidade` , `lim_habitat` , `lim_padronizado` , `lim_hora_ini` , `lim_condut2` , `lim_lat_m` , `lim_lat_s` , `lim_long_m` , `lim_long_s` , `lim_an` , `lim_obs` , `idlimnologia`");
$cadastra->setDados("NULL , '$lim_excursao', '$lim_cod', '$lim_aparelho', '$lim_local', '$lim_data', '$lim_dren', '$lim_lat_g', '$lim_long_g', '$lim_colet', '$lim_pesc', '$lim_fluxo1', '$lim_fluxo2', '$lim_prof', '$lim_transp', '$lim_turb1',  '$lim_turb2', '$lim_turb3', '$lim_condut', '$lim_ph', '$lim_o2diss', '$lim_o2sat', '$lim_temp', '$lim_larg_rio', '$lim_substr', '$lim_localidade', '$lim_habitat', '$lim_padronizado', '$lim_hora_ini', '$lim_condut2' , '$lim_lat_m' , '$lim_lat_s' , '$lim_long_m' , '$lim_long_s' , '$lim_an' , '$lim_obs' , '$idlimnologia'");
$cadastra->insert();

 ?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/limno_inserir">Novo cadastro</a></div>
</div>
