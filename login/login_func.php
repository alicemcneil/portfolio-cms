<?php
define('USERNAME', 'alice');
define('PASSWORD', '$2y$10$wG23zgMs7iLtbpQUUX/q/O2czfS0NQZawekhv7ZpZdfKz0Yvr9vKC');
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    if ($username == USERNAME && password_verify($password, PASSWORD)) {
        $_SESSION['loggedIn'] = true;
        header('Location: ../admin_page/index.php');
    } else {
        header('Location: ../login_form.php?loggedIn=false');
    }
} else {
    header('Location: ../login_form.php');
}




