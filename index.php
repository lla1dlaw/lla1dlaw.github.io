<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="Resume, Programming, Projects, Porfolio" />
    <meta name="author" content="Liam Laidlaw" />
    <meta name="viewport" conten="width=device-width, intial-scale=1.0" />
    <title>Liam Laidlaw Portfolio</title>
    
    <link rel="stylesheet" type="text/css" href="../css/main-style.css" media="screen" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/fontawesome.min.css">

</head>

<body>
    <div id="container">
        <!-- generate the header content for the page -->
        <?php require "./php/generateHeader.php"; ?>
        <div id="landing-container">
            <div id="profile-container" class="bordered-containers">
                <a href="about.php"><img class="landing-photo" src="../assets/images/Liam-In-Grass.jpeg" alt="Liam in grass photo"></a>
                <div id="welcome-container">
                    <h1 class="text">Welcome!</h1>
                </div>
                <div id="introduction-container">
                    <div id='intro-text'>
                        <h3 class="text">My name is Liam Laidlaw</h3>
                    </div>
                </div>
            </div>
            <div id="featured-project" class="bordered-containers">
                <h1 class="text">Featured Project</h1>
                <a href="spot-auto-rec.php"><img id="featured-project-img" src="../assets/images/Spotify_Project_Photo.png" alt="Spotify Auto Records Photo"></a>
                <h3 class="text">Spotify Auto-Records</h3>
            </div>
        </div>
    </div>
</body>

</html>
