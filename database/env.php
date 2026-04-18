<?php

$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'todoList';

try {
    $connection = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbName);
} catch ( \Exception $error ) {
    echo $error->getMessage();
    exit();
}