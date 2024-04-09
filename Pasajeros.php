<?php
class Pasajeros
{
    // Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre,
    // apellido, numero de documento y teléfono. 

    //atributos
    private $nombre;
    private $apellido;
    private $numDni;
    private $telefono;

    //constructor 
    public function __construct($nombre, $apellido, $numDni, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numDni = $numDni;
        $this->telefono = $telefono;
    }



    //metodos de acceso  (get)
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getNumDni()
    {
        return $this->numDni;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }




    // metodos de seteo set 

    public function setNombre($n)
    {
        return $this->nombre = $n;
    }

    public function setApellido($a)
    {
        return $this->apellido = $a;
    }

    public function setNumDni($n)
    {
        return $this->numDni = $n;
    }

    public function setTelefono($t)
    {
        return $this->telefono = $t;
    }


    public function __toString()
    {
        return  $this->getNombre() . "\n".
            $this->getApellido() . "\n" .
            $this->getNumDni() . "\n" .
            $this->getTelefono() . "\n";
    }
}
