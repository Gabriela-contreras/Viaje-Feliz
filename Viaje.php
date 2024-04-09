<?php
class Viaje
{
    // La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
    //  De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

    // Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar 
    // los atributos de dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos
    // para   almacenar la información correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

    private $codigoViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $colPasajeros; //va un arreglo con los pasajeros 
    private $objResponsableViaje;

    public function __construct($codigoViaje, $destino, $cantMaxPasajeros, $colPasajeros,  $objResponsable)
    {

        $this->codigoViaje = $codigoViaje;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->colPasajeros = $colPasajeros;
        $this->objResponsableViaje = $objResponsable;
    }



    //Metodos de acceso (get)

    public function getCodigoViaje()
    {
        return $this->codigoViaje;
    }

    public function getDestino()
    {
        return $this->destino;
    }
    public function getCantMaxP()
    {
        return $this->cantMaxPasajeros;
    }
    public function getColPasajeros()
    {
        return $this->colPasajeros;
    }


    public function getObjResponsable()
    {
        return $this->objResponsableViaje;
    }

    //metodo de seteo (set)

    public function setCodigoViaje($c)
    {
        return $this->codigoViaje = $c;
    }

    public function setDestino($d)
    {
        return $this->destino = $d;
    }

    public function setCantMax($m)
    {
        return $this->cantMaxPasajeros = $m;
    }

    public function setColPasajeros($c)
    {
        return $this->colPasajeros = $c;
    }


    public function setObjResponsable($r)
    {
        return $this->objResponsableViaje = $r;
    }


    public function __toString()
    {
        print_r("colPasajeros: " . $this->getColPasajeros());
        return "\n Codigo del viaje :" . $this->getCodigoViaje() . "\n" .
            "Destino :" . $this->getDestino() . "\n" .
            "Cantidad maxima de pasajeros:" . $this->getCantMaxP() . "\n" .
            "Cantidad de pasajeros en el viaje :" . count($this->getColPasajeros()) . "\n" .
            "Responsable del viaje:" . $this->getObjResponsable() . "\n";
    }
}
