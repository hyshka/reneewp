<?php get_header(); ?>

	<div id="content">

		<main id="main" class="" role="main">

			<article id="content-not-found">

				<header class="article-header page-header expanded row">
					<div class="column small-centered">
						<h1 class="page-title"><?php _e( 'Epic 404 - Article Not Found', 'reneewp' ); ?></h1>
					</div>
			  </header> <!-- end article header -->

				<div class="narrow row">
					<div class="column small-centered">

						<section class="entry-content clearfix" itemprop="articleBody">
								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'reneewp' ); ?></p>
						</section> <!-- end article section -->

						<section class="search clearfix">
						    <p><?php get_search_form(); ?></p>
						</section> <!-- end search section -->

					</div>
				</div>

			</article> <!-- end article -->

		</main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
