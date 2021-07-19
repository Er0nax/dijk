<?php
// This is the start of the website. 
// You will be redirected to /views/home.view.php
// Do not change the link or else it will not work.

session_start();

include '../app/classes/information.php';
include '../app/classes/paths.php';
include '../app/database.php';
include '../app/classes/config.php';

$get_news = get_news($con);

require '../views/home.view.php';
