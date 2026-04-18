<?php

session_start();
$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$deadline = $_REQUEST['deadline'];
$errors = [];
$today = strtotime(Date('m/d/y'));

if(empty($title)) {
    $errors['title_error'] = "*The title is required";
} else if(strlen($title) < 3) {
    $errors['title_error'] = "*The title must contain at least 3 characters";
}else if(preg_match('/\d/', $title)) {
    $errors['title_error'] = "*Digits are not allowed in the title";
}

if(strlen($description) > 300 || empty($description)) {
    $errors['description_error'] = "*The description can not cross 300 characters";
    $errors['description_error'] = "*The description is required";
}

if (strtotime($deadline) < $today) {
    $errors['deadline_error'] = "Please select present/ future date!";
}

if(count($errors) > 0) {
    $_SESSION['old_data'] = $_REQUEST;
    $_SESSION['input_errors'] = $errors;
    header("location: ../index.php");
} else{
    include_once '../database/env.php';
    $query = "INSERT INTO `todos`(`title`, `description`, `deadline`) VALUES ('$title','$description','$deadline')";

    $response = mysqli_query($connection, $query);

    if($response){
        header("location: ../added-todos.php");
        $_SESSION['alert'] = [
            'type' => 'success',
            'msg' => 'ToDo added successfully'
        ];
    } else {
        header("location: ../index.php");
        $_SESSION['alert'] = [
            'type' => 'error',
            'msg' => 'Failed to add ToDo'
        ];
    }
}