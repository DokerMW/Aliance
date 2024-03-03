<section class="<?php echo $subheader_name ?> secondary_header">
	<div class="_container">
		<div class="subheader-wrapper">
			<h1 class="<?php echo $page_subheader_title ?> title title_big"><?php echo $subheader_title_content ?></h1>
			<ul class="<?php echo $page_subheader_breadcrumbs ?> breadcrumbs">
				<li class="breadcrumbs__item">
					<a href="index.php" class="breadcrumbs__link">Главная</a>
				</li>
				<?php 
						if(!empty($breadcrumbs_extra_link && $extra_link_content)){
							echo '<li class="breadcrumbs__item">
							<a href="' . $breadcrumbs_extra_link . '" class="breadcrumbs__link">' . $extra_link_content . '</a>
							</li>';
						}
					?>
				<li class="breadcrumbs__item"><?php echo $subheader_title_content ?></li>
			</ul>
			<?php 
				if(!empty($subheader_img)){
					echo '<img class="subheader-img" src="' . $subheader_img . '" alt="">';
				}
			?>
		</div>
	</div>
</section>

					