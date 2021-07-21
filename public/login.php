<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

include_once '../app/classes/information.php';
include_once '../app/classes/paths.php';

/*
if (isset($_COOKIE['username_cookie'])) {
    if (isset($_COOKIE['password_cookie'])) {
        # Username and Password are set.
        # $_COOKIE["username_cookie"];
        header('Location: ../app/login_register/login.php');
        exit;
    }
}
*/

require '../views/login.view.php';
