<?php

$cantidad_donada = readline("Por favor, ingresa la cantidad de donaciones acumuladas que tienes: ");

if ( $cantidad_donada >= 100) {
    echo "Tu retiro está en proceso...";
}
else {
    echo "Lo sentimos, solo puedes retirar después de los 100 dólares acumulados.";
}


echo "\n";