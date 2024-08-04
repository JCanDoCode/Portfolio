const vw = window.innerWidth;
const heroBanner = document.querySelector("#heroBanner");

const dynamicHeroBanner = () => {
    if (vw <= 909) {
        heroBanner.innerHTML = `<h1>Where Ideas Happen</h1>
                <h2>I'm a <a href="./about.html" class="underline">Web Designer</a>...</h2><h2>but not only that!</h2>
                <a href="./about.html" class="btn">Learn More</a>`;
    } else {
        heroBanner.innerHTML = `<h1>Where Ideas Happen</h1>
                <h2>I'm a <a href="./about.html" class="underline">Web Designer</a>... but not only that!</h2>
                <a href="./about.html" class="btn">Learn More</a>`;
    }
}

addEventListener("load", dynamicHeroBanner)
addEventListener("resize", () => {location.reload(); dynamicHeroBanner})