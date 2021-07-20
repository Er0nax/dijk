<?php
// Start of the Register.
// You will be redirected to /views/register.view.php
// Do not change the link or else it will not work.

session_start();

include_once '../app/classes/information.php';
include_once '../app/classes/paths.php';

if(isset($_GET['message'])) {
    if ($_GET['message'] == 'invalid_token') {
        echo '<script>alert("Token is invalid!");</script> ';
    }
}

require '../views/register.view.php';