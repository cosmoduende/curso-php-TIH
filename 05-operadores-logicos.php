<?php

$michis_felinos =  true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

// And
 var_dump($michis_felinos && $michis_4_patas);

// Or
var_dump($michis_4_patas || $michis_vuelan);

// Not
 var_dump( !$michis_4_patas );

// Experimentos que te va a hacer decir waaaaaaaaaaaaat (usando operador en inglés)
$resultado = $michis_4_patas and $michis_programan_con_PHP;
var_dump( $resultado );

echo "\n";