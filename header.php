<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73764420-1', 'auto');
      ga('send', 'pageview');

    </script>
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<header class="header" role="banner">

			 <?php get_template_part( 'parts/nav', 'my-title-bar' ); ?>

       <div id="optin" class="expanded row text-center" data-closable>
         <div class="small-centered column">
           <p><small><a class="small button hollow secondary" data-open="optinModal">Sign up here</a> for inspiration and tools to reclaim &amp; ignite your sexuality.</small></p>
         </div>
       </div>

		</header> <!-- end .header -->

    <!-- Contact Modal -->
    <div class="reveal" id="contactModal" data-reveal>

      <h4>Contact</h4>

      <?php echo wpautop( of_get_option('contact_info_text') ); ?>

      <?php joints_contact_links(); ?>

      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <!-- Optin Modal -->
    <div class="reveal optin" id="optinModal" data-reveal>

      <?php echo do_shortcode('[mc4wp_form id="44"]'); ?>

      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
