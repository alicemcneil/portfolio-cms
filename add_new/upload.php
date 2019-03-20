<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
echo '<link rel="stylesheet" type="text/css" href="add_proj.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">';

if (!empty($_POST['project_title']) && (!empty($_POST['img_url']))) {
    $project_title = $_POST['project_title'];
    $img_url = $_POST['img_url'];
    $site_url = $_POST['site_url'];

    $createProject = "INSERT INTO `projects` (project_title, img_url, site_url) VALUES (:title, :img, :site);";

    $query = $db->prepare($createProject);
    $query->bindParam(':title', $project_title, PDO::PARAM_STR);
    $query->bindParam(':img', $img_url, PDO::PARAM_STR);
    $query->bindParam(':site', $site_url, PDO::PARAM_STR);

    $query->execute();
    echo '<h1>Your new project was successfully uploaded!</h1>';
} else {
    echo '<h1>Sorry!</h1> We were unable to upload this project <br> Ensure you have both the Project Title and Image URL fields completed <br>';
}

echo '<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>';