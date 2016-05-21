<?php get_header(); ?>

	<div id="content">

		<!-- Coaching Section -->
		<main id="" class="hero expanded row" role="main">
		  <div class="inner-hero clearfix">
		    <div class="column">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			      <h1><?php bloginfo('name'); ?><br><span><?php bloginfo('description'); ?></span></h1>

			      <img class="thumbnail hide-for-large" src="<?php the_field('hero_image'); ?>">

			      <p><?php the_field('hero_paragraph'); ?></p>

			      <a href="<?php the_field('hero_button_link'); ?>" class="button"><?php the_field('hero_button_text'); ?></a>

					<?php endwhile; endif; ?>

		    </div>
		  </div>
		</main>

	</div> <!-- end #content -->

<?php get_footer(); ?>
