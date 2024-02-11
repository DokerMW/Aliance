const header = document.querySelector(".header");
const body = document.querySelector("body");
const headerRow = document.querySelector(".header__row");
const logo = document.querySelector(".header__img use");
const iconMenu = document.querySelector(".burger-menu__icon");
const burgerButton = document.querySelector(".burger-menu");
const menuBody = document.querySelector(".header__menu_mobile");
const burgerLine = document.querySelectorAll(".burger-menu__icon span");

const lightThemeOn = () => {
  header.classList.add("dark");
  burgerLine.forEach((el) => el.classList.add("dark"));
};
const lightThemeOff = () => {
  header.classList.remove("dark");
  burgerLine.forEach((el) => el.classList.remove("dark"));
};
const darkLogo = () => logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_d");
const lightLogo = () => logo.setAttribute("href", "./img/icons/sprite.svg#main_logo_l");
const minHeader = () => headerRow.classList.add("minify");
const maxHeader = () => headerRow.classList.remove("minify");

const changeHeaderTheme = () => {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      lightThemeOn();
      minHeader();
      darkLogo();
    } else {
      lightThemeOff();
      maxHeader();
      lightLogo();
    }
  });
};

const mMenuToggle = () => {
  burgerButton.addEventListener("click", function (e) {
    document.body.classList.toggle("_lock");
    iconMenu.classList.toggle("_active");
    menuBody.classList.toggle("_active");
    if (body.classList.contains("_lock")) {
      darkLogo();
    } else if (!body.classList.contains("_lock") && window.scrollY < 50) {
      lightLogo();
    }
    if (window.scrollY < 50) {
      burgerLine.forEach((el) => el.classList.toggle("dark"));
    }
  });
};

changeHeaderTheme();
mMenuToggle();

const swiperFeatures = new Swiper(".features-slider", {
  direction: "horizontal",
  loop: false,
  navigation: {
    nextEl: ".features-next-btn",
    prevEl: ".features-prev-btn",
  },
  slidesPerView: 3.5,
  breakpoints: {
    320: {
      slidesPerView: 1.38,
    },
    550: {
      slidesPerView: 2.4,
    },
    768: {
      slidesPerView: 3.4,
    },
    900: {
      slidesPerView: 4.4,
    },
  },
});

const swiperScheme = new Swiper(".scheme-slider", {
  direction: "horizontal",
  loop: false,
  navigation: {
    nextEl: ".scheme-next-btn",
    prevEl: ".scheme-prev-btn",
  },
  slidesPerView: 3.5,
  breakpoints: {
    320: {
      slidesPerView: 1.1,
    },
    550: {
      slidesPerView: 2.4,
    },
    768: {
      slidesPerView: 3.4,
    },
    900: {
      slidesPerView: 4.4,
    },
  },
});
