<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="single-wrapper">
		<header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/connecticut-web-design-page-header.jpg';?>)">
		<div class="opacityLayer">
			<div class="container">
			<div class = "titleWrapper">
				<?php the_title( '<h1 class="entry-title page_header" data-aos="fade-down">', '</h1>' ); ?>
				<h5 class = "pageSubtitle" data-aos="fade-up" data-aos-delay="500" data-aos-duration="750"><?php echo '<span class="posted-on">Posted on ' . the_date('', '', '', false) . '</span><span class="byline"> by Designs 4 The Web'; ?></h5>
			</div>
		</div>
		</div>
	</header><!-- .entry-header -->

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-md-12 col-lg-8 content-area" id="primary">
				<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<hr>

						<?php d4tw_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
