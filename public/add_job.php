<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

if (!isset($_SESSION["name"])) {
    header('Location: ../public/index.php');
    exit;
}

$get_all_trucks = get_all_trucks($con);
$get_departure_city = get_departure_city($con);
$get_destination_city = get_destination_city($con);

$username = $_SESSION["name"];
ping_database($username, $con);

require '../views/add_job.view.php';
