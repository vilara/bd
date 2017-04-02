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
      <!--  <h3>Cadastro de dados Limnológicos de Arrasto de Fundo</h3>         -->
        <h3>Cadastro inserido com sucesso</h3>

<!--Área editável início     -->

<?php
$lim_arr_excursao = $_GET["lim_excursao"];
$lim_arr_cod = $_GET["lim_cod"];
$lim_arr_aparelho = $_GET["lim_aparelho"];
$lim_arr_loc = $_GET["lim_local"];
$lim_arr_data = $_GET["lim_data"];


// echo"$lim_arr_excursao--$lim_arr_cod--$lim_arr_loc--$lim_arr_data--$lim_dren";



$lim_dren = $_POST["lim_dren"];
$lim_arr_hi = $_POST["hora_ini"];
$lim_arr_mi = $_POST["min_ini"];
$lim_arr_hora_ini = "$lim_arr_hi:$lim_arr_mi:00";
// echo"$lim_arr_hora_ini-";
$lim_arr_hf = $_POST["hora_fim"];
$lim_arr_mf = $_POST["min_fim"];
$lim_arr_hora_fim = "$lim_arr_hf:$lim_arr_mf:00";
// echo"$lim_arr_hora_fim";

$lim_arr_lat_g_ini = $_POST["lim_arr_lat_g_ini"];
$lim_arr_lat_m_ini = $_POST["lim_arr_lat_m_ini"];
$lim_arr_lat_s_ini = $_POST["lim_arr_lat_s_ini"];


$lim_arr_long_g_ini = $_POST["lim_arr_long_g_ini"];
$lim_arr_long_m_ini = $_POST["lim_arr_long_m_ini"];
$lim_arr_long_s_ini = $_POST["lim_arr_long_s_ini"];


$lim_arr_lat_g_fim = $_POST["lim_arr_lat_g_fim"];
$lim_arr_lat_m_fim = $_POST["lim_arr_lat_m_fim"];
$lim_arr_lat_s_fim = $_POST["lim_arr_lat_s_fim"];


$lim_arr_long_g_fim = $_POST["lim_arr_long_g_fim"];
$lim_arr_long_m_fim = $_POST["lim_arr_long_m_fim"];
$lim_arr_long_s_fim = $_POST["lim_arr_long_s_fim"];

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

$lim_arr_veloc_ini = $_POST["lim_arr_veloc_ini"];
$lim_arr_veloc_fim = $_POST["lim_arr_veloc_fim"];
$lim_arr_prof_ini = $_POST["lim_arr_prof_ini"];
$lim_arr_prof_fim = $_POST["lim_arr_prof_fim"];
$lim_arr_prof1 = $_POST["lim_arr_prof1"];
$lim_arr_prof2 = $_POST["lim_arr_prof2"];
$lim_arr_prof3= $_POST["lim_arr_prof3"];
$lim_arr_prof4 = $_POST["lim_arr_prof4"];
$lim_arr_prof5 = $_POST["lim_arr_prof5"];
$lim_arr_prof6 = $_POST["lim_arr_prof6"];
$lim_arr_prof7 = $_POST["lim_arr_prof7"];
$lim_arr_prof8 = $_POST["lim_arr_prof8"];
$lim_arr_prof9 = $_POST["lim_arr_prof9"];
$lim_arr_transp = $_POST["lim_arr_transp"];
$lim_arr_turb = $_POST["lim_arr_turb"];
$lim_arr_condut = $_POST["lim_arr_condut"];
$lim_arr_ph = $_POST["lim_arr_ph"];
$lim_arr_o2diss = $_POST["lim_arr_o2diss"];
$lim_arr_o2sat = $_POST["lim_arr_o2sat"];
$lim_arr_temp = $_POST["lim_arr_temp"];
$lim_arr_larg_rio = $_POST["lim_arr_larg_rio"];
$lim_arr_marg = $_POST["lim_arr_marg"];
$lim_arr_localidade = $_POST["lim_arr_localidade"];
$lim_arr_habitat = $_POST["lim_arr_habitat"];
$lim_arr_padronizado = $_POST["lim_arr_padronizado"];
$lim_arr_turb2 = $_POST["lim_arr_turb2"];
$lim_arr_turb3 = $_POST["lim_arr_turb3"];
$lim_arr_condut2 = $_POST["lim_arr_condut2"];
$lim_arr_an = $_POST["lim_arr_an"];

$lim_arr_condut_fun = $_POST["lim_arr_condut_fun"];
$lim_arr_condut2_fun = $_POST["lim_arr_condut2_fun"];
$lim_arr_ph_fun = $_POST["lim_arr_ph_fun"];
$lim_arr_o2diss_fun = $_POST["lim_arr_o2diss_fun"];
$lim_arr_o2sat_fun = $_POST["lim_arr_o2sat_fun"];
$lim_arr_temp_fun = $_POST["lim_arr_temp_fun"];
$lim_arr_abun = $_POST["lim_arr_abun"];
$lim_arr_ponto = $_POST["lim_arr_ponto"];
$lim_arr_obs = $_POST["lim_arr_obs"];


$cadastra = new ManipulateData();
$cadastra->setTable("tb_limnologia");
$cadastra->setFields("`idlimnologia` , `codigo` , `aparelho` , `excursao` , `local` , `data` , `pad` ,  `obs` , `coletor` , `pescador`");
$cadastra->setDados("NULL , '$lim_arr_cod', '$lim_arr_aparelho', '$lim_arr_excursao', '$lim_arr_loc','$lim_arr_data', '$lim_arr_padronizado' , '$lim_arr_obs', '$lim_colet', '$lim_pesc'");
$cadastra->insert();

$sql = mysql_query("SELECT idlimnologia FROM tb_limnologia");
                           while($registro = mysql_fetch_row($sql))
                                {$idlimnologia =  $registro[0];}

$cadastra = new ManipulateData();
$cadastra->setTable("tb_limno_arr");
$cadastra->setFields("`id_tb_limno_arr` , `lim_arr_cod` , `lim_arr_excursao` , `lim_arr_loc` , `lim_arr_hora_ini` , `lim_arr_hora_fim` , `lim_arr_lat_g_ini` , `lim_arr_lat_g_fim` ,  `lim_arr_long_g_ini` , `lim_arr_long_g_fim` , `lim_arr_colet` , `lim_arr_pesc` , `lim_arr_veloc_ini` , `lim_arr_veloc_fim` , `lim_arr_prof_ini` , `lim_arr_prof1` , `lim_arr_prof2` , `lim_arr_prof3` , `lim_arr_prof4` ,  `lim_arr_prof5` , `lim_arr_prof6` , `lim_arr_prof7` , `lim_arr_prof8` , `lim_arr_prof9` , `lim_arr_prof_fim` , `lim_arr_transp` , `lim_arr_turb` , `lim_arr_ph` , `lim_arr_o2diss` , `lim_arr_o2sat` , `lim_arr_condut` , `lim_arr_temp` , `lim_arr_larg_rio` , `lim_arr_marg` , `lim_arr_data` , `lim_dren` , `lim_arr_localidade` , `lim_arr_habitat` , `lim_arr_padronizado` , `lim_arr_turb2` , `lim_arr_turb3` , `lim_arr_condut2` , `lim_arr_lat_m_ini` , `lim_arr_lat_s_ini` , `lim_arr_lat_m_fim` , `lim_arr_lat_s_fim` , `lim_arr_long_m_ini` , `lim_arr_long_s_ini` , `lim_arr_long_m_fim` , `lim_arr_long_s_fim` , `lim_arr_an` , `lim_arr_condut_fun` , `lim_arr_condut2_fun` , `lim_arr_ph_fun` , `lim_arr_o2diss_fun` , `lim_arr_o2sat_fun` , `lim_arr_temp_fun` , `lim_arr_abun` , `lim_arr_ponto` , `lim_arr_obs` , `idlimnologia`");
$cadastra->setDados("NULL , '$lim_arr_cod', '$lim_arr_excursao', '$lim_arr_loc', '$lim_arr_hora_ini', '$lim_arr_hora_fim', '$lim_arr_lat_g_ini', '$lim_arr_lat_g_fim', '$lim_arr_long_g_ini', '$lim_arr_long_g_fim', '$lim_colet', '$lim_arr_pesc', '$lim_arr_veloc_ini', '$lim_arr_veloc_fim', '$lim_arr_prof_ini', '$lim_arr_prof1', '$lim_arr_prof2', '$lim_arr_prof3', '$lim_arr_prof4', '$lim_arr_prof5', '$lim_arr_prof6', '$lim_arr_prof7', '$lim_arr_prof8',  '$lim_arr_prof9', '$lim_arr_prof_fim', '$lim_arr_transp', '$lim_arr_turb', '$lim_arr_ph', '$lim_arr_o2diss', '$lim_arr_o2sat', '$lim_arr_condut', '$lim_arr_temp', '$lim_arr_larg_rio', '$lim_arr_marg', '$lim_arr_data', '$lim_dren', '$lim_arr_localidade', '$lim_arr_habitat', '$lim_arr_padronizado', '$lim_arr_turb2', '$lim_arr_turb3', '$lim_arr_condut2', '$lim_arr_lat_m_ini' , '$lim_arr_lat_s_ini' , '$lim_arr_lat_m_fim' , '$lim_arr_lat_s_fim' , '$lim_arr_long_m_ini' , '$lim_arr_long_s_ini' , '$lim_arr_long_m_fim' , '$lim_arr_long_s_fim' , '$lim_arr_an' , '$lim_arr_condut_fun' , '$lim_arr_condut2_fun' , '$lim_arr_ph_fun' , '$lim_arr_o2diss_fun' , '$lim_arr_o2sat_fun' , '$lim_arr_temp_fun' , '$lim_arr_abun' , '$lim_arr_ponto' , '$lim_arr_obs' , '$idlimnologia'");
$cadastra->insert();


//echo "$usu_ag-$usu_bairro-$usu_banco-$usu_cc-$usu_cep-$usu_cidade-$usu_comple-$usu_cpf-$usu_csenha-$usu_data_nasc-$usu_email-$usu_estado-$usu_foto-$usu_lograd-$usu_msn-$usu_nome_com-$usu_numero-$usu_prinome-$usu_senha-$usu_tel_cel";
?>





<!--Área editável fim     -->


<div id="botao1"><a href="index.php">Início</a>&nbsp;&nbsp;&nbsp;<a href="index.php?secoes=cadastros/limno_inserir">Novo cadastro</a></div>
</div>
