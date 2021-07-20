<?php
include "$_SERVER[DOCUMENT_ROOT]/app/config.php";
include "$_SERVER[DOCUMENT_ROOT]/app/database.php";


$string = getName(20);
insert_token($string, $con);

header('Location: /public/my_admin.php');
exit;