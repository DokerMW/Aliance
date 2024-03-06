<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="./css/style.css" />
	<?php echo $extra_styles ?>
	<script src="./js/swiper-bundle.min.js" defer></script>
	<script src="./js/inputmask.min.js" defer></script>
	<script src="./js/just-validate.production.min.js" defer></script>
	<script src="./js/modernizr.js" defer></script>
	<script src="./js/script.js" defer></script>
	<title>
		<?php 
			if(!empty($head_subtitle)){
			echo $head_subtitle . ' - '; } 
		?>
		Aliance Production
	</title>
</head>