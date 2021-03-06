<?php
// This is the start of the website. 
// You will be redirected to /views/index.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

if (!isset($_SESSION["name"])) {
    if ($get_user_perms_edit['perms'] < 89) {
        header('Location: ../public/index.php');
        exit;
    }
}

$username = $_SESSION["name"];

$get_tokens = get_tokens($con);

$string = getName(100);

ping_database($username, $con);

require '../views/my_admin.view.php';
