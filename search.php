<?php get_header(); ?>

	<div id="content">

		<div class="page-header expanded row">
			<div class="clearfix">
				<div class="column small-centered">
					<h1 class="archive-title"><?php _e( 'Search Results for:', 'reneewp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</div>
			</div>
		</div>

		<main id="main" class="narrow row" role="main">
			<div class="column small-centered">

				<?php get_search_form( true ); ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>
			</div>
    </main> <!-- end #main -->


	</div> <!-- end #content -->

<?php get_footer(); ?>
