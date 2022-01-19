<?php

function freddy() {

    $numero_aleatorio = rand(1, 4);
    $frase_de_freddy = "";

    switch ($numero_aleatorio) {
        case 1:
            $frase_de_freddy = "Nunca pares de aprender.\n";
            break;
        
        case 2:
            $frase_de_freddy = "Las empresas no son familia.\n";
            break;

        case 3:
            $frase_de_freddy = "La tecnología es el futuro.\n";
            break;

        case 4:
            $frase_de_freddy = "AMO PHP.\n";
            break;
    }

    return $frase_de_freddy;

}

echo freddy();

echo "\n";