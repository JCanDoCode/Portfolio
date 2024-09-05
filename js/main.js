const vw = window.innerWidth;
const logo = document.querySelector("#logo");
const hamIcon = document.querySelector(".ham-icon");
const middleLine = document.querySelector("#middleLine");
const navMenu = document.querySelector(".ham-menu");
const heroBanner = document.querySelector("#heroBanner");
const about = document.querySelector(".p-img-container");
let hamActive = false;

const dynamicLogo = () => {
    if (vw <= 480) {
        logo.setAttribute("src", "./media/img/JCanArt_logo_web.png");
    } else {
        logo.setAttribute("src", "./media/img/jcanart_wordmark_web_noslogan.png");
    }
}
const hamMenu = () => {
    if (hamActive == false) {
        navMenu.style.transform = "translateX(-49.9vw)";
        middleLine.style.width = "100%";
        hamActive = true;
    } else {
        navMenu.style.transform = "translateX(49.9vw)";
        middleLine.style.width = "0%";
        hamActive = false;
    }
    
}

hamIcon.addEventListener("click", hamMenu);
window.addEventListener("DOMContentLoaded", dynamicLogo);