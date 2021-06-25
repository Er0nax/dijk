<?php
include "$_SERVER[DOCUMENT_ROOT]/app/classes/config.php";

session_start();

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 

$username = $_SESSION['name'];
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$discord = mysqli_real_escape_string($con, $_REQUEST['discord']);
$truckersmp = mysqli_real_escape_string($con, $_REQUEST['truckersmp']);
$information = mysqli_real_escape_string($con, $_REQUEST['information']);
$user_pb = mysqli_real_escape_string($con, $_REQUEST['user_pb']);
$status_color = mysqli_real_escape_string($con, $_REQUEST['status_color']);

$sql = "UPDATE users SET password='$password', discord='$discord', truckersmp='$truckersmp', information='$information', user_pb='$user_pb', status_color='$status_color' WHERE username='$username'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/dashboard.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
