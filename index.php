<?php get_header(); ?>

	<div id="content">

		<?php
			if ( is_home() ) {

			$blog_page = get_page_by_title( 'Blog' );
		?>

		<?php if(get_field('page_headline', $blog_page->ID ))
			{ ?>

			<div class="page-header expanded row">
			  <div class="clearfix">
			    <div class="column small-centered">
			      <h1 class="page-title"><?php the_field('page_headline', $blog_page->ID); ?></h1>
			    </div>
			  </div>
			</div>

		<?php }}?>

    <main id="main" class="narrow row" role="main">
			<div class="column small-centered">

				<?php
					if ( is_home() ) {
						get_search_form( true );
					}
				?>

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
