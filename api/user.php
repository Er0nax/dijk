<?php
session_start();

include 'functions.php';
include 'config.php';

$id = $_GET['id']; // get ID 

$response = response($con, $id);
$jobs = jobs($con, $id);
$permission = permission($con, $id);
$bank = bank($con, $id);


?>

{
"error": <?php if (!isset($response["username"])) { echo "error 404 - ID not found"; exit; } else { echo "false"; } ?>,
"response": {
"id": 1,
"username": "<?php echo $response['username']; ?>",
"status": "<?php echo $response['status']; ?>",
"discord": "<?php echo $response['discord']; ?>",
"truckersmp": "<?php echo $response['truckersmp']; ?>",
"avatar": "<?php echo $response['avatar']; ?>",
"information_color": "<?php echo $response['information_color']; ?>",
"information": "<?php echo $response['information']; ?>",
"last_online": "<?php echo $response['last_online']; ?>",
"updated_at": "<?php echo $response['updated_at']; ?>",
"created_at": "<?php echo $response['created_at']; ?>",
"jobs": {
"total_jobs": "<?php echo $jobs['total_jobs']; ?>",
"total_income": "<?php echo $jobs['total_income']; ?>",
"total_distance": "<?php echo $jobs['total_distance']; ?>",
"average_income": "<?php echo $jobs['average_income']; ?>",
"average_distance": "<?php echo $jobs['average_distance']; ?>"
},
"permission": {
"is_staff": <?php if($permission["perms"] > 39) { echo "true"; } else { echo "false"; } ?>,
"is_upper_staff": <?php if($permission["perms"] > 59) { echo "true"; } else { echo "false"; } ?>,
"role_id": <?php echo $permission['role_id']; ?>,
"role_permission": <?php echo $permission['perms']; ?>,
"role_color": "<?php echo $permission['color']; ?>"
},
"bank": {
"balance": <?php echo $bank['balance']; ?>,
"updated_at": "<?php echo $bank['updated_at']; ?>"
}
}
}