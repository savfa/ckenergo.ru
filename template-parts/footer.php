<div class="footer-two">
	<div class="container">
		<div class="footer-two__wrap d-flex justify-content-between">
			<div class="footer-two__logo">
				<a href="#" class="logo d-flex align-items-center">
					<img src="<?php bloginfo('template_directory') ?>/img/logo.svg" class="logo__img" alt="ЦКЭЭ">
					<p class="logo__name logo__name_mod">
						Центральная компания<br>энергетики и электрификации
					</p>
				</a>
				<p class="footer-two__logo-text">
					© 2019 ООО “ЦК энерго” Все права защищены
				</p>
			</div>
			<nav>
                <?php wp_nav_menu( array(
                    'menu'            => 'bottom',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-two__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'depth'           => 0,
                    'walker'          => '',
                    'theme_location'  => ''
                ) ); ?>
			</nav>
			<div class="footer-two__contacts">
				<p class="footer-two__contacts-name">
					Контактная информация:
				</p>
				<ul class="footer-two__contacts-list">
					<li class="footer-two__contacts-item d-flex">
						<a href="#" class="footer-two__contacts-link">
							Москва, ул.Большая Серпуховская<br>д. 60А,офис 103
						</a>
						<a href="#" class="footer-two__contacts-link footer-two__contacts-link_phone">
							8(800) 550-30-79
						</a>
						<a href="#" class="footer-two__contacts-link footer-two__contacts-link_mail">
							info@ckenergo.ru
						</a>
						<a href="#" class="footer-two__contacts-link footer-two__contacts-link_clock">
							Пн-Пт  9.00-18.00
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</footer>

		<div class="modal" id="modal1">
			<span class="close" id="close1"></span>
			<h3 class="modal__title">Заполните форму</h3>
			<span class="modal__comment">* обязательные поля для заполнения</span>
            <?php echo do_shortcode('[contact-form-7 id="9" title="form1"]'); ?>
		</div>

		<div class="modal modal2"id="modal2">
			<span class="close" id="close2"></span>
			<div class="modal__shutdown">
				<p>Оперативные отключения</p>
				<a href="<?php the_field('operational-outages', 74); ?>" target="_blank">Посмотреть</a>
			</div>
			<div class="modal__shutdown">
				<p>Плановые отключения</p>
				<a href="<?php the_field('scheduled-outages', 74); ?>" target="_blank">Посмотреть</a>
			</div>
		</div>
<div id="overlay"></div>


<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<AOEinVwBAAAAma64GAQA8sbcc_s11Z9p87rLfT_pzuQPFtMAAAAAAAAAAADT5OGVFGZnUeFS6zKs7B4J5fEUDQ==>" type="text/javascript">
</script>
<!--<script type='text/javascript'>-->
<!--    -->
<!--    var wpcf7 = {"apiSettings":{"root":"http:\/\/ckenergo.ru\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"\u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u043f\u0456\u0434\u0442\u0432\u0435\u0440\u0434\u0456\u0442\u044c, \u0449\u043e \u0432\u0438 \u043d\u0435 \u0440\u043e\u0431\u043e\u0442."}}};-->
<!--   -->
<!--</script>-->
<script type='text/javascript' src='http://ckenergo.ru/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0'></script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.3.1.min.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

</body>
</html>
