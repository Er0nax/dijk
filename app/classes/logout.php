<?php
session_start();
session_destroy();

setcookie('username_cookie', "", time() + (86400 * 30), "/");
setcookie('password_cookie', "", time() + (86400 * 30), "/");
setcookie("PHPSESSID", "", time() + (86400 * 30), "/");

header('Location: /public/index.php');
exit;