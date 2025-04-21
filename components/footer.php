    <footer>
        <div class="footer-container">
            <div class="footer-wordmark">
                <a href="./index">
                    <svg class="wordmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600">
                        <text class="cls-1" transform="translate(352.25 345.8)"><tspan x="0" y="0">CanArt</tspan></text>
                        <path class="cls-2" d="M211.16,481.81c-244.85,36.27,58.33-155.89,23.38-288.92-39.61-3.51-69.54-19.56-69.54-38.83,0-21.84,38.44-20.88,85.86-20.88s85.86-.95,85.86,20.88c0,15.4-19.11,28.74-47.01,35.27,19.74,32.3,149.24,258.73-78.55,292.48Z"/>
                    </svg>
                </a>
            </div>
            <div class="footer-info">
                <div class="footer-contact">
                    <strong>Contact</strong>
                    <ul>
                        <li>contact@joselcanlas.com</li>
                        <li><a href="https://www.linkedin.com/in/josel-canlas-1441b1291/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/JCanDoCode" target="_blank">GitHub</a></li>
                    </ul>
                </div>
                <nav class="footer-nav">
                    <strong>Site Links</strong>
                    <div>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="./about">About</a></li>
                        </ul>
                        <div>
                            <a href="./work">Work</a>
                            <ul>
                                <li><a href="./jeen">JEEN</a></li>
                                <li><a href="./pieces">Pieces</a></li>
                                <li><a href="./draw-a-card">Draw a Card!</a></li>
                                <li class="hidden"><a href="./groove">Groove</a></li>
                                <li><a href="./track-run">Track Run</a></li>
                                <li><a href="./prague-experience">Prague Experience</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <p class="copyright">&copy; <?php echo date("Y"); ?> Josel Canlas</p>
    </footer>
    <script defer src="./js/main.js"></script>
    <?php
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $slug = trim($uri, '/');
        $page = $slug ?: 'home';

        if ($page === 'about') {
            ?> <script src="./js/dynamicAboutContent.js"></script> <?php
        } elseif ($page === 'pieces') {
            ?> <script>hljs.highlightAll();</script> <?php
        }
    ?>
</body>
</html>