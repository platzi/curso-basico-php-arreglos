<?php

function get_pokemon() {

    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu\n";
            break;
        
        case 2:
            echo "Charmander\n";
            break;

        case 3:
            echo "Mewtwo\n";
            break;
        
        default:
            echo "Lo siento, no hay pokémon para ti :c\n";
    }

}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}

echo "\n";