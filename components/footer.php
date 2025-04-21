    <footer>
        <div class="footer-container">
            <div class="footer-wordmark">
                <a href="./index">
                    <svg class="wordmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 892.15 153.7">
                        <text class="cls-2" transform="translate(410.92 122.7)"><tspan class="cls-8" x="0" y="0">C</tspan><tspan class="cls-5" x="91.98" y="0">an</tspan><tspan class="cls-6" x="268.65" y="0">l</tspan><tspan class="cls-7" x="322.97" y="0">a</tspan><tspan class="cls-4" x="412.43" y="0">s</tspan></text><text class="cls-1" transform="translate(89.7 122.7)"><tspan class="cls-9" x="0" y="0">o</tspan><tspan class="cls-10" x="89.32" y="0">s</tspan><tspan class="cls-11" x="162.12" y="0">e</tspan><tspan x="242.2" y="0">l</tspan></text>
                        <path class="cls-3" d="M26.41,125.37c-32.6,0-28.47-29.1-7.59-31.29,24.08-2.52,30.62-12.98,27.77-48.27-17.72-1.57-31.11-8.75-31.11-17.37,0-9.77,17.2-9.34,38.41-9.34s38.41-.43,38.41,9.34c0,6.89-8.55,12.86-21.03,15.78,8.24,22.5,12.43,50.34.07,65.07-10.74,11.2-23.93,16.08-44.94,16.08Z"/>
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