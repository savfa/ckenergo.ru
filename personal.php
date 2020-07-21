<?php
/*
Template Name: Personal
Template Post Type: post, page, compani
*/ ?>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
<section class="personal page__padding">
	<div class="container">
	    <?php while( have_posts() ) : the_post();
	        $more = 1;
        ?>
		   <h2 class="page__title"> <?php the_title();?></h2>
            <?php  the_content();
	    endwhile; ?>
	</div>
</section>
<?php get_template_part('template-parts/footer') ?>
