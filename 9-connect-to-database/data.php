<?php

require_once './connection.php';

// INSTANCE THE OBJECT OF CLASS connection
$connect = new Connection();

// SAVE USER DATA
$user = $_POST['user'];
$pass = $_POST['pass'];

// CHECK IF THE DATA IS EMPTY
if (!empty($user) && !empty($pass)) {

    // CALL THE METHOD createUser OF OBJECT connect
    $connect->createUser($user, $pass);

    // IF ALL WAS SUCCESSFUL THE OBJECT connect RETURNS A TRUE
    if ($connect) {
        echo "Usuario Agregado";
    } else {
        echo "Usuario no agregado";
    }
} else {
    echo "Datos vacíos";
}