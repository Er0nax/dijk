<?php
// You will be redirected to /views/users.view.php
// Do not change the link or else it will not work.

// You need admin power in order to see this website.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

if (!isset($_SESSION["name"])) {
    header('Location: ../public/index.php');
    exit;
}

$username = $_SESSION['name'];
$all_user_jobs = all_user_jobs($con, $username);

ping_database($username, $con);

require '../views/jobs.view.php';
