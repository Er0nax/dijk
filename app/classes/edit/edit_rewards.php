<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";


if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get input 
$current_id = $_GET['id'];

$level = mysqli_real_escape_string($con, $_REQUEST['level']);

$sql = "UPDATE levels SET level='$level' WHERE id='$current_id'";
if (mysqli_query($con, $sql)) {
    // log
    header('Location: /public/drivers.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
