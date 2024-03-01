<section class="modals">
	<div class="modals__popup popup popup_contact modal">
		<div class="popup__content modal-dialog">
			<div class="popup__body">
				<div class="popup-top">
					<div data-toggle="modal" class="popup__close">
						<img class="popup__close-img" src="img/icons/close.png" alt="" />
					</div>
					<h3>Есть вопросы?</h3>
					<p>
						Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
						ответит на все интересующие вопросы и поможем даже в самых сложных
						случаях!
					</p>
				</div>
				<div class="popup-bottom">
					<form action="handler.php" method='POST' class="popup-top__form form-popup">
						<div class="form-popup__input-group">
							<div class="form-popup__input">
								<input
									class="input"
									id="input-name_2"
									type="text"
									name="username"
									placeholder=" " />
								<label class="label" for="input-name_2">Имя</label>
							</div>
							<div class="form-popup__input">
								<input
									class="input _phone"
									id="input-tel_2"
									type="tel"
									name="usertel"
									placeholder=" " />
								<label class="label" for="input-tel_2">Номер телефона</label>
							</div>
						</div>
						<div class="form-popup__footer">
							<button
								class="form-popup__btn btn"
								type="submit">
								Отправить заявку
							</button>
							<div class="form-popup__notify">
								Обращаясь к нам вы получаете не только профессиональную работу,
								но и абсолютную конфиденциальность информации!
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modals__popup popup popup_thanks modal-thx">
		<div class="popup__content modal-thx-dialog">
			<div class="popup__body">
				<div class="popup-top">
					<div data-toggle="modal-thx" class="popup__close">
						<img class="popup__close-img" src="img/icons/close.png" alt="" />
					</div>
					<img class="popup-thx-img" src="img/modals/thanks.svg" alt="" />
					<h3>Спасибо за заявку!</h3>
					<p>
						Наш менеджер свяжется с Вами в ближайшее время ответит на все
						интересующие вопросы и поможем даже в самых сложных случаях!
					</p>
				</div>
				<div class="popup-bottom">
					<a href="index.php" class="form-popup__btn btn">
						Вернуться на главную
					</a>
				</div>
			</div>
		</div>
	</div>
</section>