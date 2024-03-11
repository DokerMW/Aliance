<section class="founder">
	<div class="_container">
		<div class="founder__body">
			<div class="founder__image <?php echo $founder_img_class ?>">
			<?php echo '<picture><source srcset="' . $founder_img_webp . '" type="image/webp" >
		<source srcset="' . $founder_img_jpeg . '" type="image/jpeg" >
		<img src="' . $founder_img_jpeg . '" alt="" ></picture>'; ?>
			</div>
			<div class="founder__content <?php echo $founder__content_class ?>">
				<h2 class="founder__title title"><?php echo $founder_title ?></h2>
				<div class="founder__text">
					<?php echo '<p>' . $founder_par . '</p>'?>
					<?php 
						if(!empty($founder_par2)){
							echo '<p>' . $founder_par2 . '</p>';
						} 
					?>
				</div>
				<?php if(!empty($founder_link)){echo '<a href="./about.php" class="founder__link link">'. $founder_link .'</a>';}?>
			</div>
		</div>
	</div>
</section>