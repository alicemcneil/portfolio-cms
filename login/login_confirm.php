<?php
session_start();
if (empty($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true)
{
    header('Location: login.php');
} else {
    header ('Location: ../admin_page/index.php');
}
