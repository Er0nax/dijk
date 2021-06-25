<?php
include "$_SERVER[DOCUMENT_ROOT]/app/classes/config.php";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Check connection
if ($con === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$discord = mysqli_real_escape_string($con, $_REQUEST['discord']);
$truckersmp = mysqli_real_escape_string($con, $_REQUEST['truckersmp']);
$my_date = date("Y-m-d H:i:s");

// Attempt insert query execution
$sql_into_users = "INSERT INTO users (username, password, discord, truckersmp, timestamp) VALUES ('$username', '$password', '$discord', '$truckersmp', '$my_date')";
if (mysqli_query($con, $sql_into_users)) {
	$sql_into_dashboard = "INSERT INTO banks (username, balance, timestamp) VALUES ('$username', '0', '$my_date')";
	if (mysqli_query($con, $sql_into_dashboard)) {
		$sql_into_rewards = "INSERT INTO rewards (username, level, timestamp) VALUES ('$username', '0', '$my_date')";
		if (mysqli_query($con, $sql_into_rewards)) {
            // log
			header('Location: /public/index.php');
			exit;
		} else {
			echo "ERROR: Could not able to execute $sql_into_rewards. " . mysqli_error($con);
		}
	} else {
		echo "ERROR: Could not able to execute $sql_into_dashboard. " . mysqli_error($con);
	}
} else {
	echo "ERROR: Could not able to execute $sql_into_users. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
