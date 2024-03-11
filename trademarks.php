<!DOCTYPE html>
<html lang="ru">
<?php 
	$extra_styles = '<link rel="stylesheet" href="./css/about.css" > <link rel="stylesheet" href="./css/contracts.css" > <link rel="stylesheet" href="./css/trademarks.css" >'; 
	$head_subtitle = 'Собственные торговые марки'; 
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
					$subheader_title_content = 'Собственные торговые марки';
					$page_subheader_breadcrumbs = 'about-header__breadcrumbs';
					include_once('./template_parts/subheader.php');
				?>
				<?php 
					include_once('./template_parts/brands.php') 
				?>
				<?php include_once('./template_parts/cooperation.php') ?>
				<?php include_once('./template_parts/modals.php') ?>
			</main>
			<?php include_once('./template_parts/footer.php') ?>
		</div>
	</body>
</html>
