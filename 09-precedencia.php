<?php

$contador = 1;
$resultado = $contador++;
echo $resultado . "\n"; 

// Tiene asociatividad izquierda
echo 1 - (2 - 3) - 4 . "\n";

// Tiene asociatividad derecha
$b = 5;
$c = 10;
$a = $b = $c;
echo $a . "\n";


$michis_4_patas = true;
$michis_programan_con_PHP = false;
$resultado = ($michis_4_patas and $michis_programan_con_PHP);
var_dump( $resultado );

echo "\n";