<?php

if (session_status() == PHP_SESSION_NONE) {
    //session has not started
    session_start();
}

// functions - Do not change or edit names.

function get_user_information($con, $username)
{

    $query = "SELECT users.id, users.username, users.user_pb, users.information, users.status_color, banks.balance AS 'balance', roles.name AS 'role', levels.`level` AS 'level', roles.color AS 'role_color', roles.perms
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
    $query = "SELECT users.id, users.password, users.role_id AS 'roleid', users.username, users.status, users.discord, users.truckersmp, users.user_pb, users.status_color, users.information, users.timestamp, roles.id AS 'role_id', roles.name AS 'role_name', roles.color AS 'role_color', levels.level, banks.balance, roles.perms AS 'perms'
    FROM users
    JOIN roles ON users.role_id=roles.id
    JOIN levels ON users.id=levels.id
    JOIN banks ON users.id=banks.id
    WHERE users.id='$current_id'";
    $result = $con->query($query);
    $get_profile_information = $result->fetch_assoc();

    return $get_profile_information;
}


function all_user_jobs($con, $username)
{
    $query = "SELECT jobs.id, jobs.income, jobs.distance, jobs.cargo
    FROM jobs
    WHERE jobs.username='$username'";
    $all_user_jobs = $con->query($query);

    return $all_user_jobs;
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
    ORDER BY news.timestamp DESC";
    $result = $con->query($query);
    $get_news = $result->fetch_assoc();

    return $get_news;
}
