<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/classes/config.php';

if (isset($_GET['id'])) {
    $current_id = $_GET['id'];
} else {
    $current_id = $_SESSION['id'];
}


$all_user_information = get_profile_information($con, $current_id);

$loggeduser = $_SESSION['name'];
$get_user_perms_edit = check_user_perms_edit($con, $loggeduser);
$list_all_roles = list_all_roles($con);

// check perms

if($get_user_perms_edit['perms'] < 70) {
    header('Location: ../public/profile.php');
    exit;
}

require '../views/staff_edit.view.php';
