<?php
$cantidad_cajero = 2000;
$cantidad_retiro = readline("Bienvenido a BanTeresa. Por favor, ingresa la cantidad que deseas retirar: ");

if ( $cantidad_retiro >= 100) {
    echo "Tu retiro está en proceso... \n";
    if ($cantidad_retiro / 500 == 4 || $cantidad_retiro / 500 == 3
    || $cantidad_retiro / 500 == 2 || $cantidad_retiro / 500 == 1){
        echo "Procesando tu dinero... recoge tus " . $cantidad_retiro . 
        "\n Si deseas realizar otra operación, toma en cuenta que este cajero
        dispone ahora actualmente de " . ($cantidad_cajero - $cantidad_retiro) . " pesos";
    }
    else {
        echo "Lo sentimos, solo puedes retirar múltiplos de 500 por ahora,
        ya que este cajero sólo cuenta con " . $cantidad_cajero . " pesos en billetes de 500.";
    }
}
else {
    echo "Lo sentimos, solo puedes retirar 100 pesos o más en cajeros";
}


echo "\n";