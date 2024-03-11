<div class="<?php echo $general_name ?> cards swiper <?php echo $container_name ?>">
	<div class="cards__row swiper-wrapper">
		<div class="cards__column <?php echo $border_color ?> swiper-slide">
			<div class="cards__item item-cards">
				<div class="item-cards__icon">
					<svg width="21px" class="clock">
						<use href="./img/icons/sprite.svg#clock"></use>
					</svg>
				</div>
				<div class="item-cards__text <?php echo $text_color ?>">
					Непрерывная работа<br >
					с 2017 года
				</div>
			</div>
		</div>
		<div class="cards__column <?php echo $border_color ?> swiper-slide">
			<div class="cards__item item-cards">
				<div class="item-cards__icon">
					<svg width="29px">
						<use href="./img/icons/sprite.svg#doc"></use>
					</svg>
				</div>
				<div class="item-cards__text <?php echo $text_color ?>">Вся продукция сертифицирована</div>
			</div>
		</div>
		<div class="cards__column <?php echo $border_color ?> swiper-slide">
			<div class="cards__item item-cards">
				<div class="item-cards__icon">
					<svg width="25px">
						<use href="./img/icons/sprite.svg#man"></use>
					</svg>
				</div>
				<div class="item-cards__text <?php echo $text_color ?>">Контроль качества на всех этапах</div>
			</div>
		</div>
		<div class="cards__column <?php echo $border_color ?> swiper-slide">
			<div class="cards__item item-cards">
				<div class="item-cards__icon">
					<svg>
						<use href="./img/icons/sprite.svg#car"></use>
					</svg>
				</div>
				<div class="item-cards__text <?php echo $text_color ?>">Возможны поставки по всей России</div>
			</div>
		</div>
		<div class="cards__column <?php echo $border_color ?> swiper-slide">
			<div class="cards__item item-cards">
				<div class="item-cards__icon">
					<svg>
						<use href="./img/icons/sprite.svg#speed"></use>
					</svg>
				</div>
				<div class="item-cards__text <?php echo $text_color ?>">Оперативное производство</div>
			</div>
		</div>
	</div>
	<div class="<?php echo $btn_cnt_class ?> cards-swiper-nav">
		<div class="<?php echo $btn_prev?>">
			<img src="<?php echo $arrows_path ?>" alt="slider arrow" >
		</div>
		<div class="<?php echo $btn_next?>">
			<img src="<?php echo $arrows_path ?>" alt="slider arrow" >
		</div>
	</div>
</div>