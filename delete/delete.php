<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" type="text/css" href="../add_new/add_proj.css"><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<?php
$deleteProject = 'DELETE FROM `projects` WHERE `id` = ?;';
$query = $db->prepare($deleteProject);
$query->execute([$_GET['id']]);
$project = $query->fetch();
?>
<h1>This project has been deleted from the Database</h1>
<a class="button back" href="../admin_page/index.php">Back to Admin Panel</a>

