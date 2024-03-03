<!DOCTYPE html>
<html lang="ru">
<?php 
	$extra_styles = '<link rel="stylesheet" href="./css/about.css" /> <link rel="stylesheet" href="./css/contracts.css" /> <link rel="stylesheet" href="./css/blog.css" /> '; 
	$head_subtitle = 'Блог'; 
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
					$subheader_title_content = 'Блог';
					$page_subheader_breadcrumbs = 'about-header__breadcrumbs';
					include_once('./template_parts/subheader.php');
				?>
				<?php 
					$blog_slider_class = 'main-blog';
					include_once('./template_parts/blog.php') 
				?>
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
