<?php

// echo "your username is " . $user . "<br>";
// echo "your password is " . $pass . "<br>";
require_once './connection.php';

$connect = new Connection();

$user = $_POST['user'];
$pass = $_POST['pass'];

if (isset($user) && isset($pass)) {
    $connect->createUser($user, $pass);
    if ($connect) {
        echo "Usuario Agregado";
    } else {
        echo "Usuario no agregado";
    }
} else {
    echo "Datos vacíos";
}

// $connect->getConnection();