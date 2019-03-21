<?php

define('USERNAME', 'alice');
define('PASSWORD', '1234');

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();

    if ($username == USERNAME && $password == PASSWORD) {
        $_SESSION['loggedIn'] = true;

        header('Location: ../admin_page/index.php');
    } else {
        header('Location: index.php?login=false');
    }

} else {
    echo 'Incorrect username or password';
}