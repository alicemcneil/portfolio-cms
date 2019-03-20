<?php

if (!empty($_GET['login']))
{
    echo '<p>Username or password is incorrect!</p>';
}

?>

<form method="POST" action="login_func.php">
    <h2>Log in</h2>
    <label>Username:</label>
    <input type="text" name="username">
    <label>Password:</label>
    <input type="password" name="password">

    <input type="submit" value="login">
</form>


