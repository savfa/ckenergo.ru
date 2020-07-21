<?php
/*
Template Name: About page
Template Post Type: post, page, compani
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>

<section id="about_mod" class="about_mod">
    <div class="container">
        <!-- <div class="about__wrap d-flex"> -->
            <div class="about__text">
                <h2 class="about__text-name about__text-name_mod">
                    О компании
                </h2>
                <p class="about__text-info1">
                    ООО «ЦК энерго» - территориальная сетевая организация.<br>
                    Основной вид деятельности Компании – оказание услуг по передаче электрической энергии и технологическое присоединение потребителей к электрическим сетям 
                    на территории Московской области.
                </p>
                <p class="about__text-info2">
                    Ключевым направлением развития Компании является обеспечение высокого уровня надежности и качества энергоснабжения, повышение качества обслуживания потребителей, применение новых технологий и модернизация электросетевого оборудования.
                </p>
                <p class="about__text-info3">
                    Московский регион – один из самых динамично развивающихся в России. Ведется интенсивное жилищное строительство, растет промышленное производство, развивается инфраструктура. Для обеспечения эффективного и надежного электроснабжения потребителей Компанией осуществляется программа капитального строительства новых и технического перевооружения, 
                    реконструкции и ремонта действующих электросетевых объектов.
                </p>
            </div>
        <!-- </div> -->
    </div>
</section>
<section class="about__list_wrap">
    <div class="about_mod_wrap">
        <div class="container">
            <ul class="about__list about__list_mod d-flex">
                <li class="about__list-item about__list-item_mod">
                    <p class="about__list-item-text1">
                        1350 км2
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num1">
                        территория обслуживания
                    </p>
                </li>
                <li class="about__list-item about__list-item_mod">
                    <p class="about__list-item-text1">
                        3 уровня
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num2">
                        напряжения<br>35 / 6-10 / 0,4 кВ
                    </p>
                </li>
                <li class="about__list-item about__list-item_mod">
                    <p class="about__list-item-text1">
                        30 МВА
                    </p>
                    <p class="about__list-item-text2 about__list-item-text2_num3">
                        трансформаторная мощность
                    </p>
                </li>
                <li class="about__list-item about__list-item_mod">
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
<section id="structure" class="structure">
    <div class="container">
        <h2 class="structure__name">
            Структура полезного отпуска по группам потребителей
        </h2>
        <div class="structure__content d-flex align-items-center">
            <div class="structure__content-img"></div>
            <ul class="structure__content-list">
                <li class="structure__content-item">
                    <p class="structure__content-text">
                        Промышленные потребители
                    </p>
                </li>
                <li class="structure__content-item structure__content-item_ellipse2">
                    <p class="structure__content-text">
                        Население и приравненные к нему группы потребителей
                    </p>
                </li>
                <li class="structure__content-item structure__content-item_ellipse3">
                    <p class="structure__content-text">
                        Государственные и муниципальные организации, 
                        а также прочие бюджетные потребители
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="territory" class="territory">
    <div class="container">
	    <h2 class="about__text-name about__text-name_mod">
		    Территория обслуживания
	    </h2>
		<p class="territory__maps-text">Место расположения сетевого оборудования ООО“Центральной компании энергетики и электрификации”. </p>
		<div class="territory__maps-block">
			<div class="maps__container">
			    <script src="http://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
			    <div id="map" style="width:650px; height:515px"></div>
			</div>
			<div class="maps-link__block">
				<ul class="maps-link__area">
					<li>
						<p>МО, Дмитровский район</p>
						<ul class="maps-link__settlement">
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Городское поселение Дмитров</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Подосинки. (Кузяевский т/о)</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. 7-Участок. (Орудьевское т/о)</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Борисово. (Внуковское т/о)</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Cельское поселение Костинское</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">д. Федоровское</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Cельское поселение Яхрома</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Поповка</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">д. Ивлево</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">с. Подъячево</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Большерогачевское с/п</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">д. Александрово</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Рогачево</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Икшанское городское поселение</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Икша</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Якотское с/п</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Рыбное</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Буденновец</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">с. Ольявидово</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Куликовское с/п</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">с. Насадкино</a>
									</li>
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">с. Куликово</a>
									</li>
								</ul>
							</li>
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Габовское с/п</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">пос. свх. Останкино</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="maps-link__area">
					<li>
						<p>МО, Наро-Фоминский район</p>
						<ul class="maps-link__settlement">
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Атепцевкое с/п</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">п. Атепцево территория завода «Эллинар»</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="maps-link__area">
					<li>
						<p>МО, г. Долгопрудный</p>
						<ul class="maps-link__settlement">
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Городской округ</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">г. Долгопрудный, территория завода ЗНДК</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="maps-link__area">
					<li>
						<p>МО, г. Лобня</p>
						<ul class="maps-link__settlement">
							<li class="maps-link__settlement-item">
								<a class="maps-link__settlement-item-city d-flex align-items-center">
									<i class="fas fa-angle-right"></i>
									<p>Городской округ</p>
								</a>
								<ul  class="maps-link__address">
									<li class="maps-link__address-item">
										<i class="fas fa-map-marker-alt"></i>
										<a href=\"#\" class="goto">г. Лобня ул. Батарейная, д. 2 «а»</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
<!--			    <div id="map" class="map"></div>-->
			</div>
		</div>
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
                    <a href="#modal1"  anim="ripple" class="btn footer__btn d-flex justify-content-center align-items-center open_modal">
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
    <script type="text/javascript">
    	/* Карта */

ymaps.ready(init);

function init() {

    var destinations = {
        'п. Подосинки. (Кузяевский т/о)': [56.206817, 37.548519],
        'п. 7-Участок. (Орудьевское т/о)': [56.492030, 37.442230],
        'п. Борисово. (Внуковское т/о)': [56.322270, 37.564248],
        'д. Федоровское': [56.317243, 37.666513],
        'п. Поповка': [56.275889, 37.281090],
        'д. Ивлево': [56.217645, 37.286660],
        'с. Подъячево': [56.262177, 37.249901],
        'д. Александрово': [56.472043, 37.143055],
        'п. Рогачево': [56.433635, 37.157860],
        'п. Икша': [56.173257, 37.500396],
        'п. Рыбное': [56.415245, 37.619773],
        'п. Буденновец': [56.380099, 37.629170],
        'с. Ольявидово': [56.502350, 37.757099],
        'с. Насадкино': [56.482011, 37.348680],
        'с. Куликово': [56.449643, 37.292571],
        'пос. свх. Останкино': [56.055920, 37.404806],
        'п. Атепцево территория завода «Эллинар»': [55.322194, 36.741616],
        'г. Долгопрудный, территория завода ЗНДК': [55.919967, 37.500648],
        'г. Лобня ул. Батарейная, д. 2 «а»': [56.024018, 37.477696],
    };

    var myMap = new ymaps.Map("map", {
            center: [56.262177, 37.249901],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.32, 37.56]
            }, 
        });

    myMap.geoObjects.add(myGeoObject); 

    $.each(destinations, function (key, value) {
         myMap.geoObjects.add(new ymaps.Placemark(value));
    });

    $('.goto').on('click', function(e){
        e.preventDefault();
        var zim = $(this).html();
        myMap.panTo(destinations[zim], {
          flying: 1
        });
    });  

    }
    </script>
