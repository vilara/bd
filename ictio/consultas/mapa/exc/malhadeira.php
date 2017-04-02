<?php

if ($exc == "Todas")
{$excu[1] = " ";}
if ($exc == "Expandidas")
{$excu[1] = " AND (lim_excursao = '1' OR lim_excursao = '6' OR lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '16' OR lim_excursao = '19')";}
if ($exc == "Cheia piloto")
{$excu[1] = " AND (lim_excursao = '1' OR lim_excursao = '2')";}
if ($exc == "Cheia 1")
{$excu[1] = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
if ($exc == "Cheia 2")
{$excu[1] = " AND (lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Cheias")
{$excu[1] = " AND (lim_excursao = '1' OR lim_excursao = '2' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14' OR lim_excursao = '18' OR lim_excursao = '19' OR lim_excursao = '20')";}
if ($exc == "Seca 1")
{$excu[1] = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
if ($exc == "Seca 2")
{$excu[1] = " AND (lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
if ($exc == "Secas")
{$excu[1] = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8' OR lim_excursao = '15' OR lim_excursao = '16' OR lim_excursao = '17')";}
if ($exc == "Expandida seca")
{$excu[1] = " AND (lim_excursao = '6' OR lim_excursao = '16')";}
if ($exc == "Expandida cheia")
{$excu[1] = " AND (lim_excursao = '9' OR lim_excursao = '12' OR lim_excursao = '19')";}
if ($exc == "Enchente-Cheia")
{$excu[1] = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13')";}
if ($exc == "Vazante-Seca")
{$excu[1] = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5' OR lim_excursao = '6' OR lim_excursao = '7' OR lim_excursao = '8')";}
if ($exc == "Enchente")
{$excu[1] = " AND (lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11')";}
if ($exc == "Vazante")
{$excu[1] = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5')";}
if ($exc == "ANO I")
{$excu[1] = " AND (lim_excursao = '3' OR lim_excursao = '4' OR lim_excursao = '5'  OR lim_excursao = '6' OR lim_excursao = '7'
 OR lim_excursao = '8' OR lim_excursao = '9' OR lim_excursao = '10' OR lim_excursao = '11' OR lim_excursao = '12' OR lim_excursao = '13' OR lim_excursao = '14')";}
else
{$excu[1] = " AND lim_excursao = '$exc'";}


?>