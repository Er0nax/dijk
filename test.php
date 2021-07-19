<?php
/*

function time_ago($datetime, $full = false)
{

    $input_date = new DateTime($datetime); //store supplied valid date and time
    $now = new DateTime; //store current date and time

    $date_diff = $now->diff($input_date);

    $date_diff->w = floor($date_diff->d / 7);
    $date_diff->d -= $date_diff->w * 7;


    $date_array = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($date_array as $k => &$v) {
        if ($date_diff->$k) {
            $v = $date_diff->$k . ' ' . $v . ($date_diff->$k > 1 ? 's' : '');
        } else {
            unset($date_array[$k]);
        }
    }

    if (!$full) {
        $date_array = array_slice($date_array, 0, 1);
    }
    return $date_array ? implode(', ', $date_array) . ' ago' : 'just now';
}

// $last_login = time_ago('2021-07-19 13:18:04'); //datetime format
$last_login = '2021-07-19 13:54:01';

/*
if ($last_login >= time() - 5 * 60) {
    echo "online";
} else {
    echo "Offline";
}


if (strtotime($last_login) > time() - 300) : ?>
    <span class="online" style="color:green;">Online</span>
<?php else : ?>
    <span class="offline" style="color:red;">Offline</span>
<?php endif; ?>


include 'app/classes/config.php';
include 'app/database.php';

$username = $_SESSION["name"];
ping_database($username, $con);
sleep(10);
ping_database($username, $con);
sleep(10);
ping_database($username, $con);

*/