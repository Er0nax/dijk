<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";
session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$username = $_SESSION['name'];
$title = mysqli_real_escape_string($con, $_REQUEST['title']);
$body = mysqli_real_escape_string($con, $_REQUEST['body']);

// Attempt insert query execution
$sql_insert_jobs = "INSERT INTO news (username, title, body) VALUES ('$username', '$title', '$body')";
if (mysqli_query($con, $sql_insert_jobs)) {
    header('Location: /public/users.php');
    exit;
} else {
    echo "ERROR: Could not able to execute $sql_insert_jobs. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
