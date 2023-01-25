<?php

$edades = [18, 22, 40, 34];

// count
echo count($edades) . "\n";

// array_push
array_push($edades, 13);
var_dump($edades);

// is_array
$esto_no_es_un_arreglo = "";
var_dump( is_array($esto_no_es_un_arreglo) );

// explode (convierte un string en un arreglo)
$lista_de_frutas = "fresa,cereza,manzana";
var_dump($lista_de_frutas);
$lista_de_frutas_array = explode(",", $lista_de_frutas);
var_dump($lista_de_frutas_array);

// implode
$lista_de_verduras_array = ["espinaca", "calabaza", "brócoli"];
$lista_de_verduras = implode(",", $lista_de_verduras_array);
var_dump($lista_de_verduras);

echo "\n";