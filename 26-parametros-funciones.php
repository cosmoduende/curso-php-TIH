<?php

function es_cliente_vip($puntos_rank) {
    
    if ($puntos_rank >= 20000) {
        echo "¡Eres un cliente diamante, ingresa a la sala VIP!\n";
    }
    else if ($puntos_rank >= 10000 && $puntos_rank < 20000) {
        echo "¡Eres un cliente oro, aún te faltan puntos para ser diamanete!\n";
    }
    else {
        echo "Lo sentimos, aun no alcanzas el nivel diamante, te faltan muchos puntos \n";
    }

}

do {

    $puntos_rank_user = (int) readline("Por favor, dinos cual es tu Platzi Rank: ");

    es_cliente_vip($puntos_rank_user);
    
} while(true);
