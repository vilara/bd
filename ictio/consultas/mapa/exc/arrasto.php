<?php

if ($exc == "Todas")
{$excu = " ";}
else if ($exc == "Expandidas")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '6' OR lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '16' OR lim_arr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu = " AND (lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu = " AND (lim_arr_excursao = '1' OR lim_arr_excursao = '2' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14' OR lim_arr_excursao = '18' OR lim_arr_excursao = '19' OR lim_arr_excursao = '20')";}
else if ($exc == "Seca 1")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu = " AND (lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Secas")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8' OR lim_arr_excursao = '15' OR lim_arr_excursao = '16' OR lim_arr_excursao = '17')";}
else if ($exc == "Expandida seca")
{$excu = " AND (lim_arr_excursao = '6' OR lim_arr_excursao = '16')";}
else if ($exc == "Expandida cheia")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '12' OR lim_arr_excursao = '19')";}
else if ($exc == "Enchente-Cheia")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13')";}
else if ($exc == "Vazante-Seca")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5' OR lim_arr_excursao = '6' OR lim_arr_excursao = '7' OR lim_arr_excursao = '8')";}
else if ($exc == "Enchente")
{$excu = " AND (lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11')";}
else if ($exc == "Vazante")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5')";}
else if ($exc == "ANO I")
{$excu = " AND (lim_arr_excursao = '3' OR lim_arr_excursao = '4' OR lim_arr_excursao = '5'  OR lim_arr_excursao = '6' OR lim_arr_excursao = '7'
 OR lim_arr_excursao = '8' OR lim_arr_excursao = '9' OR lim_arr_excursao = '10' OR lim_arr_excursao = '11' OR lim_arr_excursao = '12' OR lim_arr_excursao = '13' OR lim_arr_excursao = '14')";}
else
{$excu = " AND lim_arr_excursao = '$exc'";}

?>