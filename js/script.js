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
      if (header.classList.contains("main-header")) {
         if (window.scrollY > 50) {
            lightThemeOn();
            minHeader();
            darkLogo();
         } else {
            lightThemeOff();
            maxHeader();
            lightLogo();
         }
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
const swiperExperts = new Swiper(".experts-slider", {
   direction: "horizontal",
   loop: false,
   navigation: {
      nextEl: ".experts-next-btn",
      prevEl: ".experts-prev-btn",
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
const swiperResearch = new Swiper(".swiper-research", {
   direction: "horizontal",
   loop: true,
   navigation: {
      nextEl: ".swiper-research__btn_n",
      prevEl: ".swiper-research__btn_p",
   },
   slidesPerView: 2,
   spaceBetween: 30,
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

const modal = document.querySelector(".modal");
const modalThx = document.querySelector(".modal-thx");
const modalDialog = document.querySelector(".modal-dialog");
const modalThxDialog = document.querySelector(".modal-thx-dialog");

const toggleModal = (popup, atr, body) => {
   document.addEventListener("click", (e) => {
      if (
         e.target.dataset.toggle == atr ||
         e.target.parentNode.dataset.toggle == atr ||
         (!e.composedPath().includes(body) && popup.classList.contains("_active"))
      ) {
         e.preventDefault();
         popup.classList.toggle("_active");
      }
   });

   document.addEventListener("keyup", (e) => {
      if (e.key == "Escape" && popup.classList.contains("_active")) {
         popup.classList.toggle("_active");
      }
   });
};

toggleModal(modal, "modal", modalDialog);
toggleModal(modalThx, "modal-thx", modalThxDialog);

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
   const validation = new JustValidate(form, {
      errorFieldCssClass: "is-invalid",
   });
   validation
      .addField("[name=username]", [
         {
            rule: "required",
            errorMessage: "Укажите имя",
         },
         {
            rule: "maxLength",
            value: 50,
            errorMessage: "Не более 50 символов",
         },
      ])
      .addField("[name=usertel]", [
         {
            rule: "required",
            errorMessage: "Укажите телефон",
         },
      ])
      .onSuccess((e) => {
         const thisForm = e.target;
         const formData = new FormData(thisForm);

         const ajaxSend = (formData) => {
            fetch(thisForm.getAttribute("action"), {
               method: thisForm.getAttribute("method"),
               body: formData,
            }).then((response) => {
               if (response.ok) {
                  thisForm.reset();
                  modal.classList.remove("_active");
                  modalThx.classList.add("_active");
               } else {
                  alert("Ошибка: ".response.statusText);
               }
            });
         };
         ajaxSend(formData);
      });
});

const inputTel = document.querySelectorAll("input");

inputTel.forEach((e) => {
   if (e.classList.contains("_phone")) {
      e.classList.add("_mask");
      Inputmask("+7 (999) 9999999", {
         clearIncomplete: true,
         clearMaskOnLostFocus: true,
      }).mask(e);
   }
});
