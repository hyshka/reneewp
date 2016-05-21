<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

  <?php if(get_field('page_headline'))
    { ?>

    <header class="article-header page-header expanded row">
  		<div class="column small-centered">
        <h1 class="page-title"><?php the_field('page_headline'); ?></h1>
  		</div>
    </header> <!-- end article header -->

  <?php } //else { ?>

  <!-- <header class="article-header page-header expanded row">
		<div class="column small-centered">
      <h1 class="page-title"><?php the_title(); ?></h1>
		</div>
  </header> -->

  <?php //} ?>

  <section class="entry-content narrow row clearfix" itemprop="articleBody">
		<div class="column small-centered">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
    </div>
	</section> <!-- end article section -->

</article> <!-- end article -->
