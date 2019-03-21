<?php
require '../login/sessions.php';
sessionCheck();
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>

!DOCTYPE html
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin_page.css">
</head>
<body>

<?php
$getProjects = 'SELECT `id`, `project_title`, `img_url`, `site_url` FROM projects;';
$query = $db->prepare($getProjects);
$query->execute();
$projects = $query->fetchAll();
?>

<h1>Admin Panel</h1>
<div class="create">
<p>Create New Project</p>
<a href="../add_new/add_project_page.php" class="add button">+</a>
</div>
<table>
    <tr>
        <th>Number</th>
        <th>Project Title</th> 
        <th>Image URL</th>
        <th>Site URL</th>
    </tr>

<?php
foreach ($projects as $project) {
    echo '<tr><td>' . $project['id'] . '</td>
<td>' . $project['project_title'] . '</td>
<td>' . $project['img_url'] . '</td>
<td>' . $project['site_url'] . '</td>
<td><a class="button edit" href="../edit/edit.php?id=' . $project['id'] .'">Edit</a></td>
<td><a class="button delete" href="../delete/delete.php?id=' . $project['id'] .'">Delete</a></td>
</tr>';
};
?>

</table>
</body>
</html>




