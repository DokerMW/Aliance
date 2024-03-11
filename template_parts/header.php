<header class="header 
	<?php echo $general_header_style ?>">
	<div class="header__row">
		<div class="header__burger burger-menu">
			<div class="burger-menu__icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a class="header__logo" href="./">
			<svg class="header__img">
				<use href="<?php echo $main_logo_path ?>"></use>
			</svg>
		</a>
		<nav class="header__menu menu">
			<ul class="menu__list">
				<li class="menu__item"><a href="about.php">О компании</a></li>
				<li class="menu__item"><a href="contracts.php">Контрактное производство</a></li>
				<li class="menu__item"><a href="trademarks.php">Собственные торговые марки</a></li>
				<li class="menu__item"><a href="news.php">Новости</a></li>
				<li class="menu__item"><a href="contacts.php">Контакты</a></li>
			</ul>
		</nav>
		<div class="header__phone">
			<a class="header__phone-link" href="tel:+74996861014">
				<svg class="header__phone_img">
					<use href="./img/icons/sprite.svg#phone"></use>
				</svg>
				+7 (499) 686-10-14
			</a>
		</div>
		<a href="#contact" data-toggle="modal" class="header__btn btn">
			<svg class="header__phone_img">
				<use href="./img/icons/sprite.svg#phone"></use>
			</svg>
			<span>Получить консультацию</span>
		</a>
	</div>
	<nav class="header__menu_mobile mobile-menu">
		<ul class="mobile-menu_list">
			<li class="mobile-menu__item"><a href="./about.php">О компании</a></li>
			<li class="mobile-menu__item">
				<a href="./contracts.php">Контрактное производство</a>
				<ul class="mobile-menu__sublist">
					<li class="mobile-menu__subitem"><a href="./autohim.php">Автомобильная химия</a></li>
					<li class="mobile-menu__subitem"><a href="./chemicals.php">Бытовая химия</a></li>
					<li class="mobile-menu__subitem">
						<a href="./disinfection.php">Дезинфицирующие средства</a>
					</li>
					<li class="mobile-menu__subitem"><a href="./aerosol.php">Пищевые аэрозоли</a></li>
					<li class="mobile-menu__subitem">
						<a href="./cosmetics.php">Косметическая продукция</a>
					</li>
					<li class="mobile-menu__subitem"><a href="./paints.php">Краски аэрозольные</a></li>
				</ul>
			</li>
			<li class="mobile-menu__item">
				<a href="./trademarks.php">Собственные торговые марки</a>
				<ul class="mobile-menu__sublist">
					<li class="mobile-menu__subitem"><a href="./autohim_ag.php">Автохимия AG-Tech</a></li>
					<li class="mobile-menu__subitem"><a href="./autohim_ap.php">Автохимия AP</a></li>
				</ul>
			</li>
			<li class="mobile-menu__item"><a href="./hews.php">Новости</a></li>
			<li class="mobile-menu__item"><a href="./contacts.php">Контакты</a></li>
		</ul>
		<div class="mobile-menu__contacts">
			<a href="tel:+74996861014" class="mobile-menu__phone">+7 (499) 686-10-14</a>
			<div class="mobile-menu__address">г. Мосвка, Холодильный пер. 4к1с8</div>
			<a href="mailto:a.dragunov@tdaliance.ru" class="mobile-menu__email">
				a.dragunov@tdaliance.ru
			</a>
			<div class="mobile-menu__social">
				<a href="#">
					<img src="./img/icons/vk.svg" alt="vk" >
				</a>
				<a href="#">
					<img src="./img/icons/inst.svg" alt="inst" >
				</a>
			</div>
		</div>
	</nav>
</header>