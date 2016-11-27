<?php
/*
Template Name: Coaching
*/
?>

<?php get_header(); ?>

	<div id="content">

		<main id="main" class="" role="main">

				<?php
				$i=0;
				// args
				$args = array(
					'post_type' => 'programs',
					'nopaging' => true
				);
				// the query
				$the_query = new WP_Query( $args ); ?>

				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
		 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php include(locate_template('parts/loop-archive-programs.php')); ?>

					<?php wp_reset_postdata(); ?>
					
					<?php $i++; ?>
				<?php endwhile; else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
