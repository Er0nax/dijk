<?php
// You will be redirected to /views/profile.view.php
// Do not change the link or else it will not work.
// There is also admin panels on this site.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/logs/write_log.php';
include '../app/database.php';
include '../app/classes/config.php';

if (!isset($_GET['id'])) { // if there is no ID in the URL, use "1" as the default ID for a user
    $_GET['id'] = $_SESSION['id'];
}

$username = $_SESSION['name'];

$current_id = $_GET['id']; // get ID from URL
$userid = $_SESSION['id']; // get ID from session
$get_user_perms = check_user_perms($con, $username);

$get_profile_information = get_profile_information($con, $current_id);

require '../views/profile.view.php';
