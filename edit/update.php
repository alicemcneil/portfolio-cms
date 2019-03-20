<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$project_title = $_POST['project_title'];
$img_url = $_POST['img_url'];
$site_url = $_POST['site_url'];
$id = $_POST['id'];

$updateProject = "UPDATE projects SET project_title=?, img_url=?, site_url=? WHERE id=?" ;

$query = $db->prepare($updateProject);

$query->execute([$project_title, $img_url, $site_url, $id]);

echo 'Your Portfolio has been successfully updated!';

                                                                     