<?php
function case3($pasajero, $colPasajeros)
{
    $respuesta = "no";

    while ($respuesta != "si") {
        $condicion = false;
        $pasajero = [];
        while ($condicion != true) {
            echo "ingrese los datos de los pasajeros. \n";
            echo "nombre del pasajero \n";
            $nombre = trim(fgets(STDIN));
            if (ctype_alpha($nombre)) {
                // $pasajero->setNombre($nombre);
                $pasajero["nombre"]=$nombre;

                $condicion = true;
            } else {
                echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion2 = false;
        while ($condicion2 != true) {
            echo "apellido del pasajero. \n";
            $apellido = trim(fgets(STDIN));
            $condicion2 = false;
            if (ctype_alpha($apellido)) {
                // $pasajero->setApellido($apellido);
                $pasajero["apellido"]=$apellido;
                $condicion2 = true;
            } else {
                echo "La variable NO contiene solo letras. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion3 = false;
        while ($condicion3 != true) {
            echo "ingrese DNI. \n";
            $dni = trim(fgets(STDIN));
            $condicion3 = false;
            if (is_numeric($dni)) {
                // $pasajero->setNumDni($dni);
                $pasajero["dni"]=$dni;
                $condicion3 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }

        $condicion4 = false;
        while ($condicion4 != true) {
            echo "ingrese Telefono. \n";
            $tel = trim(fgets(STDIN));
            if (is_numeric($tel)) {
                // $pasajero->setTelefono($tel);
                $pasajero["tel"]=$tel;
                $condicion4 = true;
            } else {
                echo "La variable NO contiene solo números. Por favor, inténtelo de nuevo.\n";
            }
        }
        // array_push($colPasajeros, $pasajero);
        $colPasajeros[] = $pasajero;
        // echo $pasajero;
        // print_r($colPasajeros);
        echo "dejar de ingresar pasajeros si / no .\n";
        $respuesta = trim(fgets(STDIN));
        // echo "ingrese 0 para volver al menu ";
    }
    return $colPasajeros;
}
