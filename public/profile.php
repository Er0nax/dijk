<?php
// You will be redirected to /views/profile.view.php
// Do not change the link or else it will not work.
// There is also admin panels on this site.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

if (isset($_SESSION['id'])) {
    $userid = $_SESSION['id'];
    $username = $_SESSION['name'];
} else { // login as guest
    header('Location: ../public/index.php');
    exit;
}

if (!isset($_GET['id'])) { // if there is no ID in the URL, use the "logged user id"
    $_GET['id'] = $_SESSION['id'];
}

$current_id = $_GET['id']; // get ID from URL

$get_user_perms = check_user_perms($con, $username);
$user_jobs_information = user_jobs_information($con, $current_id);
$get_profile_information = get_profile_information($con, $current_id);

$last_online = $get_profile_information['last_online'];
$display_last_online = time_ago($last_online); //datetime format

ping_database($username, $con);

require '../views/profile.view.php';
