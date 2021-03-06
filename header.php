<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

  <div class="triangle-tiles"></div>

<!--<div class="triangle-top-left"></div>-->
<!--<div class="triangle-top-right"></div>-->

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		
		<div class="container text-center">
      <div class="row">
        <div class="col-md-12 col-lg-10 offset-lg-1 bg-white">
        <?php if ( is_front_page() && is_home() ) : ?>

          <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Yeah, wir heiraten!"><span class="yeah">Yeah,</span><br /> <em>wir heiraten!</em></a></h1>

        <?php else : ?>

          <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Yeah, wir heiraten!"><span class="yeah">Yeah,</span><br /> <em>wir heiraten!</em></a></a>

        <?php endif; ?>
        </div>
      </div>
		</div>
		
		
		<nav class="main-nav">

		<?php if ( 'container' == $container ) : ?>
			<div class="container ">
        <div class="row">
          <div class="col-md-12 col-lg-10 offset-lg-1 bg-white border-round-bottom">
		<?php endif; ?>


				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => ' text-center',

						'menu_class'      => 'nav justify-content-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
          </div><!-- .col-md-12 ... -->
        </div><!-- .row -->
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
