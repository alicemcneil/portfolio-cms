<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo '<html lang="en"></html> <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="add_proj.css">

<form class="upload" action="upload.php" method="post">
<h1>Create new Project</h1>
<h3>Project Name: </h3><input type="text" name="project_title">
<h3>Image URL: </h3><input type="text" name="img_url">
<h3>Site URL: </h3><input type="text" name="site_url">
<br><br>
<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>
<input class="button" type="submit" value="Add to Portfolio">
</form>';

