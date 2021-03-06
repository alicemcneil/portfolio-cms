<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=cms_portfolio', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getImg = 'SELECT `img_url` , `id` FROM `projects`;';
$query = $db->prepare($getImg);
$query->execute();


$results = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
    <link href="../css/portfolio.css" rel="stylesheet" type="text/css">

    <title>Alice McNeil</title>
</head>

<body>
        <img src="../icons/alice-logo.png" class="logo" alt="alice logo">
        <a class="triangle" name="home"></a>
        <a class="square" name="home"></a>

        <nav class="navbar">
            <a href="#home" class="home">Home</a>
            <a href="#projects" class="work">Projects</a>
            <a href="#contact" class="contact-button">Contact</a>
        </nav>
        <div class="overflow"></div>
    <div class="container">

        <header>
            <h2>Alice McNeil</h2>
            <h1>Portfolio</h1>
        </header>

        <div class="top-section">
            <div class="profile-pic">
                <div class="profile-square"></div>
                <img src="../images/me.png" class="me-pic" alt="image of alice">
            </div>

            <div class="about-me">
                <h3 id="about">About me</h3>
                <p>Hello, I am Alice McNeil; welcome to my Portfolio Page. Currently I am doing a software developer course at <a href="https://mayden.academy/">Mayden Academy</a>,
                    I hope to learn the skills I will need to become a front-end software developer. I love graphic design, music and code!
                    Please take a look around at my portfolio.</p>
                <a name="projects" class="project-link"></a>
            </div>
        </div>


            <div class="my-work">

                <h3 class="portfolio-title">Here's some of my projects</h3>
            </div>

        <div class="image-container">


       <?php
        foreach ($results as $result) {
            if ($result['id'] == 1 ) {
                echo '<img src="' . $result['img_url'] . '" alt="project image" class="image-primary">';
            } else {

                echo '<img src="' . $result['img_url'] . '" alt="project image" class="images">';
            }
        }
      ?>


       </div>
        
        <div class="contact-section" id="contact">
            <h3>Contact me</h3>
            <p class="get-in-touch">Well you've made it this far, you may as well get in touch with me.</p>
            <a href="mailto:alicemcneil@live.co.uk" class="email">EMAIL: alicemcneil@live.co.uk</a>
        </div>

        <div class="social-media">
            <a href="https://github.com/alicemcneil">
                <img src="../icons/git-hub.svg" alt="github" class="icon github">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100009001864874">
                <img src="../icons/facebook.svg" alt="facebook" class="icon">
            </a>
            <a href="https://www.instagram.com">
                <img src="../icons/instagram.svg" alt="instagram" class="icon">
            </a>
            <a href="https://dribbble.com/">
                <img src="../icons/dribble.svg" alt="dribble" class="icon">
            </a>
            <a href="https://www.linkedin.com/in/alice-mcneil-5805a5169/">
                <img src="../icons/linkedin.svg" alt="linkedin" class="icon">
            </a>
        </div>
        <div class="bottom-triangle"></div>
    </div>
</body>
</html>