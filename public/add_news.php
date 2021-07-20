<?php
// This is the start of the website. 
// You will be redirected to /views/index.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/config.php';

$username = $_SESSION["name"];
ping_database($username, $con);


require '../views/add_news.view.php';
