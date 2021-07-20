<?php
// You will be redirected to /views/users.view.php
// Do not change the link or else it will not work.

// You need admin power in order to see this website.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

$all_users = get_all_users($con);

require '../views/users.view.php';
