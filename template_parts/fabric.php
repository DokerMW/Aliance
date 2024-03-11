<section class="fabric">
	<div class="_container">
		<div class="fabric__body">
			<div class="fabric__content">
				<h2 class="fabric__title title"><?php echo $fabric_title ?></h2>
				<div class="fabric__text">
					<?php 
						echo '<p>' . $fabric__par . '</p>';
						if(!empty($fabric__par2)){
							echo '<p>' . $fabric__par2 . '</p>';
						}
					?>
				</div>
				<ul class="fabric__list">
					<li class="fabric__item">
						<img src="img/products/02.svg" alt="products icon" >
						Автомобильная химия
					</li>
					<li class="fabric__item">
						<img src="img/products/01.svg" alt="products icon" >
						Бытовая химия
					</li>
					<li class="fabric__item">
						<img src="img/products/03.svg" alt="products icon" >
						Дезинфицирующие средства
					</li>
					<li class="fabric__item">
						<img src="img/products/04.svg" alt="products icon" >
						Пищевые аэрозоли
					</li>
					<li class="fabric__item">
						<img src="img/products/05.svg" alt="products icon" >
						Косметическая продукция
					</li>
					<li class="fabric__item">
						<img src="img/products/06.svg" alt="products icon" >
						Краски аэрозольные
					</li>
					<li class="fabric__item fabric__item_extra" style="display:none;">
						<img src="img/products/01.svg" alt="products icon" >
						Актуальные цены
					</li>
					<li class="fabric__item fabric__item_extra" style="display:none;">
						<img src="img/products/02.svg" alt="products icon" >
						Лаки и краски
					</li>
				</ul>
			</div>
			<div class="fabric__image">
				<?php echo '<picture><source srcset="' . $fabric_img_webp . '" type="image/webp" >
		<source srcset="' . $fabric_img_jpeg . '" type="image/jpeg" >
		<img src="' . $fabric_img_jpeg . '" alt="fabric photo" ></picture>'; ?>
			</div>
		</div>
	</div>
</section>