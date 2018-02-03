<?php
/**
 * The template for displaying all pages.
 *
 * This is the template for pages...note the conditionals for use with template parts.
 * Each page will need a container and a row.
 * These elements have been removed from this page to allow for each page to either be a fixed or fluid width container.
 *
 * @package understrap
 */

get_header();

?>

<div class="wrapper" id="page-wrapper">

	<main class="site-main" id="main">
	<?php if ( !is_front_page() ) { ?>
		<header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/connecticut-web-design-page-header.jpg';?>)">
		<div class="opacityLayer">
			<div class = "titleWrapper">
				<?php the_title( '<h1 class="entry-title page_header" data-aos="fade-down">', '</h1>' ); ?>
				<?php if( get_field('subtitle') ): ?>
					<h5 class = "pageSubtitle" data-aos="fade-up" data-aos-delay="500" data-aos-duration="750"><?php the_field('subtitle'); ?></h5>
				<?php endif; ?>
			</div>
		</div>
	</header><!-- .entry-header -->
	<?php } ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php

			if( is_page( 'homepage' ) ) {
					get_template_part( 'template-parts/content', 'home' );
			}

			else if( is_page( 5 ) ) {
					get_template_part( 'template-parts/content', 'about' );
			}

			else if( is_page( 29 ) ) {
					get_template_part( 'template-parts/content', 'contact' );
			}

			else if( is_page( 'service-area' ) ) {
					get_template_part( 'template-parts/content', 'service_area' );
			}

			else if( is_page( 2566 ) ) {
					get_template_part( 'template-parts/content', 'wp_maintenance' );
			}

			else if( is_page( 2564 ) ) {
					get_template_part( 'template-parts/content', 'wp_training' );
			}

			else if( is_page( 25) ) {
					get_template_part( 'template-parts/content', 'wp_plugins' );
			}

			else {
			   get_template_part( 'loop-templates/content', 'page' );
			}

			?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>