<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo '<link rel="stylesheet" type="text/css" href="../add_new/add_proj.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">';

$deleteProject = 'DELETE `id`, `project_title`, `img_url`, `site_url` FROM projects WHERE `id` = ?;';
$query = $db->prepare($deleteProject);
$query->execute([$_GET['id']]);
$project = $query->fetch();

