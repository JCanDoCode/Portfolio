    <footer>
        <div class="footer-container">
            <div class="footer-wordmark">
                <a href="./index" class="no-decor">
                    <h2 class="wordmark">Josel Canlas</h2>
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

        if ($page === 'pieces') {
            ?> <script>hljs.highlightAll();</script> <?php
        }
    ?>
</body>
</html>