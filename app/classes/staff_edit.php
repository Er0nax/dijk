<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";
include "$_SERVER[DOCUMENT_ROOT]/app/database.php";


if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$editeduser = $_GET['id'];
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$role_id = mysqli_real_escape_string($con, $_REQUEST['role_id']);
$discord = mysqli_real_escape_string($con, $_REQUEST['discord']);
$truckersmp = mysqli_real_escape_string($con, $_REQUEST['truckersmp']);
$information = mysqli_real_escape_string($con, $_REQUEST['information']);
$user_pb = mysqli_real_escape_string($con, $_REQUEST['user_pb']);
$information_color = mysqli_real_escape_string($con, $_REQUEST['information_color']);
$balance = mysqli_real_escape_string($con, $_REQUEST['balance']);
$level = mysqli_real_escape_string($con, $_REQUEST['level']);
$status = mysqli_real_escape_string($con, $_REQUEST['status']);

$sql_edit_users = "UPDATE users SET discord='$discord', status='$status', role_id='$role_id', truckersmp='$truckersmp', information='$information', user_pb='$user_pb', information_color='$information_color' WHERE id='$editeduser'";
if (mysqli_query($con, $sql_edit_users)) {
    // log
    $sql_edit_banks = "UPDATE banks SET balance='$balance' WHERE id='$editeduser'";
    if (mysqli_query($con, $sql_edit_banks)) {
        // log
        $sql_edit_level = "UPDATE levels SET level='$level' WHERE id='$editeduser'";
        if (mysqli_query($con, $sql_edit_level)) {
            // log
            header('Location: /public/drivers.php');
            exit;
        } else {
            echo "ERROR: Could not able to execute $sql_edit_level. " . mysqli_error($con);
        }
    } else {
        echo "ERROR: Could not able to execute $sql_edit_banks. " . mysqli_error($con);
    }
} else {
    echo "ERROR: Could not able to execute $sql_edit_users. " . mysqli_error($con);
}

mysqli_close($con);
