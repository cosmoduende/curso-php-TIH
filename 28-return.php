<?php

function motivacion() {

    $numero_aleatorio = rand(1, 4);
    $frase_de_motivacion = "";

    switch ($numero_aleatorio) {
        case 1:
            $frase_de_motivacion = "No cuentes los días, haz que los días cuenten. \n";
            break;
        
        case 2:
            $frase_de_motivacion = "El mejor momento del día es ahora. \n";
            break;

        case 3:
            $frase_de_motivacion = "Sé el cambio que quieres ver en el mundo. \n";
            break;

        case 4:
            $frase_de_motivacion = "Piensa, sueña, cree y atrévete.\n";
            break;
    }

    return $frase_de_motivacion;

}

echo motivacion();