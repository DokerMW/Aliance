<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="format-detection" content="telephone=no" />
      <link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <link rel="stylesheet" href="./css/style.css" />
      <link rel="stylesheet" href="./css/about.css" />
      <title>О компании - Aliance Production</title>
   </head>
   <body>
      <div class="wrapper">
         <header class="header dark">
            <div class="header__row">
               <div class="header__burger burger-menu">
                  <div class="burger-menu__icon">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
               <a class="header__logo" href="./">
                  <svg class="header__img">
                     <use href="./img/icons/sprite.svg#main_logo_d"></use>
                  </svg>
               </a>
               <nav class="header__menu menu">
                  <ul class="menu__list">
                     <li class="menu__item"><a href="about.php">О компании</a></li>
                     <li class="menu__item"><a href="#">Контрактное производство</a></li>
                     <li class="menu__item"><a href="#">Собственные торговые марки</a></li>
                     <li class="menu__item"><a href="#">Новости</a></li>
                     <li class="menu__item"><a href="#">Контакты</a></li>
                  </ul>
               </nav>

               <div class="header__phone">
                  <a class="header__phone-link" href="tel:+74996861014">
                     <svg class="header__phone_img">
                        <use href="./img/icons/sprite.svg#phone"></use>
                     </svg>
                     +7 (499) 686-10-14
                  </a>
               </div>
               <a href="#contact" data-toggle="modal" class="header__btn btn">
                  <svg class="header__phone_img">
                     <use href="./img/icons/sprite.svg#phone"></use>
                  </svg>
                  <span>Получить консультацию</span>
               </a>
            </div>
            <nav class="header__menu_mobile mobile-menu">
               <ul class="mobile-menu_list">
                  <li class="mobile-menu__item"><a href="#">О компании</a></li>
                  <li class="mobile-menu__item">
                     <a href="#">Контрактное производство</a>
                     <ul class="mobile-menu__sublist">
                        <li class="mobile-menu__subitem"><a href="#">Автомобильная химия</a></li>
                        <li class="mobile-menu__subitem"><a href="#">Бытовая химия</a></li>
                        <li class="mobile-menu__subitem">
                           <a href="#">Дезинфицирующие средства</a>
                        </li>
                        <li class="mobile-menu__subitem"><a href="#">Пищевые аэрозоли</a></li>
                        <li class="mobile-menu__subitem">
                           <a href="#">Косметическая продукция</a>
                        </li>
                        <li class="mobile-menu__subitem"><a href="#">Краски аэрозольные</a></li>
                     </ul>
                  </li>
                  <li class="mobile-menu__item">
                     <a href="#">Собственные торговые марки</a>
                     <ul class="mobile-menu__sublist">
                        <li class="mobile-menu__subitem"><a href="#">Автохимия AG-Tech</a></li>
                        <li class="mobile-menu__subitem"><a href="#">Автохимия AP</a></li>
                     </ul>
                  </li>
                  <li class="mobile-menu__item"><a href="#">Новости</a></li>
                  <li class="mobile-menu__item"><a href="#">Контакты</a></li>
               </ul>
               <div class="mobile-menu__contacts">
                  <a href="tel:+74996861014" class="mobile-menu__phone">+7 (499) 686-10-14</a>
                  <div class="mobile-menu__address">г. Мосвка, Холодильный пер. 4к1с8</div>
                  <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-menu__email"
                     >a.dragunov@tdaliance.ru</a
                  >
                  <div class="mobile-menu__social">
                     <a href="#">
                        <img src="./img/icons/vk.svg" alt="vk" />
                     </a>
                     <a href="#">
                        <img src="./img/icons/inst.svg" alt="inst" />
                     </a>
                  </div>
               </div>
            </nav>
         </header>
         <main>
            <section class="about-header secondary_header">
               <div class="_container">
                  <h1 class="about-header__title title title_big">о компании</h1>
                  <ul class="about-header__breadcrumbs breadcrumbs">
                     <li class="breadcrumbs__item">
                        <a href="index.html" class="breadcrumbs__link">Главная</a>
                     </li>
                     <li class="breadcrumbs__item">О компании</li>
                  </ul>
               </div>
            </section>
            <section class="experts">
               <div class="_container">
                  <div class="experts__body">
                     <div class="experts__image">
                        <img src="img/experts/image.png" alt="experts photo" />
                     </div>
                     <div class="experts__content">
                        <h2 class="experts__title title">
                           мы - эксперты в области производства химии
                        </h2>
                        <div class="experts__text">
                           <p>
                              Разнообразный и богатый опыт говорит нам, что перспективное
                              планирование однозначно фиксирует необходимость поставленных обществом
                              задач! Есть над чем задуматься: ключевые особенности структуры проекта
                              могут быть объединены в целые кластеры себе подобных. Интерактивные
                              прототипы, которые представляют собой яркий пример
                              континентально-европейского типа политической культуры, будут описаны
                              максимально подробно. Значимость этих проблем настолько очевидна, что
                              перспективное планирование играет важную роль в формировании системы
                              массового участия.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="experts__cards cards swiper experts-slider">
                     <div class="cards__row swiper-wrapper">
                        <div class="cards__column cards__column_black swiper-slide">
                           <div class="cards__item item-cards">
                              <div class="item-cards__icon">
                                 <svg width="21px" class="clock">
                                    <use href="./img/icons/sprite.svg#clock"></use>
                                 </svg>
                              </div>
                              <div class="item-cards__text item-cards__text_black">
                                 Непрерывная работа<br />
                                 с 2017 года
                              </div>
                           </div>
                        </div>
                        <div class="cards__column cards__column_black swiper-slide">
                           <div class="cards__item item-cards">
                              <div class="item-cards__icon">
                                 <svg width="29px">
                                    <use href="./img/icons/sprite.svg#doc"></use>
                                 </svg>
                              </div>
                              <div class="item-cards__text item-cards__text_black">
                                 Вся продукция сертифицирована
                              </div>
                           </div>
                        </div>
                        <div class="cards__column cards__column_black swiper-slide">
                           <div class="cards__item item-cards">
                              <div class="item-cards__icon">
                                 <svg width="25px">
                                    <use href="./img/icons/sprite.svg#man"></use>
                                 </svg>
                              </div>
                              <div class="item-cards__text item-cards__text_black">
                                 Контроль качества на всех этапах
                              </div>
                           </div>
                        </div>
                        <div class="cards__column cards__column_black swiper-slide">
                           <div class="cards__item item-cards">
                              <div class="item-cards__icon">
                                 <svg>
                                    <use href="./img/icons/sprite.svg#car"></use>
                                 </svg>
                              </div>
                              <div class="item-cards__text item-cards__text_black">
                                 Возможны поставки по всей России
                              </div>
                           </div>
                        </div>
                        <div class="cards__column cards__column_black swiper-slide">
                           <div class="cards__item item-cards">
                              <div class="item-cards__icon">
                                 <svg>
                                    <use href="./img/icons/sprite.svg#speed"></use>
                                 </svg>
                              </div>
                              <div class="item-cards__text item-cards__text_black">
                                 Оперативное производство
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="experts-swiper-nav cards-swiper-nav">
                        <div class="experts-prev-btn">
                           <img src="img/icons/arrow_d.svg" alt="slider arrow" />
                        </div>
                        <div class="experts-next-btn">
                           <img src="img/icons/arrow_d.svg" alt="slider arrow" />
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="fabric">
               <div class="_container">
                  <div class="fabric__body">
                     <div class="fabric__content">
                        <h2 class="fabric__title title">Наше производство</h2>
                        <div class="fabric__text">
                           <p>
                              Предварительные выводы неутешительны: разбавленное изрядной долей
                              эмпатии, рациональное мышление обеспечивает широкому кругу
                              (специалистов) участие в формировании глубокомысленных рассуждений. Но
                              граница обучения кадров создаёт необходимость включения в
                              производственный план целого ряда внеочередных мероприятий с учётом
                              комплекса кластеризации усилий.
                           </p>
                           <p>
                              Реализация намеченных плановых заданий, а также свежий взгляд на
                              привычные вещи - безусловно открывает новые горизонты для
                              соответствующих условий активизации. Предварительные выводы
                              неутешительны: экономическая повестка сегодняшнего дня требует анализа
                              анализа существующих паттернов поведения.
                           </p>
                        </div>
                        <ul class="fabric__list">
                           <li class="fabric__item">
                              <img src="img/products/02.svg" alt="" />
                              Автомобильная химия
                           </li>
                           <li class="fabric__item">
                              <img src="img/products/01.svg" alt="" />
                              Бытовая химия
                           </li>
                           <li class="fabric__item">
                              <img src="img/products/03.svg" alt="" />
                              Дезинфицирующие средства
                           </li>
                           <li class="fabric__item">
                              <img src="img/products/04.svg" alt="" />
                              Пищевые аэрозоли
                           </li>
                           <li class="fabric__item">
                              <img src="img/products/05.svg" alt="" />
                              Косметические средства
                           </li>
                           <li class="fabric__item">
                              <img src="img/products/06.svg" alt="" />
                              Краски аэрозольные
                           </li>
                        </ul>
                     </div>
                     <div class="fabric__image">
                        <img src="img/fabric/img.jpeg" alt="" />
                     </div>
                  </div>
               </div>
            </section>
            <section class="founder">
               <div class="_container">
                  <div class="founder__body">
                     <div class="founder__image">
                        <img src="img/founder/main_img.jpeg" alt="founder photo" />
                     </div>
                     <div class="founder__content founder__content_about">
                        <h2 class="founder__title title">Отношение к делу и к клиентам</h2>
                        <div class="founder__text">
                           <p>
                              Кстати, интерактивные прототипы описаны максимально подробно.
                              Повседневная практика показывает, что укрепление и развитие внутренней
                              структуры говорит о возможностях соответствующих условий активизации.
                              Внезапно, независимые государства, которые представляют собой яркий
                              пример континентально-европейского типа политической культуры, будут
                              подвергнуты целой серии независимых исследований. С учётом сложившейся
                              международной обстановки, синтетическое тестирование выявляет срочную
                              потребность системы массового участия.
                           </p>
                           <p>
                              А ещё действия представителей оппозиции, превозмогая сложившуюся
                              непростую экономическую ситуацию, в равной степени предоставлены сами
                              себе. Не следует, однако, забывать, что выбранный нами инновационный
                              путь в значительной степени обусловливает важность дальнейших
                              направлений развития.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="research">
               <div class="_container">
                  <div class="research__title title">
                     Исследовательский центр Aliance production
                  </div>
                  <div class="research__body">
                     <p class="research__text">
                        Явные признаки победы институционализации рассмотрены исключительно в
                        разрезе маркетинговых и финансовых предпосылок. Приятно, граждане,
                        наблюдать, как активно развивающиеся страны третьего мира могут быть
                        ограничены исключительно образом мышления. Лишь независимые государства
                        набирают популярность среди определенных слоев населения, а значит, должны
                        быть указаны как претенденты на роль ключевых факторов. Лишь акционеры
                        крупнейших компаний могут быть призваны к ответу.
                     </p>
                     <p class="research__text">
                        С учётом сложившейся международной обстановки, синтетическое тестирование
                        требует определения и уточнения анализа существующих паттернов поведения. Не
                        следует, однако, забывать, что высокотехнологичная концепция общественного
                        уклада представляет собой интересный эксперимент проверки как
                        самодостаточных, так и внешне зависимых концептуальных решений.
                        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии,
                        рациональное мышление однозначно фиксирует необходимость стандартных
                        подходов.
                     </p>
                  </div>
               </div>
               <div class="research__swiper swiper-research swiper">
                  <div class="swiper-research__body swiper-wrapper">
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_01.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_02.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_01.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_02.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_01.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="swiper-research__column swiper-slide">
                        <div class="swiper-research__item item-research">
                           <div class="item-research_bg">
                              <img src="img/blog/slide_02.jpeg" alt="" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="_container">
                     <div class="swiper-research__footer">
                        <div class="swiper-research__nav blue-btn-nav">
                           <div class="swiper-research__btn_p blue-btn-nav_prev">
                              <img src="./img/icons/arrow.svg" alt="slider arrow" />
                           </div>
                           <div class="swiper-research__btn_n blue-btn-nav_next">
                              <img src="./img/icons/arrow.svg" alt="slider arrow" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="products">
               <div class="_container">
                  <div class="products__body">
                     <div class="products__content">
                        <h2 class="products__title title">
                           Производим аэрозольную продукцию для разных сфер
                        </h2>
                        <ul class="products__list">
                           <li class="products__item">
                              <img src="img/products/01.svg" alt="" />
                              Химические производства
                           </li>
                           <li class="products__item">
                              <img src="img/products/02.svg" alt="" />
                              Автомойки
                           </li>
                           <li class="products__item">
                              <img src="img/products/03.svg" alt="" />
                              Пищевая продукция
                           </li>
                           <li class="products__item">
                              <img src="img/products/04.svg" alt="" />
                              Лаки и краски
                           </li>
                           <li class="products__item">
                              <img src="img/products/05.svg" alt="" />
                              Косметические средства
                           </li>
                           <li class="products__item">
                              <img src="img/products/06.svg" alt="" />
                              Автомобильная косметика
                           </li>
                           <li class="products__item">
                              <img src="img/products/07.svg" alt="" />
                              Косметика по уходу за одеждой
                           </li>
                           <li class="products__item">
                              <img src="img/products/08.svg" alt="" />
                              Косметика по уходу за обувью
                           </li>
                           <li class="products__item">
                              <img src="img/products/09.svg" alt="" />
                              Строительные материалы
                           </li>
                           <li class="products__item">
                              <img src="img/products/10.svg" alt="" />
                              И многих других
                           </li>
                        </ul>
                     </div>
                     <div class="products__brands brands-product">
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                        <div class="brands-product__item">
                           <img src="img/products/bk_logo.svg" alt="" />
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="cooperation">
               <div class="_container">
                  <img class="cooperation__image" src="img/cooperation/img_01.png" alt="" />
                  <div class="cooperation__body">
                     <h2 class="cooperation__title">Хотите сотрудничать?</h2>
                     <div class="cooperation__text">
                        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит
                        на все интересующие вопросы и поможем даже в самых сложных случаях!
                     </div>
                     <form action="handler.php" method='POST' class="cooperation__form form-cooperation">
                        <div class="form-cooperation__input-group">
                           <div class="form-cooperation__input">
                              <input
                                 class="input"
                                 id="input-name"
                                 type="text"
                                 name="username"
                                 placeholder=" " />
                              <label class="label" for="input-name">Имя</label>
                           </div>
                           <div class="form-cooperation__input">
                              <input
                                 class="input"
                                 id="input-tel"
                                 type="tel"
                                 name="usertel"
                                 placeholder=" " />
                              <label class="label" for="input-tel">Номер телефона</label>
                           </div>
                        </div>
                        <div class="form-cooperation__footer">
                           <button  class="form-cooperation__btn btn">
                              Отправить заявку
                           </button>
                           <div class="form-cooperation__notify">
                              Обращаясь к нам вы получаете не только профессиональную работу, но и
                              абсолютную конфиденциальность информации!
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
            <section class="modals">
               <div class="modals__popup popup popup_contact modal">
                  <div class="popup__content modal-dialog">
                     <div class="popup__body">
                        <div class="popup-top">
                           <div data-toggle="modal" class="popup__close">
                              <img class="popup__close-img" src="img/icons/close.png" alt="" />
                           </div>
                           <h3>Есть вопросы?</h3>
                           <p>
                              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
                              ответит на все интересующие вопросы и поможем даже в самых сложных
                              случаях!
                           </p>
                        </div>
                        <div class="popup-bottom">
                           <form action="handler.php" method='POST' class="popup-top__form form-popup">
                              <div class="form-popup__input-group">
                                 <div class="form-popup__input">
                                    <input
                                       class="input"
                                       id="input-name_2"
                                       type="text"
                                       name="username"
                                       placeholder=" " />
                                    <label class="label" for="input-name_2">Имя</label>
                                 </div>
                                 <div class="form-popup__input">
                                    <input
                                       class="input"
                                       id="input-tel_2"
                                       type="tel"
                                       name="usertel"
                                       placeholder=" " />
                                    <label class="label" for="input-tel_2">Номер телефона</label>
                                 </div>
                              </div>
                              <div class="form-popup__footer">
                                 <button class="form-popup__btn btn" type="submit">
                                    Отправить заявку
                                 </button>
                                 <div class="form-popup__notify">
                                    Обращаясь к нам вы получаете не только профессиональную работу,
                                    но и абсолютную конфиденциальность информации!
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modals__popup popup popup_thanks modal-thx">
                  <div class="popup__content modal-thx-dialog">
                     <div class="popup__body">
                        <div class="popup-top">
                           <div data-toggle="modal-thx" class="popup__close">
                              <img class="popup__close-img" src="img/icons/close.png" alt="" />
                           </div>
                           <img class="popup-thx-img" src="img/modals/thanks.svg" alt="" />
                           <h3>Спасибо за заявку!</h3>
                           <p>
                              Наш менеджер свяжется с Вами в ближайшее время ответит на все
                              интересующие вопросы и поможем даже в самых сложных случаях!
                           </p>
                        </div>
                        <div class="popup-bottom">
                           <a href="index.php" class="form-popup__btn btn">
                              Вернуться на главную
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </main>
         <?php include_once('./footer.php') ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="./js/script.js"></script>
   </body>
</html>
