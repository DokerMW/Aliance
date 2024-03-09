<!DOCTYPE html>
<html lang="ru">
<?php 
	$extra_styles = '<link rel="stylesheet" href="./css/about.css" /> <link rel="stylesheet" href="./css/contracts.css" /> <link rel="stylesheet" href="./css/contacts.css" />'; 
	$head_subtitle = 'Контакты'; 
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
					$page_subheader_title = 'about-header__title';
					$subheader_title_content = 'Контакты';
					$page_subheader_breadcrumbs = 'about-header__breadcrumbs';
					include_once('./template_parts/subheader.php');
				?>
				<div class="contacts__top top-contacts">
					<div class="top-contacts__container _container">
						<a href="tel:+74996861014" class="top-contacts__tel">+7 (555) 686-10-14</a>
						<div class="top-contacts__info">
							<div class="top-contacts__address">г. Мосвка, Холодильный пер. 4к1с8</div>
							<a href="mailto:a.dragunov@tdaliance.ru" class="top-contacts__email">
								a.dragunov@tdaliance.ru
							</a>
						</div>
						<div class="top-contacts__social">
							<div  class="top-contacts__social_item"><img src="img/icons/vk.svg" alt="" /></div>
							<div  class="top-contacts__social_item"><img src="img/icons/inst.svg" alt="" /></div>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="_container">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac48714a7e34dc26dbe791c93fb08da527b26cc1eb1550324a80417b61d20d2b7&amp;source=constructor"  height="600"></iframe>
					</div>
				</div>
				<?php include_once('./template_parts/cooperation.php') ?>
				<?php include_once('./template_parts/modals.php') ?>
			</main>
			<?php include_once('./template_parts/footer.php') ?>
		</div>
	</body>
</html>
