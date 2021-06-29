<?php
// Start of the Register.
// You will be redirected to /views/login.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/classes/config.php';

$get_all_trucks = get_all_trucks($con);
$get_departure_city = get_departure_city($con);
$get_destination_city = get_destination_city($con);

require '../views/add_job.view.php';