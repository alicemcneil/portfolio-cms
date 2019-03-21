<?php
function sessionCheck() {
    if (empty($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: login_form.php');
    }
}