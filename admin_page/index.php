<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
echo '<html lang="en"></html> <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="admin_page.css">';

$getProjects = 'SELECT `id`, `project_title`, `img_url`, `site_url` FROM projects';
$query = $db->prepare($getProjects);
$query->execute();

$projects = $query->fetchAll();

echo '<h1>Admin Panel</h1>
<div class="create">Create New<a href="#" class="add">+</a></div><table>
    <tr>
        <th>Number</th>
        <th>Project Title</th> 
        <th>Image URL</th>
        <th>Site URL</th>
    </tr>';

foreach ($projects as $project) {
    echo '<tr><td>' . $project['id'] . '</td>
<td>' . $project['project_title'] . '</td>
<td>' . $project['img_url'] . '</td>
<td>' . $project['site_url'] . '</td>
<td><a href="../edit/edit.php"><input type="submit" value="Edit" class="edit"></a></td>
<td><input type="submit" value="Delete" class="delete"></td>
</tr>';
};
echo '</table>';




