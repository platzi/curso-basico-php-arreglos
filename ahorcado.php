<?php

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

define("MAX_ATTEMPS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

// Inicializamos el juegos
$choosen_word = $possible_words[ rand(0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;


echo "Palabra de $word_length letras \n\n";
echo $discovered_letters . "\n\n";

// Pedimos al usuario que escriba
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);



echo "\n";