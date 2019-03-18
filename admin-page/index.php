<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



//$sql = 'SELECT `project_title` FROM `projects`;';
//$query = $db->prepare($sql);
//$query->execute();
//
//$result = $query->fetchAll();
//var_dump($result);


function getImage() {
    $image = "SELECT 'img_url' FROM `projects` WHERE `id`= 1";
    echo $image;

}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Display an image in PHP from MySQL database example</title>
</head>
<body>


<img src="<?php getImage(); ?>" width="auto" height="auto">

</body>
</html>