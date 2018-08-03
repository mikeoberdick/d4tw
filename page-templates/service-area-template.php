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

<?php $town = get_the_title(); ?>

<div id = "serviceAreas">
	<div class="wrapper" id="page-wrapper">
		<main class="site-main" id="main">
			
<div class="container-fluid heroSection">
	<div class="opacityLayer">
			<div class = "container">
				<div class = "row">
						<div class = "col-sm-12">
							<h1 class = "text-center" data-aos="fade-down" data-aos-delay="500" data-aos-duration="750"><?php echo $town; ?>, CT Website Design</h1>
							<hr class = "mb-3" data-aos="fade-down" data-aos-delay="500" data-aos-duration="750">
							<div data-aos="fade-up" data-aos-delay="1500" data-aos-duration="750">
								<h5 class = "pageSubtitle">Professional Website Services For Businesses Located in <?php echo $town; ?>, CT</h5>
								<p>Designs 4 The Web offers boutique level web design and web development services in <?php echo $town; ?>, Connecticut and surrounding areas. Specializing in WordPress and responsive website design we are the web design firm of choice for your website project in <?php echo $town; ?>, Connecticut.</p>
							</div>
						</div>
					</div><!-- .row -->
				</div><!-- .container -->

		<div id = "aboutServices" class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-website-design/'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-code" aria-hidden="true"></i>Website Development</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-mobile-website'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-tablet" aria-hidden="true"></i>Responsive Websites</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-website'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-wordpress" aria-hidden="true"></i>Custom WordPress</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-shopping-website'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-shopping-basket" aria-hidden="true"></i>e-Commerce</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-maintenance'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-cogs" aria-hidden="true"></i>Website Maintenance</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
					<a href = '<?php echo bloginfo('url'); ?>/ct-wordpress-training'><button role = 'button' class = 'btn btn-outline-primary serviceBtn'><i class="fa fa-book" aria-hidden="true"></i>WordPress Training</button></a>
				</div><!-- .col-sm-12 col-md-4 col-md-2 -->
			</div><!-- .row -->
		</div><!-- .container-fluid -->
	</div><!-- .opacityLayer -->
</div><!-- .container-fluid -->

<div id = "uniqueBlurbs" class = "container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h1 class = "mb-4">What Makes D4TW Unique?</h1>
		</div><!-- .col-sm-12 -->
	</div><!-- .row -->
	
	<div class = "row">
		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/captain_america.png';?>" alt = "Captain America" title = "Collaborative WordPress Website Development">
			<h5>The Perfect Sidekick</h5>
			<p>Who says bigger is always better?  Being a company of one means that we assimilate fully within your project so you can think of us as a teammate and not an outside agency.</p>
		</div><!-- .col-sm-12 -->
				
		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/superman.png';?>" alt = "Superman" title = "Fast WordPress Website Development">
			<h5>Faster Than A Speeding Bullet</h5>
			<p>We know WordPress and not to brag but we're pretty good at it.  What does that mean for you?  Your project gets completed faster than a speeding bullet.</p>
		</div><!-- .col-sm-12 -->

		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/ironman.png';?>" alt = "Ironman" title = "The Latest WordPress Technology">
			<h5>In-House Technology </h5>
			<p>Many agencies use cookie cutter theme templates.  We're a bit different.  Each project gets its own custom built theme based on the latest design trends and coding standards.</p>
		</div>

		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/punisher.png';?>" alt = "Flash" title = "We're Lightning Fast">
			<h5>We Won't Stop Until the Job Is Done</h5>
			<p>Some call it perseverance, some say it's a "never say die" attitude.  We like to think it's customer service.  We won't stop until the job is done right.</p>
		</div>

		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/batman.png';?>" alt = "Flash" title = "We're Lightning Fast">
			<h5>There When You Need Us</h5>
			<p>We pride ourselves on communication and responsive action.  If you need something done.  We're on it.  If you have a question...we have an answer.  Simple, right?</p>
		</div>

		<div class="blurb col-sm-12 col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri() . '/img/superhero_icons/spiderman.png';?>" alt = "Flash" title = "We're Lightning Fast">
			<h5>Collaborative "Web" Design</h5>
			<p>Our process includes the input of our clients so that the end result is a site that is reflective of your ideas and concepts.  It's a collaborative process...start to finish.</p>
		</div>
	</div><!-- .row -->
</div><!-- .container-fluid -->

<div class="container-fluid pt-5 mb-5">
		<div class="row">
			<div class="col-sm-12">
				<h2 class = "text-center mb-3">What Clients Near <?php echo $town; ?> Are Saying...</h2>
				<?php echo do_shortcode('[google-reviews-pro place_name="Designs 4 The Web" place_id=ChIJ60qMF1re54kRPFkGH-ZzlgA auto_load=true rating_snippet=true view_mode=slider open_link=true nofollow_link=true]'); ?>
			</div>
		</div><!-- .row -->
</div><!-- .container-fluid -->

<div id = "townForm" class="container-fluid">
	<div class="opacityLayer pt-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class = "text-center mb-3">How Can We Help?</h2>
					<?php echo do_shortcode('[ninja_form id=4]'); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .opacityLayer -->
</div><!-- .container-fluid -->

	</main><!-- #main -->
	</div><!-- #page-wrapper -->
</div><!-- #serviceAreas -->

<?php get_footer(); ?>
