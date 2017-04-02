<?php
// echo "brasil";

 if ($exc == "Todas")
{$excu2 = " ";}
else if ($exc == "Expandidas")
{$excu2 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '16' OR lim_arr_excursao = '19' OR lim_arr_excursao = '23')";}
else if ($exc == "Cheia piloto")
{$excu2 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu2 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu2 = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Cheia 3")
{$excu2 = " AND (lim_arr_excursao = '21' OR lim_arr_excursao = '25')";}
else if ($exc == "Cheias")
{$excu2 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '15' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20'  OR lim_arr_excursao = '21' OR lim_arr_excursao = '25')";}
if ($exc == "Seca 1")
{$excu2 = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu2 = " AND (lim_arr_excursao = '18' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Seca 3")
{$excu2 = " AND (lim_arr_excursao = '22' OR lim_arr_excursao = '23' OR lim_arr_excursao = '24')";}
else if ($exc == "Secas")
{$excu2 = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '18' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17' OR lim_arr_excursao = '22' OR lim_arr_excursao = '23' OR lim_arr_excursao = '24')";}


else if ($exc == "Expandidas Cheia")
{$excu2 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '12' OR lim_arr_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu2 = " AND (lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '16' OR lim_arr_excursao = '23')";}


else if ($exc == "ANO I")
{$excu2 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}

else if ($exc == "ANO II")
{$excu2 = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17'  OR lim_arr_excursao = '18' OR lim_arr_excursao = '19'
 OR lim_arr_excursao = '20')";}

 else if ($exc == "ANO III")
{$excu2 = " AND (lim_arr_excursao = '21' OR lim_arr_excursao = '22' OR lim_arr_excursao = '23'  OR lim_arr_excursao = '24' OR lim_arr_excursao = '25')";}


 else if ($exc == "2008")
{$excu2 = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}

 else if ($exc == "2009")
{$excu2 = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9'  OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}

 else if ($exc == "2010")
{$excu2 = " AND (lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14'  OR lim_arr_excursao = '15' OR lim_arr_excursao = '16'
 OR lim_arr_excursao = '17' OR lim_arr_excursao = '18'  OR lim_arr_excursao = '19')";}

  else if ($exc == "2011")
{$excu2 = " AND (lim_arr_excursao = '20' OR lim_arr_excursao = '21'  OR lim_arr_excursao = '22'  OR lim_arr_excursao = '23'  OR lim_arr_excursao = '24'  OR lim_arr_excursao = '25' )";}

else if ($exc > 0)
{$excu2 = " AND (lim_arr_excursao = '$exc')";}

?>