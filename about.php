<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="About | JCanArt Portfolio"/>
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
        <article>
            <h2>About</h2>
            <div class="p-img-container">

            </div>
        </article>
        <article>
            <h3>Skills</h3>
            <div class="skills">
                <img src="./media/img/html.png" alt="html">
                <img src="./media/img/css.png" alt="css">
                <img src="./media/img/js.png" alt="js">
                <img src="./media/img/php.png" alt="php">
                <img src="./media/img/figma.png" alt="figma">
                <img src="./media/img/adobe.png" alt="creative cloud">
                <img src="./media/img/git_logo.png" alt="git hub">
            </div>
        </article>
        <article>
            <h3>My Hobbies</h3>
            <h4>Chess</h4>
            <p>Pieces, one of my portfolio pieces may give it away that I love to play chess (here’s <a href="https://www.chess.com/member/gchess2222" target="_blank">my chess.com profile</a> if you ever want to play a game with me)! Chess has many benefits to playing it, like improving strategic and adaptive mindsets. As a strong problem solver, I enjoy every moment where you must respond to your opponents moves and find a solution to the problem at hand.</p>
            <h4>Fitness and Conditioning</h4>
            <p>With a healthy mind, you always need a healthy body! I've enjoyed working out ever since I was 9, but never had an extensive schedule until 2023 in high school. At this time, I took a fitness and conditioning course where I added more to my previous schedule. I was grateful for the experience as I further developed discipline and dedication.</p>
        </article>
        <article class="contact-article" id="contact" itemscope itemtype="https://schema.org/ContactPoint">
            <h3 itemprop="name">Contact</h3>
            <p itemprop="description">Feel free to contact me with any questions or any other wonderful work! ;)</p>
            <p>Email: <a href="mailto:contact@joselcanlas.com" target="_blank" itemprop="email">contact@joselcanlas.com</a></p>
        </article>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
    <?php include "./components/footer.php"; ?>
    <script defer src="./js/main.js"></script>
    <script defer src="./js/dynamicAboutContent.js"></script>
</body>
</html>