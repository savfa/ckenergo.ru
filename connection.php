<?php
/*
Template Name: Connection
Template Post Type: post, page, compani
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section class="connection page__padding">
	<div class="container">
		<h2 class="page__title">Технологическое присоединение</h2>
		<p class="connection__text">
			Процедура технологического присоединения (ТП) регламентирована Правилами технологического присоединения, утверждёнными
			постановлением правительства РФ №861 от 27 декабря 2004 года.
		</p>
		<p class="connection__block-title">Этапы технологического присоединения</p>
		<div class="connection__block d-flex">
			<div class="connection__items-left">
				<div class="connection__items connection__items1">
					<p class="connection__items-title">Подача заявки</p>
					<ul class="connection__items__list">
						<li>
							подать заявление на сайте или посетить клиентский офис
						</li>
						<li>
							получить проект договора в течение 15 дней – при подключении до 150 кВт
						</li>
					</ul>
				</div>
				<div class="connection__items connection__items2">
					<p class="connection__items-title">Заключение договора</p>
					<ul class="connection__items__list">
						<li>
							ознакомиться с проектом договора ТП и техническими условиями (ТУ)
						</li>
						<li>
							заключить договор ТП
						</li>
						<li>
							произвести оплату по договору
						</li>
					</ul>
				</div>
				<div class="connection__items connection__items3">
					<p class="connection__items-title">Выполнение работ</p>
					<ul class="connection__items__list">
						<li>
							выполнить мероприятия в границах своего земельного участка
						</li>
						<li>
							уведомить о выполнении ТУ сетевую организацию
						</li>
						<li>
							согласовать время выезда специалиста на осмотр выполнения ТУ
						</li>
					</ul>
				</div>
				<div class="connection__items connection__items4">
					<p class="connection__items-title">Получение актов готовности</p>
					<ul class="connection__items__list">
						<li>
							проверка специалистом факта выполнения ТУ
						</li>
						<li>
							ООО «ЦК энерго» осуществит фактическую подачу электроэнергии
						</li>
						<li>
							получить Акт о присоединени
						</li>
						<li>
							заключить договор энергоснабжения
						</li>
					</ul>
				</div>
			</div>
			<div class="connection__items-right">
				<a href="<?php the_field('description-file'); ?>" download class="connection__link d-flex align-items-center" >
					<img class="connection__link-img1" src="<?php bloginfo('template_directory') ?>/img/text-document.svg"><p>Подробное описание технологического присоединения</p>
				</a>
				<a href="/information-disclosure/?click=on" class="connection__link d-flex align-items-center">
					<img class="connection__link-img2" src="<?php bloginfo('template_directory') ?>/img/resource.png"><p>Формы заявок на технологическое присоединение</p>
				</a>
				<a href="/online-form/"  anim="ripple" class="connection__botton">Подать онлайн заявку</a>
			</div>
		</div>
	</div>
</section>



<?php get_template_part('template-parts/footer') ?>
