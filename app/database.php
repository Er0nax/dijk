<?php

if (session_status() == PHP_SESSION_NONE) {
    //session has not started
    session_start();
}

// functions - Do not change or edit names.

function get_user_information($con, $username)
{

    $query = "SELECT users.id, users.username, users.user_pb, users.information, users.information_color, banks.balance AS 'balance', roles.name AS 'role', levels.`level` AS 'level', roles.color AS 'role_color', roles.perms
              FROM users
              JOIN banks ON users.id=banks.id
              JOIN roles ON users.role_id=roles.id
              JOIN levels ON users.id=levels.id
              WHERE users.username='$username'";
    $result = $con->query($query);
    $user_information = $result->fetch_assoc();

    return $user_information;
}

function get_all_user_information($con, $id)
{

    $query = "SELECT * FROM users WHERE users.id='$id'";
    $result = $con->query($query);
    $all_user_information = $result->fetch_assoc();

    return $all_user_information;
}

function get_user_jobs($con, $username)
{
    $query = "SELECT jobs.id, users.username 
              FROM jobs 
              JOIN users ON jobs.username=users.username 
              WHERE jobs.username='$username' 
              ORDER BY jobs.id";
    $result = $con->query($query);
    $user_jobs = $result->fetch_assoc();

    return $user_jobs;
}

function count_user_jobs($con, $username)
{
    $query = "SELECT COUNT(*) as total FROM jobs WHERE username='$username'";
    $result = $con->query($query);
    $user_jobs_count = $result->fetch_assoc();

    return $user_jobs_count; // $user_jobs_count["total"]
}

function count_user_driven_distance($con, $username)
{
    $query = "SELECT SUM(distance) as total FROM jobs WHERE username='$username'";
    $result = $con->query($query);
    $user_jobs_driven_distance = $result->fetch_assoc();

    return $user_jobs_driven_distance; // $user_jobs_driven_distance["total"]
}

function count_user_earned_money($con, $username)
{
    $query = "SELECT SUM(income) as total FROM jobs WHERE username='$username'";
    $result = $con->query($query);
    $user_jobs_earned_money = $result->fetch_assoc();

    return $user_jobs_earned_money; // $user_jobs_earned_money["total"]
}

function get_all_users($con)
{

    $query = "SELECT users.id, users.username, count(jobs.id) AS jobs, banks.balance AS balance, roles.name as role, roles.color as rolecolor
    FROM users
    LEFT JOIN jobs ON users.username = jobs.username
    JOIN banks ON users.id=banks.id
    JOIN roles ON users.role_id=roles.id
    GROUP BY users.id,users.username
    ORDER BY roles.id";
    $all_users = $con->query($query);

    return $all_users;
}

function get_profile_information($con, $current_id)
{
    $query = "SELECT users.id, users.last_online, users.password, users.role_id AS 'roleid', users.username, users.status, tokens.token, users.discord, users.truckersmp, users.user_pb, users.information_color, users.information, users.created_at, roles.id AS 'role_id', roles.name AS 'role_name', roles.color AS 'role_color', levels.level, banks.balance, roles.perms AS 'perms'
    FROM users
    JOIN roles ON users.role_id=roles.id
    JOIN levels ON users.id=levels.id
    JOIN banks ON users.id=banks.id
    JOIN tokens on tokens.used_by=users.username
    WHERE users.id='$current_id'";
    $result = $con->query($query);
    $get_profile_information = $result->fetch_assoc();

    return $get_profile_information;
}

function check_user_perms($con, $username)
{
    $query = "SELECT roles.perms
    FROM users
    JOIN roles ON users.role_id=roles.id
    WHERE users.username='$username'";
    $result = $con->query($query);
    $get_user_perms = $result->fetch_assoc();

    return $get_user_perms;
}

function check_user_perms_edit($con, $loggeduser)
{
    $query = "SELECT roles.perms
    FROM users
    JOIN roles ON users.role_id=roles.id
    WHERE users.username='$loggeduser'";
    $result = $con->query($query);
    $get_user_perms_edit = $result->fetch_assoc();

    return $get_user_perms_edit;
}

function list_all_roles($con)
{
    $query = "SELECT roles.id, roles.name FROM roles";
    $list_all_roles = $con->query($query);

    return $list_all_roles;
}

function get_all_trucks($con)
{
    $query = "SELECT trucks.id, trucks.truck FROM trucks";
    $get_all_trucks = $con->query($query);

    return $get_all_trucks;
}

function get_departure_city($con)
{
    $query = "SELECT cities.id ,cities.city FROM cities";
    $get_departure_city = $con->query($query);

    return $get_departure_city;
}

function get_destination_city($con)
{
    $query = "SELECT cities.id ,cities.city FROM cities";
    $get_destination_city = $con->query($query);

    return $get_destination_city;
}

function user_jobs_information($con, $current_id)
{
    $query = "SELECT Count(jobs.id) AS 'total_jobs', SUM(jobs.income) AS 'total_income', SUM(jobs.distance) AS 'total_distance', ROUND(AVG(jobs.income), 0) AS 'average_income', ROUND(AVG(jobs.distance), 0) AS 'average_distance'
    FROM jobs
    WHERE jobs.user_id='$current_id'";
    $result = $con->query($query);
    $user_jobs_information = $result->fetch_assoc();

    return $user_jobs_information;
}


function get_news($con)
{
    $query = "SELECT news.username, news.title, news.body, roles.color, users.id AS 'user_id'
    FROM news
    JOIN users ON news.username=users.username
    JOIN roles ON users.role_id=roles.id
    ORDER BY news.created_at DESC";
    $result = $con->query($query);
    $get_news = $result->fetch_assoc();

    return $get_news;
}

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

function ping_database($username, $con)
{
    $sql = "UPDATE users SET last_online=NOW() WHERE username='$username'";
    if (mysqli_query($con, $sql)) {
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

function getName($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function insert_token($string, $con)
{

    $sql = "INSERT INTO tokens (token) VALUES ('$string')";
    if (mysqli_query($con, $sql)) {
        # log
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

function all_user_jobs($con, $username)
{
    $query = "SELECT jobs.id, jobs.income, jobs.distance, jobs.cargo
    FROM jobs
    WHERE jobs.username='$username'";
    $all_user_jobs = $con->query($query);

    return $all_user_jobs;
}

function get_tokens($con)
{
    $query = "SELECT id, token, used, created_at 
    FROM tokens
    WHERE used=0";
    $get_tokens = $con->query($query);

    return $get_tokens;
}
