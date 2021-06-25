<?php

if (session_status() == PHP_SESSION_NONE) {
    //session has not started
    session_start();
}

// functions - Do not change or edit names.

function get_user_information($con, $username)
{

    $query = "SELECT users.id, users.username, users.user_pb, users.information, banks.balance AS 'balance', roles.name AS 'role', rewards.`level` AS 'level', roles.color AS 'role_color'
              FROM users
              JOIN banks ON users.id=banks.id
              JOIN roles ON users.role_id=roles.id
              JOIN rewards ON users.id=rewards.id
              WHERE users.username='$username'";
    $result = $con->query($query);
    $user_information = $result->fetch_assoc();

    return $user_information;
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
