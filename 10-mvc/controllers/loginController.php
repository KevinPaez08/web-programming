<?php

require_once '../models/LoginModel.php';

// INSTANCE THE OBJECT OF CLASS connection
$connect = new LoginModel();

// SAVE USER DATA
$user = $_POST['user'];
$pass = $_POST['pass'];

// CHECK IF THE DATA IS EMPTY
if (!empty($user) && !empty($pass)) {

    // CALL THE METHOD createUser OF OBJECT connect
    $connect->createUser($user, $pass);

    // IF ALL WAS SUCCESSFUL THE OBJECT connect RETURNS A TRUE
    if ($connect) {
        header('Location: ../views/dashboard.php');
    } else {
        header('Location: ../index.php');
        echo "No se puedo acceder";
    }
} else {
    echo "Datos vacíos";
}