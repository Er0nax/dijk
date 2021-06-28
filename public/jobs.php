<?php
// You will be redirected to /views/users.view.php
// Do not change the link or else it will not work.

// You need admin power in order to see this website.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/logs/write_log.php';
include '../app/database.php';
include '../app/classes/config.php';

$username = $_SESSION['name'];
$all_user_jobs = all_user_jobs($con, $username);

if (isset($_GET['id'])) {
    require '../views/job-information.view.php';
} else {
    require '../views/jobs.view.php';
}
