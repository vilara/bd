 <style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>


   <div id="edicao">


<!--Área editável início     -->

<?php
// include "config.php";
$lim_aparelho = $_GET["lim_aparelho"];
$lim_excursao = $_GET["lim_excursao"];
$id = $_GET["id"];
$idd = $_GET["idd"];

if($lim_aparelho == 'Malhadeira' OR $lim_aparelho == 'Redinha')
{


$lim_cod = $_POST["lim_cod"];
$exc = $_POST["exc"];
$lim_local = $_POST["lim_local"];
$lim_dia = $_POST["lim_dia"];
$lim_mes = $_POST["lim_mes"];
$lim_ano = $_POST["lim_ano"];
$lim_data = "$lim_ano-$lim_mes-$lim_dia";


$lim_lat_g = $_POST["lim_lat_g"];
$lim_long_g = $_POST["lim_long_g"];
$lim_colet = $_POST["lim_colet"];
$lim_dren = $_POST["lim_dren"];
$lim_pesc = $_POST["lim_pesc"];
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
 $lim_an = $_POST["lim_an"];

$lim_h = $_POST["lim_h"];
$lim_m = $_POST["lim_m"];
//echo"$lim_h--$lim_m";
$lim_hora_ini = "$lim_h:$lim_m:00";

$lim_condut2 = $_POST["lim_condut2"];

$lim_lat_m = $_POST["lim_lat_m"];
$lim_lat_s = $_POST["lim_lat_s"];
$lim_long_m = $_POST["lim_long_m"];

$lim_long_s = $_POST["lim_long_s"];
$lim_obs = $_POST["lim_obs"];

//echo"$lim_padronizado";
$res = mysql_query("UPDATE `tb_limno` SET
`lim_excursao` = '$exc',
`lim_cod` = '$lim_cod',

`lim_local` = '$lim_local',
`lim_data` = '$lim_data',
`lim_dren` = '$lim_dren',
`lim_lat_g` = '$lim_lat_g',
`lim_long_g` = '$lim_long_g',
`lim_colet` = '$lim_colet',
`lim_pesc` = '$lim_pesc',
`lim_fluxo1` = '$lim_fluxo1',
`lim_fluxo2` = '$lim_fluxo2',
`lim_prof` = '$lim_prof',
`lim_transp` = '$lim_transp',
`lim_turb1` = '$lim_turb1',
`lim_turb2` = '$lim_turb2',
`lim_turb3` = '$lim_turb3',
`lim_condut` = '$lim_condut',
`lim_ph` = '$lim_ph',
`lim_o2diss` = '$lim_o2diss',
`lim_o2sat` = '$lim_o2sat',
`lim_temp` = '$lim_temp',
`lim_larg_rio` = '$lim_larg_rio',
`lim_substr` = '$lim_substr',
`lim_localidade` = '$lim_localidade',
`lim_habitat` = '$lim_habitat',
`lim_padronizado` = '$lim_padronizado',
`lim_hora_ini` = '$lim_hora_ini',
`lim_condut2` = '$lim_condut2',
`lim_lat_m` = '$lim_lat_m',
`lim_lat_s` = '$lim_lat_s',
`lim_long_m` = '$lim_long_m',
`lim_long_s` = '$lim_long_s',
`lim_an` = '$lim_an',
`lim_obs` = '$lim_obs'
 WHERE `id_tb_limno` = $idd  LIMIT 1 ;");


// echo "<script>parent.location.href='index2.php?id=relatorios/rel_esp_cad.php'</script>";
//  echo "tezste";

?>
   <div id="edicao">

 <h3>Cadastro editado com sucesso.</h3>
         <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<!--<div id="botao1"> <a href="index.php?secoes=consultas/cod_campo_mostrar&aparelho=<?php echo"$lim_aparelho";?>&exc=<?php echo"$lim_excursao";?>&flag=1">VOLTAR</a></div>
-->

<?php
}
else{
if ($lim_aparelho == 'Arrasto de fundo')
{
$lim_arr_aparelho = "Arrasto de fundo";
$lim_arr_excursao = $_POST["lim_arr_excursao"];
$lim_arr_cod = $_POST["lim_arr_cod"];

$lim_arr_loc = $_POST["lim_arr_loc"];

$lim_arr_dia = $_POST["lim_arr_dia"];
$lim_arr_mes = $_POST["lim_arr_mes"];
$lim_arr_ano = $_POST["lim_arr_ano"];
$lim_arr_data = "$lim_arr_ano-$lim_arr_mes-$lim_arr_dia";

$lim_arr_hi = $_POST["lim_arr_hi"];
$lim_arr_mi = $_POST["lim_arr_mi"];
$lim_arr_hora_ini = "$lim_arr_hi:$lim_arr_mi:00";
// echo"$lim_arr_hora_ini";
$lim_arr_hf = $_POST["lim_arr_hf"];
$lim_arr_mf = $_POST["lim_arr_mf"];
$lim_arr_hora_fim = "$lim_arr_hf:$lim_arr_mf:00";
// echo"$lim_arr_hora_fim";

$lim_arr_lat_g_ini = $_POST["lim_arr_lat_g_ini"];
$lim_arr_long_g_ini = $_POST["lim_arr_long_g_ini"];
$lim_arr_lat_g_fim = $_POST["lim_arr_lat_g_fim"];
$lim_arr_long_g_fim = $_POST["lim_arr_long_g_fim"];

$lim_arr_colet = $_POST["lim_arr_colet"];
$lim_arr_pesc = $_POST["lim_arr_pesc"];
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

$lim_arr_lat_m_ini = $_POST["lim_arr_lat_m_ini"];
$lim_arr_lat_s_ini = $_POST["lim_arr_lat_s_ini"];
$lim_arr_lat_m_fim = $_POST["lim_arr_lat_m_fim"];
$lim_arr_lat_s_fim = $_POST["lim_arr_lat_s_fim"];

$lim_arr_long_m_ini = $_POST["lim_arr_long_m_ini"];
$lim_arr_long_s_ini = $_POST["lim_arr_long_s_ini"];
$lim_arr_long_m_fim = $_POST["lim_arr_long_m_fim"];
$lim_arr_long_s_fim = $_POST["lim_arr_long_s_fim"];
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
$res = mysql_query("UPDATE `tb_limno_arr` SET
`lim_arr_cod` = '$lim_arr_cod',
`lim_arr_excursao` = '$lim_arr_excursao',
`lim_arr_loc` = '$lim_arr_loc',
`lim_arr_hora_ini` = '$lim_arr_hora_ini',
`lim_arr_hora_fim` = '$lim_arr_hora_fim',
`lim_arr_lat_g_ini` = '$lim_arr_lat_g_ini',
`lim_arr_lat_g_fim` = '$lim_arr_lat_g_fim',
`lim_arr_long_g_ini` = '$lim_arr_long_g_ini',
`lim_arr_long_g_fim` = '$lim_arr_long_g_fim',
`lim_arr_colet` = '$lim_arr_colet',
`lim_arr_pesc` = '$lim_arr_pesc',
`lim_arr_veloc_ini` = '$lim_arr_veloc_ini',
`lim_arr_veloc_fim` = '$lim_arr_veloc_fim',
`lim_arr_prof_ini` = '$lim_arr_prof_ini',
`lim_arr_prof1` = '$lim_arr_prof1',
`lim_arr_prof2` = '$lim_arr_prof2',
`lim_arr_prof3` = '$lim_arr_prof3',
`lim_arr_prof4` = '$lim_arr_prof4',
`lim_arr_prof5` = '$lim_arr_prof5',
`lim_arr_prof6` = '$lim_arr_prof6',
`lim_arr_prof7` = '$lim_arr_prof7',
`lim_arr_prof8` = '$lim_arr_prof8',
`lim_arr_prof9` = '$lim_arr_prof9',
`lim_arr_prof_fim` = '$lim_arr_prof_fim',
`lim_arr_transp` = '$lim_arr_transp',
`lim_arr_turb` = '$lim_arr_turb',
`lim_arr_ph` = '$lim_arr_ph',
`lim_arr_o2diss` = '$lim_arr_o2diss',
`lim_arr_o2sat` = '$lim_arr_o2sat',
`lim_arr_condut` = '$lim_arr_condut',
`lim_arr_temp` = '$lim_arr_temp',

`lim_arr_larg_rio` = '$lim_arr_larg_rio',
`lim_arr_marg` = '$lim_arr_marg',
`lim_arr_localidade` = '$lim_arr_localidade',
 `lim_arr_habitat` = '$lim_arr_habitat',
  `lim_arr_padronizado` = '$lim_arr_padronizado',
    `lim_arr_turb2` = '$lim_arr_turb2',
      `lim_arr_turb3` = '$lim_arr_turb3',
        `lim_arr_condut2` = '$lim_arr_condut2',

`lim_arr_lat_m_ini` = '$lim_arr_lat_m_ini',
`lim_arr_lat_s_ini` = '$lim_arr_lat_s_ini',
`lim_arr_lat_m_fim` = '$lim_arr_lat_m_fim',
`lim_arr_lat_s_fim` = '$lim_arr_lat_s_fim',

`lim_arr_long_m_ini` = '$lim_arr_long_m_ini',
`lim_arr_long_s_ini` = '$lim_arr_long_s_ini',
`lim_arr_long_m_fim` = '$lim_arr_long_m_fim',
`lim_arr_long_s_fim` = '$lim_arr_long_s_fim',
`lim_arr_an` = '$lim_arr_an',

`lim_arr_condut_fun` = '$lim_arr_condut_fun',
`lim_arr_condut2_fun` = '$lim_arr_condut2_fun',
`lim_arr_ph_fun` = '$lim_arr_ph_fun',

`lim_arr_o2diss_fun` = '$lim_arr_o2diss_fun',
`lim_arr_o2sat_fun` = '$lim_arr_o2sat_fun',
`lim_arr_temp_fun` = '$lim_arr_temp_fun',
`lim_arr_abun` = '$lim_arr_abun',
`lim_arr_ponto` = '$lim_arr_ponto',
`lim_arr_obs` = '$lim_arr_obs'
 WHERE `id_tb_limno_arr` = $idd  LIMIT 1 ;");



?>
   <div id="edicao">

 <h3>Cadastro editado com sucesso. </h3>
         <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<!--<div id="botao1"> <a href="index.php?secoes=consultas/cod_campo_mostrar&aparelho=<?php echo"$lim_aparelho";?>&exc=<?php echo"$lim_excursao";?>&flag=1">VOLTAR</a></div>
-->
<?php







}
else{

$lim_outr_aparelho = $_POST["lim_outr_aparelho"];
$lim_outr_excursao = $_POST["lim_outr_excursao"];

$lim_outr_dia = $_POST["lim_outr_dia"];
$lim_outr_mes = $_POST["lim_outr_mes"];
$lim_outr_ano = $_POST["lim_outr_ano"];

$lim_outr_data = "$lim_outr_ano-$lim_outr_mes-$lim_outr_dia";


$lim_outr_cod = $_POST["lim_outr_cod"];
$lim_local = $_POST["lim_local"];
$lim_outr_colet = $_POST["lim_outr_colet"];
$lim_outr_pesc = $_POST["lim_outr_pesc"];
$lim_outr_localidade = $_POST["lim_outr_localidade"];
$lim_outr_habitat = $_POST["lim_outr_habitat"];

$lim_outr_lat_g = $_POST["lim_outr_lat_g"];
$lim_outr_lat_m = $_POST["lim_outr_lat_m"];
$lim_outr_lat_s = $_POST["lim_outr_lat_s"];

$lim_outr_long_g = $_POST["lim_outr_long_g"];
$lim_outr_long_m = $_POST["lim_outr_long_m"];
$lim_outr_long_s = $_POST["lim_outr_long_s"];

$lim_outr_padronizado = $_POST["lim_outr_padronizado"];
$lim_outr_an = $_POST["lim_outr_an"];
$lim_outr_obs = $_POST["lim_outr_obs"];

$res = mysql_query("UPDATE `tb_limno_outr` SET
 `lim_outr_excursao` = '$lim_outr_excursao',
`lim_outr_aparelho` = '$lim_outr_aparelho',
`lim_local` = '$lim_local',
`lim_outr_data` = '$lim_outr_data',
`lim_outr_cod` = '$lim_outr_cod' ,
`lim_outr_colet` = '$lim_outr_colet' ,
`lim_outr_pesc` = '$lim_outr_pesc',
`lim_outr_localidade` = '$lim_outr_localidade',
`lim_outr_habitat` = '$lim_outr_habitat',
`lim_outr_lat_g` = '$lim_outr_lat_g',
`lim_outr_lat_m` = '$lim_outr_lat_m',
`lim_outr_lat_s` = '$lim_outr_lat_s',
`lim_outr_long_g` = '$lim_outr_long_g',
`lim_outr_long_m` = '$lim_outr_long_m',
`lim_outr_long_s` = '$lim_outr_long_s',
`lim_outr_padronizado` = '$lim_outr_padronizado',
`lim_outr_obs` = '$lim_outr_obs',
`lim_outr_an` = '$lim_outr_an'
 WHERE `id_tb_limno_outr` = $idd  LIMIT 1 ;");


?>
     <div id="edicao">
<h1>Cadastro de dados Limnológicos de Outros aparelhos</h1>

 <h3>Cadastro editado com sucesso. </h3>
         <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<!-- <div id="botao1"> <a href="index.php?secoes=consultas/cod_campo_mostrar&aparelho=<?php echo"$lim_aparelho";?>&exc=<?php echo"$lim_excursao";?>&flag=1">VOLTAR</a></div>
-->

<?php







}
}
?>

<!--Área editável fim     -->



</div>

