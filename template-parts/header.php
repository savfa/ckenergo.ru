<body>
<header id="header" class="header">
	<div class="header__wrap">
		<div class="container">
			<div class="wrap d-flex align-items-center">
				<a href="/" class="logo d-flex align-items-center">
					<img src="<?php bloginfo('template_directory') ?>/img/logo.svg" class="logo__img" alt="ЦКЭЭ">
					<p class="logo__name">
						Центральная компания<br>энергетики и электрификации
					</p>
				</a>
				<ul class="nav d-flex justify-content-between ml-auto">
					<li class="nav__item">
						<a href="tel:88005503079" class="nav__item-phone">
							8(800) 550-30-79
						</a>
					</li >
					<li class="nav__item">
						<a href="#modal1" class="nav__item-win open_modal">
							Интернет-приемная
						</a>
					</li>
					<li class="nav__item">
						<a href="online-form/" class="nav__item-application">
							Подать заявку
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="navigation d-flex align-items-center">
		<div class="container">
			<button class="bar__nav">
				<span></span>
			</button>
			<nav>
				<hr>
				<p class="bar__nav-menu">
					<a href="#modal1" class="open_modal">
						Интернет-приемная
					</a>
				</p>
				<p class="bar__nav-menu">
					<a href="online-form/">
						Подать заявку
					</a>
				</p>
            <?php wp_nav_menu( array(
                'menu'            => 'menu-1',
                'container'       => 'ul',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu d-flex justify-content-between',
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
				<hr>
			</nav>
		</div>
	</div>
</header>

