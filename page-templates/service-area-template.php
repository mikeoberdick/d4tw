<?php
/**
 * Template Name: Service Area Template
 *
 * Template for displaying content on service area pages.
 *
 * @package understrap
 */
get_header();
?>

<?php $town = wp_title('', false); ?>

<div id = "serviceAreas">
	<div class="wrapper" id="page-wrapper">
		<main class="site-main" id="main">
			
<div class="container-fluid heroSection mb-5">
	<div class="opacityLayer">
			<div class = "container">
				<div class = "row">
						<div class = "col-sm-12">
							<h1 class = "text-center"><?php echo $town; ?>, CT Website Design & Development</h1>
							<hr class = "mb-3">
							<h3 class = "mt-3 text-center">Professional WordPress Website Development For Businesses Located in <?php echo $town; ?>, CT</h3>
							<p>Designs 4 The Web offers boutique level web design and web development services in <?php echo $town; ?>, Connecticut and surrounding areas. Specializing in WordPress and responsive website design we are the web design firm of choice for your website project in <?php echo $town; ?>, Conneticut.</p>
							<a href = "#" data-featherlight = "#contactForm"><button type="button" class="btn btn-primary btn-lg mt-3">Let's Connect</button></a>
							<div id = "contactForm" class = "hidden">
								<h3>How Can We Help?</h3>
								<?php echo do_shortcode ('[ninja_form id=2]'); ?>
							</div>
						</div>
					</div><!-- .row -->
				</div><!-- .container -->
		</div><!-- .opacityLayer -->
</div><!-- .container-fluid -->

<div class = "container mb-5">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<img src="/wp-content/themes/wp-understrap/img/connecticut-website-design-process-and-workflow.png" title = "Connecticut Web Design Process" alt="Connecticut Web Design Process">
		</div><!-- .col-sm-12 col-md-6 -->
		<div class="col-sm-12 col-md-6">
			<h3>What Makes Us Different?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam sint minus deserunt, amet doloremque aut vel ad facilis totam, aperiam magnam nulla temporibus suscipit voluptatem non distinctio optio praesentium iusto.</p>
			<ul>
				<li><i class="fa fa-user" aria-hidden="true"></i> One Project...One Person</li>
			</ul>
		</div><!-- .col-sm-12 col-md-6 -->
	</div><!-- .row -->
</div><!-- .container -->

<div id = "aboutServices" class="container-fluid">
	<div class="row">
		<div id = "servicesText" class="col-sm-12">
			<h3>Designs 4 The Web offers a number of website services in <?php echo $town; ?>, Connecticut</h3>
		</div>
		
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-website-design/'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-code" aria-hidden="true"></i>Website Development</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-mobile-website'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-tablet" aria-hidden="true"></i>Responsive Websites</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-website'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-wordpress" aria-hidden="true"></i>Custom WordPress</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-shopping-website'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-shopping-basket" aria-hidden="true"></i>e-Commerce</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-maintenance'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-cogs" aria-hidden="true"></i>Website Maintenance</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
		<div class="col-sm-12 col-md-4 col-xl-2">
			<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-training'><button role = 'button' class = 'btn btn-outline-primary'><i class="fa fa-book" aria-hidden="true"></i>WordPress Training</button></a>
		</div><!-- .col-sm-12 col-md-4 col-md-2 -->
	</div><!-- .row -->
</div><!-- .container-fluid -->

<div class="container-fluid pt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class = "text-center mb-3">What Clients Are Saying</h2>
				<?php echo do_shortcode('[google-reviews-pro place_name="Designs 4 The Web" place_id=ChIJ60qMF1re54kRPFkGH-ZzlgA auto_load=true rating_snippet=true view_mode=slider open_link=true nofollow_link=true]'); ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->	
</div><!-- .container-fluid -->

	</main><!-- #main -->
	</div><!-- #page-wrapper -->
</div><!-- #serviceAreas -->

<?php get_footer(); ?>
