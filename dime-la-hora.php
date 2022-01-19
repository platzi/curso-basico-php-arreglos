<?php

function obtener_hora() {
    return date("h:i a");
}

echo "¡Hola! ¿Me podrías decir qué hora es? \n";
echo "¡Claro! Son las " . obtener_hora();

echo "\n";