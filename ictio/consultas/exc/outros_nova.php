<?php


// echo "$exc";
if ($exc == "Todas")
{$excu3 = " ";}
else if ($exc == "Expandidas")
{$excu3 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '6' OR lim_outr_excursao = '9' OR lim_outr_excursao = '12' OR lim_outr_excursao = '16' OR lim_outr_excursao = '19' OR lim_outr_excursao = '23')";}
else if ($exc == "Cheia piloto")
{$excu3 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu3 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu3 = " AND (lim_outr_excursao = '15' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20')";}
else if ($exc == "Cheia 3")
{$excu3 = " AND (lim_outr_excursao = '21' OR lim_outr_excursao = '25')";}
else if ($exc == "Cheias")
{$excu3 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14' OR lim_outr_excursao = '15' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20'  OR lim_outr_excursao = '21' OR lim_outr_excursao = '25')";}
if ($exc == "Seca 1")
{$excu3 = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu3 = " AND (lim_outr_excursao = '18' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17')";}
else if ($exc == "Seca 3")
{$excu3 = " AND (lim_outr_excursao = '22' OR lim_outr_excursao = '23' OR lim_outr_excursao = '24')";}
else if ($exc == "Secas")
{$excu3 = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8' OR lim_outr_excursao = '18' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17' OR lim_outr_excursao = '22' OR lim_outr_excursao = '23' OR lim_outr_excursao = '24')";}


else if ($exc == "Expandidas Cheia")
{$excu3 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '12' OR lim_outr_excursao = '19')";}
else if ($exc == "Expandidas Seca")
{$excu3 = " AND (lim_outr_excursao = '6' OR lim_outr_excursao = '9' OR lim_outr_excursao = '16' OR lim_outr_excursao = '23')";}


else if ($exc == "ANO I")
{$excu3 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5'  OR lim_outr_excursao = '6' OR lim_outr_excursao = '7'
 OR lim_outr_excursao = '8' OR lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}

else if ($exc == "ANO II")
{$excu3 = " AND (lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17'  OR lim_outr_excursao = '18' OR lim_outr_excursao = '19'
 OR lim_outr_excursao = '20')";}

 else if ($exc == "ANO III")
{$excu3 = " AND (lim_outr_excursao = '21' OR lim_outr_excursao = '22' OR lim_outr_excursao = '23'  OR lim_outr_excursao = '24' OR lim_outr_excursao = '25')";}


 else if ($exc == "2008")
{$excu3 = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2')";}

 else if ($exc == "2009")
{$excu3 = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5'  OR lim_outr_excursao = '6' OR lim_outr_excursao = '7'
 OR lim_outr_excursao = '8' OR lim_outr_excursao = '9'  OR lim_outr_excursao = '10' OR lim_outr_excursao = '11')";}

 else if ($exc == "2010")
{$excu3 = " AND (lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14'  OR lim_outr_excursao = '15' OR lim_outr_excursao = '16'
 OR lim_outr_excursao = '17' OR lim_outr_excursao = '18'  OR lim_outr_excursao = '19')";}

  else if ($exc == "2011")
{$excu3 = " AND (lim_outr_excursao = '20' OR lim_outr_excursao = '21'  OR lim_outr_excursao = '22'  OR lim_outr_excursao = '23'  OR lim_outr_excursao = '24'  OR lim_outr_excursao = '25' )";}

else if ($exc > 0)
{$excu3 = " AND (lim_outr_excursao = '$exc')";}


?>



