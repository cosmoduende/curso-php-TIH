<?php

function clear() {

    if (PHP_OS === "WINNT") {
        system("cls");
    }
    else {
        system("clear");
    }
    
}

$palabras_posibles = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("INTENTOS_MAX", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

// Inicializamos el juegos
$palabra_elegida = $palabras_posibles[ rand(0, 9) ];
$palabra_elegida = strtolower($palabra_elegida);
$longitud_palabra = strlen($palabra_elegida);
$letras_descubiertas = str_pad("", $longitud_palabra, "_");
$intentos = 0;

do {

    echo "Palabra de $longitud_palabra letras \n\n";
    echo $letras_descubiertas . "\n\n";

    // Pedimos al usuario que escriba
    $letra_jugador = readline("Escribe una letra: ");
    $letra_jugador = strtolower($letra_jugador);

    if ( str_contains($palabra_elegida, $letra_jugador) ) {

        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while(
            ($posicion_letra = strpos($palabra_elegida, $letra_jugador, $offset)) !== false
        ) {

            $letras_descubiertas[$posicion_letra] = $letra_jugador;
            $offset = $posicion_letra + 1;

        }
        
    } 
    else {

        clear();
        $intentos++;
        echo "Letra incorrecta 😾. Te quedan " . (INTENTOS_MAX - $intentos) . " intentos.";
        sleep(2);

    }

    clear();

} while( $intentos < INTENTOS_MAX && $letras_descubiertas != $palabra_elegida );

clear();

if ($intentos < INTENTOS_MAX)
    echo "¡Felicidades! Has adivinado la palabra. 🙀 \n\n";
else
    echo "Suerte para la próxima, amigo. 😾 \n\n";

echo "La palabra es: $palabra_elegida \n";
echo "Tú descubriste $letras_descubiertas";

echo "\n";