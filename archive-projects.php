<?php
/**
 * The template for displaying the project acrchives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<div class="wrapper" id="archive-wrapper">
	<main class="site-main" id="main">
		<header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/connecticut-web-design-page-header.jpg';?>)">
			<div class="opacityLayer">
				<div class = "titleWrapper">
					<h1 class="entry-title page_header">WordPress Website Portfolio</h1>
				</div>
			</div>
		</header><!-- .entry-header -->

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center mb-3" data-aos="fade-right">
			<h2>We turn <strong>WordPress</strong> into <strong>WordPressed</strong></h2>
		</div>
		
		<div class="col-sm-12 text-center mb-3 controls">
			<button class = "btn btn-outline-primary" type="button" data-filter=".all">All Projects</button>
				<?php $terms = get_terms( array ('taxonomy'=> 'project-industry', 'exclude' => '17',) ); // Get all terms for the taxonomy except for 'featured'?>
    		<?php foreach ( $terms as $term ) { ?>
    		<button class = "btn btn-outline-primary" type="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
        	<?php } ?>
		</div><!-- .controls -->
	</div><!-- .row -->
</div><!-- .container -->

<div id = "portfolio" class = "container-fluid">
	<div class="row">
		<?php $custom_query_args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
		$custom_query = new WP_Query( $custom_query_args ); ?>

		<?php $i = 0; ?>
			
		<?php if ( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

		<?php $taxonomy = 'project-industry';
		$tax_terms = wp_get_post_terms($post->ID, $taxonomy, array("fields" => "all")); ?>

	<div class = "project mix col-lg-6 col-md-4 all <?php foreach( $tax_terms as $tax_term ): ?><?php echo $tax_term->slug; ?> <?php endforeach; ?>">
		<article <?php post_class(); ?>>
			<?php the_post_thumbnail('project-thumb'); ?>
	    </article>
	    <a href = "#" data-toggle="modal" data-target="#project-<?php echo $i; ?>">
	    <div class="overlay">
		    <div class="content">
		    	<h3><?php the_title(); ?></h3>
		    	<i class="fa fa-link" aria-hidden="true"></i>
		    </div><!-- .content -->
		</div><!-- .overlay -->
		</a>
	</div><!-- .project -->

	<div class="modal fade projectModal" id = "project-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="Designs 4 The Web Featured WordPress Project" aria-hidden="true">
    	 <div class="modal-dialog modal-xl" role="document">
			 <div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
						<div class="row">
							<div class="col-sm-12 col-md-8">
								<?php $image = get_field('project_screenshot'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title = "<?php echo $image['title']; ?>">
							</div><!-- 	.col-sm-12 -->
							<div class="col-sm-12 col-md-4">
								<h3 class = "mb-3"><?php the_title(); ?></h3>
								<?php the_field('project_description'); ?>
							</div><!-- 	.col-sm-12 -->
						</div><!-- 	.row -->
					</div><!-- 	.modal-body -->
			</div><!-- 	.modal-content -->
    	</div><!-- 	.modal-dialog -->
    </div><!-- 	.projectModal -->

		<?php 
			$i++;
			endwhile;
		?>

		<?php
		    wp_reset_postdata(); // reset the query 
		else:
		    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
		endif;
		?>
	</div><!-- .row -->
</div><!-- #miu-projects .container-fluid -->

		


</div><!-- .row -->

</div><!-- .container-fluid -->

	</main><!-- #main -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>