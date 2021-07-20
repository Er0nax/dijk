<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";

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
$token = mysqli_real_escape_string($con, $_REQUEST['token']);

$json = file_get_contents('https://api.truckersmp.com/v2/player/' . $_REQUEST['truckersmp']);
$data = json_decode($json);
$user_pb = $data->response->avatar;


$uinsert =  "UPDATE tokens SET used='1', used_at=NOW(), used_by='$username' WHERE token='$token'";
$update = mysqli_query($con, $uinsert) or die(mysqli_error($con));
if(mysqli_affected_rows($con) >0 ) { //ifnum
	# continue
} else {
	header('Location: /public/register.php?message=incorrect_token');
	exit;
}



// Attempt insert query execution
$sql_into_users = "INSERT INTO users (username, password, discord, truckersmp, user_pb) VALUES ('$username', '$password', '$discord', '$truckersmp', '$user_pb')";
if (mysqli_query($con, $sql_into_users)) {
	$sql_into_dashboard = "INSERT INTO banks (username) VALUES ('$username')";
	if (mysqli_query($con, $sql_into_dashboard)) {
		$sql_into_levels = "INSERT INTO levels (username) VALUES ('$username')";
		if (mysqli_query($con, $sql_into_levels)) {
			// log
			header('Location: /public/index.php');
			exit;
		} else {
			echo "ERROR: Could not able to execute $sql_into_levels. " . mysqli_error($con);
		}
	} else {
		echo "ERROR: Could not able to execute $sql_into_dashboard. " . mysqli_error($con);
	}
} else {
	echo "ERROR: Could not able to execute $sql_into_users. " . mysqli_error($con);
}


// Close connection
mysqli_close($con);
