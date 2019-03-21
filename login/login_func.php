<?php
session_start();
define('USERNAME', 'alice');
define('PASSWORD', '$2y$10$fMgFOggS3qcfO0GmqU.vo./Cpy3FLYWuk4.aFl/bNuPr3ZLz9BIKi'); //pw: 1234
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    if ($username == USERNAME && password_verify($password, PASSWORD)) {
        $_SESSION['loggedIn'] = true;
        header ('Location: ../admin_page/index.php');
    } else {
        header('Location: login_form.php?loggedIn=false');
    }
} else {
    header('Location: login_form.php');
}




