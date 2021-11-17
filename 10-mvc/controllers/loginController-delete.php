<?php

require_once '../models/LoginModel.php';

// INSTANCE THE OBJECT OF CLASS connection
$deleteUser = new LoginModel();

// SAVE USER DATA
$user = $_GET['id'];

// CHECK IF THE DATA IS EMPTY
if (!empty($user)) {

    // CALL THE METHOD deleteUser OF OBJECT connect
    $userDeleted = $deleteUser->deleteUser($user);

    // IF ALL WAS SUCCESSFUL THE OBJECT connect RETURNS A TRUE
    if ($userDeleted) {
        header('Location: ../views/dashboard.php');
    } else {
        echo "No se puedo acceder";
    }
} else {
    echo "Datos vacíos";
}