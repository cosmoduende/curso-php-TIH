<?php

/*
do{
    echo "esto se ejecuta por lo menos una vez";
}
while(false);
*/


$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

    echo "\n";

} while( in_array($username, $usernames) );

echo "\n";