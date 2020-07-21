<?php
/*
Template Name: Request
Template Post Type: post, page, compani
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<?php get_template_part( 'template-parts/PHPMailer')?>
<?php get_template_part( 'template-parts/Exception')?>
<?php get_template_part( 'template-parts/SMTP')?>
<section class="request page__padding">
	<div class="container">
		<h2 class="page__title">Подать онлайн заявку</h2>
		<p class="request__text">Уважаемый клиент, в этом разделе вы можете оставить заявку на технологическое присоединение,
			передачу объектов электросетевого хозяйства, перераспределение мощности, переоформление(востановление) документов.
		</p>
		<form id="recuest_form" action="<?php bloginfo('template_directory') ?>/success.php" method="POST" class="js-form">
			<p class="request__form-title">Исходная информация</p>
			<div class="request__form-block block1">
				<div class="form__block">
					<p><lable>Заявитель</lable>
						<select class="select-applicant" name="applicant">
							<option value="null" selected disabled></option>
							<option value="physical">
								Физическое лицо
							</option>
							<option value="juridical">
								Юридическое лицо
							</option>
							<option value="individual">
								Индивидуальный предприниматель
							</option>
						</select>
					<div class="form-help"></div><div class="form-help__block1">Нажмите кнопку <i class="fas fa-angle-down"></i> и выбирите из списка</div>
					</p>
					<p><lable>Вид заявки</lable>
						<select class="type-application" name="type_of_application">
							<option value="null" selected disabled></option>
							<option value="tech_connection">
								Технологическое присоединение
							</option>
							<option value="owner_object">
								Смена собственника объекта
							</option>
							<option value="redist_power">
								Перераспределение мощности
							</option>
							<option value="rest_documents">
								Переоформление (восстановление) документов
							</option>
						</select>
					</p>

				</div>
			</div>

			<p class="request__form-title">Данные заявителя</p>
			<div class="request__form-block block2">
				<div class="form__block">
					<!--Физ лицо-->
					<div class="physical">
						<p><lable>ФИО</lable><input type="text" name="author" id="author"></p>			
						<p><lable>Телефон</lable><input type="tel" name="tel1" id="form__telephone1"></p>
						<div class="form__block-help">
							<lable>E-mail</lable><input type="text"  name="email1" id="email1">
							<div class="form-help2"></div>
							<div class="form-help__block2">Пример: <bold>vashapochta@domain.ru</bold> Указывайте существующий email, т.к. на него будет направлен рег.номер заявки.</div>
						</div>
						<div class="form__block-help">
							<div>Копия паспорта</div>
							<div class="fl_upld">
								<label><input class="fl_inp" type="file" name="send_f1">Прикрепить файл</label>
								<div class="fl_nm">Файл не выбран</div>
							</div>
							<div class="form-help3"></div>
							<div class="form-help__block3">Страницы, содержащие сведения о личности и о регистрации.
								Если вам необходимо прикрепить несколько документов, заархивируйте их в один файл</div>
						</div>
					</div>
					<!--Физ лицо конец-->

					<!-- Юридическое лицо/ИП-->
					<div class="juridical">
						<p><lable>Полное наименование</lable><input type="text" name="full_author" id="full_author"></p>
						<p><lable>Сокращенное наименование</lable><input type="text" name="short_author" id="short_author"></p>
						<p><lable>Телефон</lable><input type="tel" name="tel2" id="form__telephone2"></p>
						<div class="form__block-help">
							<lable>E-mail</lable><input type="text"  name="email2" id="email2">
							<div class="form-help2"></div>
							<div class="form-help__block2">Пример: <bold>vashapochta@domain.ru</bold> Указывайте существующий email, т.к. на него будет направлен рег.номер заявки.</div>
						</div>
						<p><lable>ИНН</lable><input type="text" name="inn"></p>
						<p><lable>КПП</lable><input type="text" name="kpp"></p>
						<div class="register__block d-flex">
							<p><lable>Номер записи в ЕГРЮЛ</lable><input type="text" name="register" class="register-n"></p>
							<p><lable>Дата внесения в реестр</lable><input type="date" name="date" class="date-r"></p>
						</div>
						<div class="form__block-help">
							<div class="copy__w">Копия выписки из ЕГРЮЛ</div>
							<div class="fl_upld fl">
								<label><input class="fl_inp" type="file" name="send_f2">Прикрепить файл</label>
								<div class="fl_nm">Файл не выбран</div>
							</div>
							<div class="form-help5"></div>
							<div class="form-help__block5">Если вам необходимо прикрепить несколько документов, заархивируйте их в один файл
							</div>
						</div>
					</div>
					<!-- Юридическое лицо/ИП конец-->

				</div>
			</div>
			<p class="request__form-title">Сведения об объекте</p>
			<div class="request__form-block request__form-block2 block3">
				<div class="form__block">
					<!--Физ/Юридическое лицо присоединение-->
					<div class="information_tech_connection">
						<div class="form__block-help">
							<lable>Адрес объекта</lable><input type="text" name="address1" class="address">
							<div class="form-help4"></div>
							<div class="form-help__block4">Адрес объекта необходимо заполнить в строгом соответствий с правоустанавливающими документами.</div>
						</div>
						<div class="power-block d-flex">
							<p><lable>Мощность для присоединения</lable><input type="text" name="power" class="form-power"></p>
							<p class="form-ml"><lable>Класс напряжения</lable>
								<select class="form-volt" name="form_volt">
									<option selected disabled></option>
									<option>
										220 в
									</option>
									<option>
										380 в
									</option>
									<option>
										6 кв
									</option>
									<option>
										10 кв
									</option>
									<option>
										20 кв
									</option>
								</select>
							</p>
							<p class="form-ml"><lable>Категория надежности</lable>
								<select class="form-reliability" name="form_reliability">
									<option selected disabled></option>
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
								</select>
							</p>
						</div>
						<div class="form__block-help">
							<div class="">Копия свидетельства</div>
							<div class="fl_upld">
								<label><input class="fl_inp" type="file" name="send_f3">Прикрепить файл</label>
								<div class="fl_nm">Файл не выбран</div>
							</div>
							<div class="form-help7"></div>
							<div class="form-help__block7">Если вам необходимо прикрепить несколько документов, заархивируйте их в один файл  </div>
						</div>
						<div class="form__block-help">
							<div class="">Ситуационный план</div>
							<div class="fl_upld">
								<label><input class="fl_inp" type="file" name="send_f4">Прикрепить файл</label>
								<div class="fl_nm">Файл не выбран</div>
							</div>
<!--							<div class="form-help8"></div>-->
<!--							<div class="form-help__block8">Если вам необходимо прикрепить несколько документов, заархивируйте их в один файл  </div>-->
						</div>

					</div>
					<!--Физ/Юридическое лицо-->
					<!-- Физ/Юридическое лицо переоформление-->
					<div class="information_rest_documents">
						<div class="form__block-help"><lable>Адрес объекта</lable><input type="text" name="address2" class="address">
							<div class="form-help10"></div>
							<div class="form-help__block10">Адрес объекта необходимо заполнить в строгом соответствий с правоустанавливающими документами.</div>
						</div>
						<div class="form__block-help">
							<div class="copy_150">Копия договора на техприсоединение</div>
							<div class="fl_upld fl">
								<label><input class="fl_inp" type="file" name="send_f5">Прикрепить файл</label>
								<div class="fl_nm">Файл не выбран</div>
							</div>
							<div class="form-help6"></div>
							<div class="form-help__block6">Страницы, содержащие сведения о личности и о регистрации.
								Если вам необходимо прикрепить несколько документов, заархивируйте их в один файл
							</div>
						</div>
					</div>
					<!-- Физ/Юридическое лицо конец -->
				</div>
			</div>

			<p class="request__form-title">Подтверждение заявки</p>
			<div class="request__form-block block4">
				<p class="confirmation__text"><span>Проверьте введенные данные еще раз.<br> Если все верно, нажмите кнопку «Отправить заявку».</span> После рассмотрения заявки, ей будет присвоен регистрационный номер.<br> Номер будет отправлен на Вашу электронную почту.</p>
				<p class="consent">Нажимая на кнопку «Отправить заявление», я даю <a href="/personal" target="_blank" class="consent__link">согласие на обработку персональных данных</a> </p>
				<input type="submit" class="form-submit" value="Отправить заявку" />
			</div>
		</form>
		<div class="overlay" style="display:none">
			Ваша заявка принята!
		</div>
	</div>
</section>
<?php get_template_part('template-parts/footer') ?>
