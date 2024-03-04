<!DOCTYPE html>
<html lang="ru">
<?php 
	$extra_styles = '<link rel="stylesheet" href="./css/about.css" />'; 
	$head_subtitle = 'О Компании'; 
	include_once('./template_parts/head.php');
?>
	<body>
		<div class="wrapper">
			<?php $general_header_style = 'dark';
				$main_logo_path = './img/icons/sprite.svg#main_logo_d';
				include_once('./template_parts/header.php');
			?>
			<main>
				<?php $subheader_name = 'about-header';
					$page_subheader_title = 'about-header__title';
					$subheader_title_content = 'О Компании';
					$page_subheader_breadcrumbs = 'about-header__breadcrumbs';
					include_once('./template_parts/subheader.php');
				?>
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
						<?php 
							$general_name = 'experts__cards';
							$container_name = 'experts-slider';
							$border_color = 'cards__column_black';
							$text_color = 'item-cards__text_black';
							$btn_cnt_class = 'experts-swiper-nav';
							$btn_prev = 'experts-prev-btn';
							$btn_next = 'experts-next-btn';
							$arrows_path = 'img/icons/arrow_d.svg';
							include_once('./template_parts/swiper_cards.php'); 
						?>
					</div>
				</section>
				<?php 
					$fabric_title = 'Наше производство';
					$fabric__par = 'Предварительные выводы неутешительны: разбавленное изрядной долей
					эмпатии, рациональное мышление обеспечивает широкому кругу
					(специалистов) участие в формировании глубокомысленных рассуждений. Но
					граница обучения кадров создаёт необходимость включения в
					производственный план целого ряда внеочередных мероприятий с учётом
					комплекса кластеризации усилий.';
					$fabric__par2 = 'Реализация намеченных плановых заданий, а также свежий взгляд на
					привычные вещи - безусловно открывает новые горизонты для
					соответствующих условий активизации. Предварительные выводы
					неутешительны: экономическая повестка сегодняшнего дня требует анализа
					анализа существующих паттернов поведения.';
					$fabric_img = 'img/fabric/img.jpeg';
					include_once('./template_parts/fabric.php');
				?>
				<?php 
					$founder_img = './img/founder/main_img.jpeg';
					$founder_title = 'Отношение к делу и к клиентам';
					$founder_par = 'Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.';
					$founder_par2 = 'А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.';
					include_once('./template_parts/founder.php') 
				?>
				<?php include_once('./template_parts/research.php') ?>
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
