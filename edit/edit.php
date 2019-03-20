<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getProjects = 'SELECT `id`, `project_title`, `img_url`, `site_url` FROM projects WHERE `id` = ?';


$query = $db->prepare($getProjects);
$query->execute([$_GET['id']]);

$project = $query->fetch();


echo '<html lang="en"></html><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="edit.css">


<form class="upload" action="update.php" method="post">
<input type="hidden" name="id" value="' .$project['id'] . '">
<h1>Edit your Project</h1>
<h3>Project Name: </h3><input class="box" type="text" name="project_title" value="' . $project['project_title']  . '">
<h3>Image URL: </h3><input class="box" type="text" name="img_url"value="' . $project['img_url']  . '">
<h3>Site URL: </h3><input class="box" type="text" name="site_url" value="' . $project['site_url']  . '">
<br><br>
<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>
<input class="button" type="submit" value="Update Portfolio">
</form>';

