<!DOCTYPE html>
<html lang='ru'>
	<?php 
		$extra_styles = '<link rel="stylesheet" href="./css/contracts.css" />'; 
		$head_subtitle = 'Контрактное производство'; 
		include_once('./template_parts/head.php');
	?>
	<body>
		<div class="wrapper">
			<?php $general_header_style = 'dark';
				$main_logo_path = './img/icons/sprite.svg#main_logo_d';
				include_once('./template_parts/header.php');
			?>
			<main>
				<?php $subheader_name = 'contracts-header';
					$page_subheader_title = 'contracts-header__title';
					$subheader_title_content = 'Контрактное производство';
					$page_subheader_breadcrumbs = 'contracts-header__breadcrumbs';
					include_once('./template_parts/subheader.php');
				?>
				<?php include_once('./template_parts/production.php') ?>
				<section class="seo">
					<div class="_container">
						<h2 class="seo__title">SEO Заголовок</h2>
						<div class="seo__body">
							<p>
								Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...
							</p>
						</div>
						<a href="./about.php" class="seo__link link">Читать больше</a>
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