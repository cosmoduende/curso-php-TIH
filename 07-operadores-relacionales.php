<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
echo "\n == Igual \n";
var_dump( $a == $b );
var_dump( $a == $b2 );

// === Idéntico
echo "\n === Idéntico";
var_dump( $a === $b );
var_dump( $a === $b2 );

// != Diferente
echo "\n != Diferente";
var_dump( $a != $b );
var_dump( $a != $b2 );

// !== Diferente
echo "\n != Diferente identíco \n";
var_dump( $a !== $b );
var_dump( $a !== $b2 ); 

// < Menor que
echo "\n < Menor que \n";
var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b ); 

// > Mayor que
echo "\n > Mayor que \n";
var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b ); 

// >= Mayor o igual que
echo "\n >= Mayor o igual que \n";
var_dump( $a >= $b );
var_dump( $c >= $b );
var_dump( $d >= $b ); 

// <= Menor o igual que
echo "\n <= Menor o igual que \n";
var_dump( $a <= $b );
var_dump( $c <= $b );
var_dump( $d <= $b );

// <=> Nave espacial (si el num de la izq es mayor que el de la derecha, arroja 1, 
// si el de la derecha es mayor, arrojará -1, si es igual, arrojará cero)
echo "\n <=> Nave espacial \n";
echo (2 <=> 1) . "\n"; // 1
echo (1 <=> 1) . "\n"; // 0
echo (-50 <=> 1) . "\n"; // -1

// ?? Fusión de null (si una variabale no está definida, usa la que sí lo está)
echo "\n ?? Fusión de null \n";
$edad_de_pepito = 23;
echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

echo "\n";