<?php require_once "./components/header.php"; ?>
    <main>
        <article class="no-margin-top">
            <div class="mockup-container">
                <img src="./media/img/trackrun_mockup.png" alt="track run mockup" class="mockup">
            </div>
            <h2>Track Run</h2>
            <p>Track Run is a step/run tracking app with many built-in features to enhance your cardio. Track Run can time your runs, track your steps taken, view progress and your past runs.</p>
            <p><strong>Time Taken To Complete: </strong>19.25 hours</p>
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
            <p>I created everything that was needed to know about Track Run’s target demographic. I found that an ideal Track Run user would be someone who works in a chair and wants to exercise more to counteract the oversitting. Since this was not a real app with a concept that was created by another person, the first thing I did was establish what Track Run is. As previously mentioned, it is an app that times, tracks steps, measures progress, and creates records. Then I created the user persona, scenario, empathy map, journey map, user flow, and the wireframes. These documents would influence how I create the app to suit the demographic.</p>
        </article>
        <div class="trackrun-artifact"></div>
        <article>
            <h3>Phase 2: High Fidelity Prototypes</h3>
            <p>This phase had me using Figma to turn my previously created wireframes into high fidelity, interactive prototypes. Each page was completed with every element being functional. This process was basically adding color and using the prototype functionality Figma brings to documents. I designed everything with the user in mind and how they would use this app.</p>
        </article>
        <div class="trackrun-artifact"></div>
        <article>
            <h3>Phase 3: Testing</h3>
            <p>Now it was time to test my app on Maze (a website that turns Figma files into testable apps). I had about 5 testers test my app according to the prompts I gave them. Overall, the results were very good with small fixes for UI/UX capabilities.</p>
            <h4>Issue #1</h4>
            <p>The first issue was how the button to start tracking was called “Track Run.” One user did not think this button started the run. My takeaway from this was that the wording was unclear. To fix this, I changed the button’s wording to “start,” which explains what it does clearer.</p>
            <img src="./media/img/trackrun_issue1.png" alt="Issue #1 before and after" class="trackrun-issue">
            <h4>Issue #2</h4>
            <p>The second issue was that users did not think that the history button at the finish screen lead to the progress screen. Many users opted to use the hamburger menu to navigate to the progress screen, which was not the expected path. To fix this, I added a “/progress” to the button to ensure the user knows that the button shows both screens.</p>
            <img src="./media/img/trackrun_issue2.png" alt="Issue #2 before and after" class="trackrun-issue">
            <h4>Issue #3</h4>
            <p>The last issue I found was the points on the progress graph were too small for mobile users to click. To fix this, I created a larger area to click the point.</p>
            <a href="https://trackrun.joselcanlas.com/" target="_blank" class="btn space-after">View Site</a>
            <img src="./media/img/trackrun_issue3.png" alt="Issue #3 before and after" class="trackrun-issue">
        </article>
    </main>
    <div class="footer-stroke">
        <div class="thick"></div>
        <div class="thin"></div>
    </div>
<?php require_once "./components/footer.php"; ?>