<?php
// echo "$exc";
if ($exc == "Todas")
{$excu1 = " ";}
else if ($exc == "Expandidas")
{$excu1 = " AND (tb_limno.lim_excursao = '1' OR tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '9' OR tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '16' OR tb_limno.lim_excursao = '19' OR tb_limno.lim_excursao = '23')";}
else if ($exc == "Cheia piloto")
{$excu1 = " AND (tb_limno.lim_excursao = '1' OR tb_limno.lim_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu1 = " AND (tb_limno.lim_excursao = '3' OR tb_limno.lim_excursao = '10' OR tb_limno.lim_excursao = '11' OR tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '13' OR tb_limno.lim_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu1 = " AND (tb_limno.lim_excursao = '15' OR tb_limno.lim_excursao = '19' OR tb_limno.lim_excursao = '20')";}
else if ($exc == "Cheia 3")
{$excu1 = " AND (tb_limno.lim_excursao = '21' OR tb_limno.lim_excursao = '25')";}
else if ($exc == "Cheias")
{$excu1 = " AND (tb_limno.lim_excursao = '3' OR tb_limno.lim_excursao = '10' OR tb_limno.lim_excursao = '11' OR tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '13' OR tb_limno.lim_excursao = '14' OR tb_limno.lim_excursao = '15' OR tb_limno.lim_excursao = '19' OR tb_limno.lim_excursao = '20'  OR tb_limno.lim_excursao = '21' OR tb_limno.lim_excursao = '25')";}
if ($exc == "Seca 1")
{$excu1 = " AND (tb_limno.lim_excursao = '9' OR tb_limno.lim_excursao = '4' OR tb_limno.lim_excursao = '5' OR tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '7' OR tb_limno.lim_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu1 = " AND (tb_limno.lim_excursao = '18' OR tb_limno.lim_excursao = '16' OR tb_limno.lim_excursao = '17')";}
else if ($exc == "Seca 3")
{$excu1 = " AND (tb_limno.lim_excursao = '22' OR tb_limno.lim_excursao = '23' OR tb_limno.lim_excursao = '24')";}
else if ($exc == "Secas")
{$excu1 = " AND (tb_limno.lim_excursao = '9' OR tb_limno.lim_excursao = '4' OR tb_limno.lim_excursao = '5' OR tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '7' OR tb_limno.lim_excursao = '8' OR tb_limno.lim_excursao = '18' OR tb_limno.lim_excursao = '16' OR tb_limno.lim_excursao = '17' OR tb_limno.lim_excursao = '22' OR tb_limno.lim_excursao = '23' OR tb_limno.lim_excursao = '24')";}


else if ($exc == "Expandidas Cheia")
{$excu1 = " AND (tb_limno.lim_excursao = '1' OR tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu1 = " AND (tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '9' OR tb_limno.lim_excursao = '16' OR tb_limno.lim_excursao = '23')";}


else if ($exc == "ANO I")
{$excu1 = " AND (tb_limno.lim_excursao = '3' OR tb_limno.lim_excursao = '4' OR tb_limno.lim_excursao = '5'  OR tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '7'
 OR tb_limno.lim_excursao = '8' OR tb_limno.lim_excursao = '9' OR tb_limno.lim_excursao = '10' OR tb_limno.lim_excursao = '11' OR tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '13' OR tb_limno.lim_excursao = '14')";}

else if ($exc == "ANO II")
{$excu1 = " AND (tb_limno.lim_excursao = '15' OR tb_limno.lim_excursao = '16' OR tb_limno.lim_excursao = '17'  OR tb_limno.lim_excursao = '18' OR tb_limno.lim_excursao = '19'
 OR tb_limno.lim_excursao = '20')";}

 else if ($exc == "ANO III")
{$excu1 = " AND (tb_limno.lim_excursao = '21' OR tb_limno.lim_excursao = '22' OR tb_limno.lim_excursao = '23'  OR tb_limno.lim_excursao = '24' OR tb_limno.lim_excursao = '25')";}


 else if ($exc == "2008")
{$excu1 = " AND (tb_limno.lim_excursao = '1' OR tb_limno.lim_excursao = '2')";}

 else if ($exc == "2009")
{$excu1 = " AND (tb_limno.lim_excursao = '3' OR tb_limno.lim_excursao = '4' OR tb_limno.lim_excursao = '5'  OR tb_limno.lim_excursao = '6' OR tb_limno.lim_excursao = '7'
 OR tb_limno.lim_excursao = '8' OR tb_limno.lim_excursao = '9'  OR tb_limno.lim_excursao = '10' OR tb_limno.lim_excursao = '11')";}

 else if ($exc == "2010")
{$excu1 = " AND (tb_limno.lim_excursao = '12' OR tb_limno.lim_excursao = '13' OR tb_limno.lim_excursao = '14'  OR tb_limno.lim_excursao = '15' OR tb_limno.lim_excursao = '16'
 OR tb_limno.lim_excursao = '17' OR tb_limno.lim_excursao = '18'  OR tb_limno.lim_excursao = '19')";}

  else if ($exc == "2011")
{$excu1 = " AND (tb_limno.lim_excursao = '20' OR tb_limno.lim_excursao = '21'  OR tb_limno.lim_excursao = '22'  OR tb_limno.lim_excursao = '23'  OR tb_limno.lim_excursao = '24'  OR tb_limno.lim_excursao = '25' )";}

else if ($exc > 0)
{$excu1 = " AND (tb_limno.lim_excursao = '$exc')";}


?>