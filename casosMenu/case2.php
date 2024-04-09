<?php

function case2($viaje)
{

    $condicion = false;
    while ($condicion != true) {
        echo "Ingrese nueva Cantidad maxima de pasajeros. \n";
        $nuevaCantMax = trim(fgets(STDIN));
        if (is_numeric($nuevaCantMax)) {
            $viaje->setCantMax($nuevaCantMax);
            $condicion = true;
        } else {
            echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
        }
    }
    // echo "ingrese 0 para volver al menu ";
}
