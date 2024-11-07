<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="title" content="Groove | JCanArt">
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work!">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Groove | JCanArt Portfolio"/>
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
            <h2>Groove</h2>
            <p>Groove is a music sharing social media platform. Unlike most music streaming applications, Groove is specially designed to suit short form posts. It's like Spotify and Instagram had a baby!</p>
        </article>
        <article>
            <h3>Contributors</h3>
            <p>Josel Canlas – Graphic Designer</p>
        </article>
        <article>
            <h3>Goal</h3>
            <p>Create a social media app that specializes in sharing music.</p>
        </article>
        <article>
            <h3>Narrative</h3>
            <p>The app I made was a social media app where users could share their favorite songs through Instagram-like posts. These posts would contain the album cover and a short caption from the user. On Groove, there is a feature that lets users paste a link to their favorite song when posting that would fill out the song information automatically. All the user would have to do after that is to write a caption. Without the link to the song, users would put in the song name, artist(s), and caption manually. With the information about the song (song name and artist), Groove would search popular music apps (Spotify and Apple Music) to find a song with the same information. This song would be displayed to the user. If it is the correct one (according to the user), the album cover will be displayed along with an audible preview of the song. If it is not the song the user was looking for, Groove will prompt the user to paste the link to the song. This would make the process of posting easier than any other app since it is so simple.</p>
        </article>
        <article>
            <h3>Proposal</h3>
            <p>Before designing, I created a proposal to approve the app. This defined the app and provided a competitive analysis. I chose to analyze Spotify and SoundCloud. SoundCloud does have a sharing feature by reposting songs, but the overall site is mostly used for music listening. Spotify has the “Spotify Clips” which are short videos with music, like TikTok. Groove stands out from these apps since it is specifically a social media app that focuses on short sentence posts.</p>
        </article>
        <div class="groove-artifact"></div>
        <article>
            <h3>Low Fidelity Wireframes</h3>
            <p>Included in the proposal were 5 mobile screens made in Illustrator. These screens were home, Expanded post view, User page, and two user post screens. I started by making a 4-column guide for each screen. I used these guides to ensure consistency in my designs. No color had been implemented into these yet. I had the idea of keeping it black and white since most album covers include many colors.</p>
        </article>
        <div class="groove-artifact"></div>
        <article>
            <h3>Mockups</h3>
            <p>Then, it was time to implement color and imagery. The posts were all the same for hypothetical purposes. The main Illustrator tools I used were the True Type Rotate and perspective grid. True Type Rotate creates a rotation on each individual letter. This supported the fun mood of the app. Perspective grid was used to create the speakers of the wordmark. The speakers ended up looking like eyes though since I kept them in a circle shape. It works either way if the user views them as eyes or a speaker.</p>
            <p>* Album cover used is from "FALL ON ME" by DizzyEight feat. Errol Allen, Musicality</p>
        </article>
        <div class="groove-artifact"></div>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
    <?php include "./components/footer.php"; ?>
    <script defer src="./js/main.js"></script>
    <script>hljs.highlightAll();</script>
</body>
</html>