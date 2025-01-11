<?php
session_start();
$title = $_POST['title'];
$details = $_POST['details'];
$author = $_POST['author'];
$errors = [];

//* checking title size
if(empty($title)){
    $errors['title_error'] = 'Please Enter Title';
}else if (strlen($title) < 3){
    $errors['title_error'] = 'Please give a title that is greater than 3';
}

// * Checking Details Size
if(empty($details)){
    $errors['details_error'] = 'Please Enter Details';
}else if (strlen($details) < 3 || strlen($details) > 200) {
    $errors['details_error'] = 'Your Details Should Be Greater Than 3 Character And Less than 200';
}

//* redirection if errror occurs
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header ('Location: ../index.php');
}else{

}