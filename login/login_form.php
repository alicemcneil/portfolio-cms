<?php

if (!empty($_GET['login']))
{
    echo '<p>Username or password is incorrect!</p>';
}
?>

<link rel="stylesheet" type="text/css" href="login.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<form method="POST" action="login_func.php">
    <h1>Log in</h1>
    <h3>Username:</h3>
    <input type="text" name="username" class="box">
    <h3>Password:</h3>
    <input type="password" name="password" class="box">
    <input type="submit" value="login" class="button">
</form>


