<?php

function open_database_connection()
{
    $connection = new PDO("mysql:host=localhost;dbname=dijk_vtc", 'root', '');

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function _get_all($query)
{
    $connection = open_database_connection();

    $result = $connection->query($query);

    $data = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    close_database_connection($connection);

    return $data;    
}