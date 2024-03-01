<!DOCTYPE html>
<html lang="ru">
	<?php include_once('./template_parts/head.php'); ?>
	<body>
		<div class="wrapper">
			<?php 
				$main_logo_path = './img/icons/sprite.svg#main_logo_l';
				include_once('./template_parts/header.php');
			?>
			<main>
				<section class="main-block">
					<div class="main-block__body">
						<h1 class="main-block__title">
							Комплексное обеспечение товарами и расходными материалами бизнеса
						</h1>
						<p class="main-block__text">
							Высокий уровень вовлечения представителей целевой аудитории является четким
							доказательством простого факта: высококачественный прототип будущего проекта
							напрямую зависит от анализа существующих паттернов поведения.
						</p>
						<button data-toggle="modal" class="main-block__btn btn">
							Подробнее о компании
						</button>
						<?php 
							$general_name = 'main-block__cards';
							$container_name = 'features-slider';
							$btn_cnt_class = 'features-swiper-nav';
							$btn_prev = 'features-prev-btn';
							$btn_next = 'features-next-btn';
							$arrows_path = './img/icons/arrow.svg';
							include_once('./template_parts/swiper_cards.php'); 
						?>
					</div>
				</section>
				<section class="work-scheme">
					<div class="_container">
						<h2 class="work-scheme__title title">схема работы</h2>
						<div class="swiper scheme-slider">
							<div class="work-scheme__row swiper-wrapper">
								<div class="work-scheme__column swiper-slide">
									<div class="work-scheme__item item-scheme">
										<div class="item-scheme__number">01</div>
										<h3 class="item-scheme__title">Знакомство</h3>
										<p class="item-scheme__text">
											Безусловно, сплочённость команды профессионалов позволяет оценить
											значение форм воздействия.
										</p>
										<div class="item-scheme__link">
											<a href="#" data-toggle="modal" class="link">Оставить заявку</a>
										</div>
									</div>
								</div>
								<div class="work-scheme__column swiper-slide">
									<div class="work-scheme__item item-scheme">
										<div class="item-scheme__number">02</div>
										<h3 class="item-scheme__title">Заключение договора</h3>
										<p class="item-scheme__text">
											Лишь интерактивные прототипы<br />
											призваны к ответу.
										</p>
									</div>
								</div>
								<div class="work-scheme__column swiper-slide">
									<div class="work-scheme__item item-scheme">
										<div class="item-scheme__number">03</div>
										<h3 class="item-scheme__title">Производство</h3>
										<p class="item-scheme__text">
											А также стремящиеся вытеснить традиционное производство,
											нанотехнологии функционально разнесены на независимые элементы.
										</p>
									</div>
								</div>
								<div class="work-scheme__column swiper-slide">
									<div class="work-scheme__item item-scheme">
										<div class="item-scheme__number">04</div>
										<h3 class="item-scheme__title">Доставка</h3>
										<p class="item-scheme__text">
											В частности, экономическая повестка сегодняшнего дня говорит о
											возможностях приоритизации разума над эмоциями.
										</p>
									</div>
								</div>
							</div>
							<div class="scheme-swiper-nav blue-btn-nav">
								<div class="scheme-prev-btn blue-btn-nav_prev">
									<img src="./img/icons/arrow.svg" alt="slider arrow" />
								</div>
								<div class="scheme-next-btn blue-btn-nav_next">
									<img src="./img/icons/arrow.svg" alt="slider arrow" />
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="production">
					<div class="_container">
						<h2 class="production__title title">Контрактное производство</h2>
						<div class="production__body">
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Автомобильная химия</h3>
										<div class="item-production__text">
											Безусловно, сплочённость команды профессионалов позволяет оценить
											значение форм воздействия.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_01.png" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Бытовая химия</h3>
										<div class="item-production__text">
											А также стремящиеся вытеснить традиционное производство,
											нанотехнологии функционально разнесены на независимые элементы.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_02.png" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Дезинфицирующие средства</h3>
										<div class="item-production__text">
											Лишь интерактивные прототипы призваны к ответу.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_03.png" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Пищевые аэрозоли</h3>
										<div class="item-production__text">
											Безусловно, сплочённость команды профессионалов позволяет оценить
											значение форм воздействия.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_03.png" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Косметическая продукция</h3>
										<div class="item-production__text">
											Лишь интерактивные прототипы призваны к ответу.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_01.png" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="production__column">
								<div class="production__item item-production">
									<div class="item-production__body">
										<h3 class="item-production__title">Краски аэрозольные</h3>
										<div class="item-production__text">
											А также стремящиеся вытеснить традиционное производство,
											нанотехнологии функционально разнесены на независимые элементы.
										</div>
									</div>
									<div class="item-production__img">
										<img src="./img/prod/img_02.png" alt="" />
									</div>
								</div>
							</a>
						</div>
					</div>
				</section>
				<section class="brands">
					<div class="_container">
						<h2 class="brands__title title">собственные <span>торговые</span> марки</h2>
						<div class="brands__row">
							<a href="#" class="brands__item item-brand">
								<div class="item-brand__logo">
									<svg>
										<use href="./img/icons/sprite.svg#brand_01"></use>
									</svg>
								</div>
								<h3 class="item-brand__title">Автохимия AG-Tech</h3>
								<div class="item-brand__text">
									Для современного мира разбавленное изрядной долей эмпатии, рациональное
									мышление создаёт предпосылки для поставленных обществом задач.
								</div>
							</a>
							<a href="#" class="brands__item item-brand">
								<div class="item-brand__logo">
									<svg>
										<use href="./img/icons/sprite.svg#brand_02"></use>
									</svg>
								</div>
								<h3 class="item-brand__title">Автохимия AP</h3>
								<div class="item-brand__text">
									Для современного мира разбавленное изрядной долей эмпатии, рациональное
									мышление создаёт предпосылки для поставленных обществом задач.
								</div>
							</a>
						</div>
					</div>
				</section>
				<?php $founder_link = 'Подробнее о компании'; include_once('./template_parts/founder.php') ?>
				<?php include_once('./template_parts/products.php') ?>
				<section class="blog">
					<div class="_container">
						<h2 class="blog__title title">Блог экспертов в области производства</h2>
						<div class="blog__swiper swiper-blog swiper">
							<div class="blog__body swiper-blog__body swiper-wrapper">
								<div class="blog__column swiper-slide">
									<div class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_01.jpeg" alt="" />
										</div>
										<div class="item-blog__content">
											<h3 class="item-blog__title">
												Современная методология разработки одухотворила всех причастных
											</h3>
											<div class="item-blog__text">
												Действия представителей оппозиции, превозмогая сложившуюся
												непростую экономическую ситуацию, в равной степени
												предоставлены...
											</div>
										</div>
									</div>
								</div>
								<div class="blog__column swiper-slide">
									<div class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_02.jpeg" alt="" />
										</div>
										<div class="item-blog__content">
											<h3 class="item-blog__title">
												Сложно сказать, почему жизнь прекрасна
											</h3>
											<div class="item-blog__text">
												Сложно сказать, почему элементы политического процесса
												функционально разнесены на независимые элементы. Безусловно,
												высокотехнологичная...
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-blog__footer">
								<a href="#" class="swiper-blog__link link">Весь блог</a>
								<div class="swiper-blog__nav blue-btn-nav">
									<div class="swiper-blog__btn_p blue-btn-nav_prev">
										<img src="./img/icons/arrow.svg" alt="slider arrow" />
									</div>
									<div class="swiper-blog__btn_n blue-btn-nav_next">
										<img src="./img/icons/arrow.svg" alt="slider arrow" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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
