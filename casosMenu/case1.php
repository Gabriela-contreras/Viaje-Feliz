<?php

function case1($viaje)
{
    $condiction = false;
    while ($condiction != true) {
        echo "Ingrese el nuevo destino: \n";
        $nuevoDestino = trim(fgets(STDIN));
    
        if (preg_match('/^[a-zA-Z\s]+$/' ,$nuevoDestino)) {
            $viaje->setDestino($nuevoDestino);
            $condiction = true;
        } else {
            echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
        }
    }
}
