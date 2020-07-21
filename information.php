<?php
/*
Template Name: Information
Template Post Type: post, page, compani
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section class="information page__padding">
	<div class="container">
		<h2 class="page__title">Раскрытие информации</h2>
		<p class="information__text">
			ООО «Центральная компания энергетики и электрификации» раскрывает информацию на официальном сайте Общества в соответствии со
			Стандартами раскрытия информации субъектами оптового и розничных рынков электрической энергии (утв. постановлением Правительства РФ от 21 января 2004 г. N 24).
		</p>
		<ul class="information__block">
			<li>
				<p class="information__name-cat">Стандарты раскрытия информации</p>
				<ul class="information__name-block">
                    <?php
                    $args=array(
                        'category__in' => 9,
                        'showposts'=>5,
                        'orderby'=>data,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
							<li>
								<div class="d-flex align-items-center">
									<i class="fas fa-angle-right"></i><p class="information__name-post"><?php echo $post->post_title; ?></p>
								</div>
								<ul class="information__link-file">
                                    <?php if (get_field('file-information1')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information1'); ?>" target="_blank"><?php the_field('name_file1'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information2')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information2'); ?>" target="_blank"><?php the_field('name_file2'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information3')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information3'); ?>" target="_blank"><?php the_field('name_file3'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information4')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information4'); ?>" target="_blank"><?php the_field('name_file4'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information5')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information5'); ?>" target="_blank"><?php the_field('name_file5'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information6')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information6'); ?>" target="_blank"><?php the_field('name_file6'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information7')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information7'); ?>" target="_blank"><?php the_field('name_file7'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information8')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information8'); ?>" target="_blank"><?php the_field('name_file8'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information9')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information9'); ?>" target="_blank"><?php the_field('name_file9'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information10')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information10'); ?>" target="_blank"><?php the_field('name_file10'); ?></a>
										</li>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } }
                    wp_reset_query(); ?>

				</ul>
			</li>
			<li>
			<li>
				<p class="information__name-cat">Услуги по передаче электроэнергии</p>
				<ul class="information__name-block">

						   <?php
                            $args=array(
                                'category__in' => 4,
                                'showposts'=>5,
                                'orderby'=>data,
                                'caller_get_posts'=>1);
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                        <li>
	                        <div class="d-flex align-items-center">
								<i class="fas fa-angle-right"></i><p class="information__name-post"><?php echo $post->post_title; ?></p>
	                        </div>
				            <ul class="information__link-file">
                                <?php if (get_field('file-information1')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information1'); ?>" target="_blank"><?php the_field('name_file1'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information2')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information2'); ?>" target="_blank"><?php the_field('name_file2'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information3')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information3'); ?>" target="_blank"><?php the_field('name_file3'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information4')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information4'); ?>" target="_blank"><?php the_field('name_file4'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information5')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information5'); ?>" target="_blank"><?php the_field('name_file5'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information6')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information6'); ?>" target="_blank"><?php the_field('name_file6'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information7')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information7'); ?>" target="_blank"><?php the_field('name_file7'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information8')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information8'); ?>" target="_blank"><?php the_field('name_file8'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information9')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information9'); ?>" target="_blank"><?php the_field('name_file9'); ?></a>
						            </li>
                                <?php } ?>
                                <?php if (get_field('file-information10')) { ?>
						            <li>
							            <i class="far fa-file-pdf"></i><a href="<?php the_field('file-information10'); ?>" target="_blank"><?php the_field('name_file10'); ?></a>
						            </li>
                                <?php } ?>
				            </ul>
					</li>
		            <?php } }
                wp_reset_query(); ?>

				</ul>
			</li>
			<li>
				<p class="information__name-cat">Технологическое присоединение</p>
				<ul class="information__name-block">

                    <?php
                    $args=array(
                        'category__in' => 5,
                        'showposts'=>5,
                        'orderby'=>data,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
							<li>
								<div class="d-flex align-items-center">
									<i class="fas fa-angle-right"></i><p class="information__name-post"><?php echo $post->post_title; ?></p>
								</div>
								<ul class="information__link-file">
                                    <?php if (get_field('file-information1')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information1'); ?>" target="_blank"><?php the_field('name_file1'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information2')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information2'); ?>" target="_blank"><?php the_field('name_file2'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information3')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information3'); ?>" target="_blank"><?php the_field('name_file3'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information4')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information4'); ?>" target="_blank"><?php the_field('name_file4'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information5')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information5'); ?>" target="_blank"><?php the_field('name_file5'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information6')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information6'); ?>" target="_blank"><?php the_field('name_file6'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information7')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information7'); ?>" target="_blank"><?php the_field('name_file7'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information8')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information8'); ?>" target="_blank"><?php the_field('name_file8'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information9')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information9'); ?>" target="_blank"><?php the_field('name_file9'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information10')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information10'); ?>" target="_blank"><?php the_field('name_file10'); ?></a>
										</li>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } }
                    wp_reset_query(); ?>

				</ul>
			</li>
			<li>
				<p class="information__name-cat">Инвестиционная деятельность</p>
				<ul class="information__name-block">

                    <?php
                    $args=array(
                        'category__in' => 6,
                        'showposts'=>5,
                        'orderby'=>data,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
							<li>
								<div class="d-flex align-items-center">
									<i class="fas fa-angle-right"></i><p class="information__name-post"><?php echo $post->post_title; ?></p>
								</div>
								<ul class="information__link-file">
                                    <?php if (get_field('file-information1')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information1'); ?>" target="_blank"><?php the_field('name_file1'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information2')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information2'); ?>" target="_blank"><?php the_field('name_file2'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information3')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information3'); ?>" target="_blank"><?php the_field('name_file3'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information4')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information4'); ?>" target="_blank"><?php the_field('name_file4'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information5')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information5'); ?>" target="_blank"><?php the_field('name_file5'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information6')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information6'); ?>" target="_blank"><?php the_field('name_file6'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information7')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information7'); ?>" target="_blank"><?php the_field('name_file7'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information8')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information8'); ?>" target="_blank"><?php the_field('name_file8'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information9')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information9'); ?>" target="_blank"><?php the_field('name_file9'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information10')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information10'); ?>" target="_blank"><?php the_field('name_file10'); ?></a>
										</li>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } }
                    wp_reset_query(); ?>

				</ul>
			</li>
			<li>
				<p class="information__name-cat">Паспорта процессов</p>
				<ul class="information__name-block">

                    <?php
                    $args=array(
                        'category__in' => 7,
                        'showposts'=>5,
                        'orderby'=>data,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
							<li>
								<div class="d-flex align-items-center">
									<i class="fas fa-angle-right"></i><p class="information__name-post"><?php echo $post->post_title; ?></p>
								</div>
								<ul class="information__link-file">
                                    <?php if (get_field('file-information1')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information1'); ?>" target="_blank"><?php the_field('name_file1'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information2')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information2'); ?>" target="_blank"><?php the_field('name_file2'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information3')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information3'); ?>" target="_blank"><?php the_field('name_file3'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information4')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information4'); ?>" target="_blank"><?php the_field('name_file4'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information5')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information5'); ?>" target="_blank"><?php the_field('name_file5'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information6')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information6'); ?>" target="_blank"><?php the_field('name_file6'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information7')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information7'); ?>" target="_blank"><?php the_field('name_file7'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information8')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information8'); ?>" target="_blank"><?php the_field('name_file8'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information9')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information9'); ?>" target="_blank"><?php the_field('name_file9'); ?></a>
										</li>
                                    <?php } ?>
                                    <?php if (get_field('file-information10')) { ?>
										<li>
											<i class="far fa-file-pdf"></i><a href="<?php the_field('file-information10'); ?>" target="_blank"><?php the_field('name_file10'); ?></a>
										</li>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } }
                    wp_reset_query(); ?>

				</ul>
			</li>
		</ul>
	</div>
</section>



<?php get_template_part('template-parts/footer') ?>

