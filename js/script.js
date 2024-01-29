const header = document.querySelector(".header");
const headerRow = document.querySelector(".header__row");
const logo = document.querySelector(".header__img use");

window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    header.classList.add("dark");
    headerRow.classList.add("minify");
    logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_d");
  } else {
    header.classList.remove("dark");
    headerRow.classList.remove("minify");
    logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_l");
  }
});
