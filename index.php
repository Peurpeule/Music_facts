<?php // Alpha background color
// Format array : BackgroundAlphaColor + & + Menu elements color
$backgroundColorsTable = ['#de3926&#c53929', '#008C72&#02A676', '#034A8A&#046CC9'];
$colors = $backgroundColorsTable[array_rand($backgroundColorsTable, 1)];
$colors = explode( '&', $colors, 2);
$backgroundColor = $colors[0];
$menuColor = $colors[1];

$imagesTable = ['image1.jpg', 'image2.jpg', 'image3.jpg'];
$image = $imagesTable[array_rand($imagesTable, 1)]; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Music Project</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <style> .fact-menu .fact-menu-element{ background-color: <?= $menuColor ?> } </style>
    </head>
    <body>
        <div class="main-container container-illustration" style="background: url(assets/img/<?= $image ?>) no-repeat center; -webkit-background-size: cover">
            <div class="alpha-filter" style="background-color:<?= $backgroundColor ?>;"></div>
            <div class="illustration-box">
                <h1>Rolling Stones</h1>
            </div>
            <div class="fact-menu">
                <a href="#" class="fact-menu-element">
                    <span><i class="fas fa-comment"></i></span>
                </a>
                <a href="#" class="fact-menu-element">
                    <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                </a>
                <a href="#" class="fact-menu-element">
                    <span><i class="fas fa-tag"></i></span>
                </a>
                <a href="#" class="fact-menu-element">
                    <span><i class="fas fa-plus-circle"></i></span>
                </a>
            </div>
        </div>
        <div class="main-container container-content">
            <div class="content-box">
                <img src="assets/img/kali.png" alt="Kali">
                <p>"La langue, logo des Rolling Stones, est inspirée par Kali, qui est, dans l'hindouisme, la déesse de la préservation, de la transformation et de la destruction."</p>
            </div>
        </div>
    </body>
</html>