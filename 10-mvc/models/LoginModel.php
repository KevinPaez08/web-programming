<?php

require_once '../connection/Connection.php';

class LoginModel extends Connection
{

    public function __construct()
    {
        parent::__construct();
        $this->conexion = new Connection();
        $this->conexion = $this->conexion->getConexion();
    }

    public function setConexion($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getConexion()
    {
        return $this->conexion;
    }

    public function createUser($username, $password)
    {
        $sql = "INSERT INTO login (username,password) VALUES (?,?)";
        $create = $this->conexion->prepare($sql);
        $create->execute(array($username, $password));
        if ($create) {
            return true;
        } else {
            return false;
        }
    }

}