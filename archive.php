<?php get_header(); ?>

	<div id="content">

    <main id="main" class="" role="main">

    	<header class="page-header expanded row">
				<div class="column small-centered">
	    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
				</div>
    	</header>

			<div class="narrow row">
				<div class="column small-centered">

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive' ); ?>

					<?php endwhile; ?>

						<?php joints_page_navi(); ?>

					<?php else : ?>

						<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

				</div>
			</div>

		</main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
