<?php
class Connection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "test";
    private $conexion;

    public function __construct()
    {
        $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
        try {
            $this->conexion = new PDO($connection, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexión exitosa";
        } catch (Exception $e) {
            $this->conexion = 'Error de conexión';
            echo "ERROR: " . $e->getMessage();
        }
        return $this->conexion;
    }

}