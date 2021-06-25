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

$username = $_SESSION['name'];

$all_user_information = get_all_user_information($con, $username);

include '../app/logs/write_log.php';
require '../views/edit.view.php';