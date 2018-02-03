<div id = "aboutPage">
	<div class="container mb-5">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<?php $image = get_field('top_image'); ?>
				<img id = "aboutImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title = "<?php echo $image['title']; ?>">
			</div>

			<div class="col-sm-12 col-md-6">
				<h3>Feel Confident Working With An Expert</h3>
				<p>The mission of Designs 4 The Web is simple: customer satisfaction.  We pride ourselves on the close working relationships that we cultivate and our dedication to each individual project.</p>

				<p>Unlike many other website development companies, we only accept a finite number of project requests at one time in order to dedicate our resources fairly and honestly to each project.  In the end, we are not satisfied unless you are happy.</p>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

	<div class = "container mb-5">
		<div class="row">
			<div id = "aboutDifferences" class="col-sm-12 col-md-6">
				<h3>Our Process</h3>
				<p>No long winded copy here...it's actually pretty simple.  There aren't many self-taught WordPress gurus out there who also double as superheroes by way of teaching middle school students.</p>

				<p>Essentially, Designs 4 The Web was built out of passion, not necessity.  What does that mean for you and your project?  It means that we love what we do and look forward to each new challenge and opportunity to develop something beautiful for the web.</p>
			</div><!-- .col-sm-12 col-md-6 -->

			<div class="col-sm-12 col-md-6">
				<img src="/wp-content/themes/wp-understrap/img/connecticut-website-design-process-and-workflow.png" title = "Connecticut Web Design Process" alt="Connecticut Web Design Process">
			</div><!-- .col-sm-12 col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->

	<div id = "uniqueBlurbs" class = "container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1 class = "mb-4">What Makes D4TW Unique?</h1>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
		
		<div class = "row">
			<div class="blurb col-sm-12 col-md-4" data-aos="zoom-in" data-aos-anchor="#example-anchor">
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

	<div id = "aboutServices" class="container-fluid">
		<div class="row">
			<div id = "servicesText" class="col-sm-12">
				<h3>Designs 4 The Web offers a number of website design and development services in Connecticut</h3>
			</div>
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
</div><!-- #aboutPage -->

<!-- <h3>Are We a Good Fit?</h3>
			<p>Ultimately, we understand that hiring a web design professional is a difficult and time-consuming task.  In order to get a feel for our company, we invite you to review our testimonials to see what some of our clients say about working with us.  As you will see, we have a 5 star rating on Google and we work hard to keep it that way.  So what's next?  To be fair, let's start by having a quick chat to see if we are a good fit.  In the end, even if we go separate ways, we can at least answer some of your questions and point you in the right direction.  To get the conversation started, head over to our contact page to drop us a line or give us a call at 203.516.0359 to get the conversation started.</p> -->