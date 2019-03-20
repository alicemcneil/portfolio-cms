<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$project_title = $_GET['project_title'];
$img_url = $_GET['img_url'];
$site_url = $_GET['site_url'];

$createProject = "INSERT INTO `projects` (project_title, img_url, site_url) VALUES (:title, :img, :site)";

$query = $db->prepare($createProject);
$query->bindParam(':title', $project_title, PDO::PARAM_STR);
$query->bindParam(':img', $img_url, PDO::PARAM_STR);
$query->bindParam(':site', $site_url, PDO::PARAM_STR);

$query->execute();

echo 'Your new project has been successfully uploaded!';