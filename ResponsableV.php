<?php

// También se desea guardar la información de la persona responsable
//  de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido
class Responsable
{


    //atributos
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;




    //constructor 

    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido)
    {

        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }




    //metodo de acceso (get)

    public function getNumEmpleado()
    {
        return $this->numEmpleado;
    }

    public function getNumLicencia()
    {
        return $this->numLicencia;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }




    // metodo de seteo (set)


    public function setNumEmpleado($e)
    {
        return $this->numEmpleado = $e;
    }

    public function setNumLicencia($l)
    {
        return $this->numLicencia = $l;
    }


    public function setNombre($n)
    {
        return $this->nombre = $n;
    }


    public function setApellido($a)
    {
        return $this->apellido = $a;
    }


    public function __toString()
    {
        return  $this->getNombre() . "\n" .
            $this->getApellido() . "\n" .
            $this->getNumEmpleado() . "\n" .
            $this->getNumLicencia() . "\n";
    }
}
