<?php get_header(); ?>
			
	<div id="content">
		
	    <main id="main" class="" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive-programs' ); ?>
				
			<?php endwhile; else : ?>
										
				<?php get_template_part( 'parts/content', 'missing' ); ?>
					
			<?php endif; ?>
																	
	    </main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>