<!DOCTYPE html>
<html lang='ru'>
	<?php 
		$extra_styles = '<link rel="stylesheet" href="./css/contracts.css" /> <link rel="stylesheet" href="./css/about.css" /> <link rel="stylesheet" href="./css/autohim.css" /> <link rel="stylesheet" href="./css/distributor.css" />'; 
		$head_subtitle = 'Автохимия AG-Tech'; 
		include_once('./template_parts/head.php');
	?>
	<body>
		<div class="wrapper">
			<?php 
				$general_header_style = 'dark';
				$main_logo_path = './img/icons/sprite.svg#main_logo_d';
				include_once('./template_parts/header.php');
			?>
			<main>
				<?php 
					$subheader_name = 'contracts-header';
					$page_subheader_title = 'contracts-header__title';
					$subheader_title_content = 'Автохимия AG-Tech';
					$page_subheader_breadcrumbs = 'contracts-header__breadcrumbs';
					$breadcrumbs_extra_link = './trademarks.php';
					$extra_link_content = 'Собственные торговые марки';
					$subheader_img = './img/secondary-header/avto-him.webp';
					include_once('./template_parts/subheader.php');
				?>
				<?php 
					$founder_img_class = 'founder__image_por';
					$founder_img = './img/brands/production-autohim.webp';
					$founder_title = 'Собственное производство автохимия AG-Tech';
					$founder_par = 'Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.';
					$founder_par2 = 'Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.';
					include_once('./template_parts/founder.php') 
				?>
				<div class="_container">
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
				<?php include_once('./template_parts/distributor.php') ?>
				<?php include_once('./template_parts/research.php') ?>
				<?php include_once('./template_parts/work-scheme.php'); ?>
				<?php include_once('./template_parts/products.php') ?>
				<?php include_once('./template_parts/cooperation.php') ?>
				<?php include_once('./template_parts/modals.php') ?>
			</main>
			<?php include_once('./template_parts/footer.php') ?>
		</div>
	</body>
</html>