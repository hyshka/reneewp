<nav class="row">
  <!-- Mobile Navigation -->
  <div class="hide-for-large">
    <div class="title-bar" data-responsive-toggle="mobile-menu" data-hide-for="none">
      <div class="clearfix">
        <div class="title-bar-left">
          <span class="title-bar-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></span>
        </div>
        <div class="title-bar-right align-right">
          <button class="menu-icon" type="button" data-toggle></button>
        </div>
      </div>
    </div>

    <div class="" id="mobile-menu">
      <?php joints_top_nav(); ?>
    </div>
  </div>

  <!-- Full Navigation -->
  <div class="top-bar show-for-large">
    <div class="top-bar-left">
      <ul class="menu">
        <li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <?php joints_top_nav(); ?>
    </div>
  </div>
</nav>
