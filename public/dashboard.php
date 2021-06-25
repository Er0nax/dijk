<?php
// Start of the Dashboard.
// You will be redirected to /views/dashboard.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/logs/write_log.php';
include '../app/database.php';
include '../app/classes/config.php';

$username = $_SESSION['name'];

$user_information = get_user_information($con, $username);
$user_jobs = get_user_jobs($con, $username);
$count_user_jobs = count_user_jobs($con, $username);
$user_jobs_driven_distance = count_user_driven_distance($con, $username);
$user_jobs_earned_money = count_user_earned_money($con, $username);

require '../views/dashboard.view.php';
