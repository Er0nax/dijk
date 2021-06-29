<?php
include "$_SERVER[DOCUMENT_ROOT]/app/classes/config.php";
session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$username = $_SESSION['name'];
$departure_id = mysqli_real_escape_string($con, $_REQUEST['departure_id']);
$destination_id = mysqli_real_escape_string($con, $_REQUEST['destination_id']);
$truck_id = mysqli_real_escape_string($con, $_REQUEST['truck_id']);
$cargo = mysqli_real_escape_string($con, $_REQUEST['cargo']);
$income = mysqli_real_escape_string($con, $_REQUEST['income']);
$distance = mysqli_real_escape_string($con, $_REQUEST['distance']);
$evidence = mysqli_real_escape_string($con, $_REQUEST['evidence']);


// Attempt insert query execution
$sql_insert_jobs = "INSERT INTO jobs (username, departure_id, destination_id, truck_id, cargo, income, distance, evidence) VALUES ('$username', '$departure_id', '$destination_id', '$truck_id', '$cargo', '$income', '$distance', '$evidence')";
if (mysqli_query($con, $sql_insert_jobs)) {
    // log
    $sql_edit_bank = "UPDATE banks SET banks.balance = banks.balance + $income WHERE banks.username='$username'";
    if (mysqli_query($con, $sql_edit_bank)) {
        // log
        header('Location: /public/users.php');
        exit;
    } else {
        echo "ERROR: Could not able to execute $sql_edit_bank. " . mysqli_error($con);
    }
} else {
    echo "ERROR: Could not able to execute $sql_insert_jobs. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
