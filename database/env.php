<?php

$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbdbName = 'todoList';

try {
    $connection = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbdbName);
} catch ( \Exception $err ) {
    echo $err->getMessage();
    exit();
}