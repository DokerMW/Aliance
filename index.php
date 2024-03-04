<!DOCTYPE html>
<html lang="ru">
	<?php include_once('./template_parts/head.php'); ?>
	<body>
		<div class="wrapper">
			<?php 
				$general_header_style = 'main-header';
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
				<?php include_once('./template_parts/work-scheme.php'); ?>
				<?php 
					$production_title = 'Контрактное производство';
					include_once('./template_parts/production.php') 
				?>
				<?php 
					$brands_title = 'собственные торговые марки';
					include_once('./template_parts/brands.php') 
				?>
				<?php 
					$founder_link = 'Подробнее о компании'; 
					$founder_img = './img/founder/main_img.webp';
					$founder_title = 'Отношение к делу и к клиентам';
					$founder_par = 'Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.';
					$founder_par2 = 'А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.';
					include_once('./template_parts/founder.php') 
				?>
				<?php include_once('./template_parts/products.php') ?>
				<?php 
					$blog_title = 'Блог экспертов в области производства';
					$blog_slider_class = 'swiper-blog';
					include_once('./template_parts/blog.php') 
				?>
				<!-- <section class="blog">
					<div class="_container">
						<h2 class="blog__title title">Блог экспертов в области производства</h2>
						<div class="blog__swiper swiper-blog swiper">
							<div class="blog__body swiper-blog__body swiper-wrapper">
								<div class="blog__column swiper-slide">
									<a href="./blog.php" class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_01.webp" alt="" />
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
									</a>
								</div>
								<div class="blog__column swiper-slide">
									<a href="./blog.php" class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_02.webp" alt="" />
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
									</a>
								</div>
								<div class="blog__column swiper-slide">
									<a href="./blog.php" class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_01.webp" alt="" />
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
									</a>
								</div>
								<div class="blog__column swiper-slide">
									<a href="./blog.php" class="blog__item item-blog">
										<div class="item-blog_bg">
											<img src="img/blog/slide_02.webp" alt="" />
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
									</a>
								</div>
							</div>
							<div class="swiper-blog__footer">
								<a href="./blog.php" class="swiper-blog__link link">Весь блог</a>
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
				</section> -->
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
