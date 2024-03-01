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
									<?php $general_name = 'experts__cards';
												$container_name = 'experts-slider';
												$border_color = 'cards__column_black';
												$text_color = 'item-cards__text_black';
												$btn_cnt_class = 'experts-swiper-nav';
												$btn_prev = 'experts-prev-btn';
												$btn_next = 'experts-next-btn';
												$arrows_path = 'img/icons/arrow_d.svg';
												include_once('./template_parts/swiper_cards.php'); ?>
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
						<?php $founder__content_class = 'founder__content_about'; include_once('./template_parts/founder.php') ?>
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
						<?php include_once('./template_parts/products.php') ?>
						<?php include_once('./template_parts/cooperation.php') ?>
						<?php include_once('./template_parts/modals.php') ?>
         </main>
				 <?php include_once('./template_parts/footer.php') ?>
      </div>
			<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
			<script src="./js/inputmask.min.js"></script>
			<script src="./js/just-validate.production.min.js"></script>
      <script src="./js/script.js"></script>
   </body>
</html>
