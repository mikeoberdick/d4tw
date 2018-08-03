<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/connecticut-web-design-page-header.jpg';?>)">
	<div class="opacityLayer">
		<div class = "titleWrapper">
			<h1 class="entry-title page_header" data-aos="fade-down">WordPress Tips & Tricks</h1>
			<h5 class = "pageSubtitle" data-aos="fade-up" data-aos-delay="500" data-aos-duration="750">LOOKING FOR SOME WORDPRESS HELP?  WE'VE GOT YOU COVERED!</h5>
		</div>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="page-wrapper">
	<div id = "catTitleWrapper" class="container-fluid mb-3" id="content" tabindex="-1">
			<div class="container">
				<?php $cat = get_the_category(); ?>
				<h2 class="category-title"><i class="fa fa-tags mr-2" aria-hidden="true"></i><?php echo esc_html( $cat[0]->name ) ?></h2>
			</div>
	</div>
	<div id = "content" class="container">
		<div class="card-columns">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="card brick mt-2 mb-2" data-aos="fade-up">
				<a href = "<?php the_permalink(); ?>">
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<div class="masonryHeader">
							<?php the_title( '<h5>', '</h5>' ); ?>
						</div><!-- .masonryHeader -->
						<?php if  (has_post_thumbnail() ) : ?>
							<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						<?php else : ?>
							<img src = "<?php echo catch_that_image(); ?>" alt = "" title = "">
						<?php endif; ?>
					</article><!-- #post-## -->
				</a>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php get_template_part( 'loop-templates/content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- .card-columns -->
	<?php understrap_pagination(); ?>
	</div><!-- .container -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>