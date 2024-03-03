<section class="brands">
	<div class="_container">
		<?php 
			if(!empty($brands_title)) {
				echo '<h2 class="brands__title title">' . $brands_title . '</h2>';
			} 
		?>
		<div class="brands__row">
			<a href="./autohim_ag.php" class="brands__item item-brand">
				<div class="item-brand__logo">
					<svg>
						<use href="./img/icons/sprite.svg#brand_01"></use>
					</svg>
				</div>
				<h3 class="item-brand__title">Автохимия AG-Tech</h3>
				<div class="item-brand__text">
					Для современного мира разбавленное изрядной долей эмпатии, рациональное
					мышление создаёт предпосылки для поставленных обществом задач.
				</div>
			</a>
			<a href="./autohim_ap.php" class="brands__item item-brand">
				<div class="item-brand__logo">
					<svg>
						<use href="./img/icons/sprite.svg#brand_02"></use>
					</svg>
				</div>
				<h3 class="item-brand__title">Автохимия AP</h3>
				<div class="item-brand__text">
					Для современного мира разбавленное изрядной долей эмпатии, рациональное
					мышление создаёт предпосылки для поставленных обществом задач.
				</div>
			</a>
		</div>
	</div>
</section>