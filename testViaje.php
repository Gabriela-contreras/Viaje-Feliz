<?php

include_once("Viaje.php");
include_once("Pasajeros.php");
include_once("ResponsableV.php");
include_once("../tp2obligatorio/casosMenu/selectorMenu.php");
include_once("../tp2obligatorio/casosMenu/case1.php");
include_once("../tp2obligatorio/casosMenu/case2.php");
include_once("../tp2obligatorio/casosMenu/case3.php");
include_once("../tp2obligatorio/casosMenu/case4.php");
include_once("../tp2obligatorio/casosMenu/case5.php");



// Implementar un script testViaje.php que cree una instancia de la
// clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.

//Menu
$colPasajeros=[];
$responsable = new Responsable(5, 120, "samuel", "correa");
// echo $responsable;
$viaje = new Viaje(103, "Bahamas", 20, $colPasajeros, $responsable);
echo $viaje ;
print_r($colPasajeros);
// echo $responsable->__toString();

$pasajero = new Pasajeros("Gabriela", "Contreras", "45732848", "2995954317");
// echo $pasajero;

$opcion ;

while ($opcion != 6) {

    $opcion = Selector();

    switch ($opcion) {
        case 1:
            $casos = case1($viaje);
            break;

        case 2:
            $casos = case2($viaje);
            break;

        case 3:
            $colPasajeros = case3($pasajero ,$colPasajeros);
            $viaje->setColPasajeros($colPasajeros);
            print_r($colPasajeros);
            break;

        case 4:
            $casos = case4($responsable);
            break;

        case 5:
            $casos = case5($viaje);
            break;
    }
}
