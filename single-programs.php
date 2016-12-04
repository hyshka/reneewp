<?php get_header(); ?>
			
<div id="content">

	<?php if (the_field('hero_title')) { ?>
		<div id="breakthrough" class="hero expanded row">
		  <div class="inner-hero clearfix">
		    <div class="column small-centered">
		      <h1><?php the_field('hero_title'); ?><br><span><?php the_field('hero_subtitle'); ?></span></h1>
			  	<?php the_field('hero_paragraph_text'); ?>
		      <a href="<?php the_field('hero_button_link'); ?>" class="button"><?php the_field('hero_button_text'); ?></a> <a href="<?php the_field('hero_secondary_button_link'); ?>"><small><?php the_field('hero_secondary_button_text'); ?></small></a>
		    </div>
		  </div>
		</div>
	<?php } ?>

	<main id="main" class="" role="main">
	
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	    	<?php get_template_part( 'parts/loop', 'page' ); ?>
	    					
	    <?php endwhile; else : ?>
	
	   		<?php get_template_part( 'parts/content', 'missing' ); ?>

	    <?php endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
