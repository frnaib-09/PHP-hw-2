<?php 
include_once "../database/env.php";
$query = "UPDATE `todos` SET status='1'";

$response = mysqli_query($connection, $query);