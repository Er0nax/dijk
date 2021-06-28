<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/logs/write_log.php';
include '../app/database.php';
include '../app/classes/config.php';

if (isset($_GET['user'])) {
    $username = $_GET['user'];
} else {
    $username = $_SESSION['name'];
}

$all_user_information = get_all_user_information($con, $username);
$loggeduser = $_SESSION['name'];
$get_user_perms_edit = check_user_perms_edit($con, $loggeduser);


// check perms

if (!isset($_GET['name'])) {
    if ($get_user_perms_edit['perms'] < 99) {
        header('Location: /public/profile.php');
        exit;
    }
}

require '../views/edit.view.php';
