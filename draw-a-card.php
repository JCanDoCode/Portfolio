<?php require_once "./components/header.php"; ?>
    <main>
        <article class="no-margin-top">
            <div class="mockup-container">
                <img src="./media/img/draw_a_card_mockup.png" alt="Draw a Card mockup" class="mockup">
            </div>
            <h2>Draw a Card!</h2>
            <p>Draw a Card! is a card game that lets you draw any amount of cards you want!</p>
            <p><strong>Time Taken To Complete: </strong>8 hours</p>
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
<?php require_once "./components/footer.php"; ?>