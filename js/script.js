const header = document.querySelector(".header");
const body = document.querySelector("body");
const headerRow = document.querySelector(".header__row");
const logo = document.querySelector(".header__img use");
const iconMenu = document.querySelector(".burger-menu__icon");
const menuBody = document.querySelector(".header__menu_mobile");
const burgerLine = document.querySelectorAll(".burger-menu__icon span");

//Смена цвета шапки и логотипа + уменьшение высоты шапки
window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    header.classList.add("dark");
    headerRow.classList.add("minify");
    burgerLine.forEach((el) => el.classList.add("dark"));
    logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_d");
  } else {
    header.classList.remove("dark");
    burgerLine.forEach((el) => el.classList.remove("dark"));
    headerRow.classList.remove("minify");
    logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_l");
  }
});

//Открытие и закрытие мобильного меню
if (iconMenu) {
  iconMenu.addEventListener("click", function (e) {
    document.body.classList.toggle("_lock");
    iconMenu.classList.toggle("_active");
    menuBody.classList.toggle("_active");
    if (body.classList.contains("_lock")) {
      logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_d");
    } else if (!body.classList.contains("_lock") && window.scrollY < 50) {
      logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_l");
    }
    if (window.scrollY < 50) {
      burgerLine.forEach((el) => el.classList.toggle("dark"));
    }
  });
}
