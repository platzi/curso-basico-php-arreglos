<?php

$edades = [18, 22, 40, 34];

// count
// echo count($edades);

// array_push
// array_push($edades, 13);

// is_array
$esto_no_es_un_arreglo = "";
// var_dump( is_array( $edades ) );

// explode
// $lista_de_frutas = "fresa,cereza,manzana";
// $lista_de_frutas_array = explode(",", $lista_de_frutas);

// implode
$lista_de_frutas_array = ["fresa", "cereza", "manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas_array);

var_dump($lista_de_frutas);

echo "\n";