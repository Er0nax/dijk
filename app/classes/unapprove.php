<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";


if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 
$id = $_GET['id'];

$sql = "UPDATE users SET status='Not Verified' WHERE id='$id'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/drivers.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
