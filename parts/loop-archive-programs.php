<article id="post-<?php the_ID(); ?>" <?php post_class('program-feature'); ?> role="article">
	<div class="row">
		<div class="column">
			<div class="program-feature-container">
				<div class="program-feature-image entry-content text-center">
		  		<img src="https://placem.at/people?w=300&h=300" alt="">
		  		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => '' )); ?></a>
		  	</div>
		    <div class="program-feature-content entry-content" itemprop="articleBody">
		      <h1 class="program-feature-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

		      <?php the_field('program_summary'); ?>

		      <a href="<?php the_permalink() ?>" class="button" title="Read More">Read More</a>
				</div>
    	</div>
		</div>
	</div>
</article> <!-- end article -->
