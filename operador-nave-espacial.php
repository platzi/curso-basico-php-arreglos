<?php

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump( $precios_de_cafes );