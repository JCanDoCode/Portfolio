<?php
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $slug = trim($uri, '/');
    $page = $slug ?: 'home';
    $pageTitle = htmlspecialchars(ucwords(str_replace('-', ' ', $page)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josel Canlas | Where Ideas Happen</title>
    <meta name="title" content="Josel Canlas | <?php echo $pageTitle; ?>">
    <meta name="description" content="See how Josel Canlas creates Innovative Solutions for the Worlds Problems.">
    <meta name="keywords" content="vancouver web designer, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Josel Canlas | <?php echo $pageTitle; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://joselcanlas.com/media/img/Josel-Canlas-og-image.jpg"/>
    <meta property="og:description" content="See how Josel Canlas creates Innovative Solutions for the Worlds Problems."/>
    <link rel="icon" type="image/x-icon" href="./media/svg/JoselCanlas_logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <?php if ($page === 'pieces') { ?>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script> 
    <?php } ?>
</head>
<body>
    <header>
        <nav>
            <a href="./" class="nav-logo-wordmark no-decor">
                <h2 class="wordmark">Josel Canlas</h2>
                <h2 class="logo">JC</h2>
            </a>
            <div class="ham-icon">
                <div class="line"></div>
                <div class="line" id="middleLine"></div>
                <div class="line"></div>
            </div>
            <div class="ham-menu">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li class="dropdown">
                        <a href="./work">Work</a>
                        <div class="dropdown-menu">
                            <a href="./jeen">JEEN</a>
                            <a href="./pieces">Pieces</a>
                            <a href="./draw-a-card">Draw a Card!</a>
                            <a class="hidden" href="./groove">Groove</a>
                            <a href="./track-run">Track Run</a>
                            <a href="./prague-experience">Prague Exp.</a>
                        </div>
                    </li>
                    <li><a href="./about">About</a></li>
                </ul>
            </div>
        </nav>
        <div class="nav-stroke">
            <div class="thin"></div>
            <div class="thick"></div>
        </div>
    </header>