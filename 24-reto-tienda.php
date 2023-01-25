<?php

// fibonnachi patrón

$entrada=(int)readline("Este programa es una secuencia que va de 1 hasta el 9, 
si desea saber el numero de caminos que hay del 1 a N numero, digite el numero al que quiere llegar: ");
$numeroAnterior=0;
$numeroActual=1;
for ($contador=1;$contador<$entrada;$contador++)
{
   $numNuevo=$numeroAnterior+$numeroActual;
   $numeroAnterior=$numeroActual;
   $numeroActual=$numNuevo;
   
};

echo"el numero de caminos para llegar de 1 a $entrada:  $numNuevo \n";

?>