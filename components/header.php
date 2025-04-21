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
    <meta name="description" content="Josel Canlas is a Vancouver-based Web Designer who creates meaningful designs that bring ideas to life. In this portfolio, see how Josel designs for the best user experiences.">
    <meta name="keywords" content="vancouver web designer, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Josel Canlas | <?php echo $pageTitle; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="./media/img/JCanArt_og_image.png"/>
    <meta property="og:description" content="Josel Canlas is a Vancouver-based Web Designer who creates meaningful designs that bring ideas to life. In this portfolio, see how Josel designs for the best user experiences."/>
    <link rel="icon" type="image/x-icon" href="./media/img/JoselCanlas_logo_favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav>
            <a href="./" class="nav-logo-wordmark">
                <svg class="wordmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 908.05 153.7">
                    <text class="cls-1" transform="translate(426.82 122.7)"><tspan class="cls-4" x="0" y="0">Can</tspan><tspan class="cls-6" x="268.65" y="0">l</tspan><tspan class="cls-7" x="322.97" y="0">a</tspan><tspan x="412.43" y="0">s</tspan></text><text class="cls-1" transform="translate(105.61 122.7)"><tspan class="cls-4" x="0" y="0">o</tspan><tspan class="cls-3" x="89.32" y="0">s</tspan><tspan class="cls-5" x="162.12" y="0">e</tspan><tspan x="242.2" y="0">l</tspan></text>
                    <path class="cls-2" d="M31.24,138.7c-38.57,0-33.69-34.43-8.98-37.02,28.49-2.98,36.23-15.36,32.86-57.11-20.97-1.86-36.8-10.35-36.8-20.55,0-11.56,20.34-11.05,45.44-11.05s45.44-.5,45.44,11.05c0,8.15-10.12,15.21-24.88,18.67,9.75,26.62,14.71,59.56.08,76.98-12.71,13.25-28.31,19.02-53.17,19.02Z"/>
                </svg>
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 618.72 618.72">
                    <path class="cls-1" d="M222.57,528.82c-134.64,0-117.61-120.2-31.34-129.23,99.46-10.41,126.48-53.61,114.72-199.36-73.19-6.49-128.48-36.14-128.48-71.73,0-40.35,71.02-38.58,158.64-38.58s158.64-1.76,158.64,38.58c0,28.45-35.32,53.1-86.86,65.16,34.02,92.94,51.34,207.93.29,268.75-44.37,46.27-98.83,66.41-185.62,66.41Z"/>
                </svg>
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