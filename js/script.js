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

const swiperBlog = new Swiper(".swiper-blog", {
   direction: "horizontal",
   loop: false,
   navigation: {
      nextEl: ".swiper-blog__btn_n",
      prevEl: ".swiper-blog__btn_p",
   },
   slidesPerView: 2,
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      900: {
         slidesPerView: 1.3,
      },
      1400: {
         slidesPerView: 2,
      },
   },
});

let popup_link = document.querySelectorAll("._popup-link");
let popups = document.querySelectorAll(".popup");

for (let index = 0; index < popup_link.length; index++) {
   const el = popup_link[index];
   el.addEventListener("click", function (e) {
      // if (unlock) {
      let item = el.getAttribute("href").replace("#", "");
      let video = el.getAttribute("data-video");
      popup_open(item, video);
      // }
      e.preventDefault();
   });
}
for (let index = 0; index < popups.length; index++) {
   const popup = popups[index];
   popup.addEventListener("click", function (e) {
      if (!e.target.closest(".popup__body")) {
         popup_close(e.target.closest(".popup"));
      }
   });
}
function popup_open(item, video = "") {
   let activePopup = document.querySelectorAll(".popup._active");
   if (activePopup.length > 0) {
      popup_close("", false);
   }
   let curent_popup = document.querySelector(".popup_" + item);
   if (curent_popup) {
      if (video != "" && video != null) {
         let popup_video = document.querySelector(".popup_video");
         popup_video.querySelector(".popup__video").innerHTML =
            '<iframe src="https://www.youtube.com/embed/' +
            video +
            '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
      }
      // if (!document.querySelector(".menu__body._active")) {
      //    body_lock_add(500);
      // }
      curent_popup.classList.add("_active");
      history.pushState("", "", "#" + item);
   }
}
function popup_close(item, bodyUnlock = true) {
   //  if (unlock) {
   if (!item) {
      for (let index = 0; index < popups.length; index++) {
         const popup = popups[index];
         let video = popup.querySelector(".popup__video");
         if (video) {
            video.innerHTML = "";
         }
         popup.classList.remove("_active");
      }
   } else {
      let video = item.querySelector(".popup__video");
      if (video) {
         video.innerHTML = "";
      }
      item.classList.remove("_active");
   }
   //  if (!document.querySelector(".menu__body._active") && bodyUnlock) {
   //     body_lock_remove(500);
   //  }
   history.pushState("", "", window.location.href.split("#")[0]);
   //  }
}
let popup_close_icon = document.querySelectorAll(".popup__close,._popup-close");
if (popup_close_icon) {
   for (let index = 0; index < popup_close_icon.length; index++) {
      const el = popup_close_icon[index];
      el.addEventListener("click", function () {
         popup_close(el.closest(".popup"));
      });
   }
}
document.addEventListener("keydown", function (e) {
   if (e.code === "Escape") {
      popup_close();
   }
});
