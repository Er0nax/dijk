<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

if (!isset($_SESSION["name"])) {
    header('Location: ../public/index.php');
    exit;
}

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

if($_SESSION)

$id = $_SESSION['id'];
$all_user_information = get_all_user_information($con, $id);
$loggeduser = $_SESSION['name'];

$username = $_SESSION["name"];
ping_database($username, $con);

require '../views/edit.view.php';
