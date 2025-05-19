const logo = document.querySelector("#logo");
const hamIcon = document.querySelector(".ham-icon");
const middleLine = document.querySelector("#middleLine");
const navMenu = document.querySelector(".ham-menu");
const heroBanner = document.querySelector("#heroBanner");
const about = document.querySelector(".p-img-container");
let hamActive = false;

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