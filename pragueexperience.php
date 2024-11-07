<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCanArt | Where Ideas Happen</title>
    <meta name="title" content="Prague Experience | JCanArt">
    <meta name="description" content="JCanArt (AKA Josel Canlas) is my portfolio website that is focused on one thing, stunning, high quality, and custom designs. Check out my portfolio to view some of my best work">
    <meta name="keywords" content="web developer in vancouver, web design, responsive designs, ui/ux, graphic design, web design for businesses, web development, custom websites, portfolio"/>
    <!-- og tags -->
    <meta property="og:site_name" content="joselcanlas.com"/>
    <meta property="og:title" content="Prague Experience | JCanArt Portfolio"/>
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
            <h2>Prague Experience</h2>
            <p>Create a randomized card game that allows the user to draw any number of cards.</p>
            <p><strong>Time Taken To Complete: </strong>14.5 hours</p>
        </article>
        <article>
            <h3>Contributors</h3>
            <p>Josel Canlas - UI/UX Designer & Researcher</p>
            <p>Eunseol Park - UI/UX Designer & Researcher</p>
            <p>Annie Tang - UI/UX Designer & Researcher</p>
            <p>Nicholas Greco - UI/UX Designer & Researcher</p>
            <p>Allyana Alviar - UI/UX Designer & Researcher</p>
        </article>
        <article>
            <h3>Goal</h3>
            <p>Find an existing website that needs UI/UX improvements. Conduct user research and tests to find qualitative and quantitative data for UI/UX issues on the site. With the test results, redesign the website to solve these problems and attract users to visit Prague.</p>
        </article>
        <article>
            <h3>Narrative</h3>
            <p>Prague Experience is a website that provides tourist activities, accommodations, and reviews for tourists visiting Prague. This website has a large amount of information, but not a great layout to support it. The overload of information can make it difficult to find certain pages. As a Lean UX team, it was our job to determine all the problems and redesign the Prague Experience website. To do this, we had to create tasks for testing our business problems, run user tests, and design the new website.</p>
        </article>
        <article>
            <h3>Phase 1: Selecting Testers</h3>
            <p>First, we found users to test the existing site. We wanted users who enjoy travelling internationally, so we made screener questions to select our ideal users. We asked people we knew to take the screener through Google Forms. Our goal was to have 5 users who matched our target audience and available to test. According to UX expert Jacob Nielsen’s study, 5 users are the most optimal for finding majority of issues. This is because the more users you add, the more duplicate issues can be found. We eventually found the 5 ideal users.</p>
        </article>
        <div class="prague-experience-artifact"></div>
        <article>
            <h3>Phase 2: Identifying Problems</h3>
            <p>While we found users, we identified business problems, created assumptions, and hypothesized what could happen with improvements. In terms of UI/UX, business problems explain how aspects of a website can hinder the success of a business. The business problems we found with the website were:</p>
            <ul>
                <li>The large amount of information with no hierarchy overloads the user with information, causing them trouble when finding relevant information.</li>
                <li>No signifiers or affordances makes navigation links unfriendly to users, which will increase bounce rate</li>
                <li>Not optimized for mobile and tablet devices, which will lose many potential users</li>
            </ul>
            <p>We had 4 assumptions for why users would use this website:</p>
            <ul>
                <li>Find local activities/food</li>
                <li>Looking to travel and are interested in what Prague has to offer</li>
                <li>Looking for places to stay</li>
                <li>To read reviews</li>
            </ul>
            <p>Hypotheses are what we think would happen if we improved on the business problems. What we hypothesized was:</p>
            <ol>
                <li>We believe user engagement will be increased by 20% if new users are provided an easy and clear to use navigation.</li>
                <li>We believe bounce rate will decrease by 70% if the hierarchy of information is reassessed and organized</li>
                <li>Integrating social media features and user-generated content, such as reviews and travel photos, will increase the credibility of the website and encourage more visitors to use it as a trusted resource.</li>
            </ol>
            <a href="https://www.pragueexperience.com/" target="_blank" class="btn space-after">Before Redesign</a>
        </article>
        <div class="prague-experience-artifact"></div>
        <article>
            <h3>Phase 3: User Tests</h3>
            <p>Next, we created 3 tasks to test our business problems and hypotheses. We used moderated tests to guide the testers, but not influence their actions. We had 1 moderator and 2 observers per task. The moderator did all the interactions with the user, while observers were like flies on a wall, not interacting or distracting. Observers took quick observations using rainbow sheets.</p>
            <h4>Task #1: Book a reservation at restaurant of choice</h4>
            <p>Testers were to:</p>
            <ol>
                <li>Navigate to the restaurants page</li>
                <li>Find the restaurant</li>
                <li>Click the book button</li>
                <li>Fill in the information and book (make the tester stop before sending info)</li>
            </ol>
            <p>As expected, many users were overwhelmed at this part because of the overload of information. This caused the users to take more time to find the restaurants page. One user even sighed trying to navigate through this task.</p>
            <h4>Task #2: Read a review and find the reviewed place</h4>
            <p>Testers were to:</p>
            <ol>
                <li>Find the "Trip Reviews" button.</li>
                <li>Select a review</li>
                <li>Find the place where the selected review was about</li>
            </ol>
            <p>Users had minimal difficulty finding the reviews page, but were overwhelmed by how the comments were laid out. One user complained about there being no search button for the comments. Then came the most difficult part of the task, finding the reviewed place. Users had extreme difficulty finding the corresponding place since there was no way to filter or search. Many scrolled up and down many times to find it. One user failed to find it.</p>
            <h4>Task #3: Book an accommodation for 4 nights</h4>
            <p>Users were to:</p>
            <ol>
                <li>Find Prague package page</li>
                <li>Find a 4-night package</li>
                <li>Book</li>
            </ol>
            <p>Some users were able to find the page easily, while others were not. Once on the page, users were able to find the packages after scrolling down. Some users failed to book a 4-night package and booked a different type instead.</p>
            <p>At the end of each test, we gave users a System Usability Scale (SUS) test. The average score between our 5 testers was 23/100, which is unacceptable on the SUS.</p>
        </article>
        <div class="prague-experience-artifact"></div>
        <article>
            <h3>Phase 4: Redesign</h3>
            <p>Using the results from the tests, we designed a new version of the Prague Experience website. I was in charge of redesigning the restaurants page, but I contributed ideas in all of the designs. To solve the overload of information, we created categories containing the activities. The original website had 12 sections, we made it into 6! Along with this, we added a header nav for further navigation improvements. As for finding page information, we created filters and a search bar to let users decide what they are looking for.</p>
            <a href="https://www.figma.com/design/w73nXpom1NF1UE7FHPeYmb/Prague-Experience-Redesign?node-id=0-1&t=dpyyGUugFRuGLDif-1" target="_blank" class="btn space-after">View Site</a>
        </article>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
    <?php include "./components/footer.php"; ?>
    <script defer src="./js/main.js"></script>
</body>
</html>