<?php

function response($con, $id)
{
    $query = "SELECT users.username, users.status, users.discord, users.truckersmp, users.user_pb AS 'avatar', users.information_color, users.information, users.last_online, users.updated_at, users.created_at
              FROM users
              WHERE users.id='$id'";
    $result = $con->query($query);
    $response = $result->fetch_assoc();

    return $response;
}

function jobs($con, $id)
{
    $query = "SELECT COUNT(*) AS 'total_jobs', SUM(jobs.income) AS 'total_income', SUM(jobs.distance) AS 'total_distance', ROUND(AVG(jobs.income)) AS 'average_income', ROUND(AVG(jobs.distance)) AS 'average_distance'
              FROM jobs
              WHERE jobs.user_id='$id'";
    $result = $con->query($query);
    $jobs = $result->fetch_assoc();

    return $jobs;
}

function permission($con, $id)
{
    $query = "SELECT roles.perms, roles.name, roles.color, users.role_id, roles.updated_at, roles.created_at
              FROM roles
              JOIN users ON users.role_id=roles.id
              WHERE users.id='$id'";
    $result = $con->query($query);
    $permission = $result->fetch_assoc();

    return $permission;
}

function bank($con, $id)
{
    $query = "SELECT banks.balance, banks.updated_at
              FROM banks
              JOIN users ON banks.username=users.username
              WHERE users.id='$id'";
    $result = $con->query($query);
    $bank = $result->fetch_assoc();

    return $bank;
}
