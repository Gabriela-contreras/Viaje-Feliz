<?php

function Selector()
{
    echo "\n-----MENU-----\n";
    echo "1. Modificar destino\n";
    echo "2. Modificar Cantidad maxima de pasajeros\n";
    echo "3. Agregar pasajeros\n";
    echo "4. Responsable del viaje \n";
    echo "5. Ver datos del viaje \n";
    echo "6. Salir \n";

    echo "ingrese opcion \n ";
    $opcion = trim(fgets(STDIN));
    return $opcion;

}
