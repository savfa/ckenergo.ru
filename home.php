<?php
/*
Template Name: Home page
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section id="offer" class="offer">
    <div class="container">
        <div class="offer__wrap">
            <h1 class="offer__text">
                Просто и удобно
            </h1>
            <p class="offer__text2">
                Подать заявку на технологическое присоединение
            </p>
            <p class="offer__text3">
                Без посещения клиентского офиса
            </p>
            <a href="/online-form/" anim="ripple" class="btn offer_btn d-flex justify-content-center align-items-center ">
                <p class="offer_btn-text">Подать онлайн заявку</p>
            </a>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div class="container">
        <div class="about__wrap d-flex">
            <div class="about__text">
                <h2 class="about__text-name">
                    О компании
                </h2>
                <p class="about__text-info1">
                    ООО «ЦК энерго» - Территориальная сетевая организация.<br>
                    Основной вид деятельности Компании – оказание услуг по передаче электрической энергии и технологическое присоединение потребителей к электрическим сетям на территории Московской области.
                </p>
                <p class="about__text-info2">
                    Ключевым направлением развития Компании является обеспечение высокого уровня надежности и качества энергоснабжения, повышение качества обслуживания потребителей, применение новых технологий и модернизация электросетевого оборудования.
                </p>
                <a href="/about" anim="ripple" class="btn about__btn d-flex justify-content-center align-items-center">
                    <p class="about_btn-text">Узнать подробнее</p>
                </a>
            </div>
            <ul class="about__list d-flex">
                <li class="about__list-item">
                    <p class="about__list-item-text1">
                        1350 км2
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num1">
                        территория обслуживания
                    </p>
                </li>
                <li class="about__list-item">
                    <p class="about__list-item-text1">
                        3 уровня
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num2">
                        напряжения<br>35 / 6-10 / 0,4 кВ
                    </p>
                </li>
                <li class="about__list-item">
                    <p class="about__list-item-text1">
                        30 МВА
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num3">
                        трансформаторная мощность
                    </p>
                </li>
                <li class="about__list-item">
                    <p class="about__list-item-text1">
                        150 км
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num4">
                        кабельных и воздушных линий электропередачи
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="territory" class="territory">
    <div class="container-fluid">
        <ul class="territory__list d-flex justify-content-center">
            <li class="territory__list-item">
	            <a href="/about/#territory">
                <p class="territory__list-item-text">
                    Территория обслуживания  компании “ЦК энерго”
                </p>
	            </a>
            </li>
            <li class="territory__list-item territory__list-item_mod">
	            <a href="#modal2" class="open_modal">
                <p class="territory__list-item-text territory__list-item-text_mod">
                    Информация<br>об отключениях электроэнергии
                </p>
	            </a>
            </li>
        </ul>
    </div>
</section>
<footer id="footer" class="footer">
    <div class="footer-one">
        <div class="container">
            <div class="footer-one__wrap d-flex align-items-center">
                <div class="footer-one__info">
	               Вы можете получить консультацию, направить обращение или жалобу в ООО “ЦК энерго”.
                </div>
                <div class="footer-one__link d-flex align-items-center">
                    <a href="#modal1" anim="ripple" class="btn footer__btn d-flex justify-content-center align-items-center open_modal">
                        <p class="footer__btn-text">Написать обращение</p>
                    </a>
                    <p class="footer-one__text">
                        или свяжитесь с нами по телефону:
                    </p>
                    <p class="footer-one__phone">
	                    8(800) 550-30-79
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php get_template_part('template-parts/footer') ?>
