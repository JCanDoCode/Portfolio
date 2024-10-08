<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Work | JCanArt Portfolio"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="./media/img/JCanArt_og_image.png"/>
    <meta property="og:description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!"/>
    <link rel="icon" type="image/x-icon" href="./media/img/JCanArt_favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "./components/header.php"; ?>
    <main>
        <section>
            <h2>Featured Work</h2>
            <div class="card-container">
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://jeen.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/jeen_img2.png" alt="JEEN landing page image" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">JEEN</h3>
                            <span class="project-category">Web Development</span>
                            <p itemprop="description">This project was focused on Project Management and teamwork. My team and I chose a fictional restaurant project with the name, JEEN. This name was created from the initials of our 4 group members, Josel, Eunsol, Emma, and Neal.</p>
                            <div class="btn-flex">
                                <a href="https://jeen.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./jeen.php" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="http://pieces.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/pieces.png" alt="Pieces landing page" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">Pieces</h3>
                            <span class="project-category">Web Development</span>
                            <p itemprop="description">Pieces is an ecommerce website selling premium, high quality chess boards. It also has many features to help users improve their chess skills and theory, like daily puzzles and an openings explorer.</p>
                            <div class="btn-flex">
                                <a href="http://pieces.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./pieces.php" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://groove.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/groove_img3.png" alt="Groove home page" class="position-top" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">Groove</h3>
                            <span class="project-category">Web Development</span>
                            <p itemprop="description">Groove is a music sharing social media platform. Unlike most music streaming applications, Groove is specially designed to suit short form posts. It's like Spotify and Instagram had a baby!</p>
                            <div class="btn-flex">
                                <a href="https://groove.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./groove.php" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://trackrun.joselcanlas.com/" target="_blank" class="img-link" itemscope="url"><img src="./media/img/trackrun_img2.png" alt="Track Run home page" class="position-top" itemprop="image"></a>
                        <article class="no-margin-top">
                            <h3 itemprop="name">Track Run</h3>
                            <span class="project-category">UI/UX</span>
                            <p itemprop="description">Track Run is a step/run tracking app with many built-in features to enhance your cardio. Track Run can time your runs, track your steps taken, view progress and your past runs.</p>
                            <div class="btn-flex">
                                <a href="https://trackrun.joselcanlas.com/" target="_blank" class="btn" itemprop="url">View Site</a>
                                <a href="./trackrun.php" class="btn" itemprop="url">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
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