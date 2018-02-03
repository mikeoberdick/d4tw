<div id = "homepage">

	<?php $heroImage = get_field('hero_image'); ?>

	<div class="container-fluid heroSection" style = "background-image: url('<?php echo $heroImage['url']; ?>')">
	<div class="opacityLayer">
		<div class = "container">
				<div class = "col-sm-12">
					<h1 class = "text-center" data-aos="fade-down" data-aos-delay="500" data-aos-duration="750"><?php the_field('hero_header'); ?></h1>
					<h5 class = "mt-3 text-center" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="750"><?php the_field('hero_content'); ?></h5>

					<!-- Modal Trigger -->
					<button type="button" class="btn btn-primary btn-lg" data-aos="zoom-in" data-aos-delay="2500" data-aos-duration="1250" data-aos-easing="ease-in-out-back" data-toggle="modal" data-target="#hpContactForm"><?php the_field('button_text'); ?></button>

					<!-- Modal Content -->
					<div class="modal fade" id="hpContactForm" tabindex="-1" role="dialog" aria-labelledby="Contact Form">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-body">
					      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					      	<h3>How Can We Help?</h3>
							<?php echo do_shortcode ('[ninja_form id=3]'); ?>
					      </div>
					    </div>
					  </div>
					</div><!-- .modal -->
				</div>
			</div>
		</div>
	</div><!-- .container-fluid -->

<div class="container-fluid hpSection pt-5">
<div class="container">
	<div class="row">
	<div class="col-sm-12 mb-3">
		<h2 class = "text-center">How Can We Help?</h2>
	</div>
		
		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/connecticut-web-design.png" alt="Connecticut Web Design" title = "Connecticut Web Design">
			<h5 class = "mb-2">Professional Website</h5>
			<p>Professional websites that are attractive, user friendly and built using the latest in coding standards.</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-website-design'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->

		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/responsive-connecticut-web-design.png" alt="Mobile Friendly Connecticut Web Design" title = "Mobile Friendly Connecticut Web Design">
			<h5 class = "mb-2">Mobile Friendly Websites</h5>
			<p>Responsive website design is no longer an option as your customers will be using a phone to get to your site.</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-mobile-website'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->

		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/wordpress-woocommerce-customization.png" alt="Connecticut WooCommerce Customization" title = "Connecticut WooCommerce Customization">
			<h5 class = "mb-2">Custom WooCommmerce Stores</h5>
			<p>Power your online store with the most widely used and powerful eCommerce platform on the web.</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-shopping-websites'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->

		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/connecticut-wordpress-websites.png" alt="Connecticut WordPress Web Design" title = "Connecticut WordPress Web Design">
			<h5 class = "mb-2">Custom WordPress</h5>
			<p>Build your site on the world’s most popular and easy to use Content Management System.</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-website-designer'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->

		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/connecticut-wordpress-training-class.png" alt="Connecticut WordPress Training" title = "Connecticut WordPress Training">
			<h5 class = "mb-2">WordPress Training</h5>
			<p>On or Off-site WordPress training ranging from individualized video tutorials to whole staff training.</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-training'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->

		<div class="col-sm-12 col-md-4 hpCard">
			<img class = "mb-3" src="/wp-content/themes/wp-understrap/img/connecticut-wordpress-training.png" alt="Connecticut WordPress Maintenance" title = "Connecticut WordPress Maintenance">
			<h5 class = "mb-2">WordPress Maintenance</h5>
			<p>Wouldn't it be nice to know someone is looking after your site while you focus on your business?</p>
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-maintenance'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
		</div><!-- .col-sm-12 col-md-4 -->
</div><!-- .row -->	
</div><!-- .container -->
</div><!-- .container-fluid -->

<div class="container-fluid hpSection pt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class = "text-center mb-3" data-aos="fade-left" data-aos-duration="1000">What Clients Are Saying</h2>
				<?php echo do_shortcode('[google-reviews-pro place_name="Designs 4 The Web" place_id=ChIJ60qMF1re54kRPFkGH-ZzlgA auto_load=true rating_snippet=true view_mode=slider open_link=true nofollow_link=true]'); ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->	
</div><!-- .container-fluid -->


<div id = "portfolio" class="container-fluid hpSection pt-5 pb-5">
	<div class="row">
		<div class="col-sm-12 text-center mb-3" data-aos="fade-right" data-aos-duration="1000">
			<h2>We turn <strong>WordPress</strong> into <strong>WordPressed</strong></h2>
		</div>

	<?php

$custom_query_args = array(
'post_type' => 'projects',
'posts_per_page' => '6',
	'tax_query' => array(
		array(
			'taxonomy' => 'project-industry',
			'field'    => 'slug',
			'terms'    => 'featured',
		),
	),
);

$custom_query = new WP_Query( $custom_query_args ); ?>

<?php $i = 0; ?>
	
<?php if ( $custom_query->have_posts() ) :
		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		<div class = "project col-lg-4 col-md-6">
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
		</a><!-- 	modal toggle -->
    </div><!-- 	.project -->

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

    <div class="row mt-5">
    	<div class="col-sm-12 text-center">
    		<a href = '<?php echo bloginfo('url'); ?>/projects'><button role = 'button' class = 'btn btn-primary btn-lg' data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out-back">Full Portfolio</button></a>
    	</div><!-- .col-sm-12 -->
    </div><!-- .row -->

</div><!-- .container-fluid -->

</div><!-- #homepage -->