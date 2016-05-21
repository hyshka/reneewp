<?php get_header(); ?>

<div id="content">

	<main id="main" class="" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    	<?php get_template_part( 'parts/loop', 'single' ); ?>

    <?php endwhile; ?>

			<nav class="page-navigation narrow row">
				<div class="column small-centered">
					<ul class="pagination row collapse">

						<div class="small-3 column">
							<li class="previous">
								<?php previous_post_link( '%link', 'Previous' ); ?>
							</li>
						</div>
						<div class="small-6 column text-center">
							<li class="current-title "><?php the_title(); ?></li>
						</div>
						<div class="small-3 column text-right">
							<li class="next">
								<?php next_post_link( '%link', 'Next' ); ?>
							</li>
						</div>

					</ul>
				</div>
			</nav>

		<?php else : ?>

   		<?php get_template_part( 'parts/content', 'missing' ); ?>

    <?php endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
