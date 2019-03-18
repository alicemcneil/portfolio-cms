<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$getProjects = 'SELECT `id`, `project_title`, `img_url`, `site_url` FROM projects';
$query = $db->prepare($getProjects);
$query->execute();

$projects = $query->fetchAll();

echo $projects;