<?php

require_once '../connection/Connection.php';

class LoginModel extends Connection
{
    private $conexion;

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

    public function readUser()
    {
        $sql = "SELECT * FROM login";
        // $create = $this->conexion->prepare($sql);
        // $create->execute();
        $result = $this->conexion->query($sql);

        $users = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $users;
        } else {
            echo "error";
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM login WHERE id ='$id'";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            // return $idLogin;
            return true;
        } else {
            print_r($stmt->errorInfo());
            return false;
        }
    }

}