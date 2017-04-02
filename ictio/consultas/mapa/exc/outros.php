<?php

if ($exc == "Todas")
{$excu[2] = " ";}
else if ($exc == "Expandidas")
{$excu[2] = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '6' OR lim_outr_excursao = '9' OR lim_outr_excursao = '12' OR lim_outr_excursao = '16' OR lim_outr_excursao = '19')";}
else if ($exc == "Cheia piloto")
{$excu[2] = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2')";}
else if ($exc == "Cheia 1")
{$excu[2] = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}
else if ($exc == "Cheia 2")
{$excu[2] = " AND (lim_outr_excursao = '18' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20')";}
else if ($exc == "Cheias")
{$excu[2] = " AND (lim_outr_excursao = '1' OR lim_outr_excursao = '2' OR lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14' OR lim_outr_excursao = '18' OR lim_outr_excursao = '19' OR lim_outr_excursao = '20')";}
else if ($exc == "Seca 1")
{$excu[2] = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8')";}
else if ($exc == "Seca 2")
{$excu[2] = " AND (lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17')";}
else if ($exc == "Secas")
{$excu[2] = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8' OR lim_outr_excursao = '15' OR lim_outr_excursao = '16' OR lim_outr_excursao = '17')";}
else if ($exc == "Expandida seca")
{$excu[2] = " AND (lim_outr_excursao = '6' OR lim_outr_excursao = '16')";}
else if ($exc == "Expandida cheia")
{$excu[2] = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '12' OR lim_outr_excursao = '19')";}
else if ($exc == "Enchente-Cheia")
{$excu[2] = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13')";}
else if ($exc == "Vazante-Seca")
{$excu[2] = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5' OR lim_outr_excursao = '6' OR lim_outr_excursao = '7' OR lim_outr_excursao = '8')";}
else if ($exc == "Enchente")
{$excu[2] = " AND (lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11')";}
else if ($exc == "Vazante")
{$excu[2] = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5')";}
else if ($exc == "ANO I")
{$excu[2] = " AND (lim_outr_excursao = '3' OR lim_outr_excursao = '4' OR lim_outr_excursao = '5'  OR lim_outr_excursao = '6' OR lim_outr_excursao = '7'
 OR lim_outr_excursao = '8' OR lim_outr_excursao = '9' OR lim_outr_excursao = '10' OR lim_outr_excursao = '11' OR lim_outr_excursao = '12' OR lim_outr_excursao = '13' OR lim_outr_excursao = '14')";}
else
{$excu[2] = " AND lim_outr_excursao = '$exc'";}


?>