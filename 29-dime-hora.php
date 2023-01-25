<?php


// checar documentación de date y de timezone en doc oficial php

function obtener_hora() {
    date_default_timezone_set("America/Mexico_City");
    return date("h:i a");
}

echo "¡Hola! ¿Me podrías decir qué hora es? \n";
echo "¡Claro! Son las " . obtener_hora();

echo "\n";