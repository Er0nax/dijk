<?php
include "$_SERVER[DOCUMENT_ROOT]/app/classes/config.php";
include "$_SERVER[DOCUMENT_ROOT]/app/database.php";

session_start();
$username = $_SESSION['name'];
$get_user_perms = check_user_perms($con, $username);

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 

if (isset($_GET['user'])) {

    // check perms first
    if ($get_user_perms['perms'] > 99) {

        $editeduser = $_GET['user'];
    } else {
        header('Location: /public/profile.php');
        exit;
    }
} else {
    $editeduser = $_SESSION['name'];
}


$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$discord = mysqli_real_escape_string($con, $_REQUEST['discord']);
$truckersmp = mysqli_real_escape_string($con, $_REQUEST['truckersmp']);
$information = mysqli_real_escape_string($con, $_REQUEST['information']);
$user_pb = mysqli_real_escape_string($con, $_REQUEST['user_pb']);
$status_color = mysqli_real_escape_string($con, $_REQUEST['status_color']);

$sql = "UPDATE users SET password='$password', discord='$discord', truckersmp='$truckersmp', information='$information', user_pb='$user_pb', status_color='$status_color' WHERE username='$editeduser'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/profile.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
