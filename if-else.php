<?php

$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_a_tony_stark = true;

if ($asientos_disponibles > 0)
    echo "Puedes ver la pelicula de Spidey";
else if ($es_hijo_de_tom_holland)
    echo "No te creo, pero puedes ver la pelicula";
else if ($conoce_a_tony_stark)
    echo "Bueno, te creo, adelante";
else
    echo "Lo sentimos, te tocara spoilearte";

echo "\n";