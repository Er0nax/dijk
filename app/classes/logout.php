<?php
session_start();
session_destroy();

setcookie('username_cookie', null, -1, '/'); 
setcookie('password_cookie', null, -1, '/'); 
setcookie("PHPSESSID", "", null, -1, '/'); 

header('Location: /public/index.php');
exit;