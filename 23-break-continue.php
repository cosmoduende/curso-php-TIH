<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

// break
foreach ($tiendita_de_cafes as $cafe => $precio) {
    echo "Actualmente encontré al café $cafe ! \n";
    if ($cafe == "Latte"){    
    echo "Encontramos a $cafe, y cuesta $precio \n";
    break;
    }
}

// continue
foreach ($tiendita_de_cafes as $cafe => $precio) {
    if ($cafe == "Recalentado"){    
    continue;
    }
    echo "El café $cafe es rico \n";
}

// busqueda
$miCafe = readline("Qué café estás buscando?: ");
foreach ($tiendita_de_cafes as $cafe => $precio) {
    if ($cafe == $miCafe){    
    echo "Encontramos a $cafe, y cuesta $precio \n";
    break;
    }    
}

echo "\n";