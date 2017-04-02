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
        <!--<h3>Cadastro de dados Limnológicos de Outros Aparelhos</h3>     -->
        <h3>Cadastro inserido com sucesso</h3>
<!--Área editável início     -->

<?php
$lim_outr_aparelho = $_GET["lim_aparelho"];

if ($lim_outr_aparelho == "Outros")
{
$lim_outr_aparelho = $_POST["aparr"];
}

echo $_POST["aparr"];

$lim_outr_excursao = $_GET["lim_excursao"];
$lim_outr_data = $_GET["lim_data"];
$lim_outr_cod = $_GET["lim_cod"];
$lim_outr_loc = $_GET["lim_local"];

$lim_outr_lat_g = $_POST["lim_outr_lat_g"];
$lim_outr_lat_m = $_POST["lim_outr_lat_m"];
$lim_outr_lat_s = $_POST["lim_outr_lat_s"];

$lim_outr_long_g = $_POST["lim_outr_long_g"];
$lim_outr_long_m = $_POST["lim_outr_long_m"];
$lim_outr_long_s = $_POST["lim_outr_long_s"];

$lim_outr_padronizado = $_POST["lim_outr_padronizado"];

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

$lim_outr_localidade = $_POST["lim_outr_localidade"];
$lim_outr_habitat = $_POST["lim_outr_habitat"];
$lim_outr_an = $_POST["lim_outr_an"];
$lim_outr_obs = $_POST["lim_outr_obs"];

$cadastra = new ManipulateData();
$cadastra->setTable("tb_limnologia");
$cadastra->setFields("`idlimnologia` , `codigo` , `aparelho` , `excursao` , `local` , `data` , `pad` ,  `obs` , `coletor` , `pescador`");
$cadastra->setDados("NULL , '$lim_outr_cod', '$lim_outr_aparelho', '$lim_outr_excursao', '$lim_outr_loc','$lim_outr_data', '$lim_outr_padronizado' , '$lim_outr_obs', '$lim_colet', '$lim_pesc'");
$cadastra->insert();

$sql = mysql_query("SELECT idlimnologia FROM tb_limnologia");
                           while($registro = mysql_fetch_row($sql))
                                {$idlimnologia =  $registro[0];}




$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno_outr");
$cadastra->setFields("`id_tb_limno_outr` , `lim_outr_excursao` , `lim_outr_aparelho` , `lim_local` , `lim_outr_data` , `lim_outr_cod` , `lim_outr_colet` , `lim_outr_pesc` , `lim_outr_localidade` , `lim_outr_habitat`, `lim_outr_lat_g` , `lim_outr_lat_m` , `lim_outr_lat_s` , `lim_outr_long_g`  , `lim_outr_long_m` , `lim_outr_long_s` , `lim_outr_padronizado` , `lim_outr_an` , `lim_outr_obs`, `idlimnologia`");
$cadastra->setDados("NULL , '$lim_outr_excursao', '$lim_outr_aparelho', '$lim_outr_loc', '$lim_outr_data', '$lim_outr_cod', '$lim_colet', '$lim_outr_pesc', '$lim_outr_localidade', '$lim_outr_habitat' , '$lim_outr_lat_g'  , '$lim_outr_lat_m' , '$lim_outr_lat_s' , '$lim_outr_long_g'  , '$lim_outr_long_m' , '$lim_outr_long_s' , '$lim_outr_padronizado' , '$lim_outr_an' , '$lim_outr_obs' , '$idlimnologia'");
$cadastra->insert();

//echo "$usu_ag-$usu_bairro-$usu_banco-$usu_cc-$usu_cep-$usu_cidade-$usu_comple-$usu_cpf-$usu_csenha-$usu_data_nasc-$usu_email-$usu_estado-$usu_foto-$usu_lograd-$usu_msn-$usu_nome_com-$usu_numero-$usu_prinome-$usu_senha-$usu_tel_cel";
?>



<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/limno_inserir">Novo cadastro</a></div>
</div>
