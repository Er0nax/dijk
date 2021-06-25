<?php

if (session_status() == PHP_SESSION_NONE) {
    //session has not started
    session_start();
}

// functions - Do not change or edit names.

function get_user_information($con, $username)
{

    $query = "SELECT users.id, users.username, users.user_pb, users.information, users.status_color, banks.balance AS 'balance', roles.name AS 'role', rewards.`level` AS 'level', roles.color AS 'role_color', roles.perms
              FROM users
              JOIN banks ON users.id=banks.id
              JOIN roles ON users.role_id=roles.id
              JOIN rewards ON users.id=rewards.id
              WHERE users.username='$username'";
    $result = $con->query($query);
    $user_information = $result->fetch_assoc();

    return $user_information;
}

function get_all_user_information($con, $username)
{

    $query = "SELECT * FROM users WHERE users.username='$username'";
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
    GROUP BY users.id,users.username";
    $all_users = $con->query($query);

    return $all_users;
}

function get_profile_information($con, $current_id)
{
    $query = "SELECT users.id, users.role_id as 'roleid', users.username, users.status, users.discord, users.truckersmp, users.user_pb, users.status_color, users.information, users.timestamp, roles.id as 'role_id', roles.name AS 'role_name', roles.color AS 'role_color', rewards.level, banks.balance
    FROM users
    JOIN roles ON users.id=roles.id
    JOIN rewards ON users.id=rewards.id
    JOIN banks ON users.id=banks.id
    WHERE users.id='$current_id'";
    $result = $con->query($query);
    $get_profile_information = $result->fetch_assoc();

    return $get_profile_information;
}
