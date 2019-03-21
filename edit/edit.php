<?php
require '../login/sessions.php';
sessionCheck();
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if (!empty ([$_GET['id']])) {
    $getProjects = 'SELECT `id`, `project_title`, `img_url`, `site_url` FROM projects WHERE `id` = ?;';
    $query = $db->prepare($getProjects);
    $query->execute([$_GET['id']]);
    $project = $query->fetch();
} else {
    echo 'ERROR :( Unable to fetch project data, missing ?id= value';
}
?>
<html lang="en"></html><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="edit.css">
<form class="upload" action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $project['id']; ?>">
<h1>Edit your Project</h1>
<h3>Project Name: </h3><input class="box" type="text" name="project_title" value=" <?php echo  $project['project_title'] ?>">
<h3>Image URL: </h3><input class="box" type="text" name="img_url" value=" <?php echo $project['img_url']  ?> ">
<h3>Site URL: </h3><input class="box" type="text" name="site_url" value=" <?php echo  $project['site_url']  ?> ">
<br><br>
<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>
<input class="button" type="submit" value="Update Portfolio">
</form>;

