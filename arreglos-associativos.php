<?php

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

// echo "El precio del cafe Americano es de {$cafes['Americano']}";


$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),

);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];

echo "\n";