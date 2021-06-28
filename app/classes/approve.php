<?php
include "$_SERVER[DOCUMENT_ROOT]/app/classes/config.php";

session_start();

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 
$username = $_GET['user'];

$sql = "UPDATE users SET status='Verified' WHERE username='$username'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/users.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
