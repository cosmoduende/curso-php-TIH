<?php

function suma1($a = 1, $b = 1) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

suma1(4, 6);

// array unpacking para juntar arreglos "..."
$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];
var_dump($resultado);


function suma2($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

suma2(...$numeros);
suma2(...$numeros2);
suma2(...$numeros3);


// sumatoria de las tres funciones, recibiendo N cantidad de parámetros, al mismo tiempo usando foreach

function suma_infinita(...$params) {

    $suma = 0;
    
    foreach ($params as $elnumero) {
        $suma += $elnumero;
    }

    echo "La sumatoria es: $suma \n";

}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);