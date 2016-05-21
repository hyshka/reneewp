<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header page-header expanded row">
		<div class="column small-centered">
			<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</div>
  </header> <!-- end article header -->

  <section class="entry-content narrow row clearfix" itemprop="articleBody">
		<div class="column small-centered">
			<?php if( has_excerpt() ) { ?>
				<p class="lead"><?php echo get_the_excerpt(); ?></p>
			<?php } ?>

			<?php the_post_thumbnail('large' , array( 'class' => 'thumbnail aligncenter' )); ?>
			<?php the_content(); ?>
		</div>
	</section> <!-- end article section -->

</article> <!-- end article -->
