<?php
/**
 * The header for the theme.
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/wp-understrap/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/wp-understrap/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/wp-understrap/favicons/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/wp-understrap/favicons/manifest.json">
	<link rel="mask-icon" href="/wp-content/themes/wp-understrap/favicons/safari-pinned-tab.svg" color="#cc0000">
	<link rel="shortcut icon" href="/wp-content/themes/wp-understrap/favicons/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Designs 4 The Web">
	<meta name="application-name" content="Designs 4 The Web">
	<meta name="msapplication-config" content="/wp-content/themes/wp-understrap/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<!-- NAVBAR -->

<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

<nav class="navbar navbar-toggleable-md">
	<div class="container">
		<a rel = "home" class="navbar-brand" data-itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php if ( is_front_page() ) { ?>
			<img id = "headerLogo" src = "<?php the_field('light_logo', 'option'); ?>" alt = "Designs 4 The Web" title = "Connecticut WordPress Website Designer">
				<?php } else { ?>
			<img id = "headerLogo" src = "<?php the_field('dark_logo', 'option'); ?>" alt = "Designs 4 The Web" title = "Connecticut WordPress Website Designer">
				<?php } ?>
		</a>

<!-- DESKTOP MENU -->
<?php wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbarNavDropdown',
			'menu_class'      => 'navbar-nav',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'walker'          => new understrap_WP_Bootstrap_Navwalker(),
		)
); ?>

<!-- MOBILE TRIGGER -->
<button type = "button" class="btn navbar-toggler d-block w-50 mx-auto hidden-lg-up" data-toggle="modal" data-target="#modalNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle Navigation">
<i class="fa fa-bars" aria-hidden="true"></i> Menu
</button>

		</div><!-- .container -->
	</nav><!-- .site-navigation -->
</div><!-- .wrapper-navbar end -->

<!-- MOBILE MENU -->
<div class="modal fade" id="modalNav" tabindex="-1" role="dialog" aria-labelledby="Site Navigation">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div id = "modalClose">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">close</span></button>
        </div>
      <div class="modal-body">
      	<a rel = "home" data-itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      	<img id = "headerLogo" src = "<?php the_field('light_logo', 'option'); ?>" alt = "Designs 4 The Web" title = "Connecticut WordPress Website Designer"></a>
      <?php wp_nav_menu(
			array(
			'theme_location'  => 'primary',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'mobileNav',
			'fallback_cb'     => '',
			'menu_id'         => 'mobile-menu',
			'walker'          => new understrap_WP_Bootstrap_Navwalker(),
			)
		); ?>
      </div><!-- .modal-body -->
    </div><!-- .modal-content -->
  </div><!-- .modal-dialog -->
</div><!-- .modal -->