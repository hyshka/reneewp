<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
    <!-- <span class="input-group-label"><span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'reneewp' ) ?></span></span> -->
		<input class="input-group-field search-field" type="search" placeholder="<?php echo esc_attr_x( 'Search for...', 'reneewp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'reneewp' ) ?>" />
    <div class="input-group-button">
			<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'reneewp' ) ?>" />
    </div>
  </div>

</form>
