<?php require_once "./components/header.php"; ?>
    <section class="hero-banner" id="heroBanner" itemscope itemtype="https://schema.org/Person">
        <div>
            <h1 itemprop="name">Where Ideas Happen</h1>
            <h2 itemprop="description">I'm a <a href="./about" class="underline" itemprop="jobTitle">Web Designer</a></h2>
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
            <h2 class="project-h2 center-text">Featured Work</h2>
            <p class="center-text">Browse through my <a href="./work" class="underline">Web Design</a> and <a href="./work" class="underline">User Experience (UX)</a> centered projects!</p>
            <div class="card-container">
                <div class="card">
                    <div class="card-content" itemscope itemtype="https://schema.org/Project">
                        <a href="https://jeen.joselcanlas.com/" target="_blank" class="img-link" itemprop="url"><img src="./media/img/jeen.png" alt="JEEN landing page image" itemprop="image"></a>
                        <article class="no-margin-top">
                            <a href="https://jeen.joselcanlas.com/" target="_blank" class="no-decor"><h3 itemprop="name">JEEN</h3></a>
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
                            <a href="https://pieces.joselcanlas.com/" target="_blank" class="no-decor"><h3 itemprop="name">Pieces</h3></a>
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
<?php require_once "./components/footer.php"; ?>