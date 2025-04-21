<?php require_once "./components/header.php"; ?>
    <main>
        <article class="no-margin-top">
            <div class="mockup-container">
                <img src="./media/img/pieces_mockup.png" alt="pieces mockup" class="mockup">
            </div>
            <h2>Pieces</h2>
            <p>Pieces is an ecommerce website selling premium, high quality chess boards. It also has many features to help users improve their chess skills and theory, like daily puzzles and an openings explorer.</p>
            <p><strong>Time Taken To Complete: </strong>15 hours</p>
        </article>
        <article>
            <h3>Contributors</h3>
            <p>Josel Canlas - Web Developer</p>
        </article>
        <article>
            <h3>Goal</h3>
            <p>Create a website that sells premium chess boards to customers and provides helpful resources to improve chess skills. Users can shop, complete daily puzzles, and search openings.</p>
        </article>
        <article>
            <h3>Narrative</h3>
            <p>In this project, I created my first responsive website that included responsive elements, font sizes, and media queries to support all mobile, tablet, laptop and desktop devices. I chose the topic of a fictional company that sells chess boards.</p>
        </article>
        <article>
            <h3>Wireframe</h3>
            <p>First, I created the low fidelity layouts for mobile (575px), tablet (768px), and desktop (1200px) in Figma. Along with these, I created in illustrator the logo, wordmark, and gathered images from unsplash to use on the home page. These assets were all related to chess.</p>
        </article>
        <div class="pieces-artifact"></div>
        <article>
            <h3>Draft Website</h3>
            <p>Then, it was time to code the layouts made in Figma. I designed with the mobile first idea. This draft website was made responsive with media queries for mobile, tablet, and desktop. This draft website had placeholder frames for where images would go in the final implementation. Another important thing on this website was the hamburger menu which I coded in JavaScript. After this stage, the real website would be filled with all the images and plugins needed.</p>
        </article>
        <div>
            <pre><code class="language-css">
            .home-flex {
                width: 90%;
                height: 1300px;
                margin: 0 5% 0 5%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .wordmark {
                width: 100%;
                height: 15%;
                margin-bottom: 15px;
                background: url("../images/pieces_wordmark.png");
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
            }
            .paragraph-image {
                margin-bottom: 5px;
            }
            </code></pre>
        </div>
        <article>
            <h3>Final Website</h3>
            <p>To finish up the website, I added the images, a slider plugin, and removed css no longer used (due to the plugin’s css). I noticed that the hamburger menu was sliding in too far when viewport width was below 300px. After altering the JavaScript transform value from px to vw, I could translate the hamburger menu according to its vw. This fixed my problem I was having.</p>
            <a href="https://pieces.joselcanlas.com/" target="_blank" class="btn space-after">View Site</a>
        </article>
        <div class="pieces-artifact"></div>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
<?php require_once "./components/footer.php"; ?>