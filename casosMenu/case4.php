<?php
function case4($responsable)
{
    $condicion = false;
    echo "responsable del viaje. \n";
    while ($condicion != true) {
        echo "Ingrese numero de Empleado \n";
        $numEmpleado = trim(fgets(STDIN));
        if (is_numeric($numEmpleado)) {
            $responsable->setNumEmpleado($numEmpleado);
            $condicion = true;
        } else {
            echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
        }
    }


    $condicion2 = false;
    while ($condicion2 != true) {
        echo "ingrese numero de licencia. \n";
        $numLic = trim(fgets(STDIN));
        if (is_numeric($numLic)) {
            $responsable->setNumLicencia($numLic);
            $condicion2 = true;
        } else {
            echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
        }
    }


    $condicion3 = false;
    while ($condicion3 != true) {
        echo "ingrese nombre del empleado . \n";
        $nombreEm = trim(fgets(STDIN));
        $condicion3 = false;
        if (ctype_alpha($nombreEm)) {
            $responsable->setNombre($nombreEm);
            $condicion3 = true;
        } else {
            echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
        }
    }


    $condicion4 = false;
    while ($condicion4 != true) {
        echo "ingrese apellido del empleado. \n";
        $apellidoEm = trim(fgets(STDIN));
        $condicion4 = false;
        if (ctype_alpha($nombreEm)) {
            $responsable->setApellido($apellidoEm);
            $condicion4 = true;
        } else {
            echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
        }
    }
}
