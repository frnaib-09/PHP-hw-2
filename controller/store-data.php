<?php

$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$deadline = $_REQUEST['deadline'];

if(empty($title)) {
    echo "The title is required";
} else if(strlen($title) < 3) {
    echo "The title must contain at least 3 characters";
}else if(preg_match('/\d/', $title)) {
    echo "Digits are not allowed in the title";
}

if(strlen($description) > 300) {
    echo "The description can not cross 300 characters";
}