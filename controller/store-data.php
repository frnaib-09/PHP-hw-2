<?php

session_start();
$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$deadline = $_REQUEST['deadline'];
$errors = [];

if(empty($title)) {
    $errors['title_error'] = "*The title is required";
} else if(strlen($title) < 3) {
    $errors['title_error'] = "*The title must contain at least 3 characters";
}else if(preg_match('/\d/', $title)) {
    $errors['title_error'] = "*Digits are not allowed in the title";
}

if(strlen($description) > 300) {
    $errors['description_error'] = "*The description can not cross 300 characters";
}

if(count($errors) > 0) {
    $_SESSION['old_data'] = $_REQUEST;
    $_SESSION['input_errors'] = $errors;
    header("location: ../index.php");
}