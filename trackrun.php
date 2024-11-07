<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="title" content="Track Run | JCanArt">
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Track Run | JCanArt Portfolio"/>
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
            <h2>Track Run</h2>
            <p>Track Run is a step/run tracking app with many built-in features to enhance your cardio. Track Run can time your runs, track your steps taken, view progress and your past runs.</p>
        </article>
        <article>
            <h3>Contributors</h3>
            <p>Josel Canlas – UI/UX Designer</p>
        </article>
        <article>
            <h3>Goal</h3>
            <p>Create an app that enhances cardio and features, timed runs, step-tracking, progress, and past runs/records.</p>
        </article>
        <article>
            <h3>Narrative</h3>
            <p>I was tasked with creating an app that follows UI/UX principles. This project was divided into 3 phases:</p>
        </article>
        <article>
            <h3>Phase 1: UX Research</h3>
            <p>I created everything that was needed to know about Track Run’s target demographic. I found that an ideal Track Run user would be someone who works in a chair and wants to exercise more to counteract the oversitting. Since this was not a real app with a concept that was created by another person, the first thing I did was establish what Track Run was. Then I created the user persona, scenario, empathy map, journey map, user flow, and the wireframes. These documents would influence how I create the app to accustomed to the demographic.</p>
        </article>
        <div class="trackrun-artifact"></div>
        <article>
            <h3>Phase 2: High Fidelity Prototypes</h3>
            <p>This phase had me using Figma to turn my previously created wireframes into high fidelity, interactive prototypes. Each page was completed with every element being functional. This process was basically adding color and using the prototype functionality Figma brings to documents. I designed everything with the user in mind and how they would use this app.</p>
        </article>
        <div class="trackrun-artifact"></div>
        <article>
            <h3>Phase 3: Testing</h3>
            <p>Now it was time to test my app on Maze (a website that turns Figma files into testable apps). I had about 5 testers test my app according to the prompts I gave them. Overall, the results were very good with small fixes for UI/UX capabilities. The first issue was how the button to start tracking was called “Track Run.” One user did not think this button started the run. To fix this, I changed the wording to “start” to be clearer to the user. Another issue was that users did not think that the history button at the finish screen lead to the progress screen. To fix this, I added a “/progress” to the button to ensure the user would know that the button has both screens.</p>
            <a href="http://trackrun.joselcanlas.com/" target="_blank" class="btn space-after">View Site</a>
        </article>
        <div class="trackrun-artifact"></div>
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