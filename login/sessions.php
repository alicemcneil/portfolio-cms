<?php

function sessionCheck() {
    session_start();
    if (empty($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: login_form.php');
    }
}