<section class="cooperation">
	<div class="_container">
		<picture class="cooperation__image">
			<source srcset="img/cooperation/img_01.webp" type="image/webp" >
			<source srcset="img/cooperation/img_01.png" type="image/png" >
			<img src="img/cooperation/img_01.png" alt="" >
		</picture>
		<div class="cooperation__body">
			<h2 class="cooperation__title">Хотите сотрудничать?</h2>
			<div class="cooperation__text"></div>
				Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит
				на все интересующие вопросы и поможем даже в самых сложных случаях!
			</div>
			<form action="handler.php" method='POST' class="cooperation__form form-cooperation">
				<div class="form-cooperation__input-group">
					<div class="form-cooperation__input">
						<input
							class="input"
							id="input-name"
							type="text"
							name="username"
							placeholder=" " >
						<label class="label" for="input-name">Имя</label>
					</div>
					<div class="form-cooperation__input">
						<input
							class="input _phone"
							id="input-tel"
							type="tel"
							name="usertel"
							placeholder=" " >
						<label class="label" for="input-tel">Номер телефона</label>
					</div>
				</div>
				<div class="form-cooperation__footer">
					<button class="form-cooperation__btn btn">
						Отправить заявку
					</button>
					<div class="form-cooperation__notify">
						Обращаясь к нам вы получаете не только профессиональную работу, но и
						абсолютную конфиденциальность информации!
					</div>
				</div>
			</form>
		</div>
	</div>
</section>