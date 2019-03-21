


<link rel="stylesheet" type="text/css" href="login.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<form method="POST" action="login_func.php">
    <h1>Log in</h1>
    <h3>Username:</h3>
    <input type="text" name="username" class="box">
    <h3>Password:</h3>
    <input type="password" name="password" class="box">
    <input type="submit" value="Login" class="button">
</form>

<?php
if (!empty($_GET['loggedIn'])) {
    echo '<h3>Incorrect username or password</h3>';
} elseif (empty($_GET['loggedIn'])) {
    echo '<h3>Please enter your username and password</h3>';
}
