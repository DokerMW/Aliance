const header = document.querySelector(".header");
const logo = document.querySelector(".header__img");

window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    header.classList.add("dark");
    logo.setAttribute("src", "./img/header/main_logo_d.svg");
  } else {
    header.classList.remove("dark");
    logo.setAttribute("src", "./img/header/main_logo_l.svg");
  }
});
