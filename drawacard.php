<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="title" content="Draw a Card! | JCanArt">
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Draw a Card! | JCanArt Portfolio"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="./media/img/JCanArt_og_image.png"/>
    <meta property="og:description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!"/>
    <link rel="icon" type="image/x-icon" href="./media/img/JCanArt_favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <main>
        <article>
            <h2>Draw a Card!</h2>
            <p>Create a randomized card game that allows the user to draw any number of cards.</p>
        </article>
        <article>
            <h3>Contributors</h3>
            <p>Josel Canlas – Web Developer</p>
        </article>
        <article>
            <h3>Goal</h3>
            <p>Create a randomized card game that allows the user to draw any number of cards.</p>
        </article>
        <article>
            <h3>Narrative</h3>
            <p>This project originated from my Animation class. The focus here was to have an element follow the user’s cursor. In this project, users could take a card and place them into their hand below. Using the Deck of Cards API, it would draw a random card out of a deck.</p>
        </article>
        <article>
            <h3>Layout</h3>
            <p>First, I coded the HTML and CSS of the game. As this was a single page website with a simple design, I did not make any wireframes. Since tracking the cursor was the most complex task, I gathered some placeholder card images which were replaced by the API later. This made tracking the cursor faster and simpler to code.</p>
        </article>
        <div class="draw-a-card-artifact"></div>
        <article>
            <h3>Functionality</h3>
            <p>Then, I coded the functionality of the game using JavaScript. I used the container of the card area to track where the cursor was. With this, I could influence how the card selected translated with the cursor. A problem that occurred was when the card was following the cursor, it blocked the cursor from clicking on the page. This interfered with the user being able to place the card into their hand. To solve this, I tested disabling the cursor events using CSS on the card that followed the cursor. This made the user unable to interact directly with the card they were holding. As a result, the user could click their hand which placed the card down. After solving that problem, the main functionality of this game was complete.</p>
        </article>
        <div class="draw-a-card-artifact"></div>
        <article>
            <h3>API Integration</h3>
            <p>I used the open-source Deck of Cards API to access and randomize the cards drawn by users. This API offered images of all types of cards in a deck. I used these images fetched from the API to replace the previous placeholder images. When the user placed a card, JavaScript would fetch a random card from the API. Another thing that was missing was a logo for this project. I created the logo in Adobe Illustrator. The 3-dimensional feel was made using the blend feature by connecting 2 objects front and back. With the API and Logo, Draw a Card! was complete.</p>
            <a href="https://drawacard.joselcanlas.com/" target="_blank" class="btn space-after">View Site</a>
        </article>
        <div class="draw-a-card-artifact"></div>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
    <?php include "./components/footer.php"; ?>
    <script defer src="./js/main.js"></script>
</body>
</html>