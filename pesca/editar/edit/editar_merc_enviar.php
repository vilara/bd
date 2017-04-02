<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE;  border: 1px solid #000000;} /* background: #FF99FF */
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
</style>



<!--Área editável início     -->
<?php
$aparelho = $_GET["aparelho"];
$idd = $_GET["idd"];
$flag = $_GET["flag"];

//echo "$aparelho-$idd-$flag";

if($aparelho == 'Biometria')
{

if ($flag == 0){


$empr = $_POST["empr"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";
$mun = $_POST["mun"];
$categ = $_POST["categ"];
$ct = $_POST["ct"];
$cp = $_POST["cp"];
$pt = $_POST["pt"];
// $esto = $_POST["esto"];
// $go = $_POST["go"];  `esto` = '$esto',   `gono` = '$go',
//echo "$cp-$idd";
$peg = $_POST["peg"];
$ca = $_POST["ca"];
$nf = $_POST["nf"];
$ref = $_POST["ref"];
$sexo = $_POST["sexo"];
$ematur = $_POST["ematur"];
$histo = $_POST["histo"];
$cresc = $_POST["cresc"];
$teci = $_POST["teci"];
$gg = $_POST["gg"];
$gr = $_POST["gr"];
$cpc = $_POST["cpc"];
$cptc = $_POST["cptc"];
$cppc = $_POST["cppc"];
$obs = $_POST["obs"];

$res = mysql_query("UPDATE `ictiomadeira`.`pesc_col_mercado` SET
`empre` = '$empr',
`data` = '$data',
`loc` = '$mun',
`cat` = '$categ',
`ct` = '$ct',
`cp` = '$cp',
`pt` = '$pt',
`cpc` = '$cpc',
`cptc` = '$cptc',
`cppc` = '$cppc',

`pgono` = '$peg',
`cab` = '$ca',
`nr_foto` = '$nf',
`ref` = '$ref',
`sexo` = '$sexo',
`ematur` = '$ematur',
`histo` = '$histo',
`teci` = '$teci',
`cresc` = '$cresc',
`gg` = '$gg',
`gr` = '$gr',
`obs` = '$obs'


 WHERE `pesc_col_mercado`.`id_familiar` = $idd LIMIT 1 ;");
?>
   <div id="edicao">
        <h3>Registro de pesca de biometria editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php

}

else if ($flag == 1){
$regi = $_POST["regi"];
$n_ref = $_POST["n_ref"];
$empr = $_POST["empr"];
$categ = $_POST["categ"];
$mun = $_POST["mun"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";
$pt = $_POST["pt"];
$pt_corr = $_POST["pt_corr"];
$ct = $_POST["ct"];  if ($ct == 0){$ct = "";}
$cp = $_POST["cp"];   if ($cp == 0){$cp = "";}
$cf = $_POST["cf"];  if ($cf == 0){$cf = "";}
$cpc = $_POST["cpc"];
$ca = $_POST["ca"];
$sexo = $_POST["sexo"];
$go = $_POST["go"];
$peg = $_POST["peg"];
$ematur_mac = $_POST["ematur_mac"];
$ematur = $_POST["ematur"];
$cptc = $_POST["cptc"];
$cppc = $_POST["cppc"];
$est = $_POST["est"];
$gr = $_POST["gr"];
$teci = $_POST["teci"];
$gen = $_POST["gen"];
$od = $_POST["od"];
$ap = $_POST["ap"];
$anali = $_POST["anali"];
$obs = $_POST["obs"];
$ct_corr = $_POST["ct_corr"]; if ($ct_corr == 0){$ct_corr = "";}
$cf_corr = $_POST["cf_corr"];  if ($cf_corr == 0){$cf_corr = "";}


$res = mysql_query("UPDATE `ictiomadeira`.`pesc_col_mercado` SET

`nr` = '$regi',
`empre` = '$empr',
`data` = '$data',
`loc` = '$mun',
`cat` = '$categ',
`ct` = '$ct',
`cp` = '$cp',
`pt` = '$pt',
`cpc` = '$cpc',
`cptc` = '$cptc',
`cppc` = '$cppc',
`est` = '$est',
`cab` = '$ca',
`pgono` = '$peg',
`ref` = '$n_ref',
`sexo` = '$sexo',
`ematur` = '$ematur',
`teci` = '$teci',
`gr` = '$gr',
`obs` = '$obs',
`cf` = '$cf',
`ematur_mac` = '$ematur_mac',
`gen` = '$gen',
`od` = '$od',
`ap` = '$ap',
`anali` = '$anali',
`go` = '$go',
`pt_corr` = '$pt_corr',
`ct_corr` = '$ct_corr',
`cf_corr` = '$cf_corr'


 WHERE `pesc_col_mercado`.`id_familiar` = $idd LIMIT 1 ;");
?>
   <div id="edicao">
        <h3>Registro de pesca de biometria editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php


}

else if ($flag == 2){

echo "$idd";

$empre =   $_POST["empr"]  ;
$pt =   $_POST["pt"]     ;
$im =   $_POST["im"]     ;
$bor =   $_POST["bor"]     ;
$ct =   $_POST["ct"]    ;
$cf =   $_POST["cf"]    ;  // echo "$cf"   ;

$od =   $_POST["od"]    ;
$do =   $_POST["do"]    ;
$cp =   $_POST["cp"]    ;
$cf_corr =   $_POST["cf_corr"] ; if ($cf_corr == 0){$cf_corr = "";}



$ldl =  $_POST["ldl"]  ;if ($ldl == 0){$ldl = "";}
$lel =  $_POST["lel"]  ;if ($lel == 0){$lel = "";}
$ldp =  $_POST["ldp"]  ; if ($ldp == 0){$ldp = "";}
$lep =  $_POST["lep"]  ;if ($lep == 0){$lep = "";}
$lda =  $_POST["lda"]  ; if ($lda == 0){$lda = "";}
$lea =  $_POST["lea"]  ;if ($lea == 0){$lea = "";}

$adl =  $_POST["adl"]  ; if ($adl == 0){$adl = "";}
$ael =  $_POST["ael"]  ;if ($ael == 0){$ael = "";}
$adp =  $_POST["adp"]  ;if ($adp == 0){$adp = "";}
$aep =  $_POST["aep"]  ;if ($aep == 0){$aep = "";}
$ada =  $_POST["ada"]  ;if ($ada == 0){$ada = "";}
$aea =  $_POST["aea"]  ;if ($aea == 0){$aea = "";}

$sdl =  $_POST["sdl"]  ;if ($sdl == 0){$sdl = "";}
$sel =  $_POST["sel"]  ;if ($sel == 0){$sel = "";}
$sdp =  $_POST["sdp"]  ;if ($sdp == 0){$sdp = "";}
$sep =  $_POST["sep"]  ;if ($sep == 0){$sep = "";}
$sda =  $_POST["sda"]  ;if ($sda == 0){$sda = "";}
$sea =  $_POST["sea"]  ;if ($sea == 0){$sea = "";}

$r1 =  $_POST["r1"]  ;
$r2 =  $_POST["r2"] ;
$r3 = $_POST["r3"] ;
$r4 = $_POST["r4"] ;
$r5 =  $_POST["r5"] ;
$r6 =  $_POST["r6"] ;
$r7 =  $_POST["r7"] ;
$r8 =  $_POST["r8"] ;
$r9 =  $_POST["r9"] ;
$r10 = $_POST["r10"] ;
$r11 =  $_POST["r11"] ;
$r12 =  $_POST["r12"] ;
$r13 =  $_POST["r13"] ;
$r14 = $_POST["r14"] ;
$r15 =  $_POST["r15"] ;
$r16 =  $_POST["r16"] ;
$r17 =  $_POST["r17"] ;
$r18 =  $_POST["r18"] ;
$r19 =  $_POST["r19"] ;
$r20 = $_POST["r20"] ;

$rt =  $_POST["rt"] ;
 /*








  */

$res = mysql_query("UPDATE `ictiomadeira`.`pesc_col_mercado` SET
`pt` = '$pt',
`cf` = '$cf',
`do` = '$do',

`lda`     =  '$lda',
`lea`      =   '$lea',
`ldl` =    '$ldl',
`lel`  =   '$lel',
`ldp`   =  '$ldp',
`lep`    = '$lep',

 `ada`            =    '$ada',
`aea`             =   '$aea',
`adl`        =   '$adl',
`ael`         =   '$ael',
`adp`          =   '$adp',
`aep`           =    '$aep',
`sda`                   =  '$sda',
`sea`                    =  '$sea',

`sdl`               =   '$sdl',
`sel`                =  '$sel',
`sdp`                 =  '$sdp',
`sep`                  =  '$sep',

 `rt` = '$rt' ,
`r1` = '$r1',
`r2` = '$r2',
`r3` = '$r3',
`r4` = '$r4',
`r5` = '$r5',
`r6` = '$r6',
`r7` = '$r7',
`r8` = '$r8',
`r9` = '$r9',
`r10` = '$r10',

`r11` = '$r11',
`r12` = '$r12',
`r13` = '$r13',
`r14` = '$r14',
`r15` = '$r15',
`r16` = '$r16',
`r17` = '$r17',
`r18` = '$r18',
`r19` = '$r19',
`r20` = '$r20',

`od` = '$od',
`bor` = '$bor',
`im` = '$im',

`cf_corr` = '$cf_corr'

 WHERE `pesc_col_mercado`.`id_familiar` = $idd LIMIT 1 ;");
?>
   <div id="edicao">
        <h3>Registro de pesca de biometria editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php


}



}



else if($aparelho == 'Familiar')
{
$empr = $_POST["empr"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";
$loc = $_POST["loc"];
$pesc = $_POST["pesc"];
$sit = $_POST["sit"];
$categ = $_POST["categ"];
$qtde = $_POST["qtde"];
$peso = $_POST["peso"];
$peso_m = $_POST["peso_m"];
$peso_g = $_POST["peso_g"];
$comp = $_POST["comp"];
$comp_m = $_POST["comp_m"];
$qtdv = $_POST["qtdv"];
$qtdc = $_POST["qtdc"];
$obs = $_POST["obs"];
$indiv = $_POST["indiv"];
//   echo "$comp_m";

$res = mysql_query("UPDATE `ictiomadeira`.`pesc_col_familiar` SET
`data` = '$data',
`localidade` = '$loc',
`pescador` = '$pesc',
`esp` = '$categ',
`esp_sec` = '$categ',
`qtdev` = '$qtdv',
`qtdec` = '$qtdc',
`obs` = '$obs',
`empr` = '$empr',
`peso` = '$peso',
`comp` = '$comp',
`sit` = '$sit',
`qtde` = '$qtde',
`peso_g` = '$peso_g',
`indiv` = '$indiv' ,

`peso_m` = '$peso_m',
`comp_m` = '$comp_m'


 WHERE `pesc_col_familiar`.`id_merc` = $idd LIMIT 1 ;");

 /*

  */

?>
   <div id="edicao">
        <h3>Registro de pesca familiar editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php
}




else if($aparelho == 'Caderno')
{

$aparelho = $_GET["aparelho"];
$idd = $_GET["idd"];
$flag = $_GET["flag"];


// echo "$idd";

$empr = $_POST["empr"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$data = "$ano-$mes-$dia";
$loc = $_POST["loc"];
$func = $_POST["func"];
$pesc = $_POST["pesc"];
$tx = $_POST["tx"];
$va = $_POST["va"];
$re = $_POST["re"];
$categ = $_POST["categ"];
$qtde = $_POST["qtde"];
$ori = $_POST["ori"];
$que = $_POST["que"];
$obs = $_POST["obs"];


$res = mysql_query("UPDATE `ictiomadeira`.`pesc_col_caderno` SET
`data` = '$data',

`func` = '$func',
`pescador` = '$pesc',
`taxa` = '$tx',
`valor` = '$va',
`rend` = '$re',
`quest` = '$que',
`esp` = '$categ',
`obs` = '$obs',
`empr` = '$empr',
`ori` = '$ori' ,
`peso` = '$qtde'
 WHERE `pesc_col_caderno`.`id_cad` = $idd LIMIT 1 ;");

 /*

  */

?>
   <div id="edicao">
        <h3>Registro de pesca do Caderno editado com sucesso!</h3>
        <form>
<center><input type="button" value="Fechar" onClick="window.close()"></center>
        </form>
<?php
}
?>

</div>
