<?php

class Persona
{
    private $name;

    public function __construct()
    {
        // $this->name = $nombre;
    }

    public function setNombre($nombre)
    {
        $this->name = $nombre;
    }

    public function getNombre()
    {
        return $this->name;

    }
}