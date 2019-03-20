<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo '<link rel="stylesheet" type="text/css" href="../add_new/add_proj.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">';


if (!empty($_POST['project_title']) && (!empty($_POST['img_url']))) {
        $project_title = $_POST['project_title'];
        $img_url = $_POST['img_url'];
        $site_url = $_POST['site_url'];
        $id = $_POST['id'];

        $updateProject = "UPDATE projects SET project_title=?, img_url=?, site_url=? WHERE id=?";

        $query = $db->prepare($updateProject);

        $query->execute([$project_title, $img_url, $site_url, $id]);
        echo '<h1>Your new project was successfully updated!</h1>';
    } else {
        echo '<h1>Sorry!</h1> We were unable to upload this project <br> Ensure you have both the Project Title and Image URL fields completed <br>';
    }

    echo '<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>';


