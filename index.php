<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="title" content="Home | JCanArt">
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Home | JCanArt Portfolio"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="./media/img/JCanArt_og_image.png"/>
    <meta property="og:description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!"/>
    <link rel="icon" type="image/x-icon" href="./media/img/JCanArt_favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <section class="hero-banner" id="heroBanner" itemscope itemtype="https://schema.org/Person">
        <div>
            <h1 itemprop="name">Where Ideas Happen</h1>
            <h2 itemprop="description">I'm a <a href="./about" class="underline" itemprop="jobTitle">Web Designer & Developer</a></h2>
            <div class="btn-container">
                <a href="./about" class="btn" itemprop="url">Learn More</a>
                <a href="https://www.linkedin.com/in/josel-canlas-1441b1291/" target="_blank" itemprop="url"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://github.com/JCanDoCode" target="_blank" itemprop="url"><i class='bx bxl-github'></i></a>
            </div>
        </div>
        <img src="./media/img/hero.png" alt="Josel" itemprop="image">
    </section>
    <main class="no-header-margin">
        <section>
            <h2 class="project-h2">Featured Work</h2>
            <div class="card-container">
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://jeen.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/jeen.png" alt="JEEN landing page image" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">JEEN</h3>
                            <span class="project-category">Web Development</span>
                            <p itemprop="description">This project was focused on Project Management and teamwork. My team and I chose a fictional restaurant project with the name, JEEN. This name was created from the initials of our 4 group members, Josel, Eunseol, Emma, and Neal.</p>
                            <div class="btn-flex">
                                <a href="https://jeen.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./jeen" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://pieces.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/pieces.png" alt="Pieces landing page" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">Pieces</h3>
                            <span class="project-category">Web Development</span>
                            <p itemprop="description">Pieces is an ecommerce website selling premium, high quality chess boards. It also has many features to help users improve their chess skills and theory, like daily puzzles and an openings explorer.</p>
                            <div class="btn-flex">
                                <a href="https://pieces.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./pieces" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <a href="./work" class="btn">View More Projects</a>
            </div>
        </section> 
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
    <?php include "./components/footer.php"; ?>
    <script defer src="./js/main.js"></script>
</body>
</html>