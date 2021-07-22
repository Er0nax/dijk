<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 
$current_id = $_GET['id'];

$role_id = mysqli_real_escape_string($con, $_REQUEST['role_id']);
$discord = mysqli_real_escape_string($con, $_REQUEST['discord']);
$truckersmp = mysqli_real_escape_string($con, $_REQUEST['truckersmp']);
$information = mysqli_real_escape_string($con, $_REQUEST['information']);
$user_pb = mysqli_real_escape_string($con, $_REQUEST['user_pb']);

$sql = "UPDATE users SET role_id='$role_id', discord='$discord', truckersmp='$truckersmp', information='$information', user_pb='$user_pb' WHERE id='$current_id'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/drivers.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
