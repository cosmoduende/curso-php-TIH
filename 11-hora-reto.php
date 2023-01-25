<?php

$horas = readline("Por favor, ingresa el numero de horas: ");
$minutos = readline("Por favor, ingresa los minutos: ");
$segundos = readline("Por favor, ingresa los segundos: ");

$tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

echo "Este tiempo equivale a $tiempo_en_segundos segundos. \n";