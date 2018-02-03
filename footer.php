<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<div id = "preFooter" class = "container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Ready to Get Started? Call <a href="tel:2035160359" alt = "Call Designs 4 The Web" title = "Call Designs 4 The Web">203.516.0359</a></h1>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .container-fluid -->

<footer id="footer" class = "container-fluid">
	<div class="container">
		<div class = "row">
			<div class = "col-sm-12 mb-3">
				<img src = "<?php the_field('light_logo', 'option'); ?>" alt = "Designs 4 The Web">
			</div>

			<div class = "col-sm-12">
				<p>Designs 4 The Web provides WordPress website services to a number of Southern Connecticut town including: Stamford, Darien, New Canaan, Wilton, Norwalk, Weston, Easton, Westport, Fairfield, Trumbull, Bridgeport, Shelton, Stratford, Ridgefield, Redding, Danbury, Bethel, Brookfield, Newtown, New Fairfield, Milford, Orange, West Haven, New Haven, East Haven, Branford, Guilford, Madison, North Branford, North Haven, Derby, Ansonia, Seymour, Woodbridge, Hamden, Bethany, Oxford, Beacon Falls, Naugatuck, Southbury, Middlebury, Waterbury, Wolcott, Prospect, Wallingford, Cheshire, and Meriden.</p>
			</div>

			<div class="col-sm-12 col-md-4 copy">
				&copy; 2010 - <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>
			</div>

			<div class="col-sm-12 col-md-4">
				<div id = "footerSocial">
					<a href = "https://www.facebook.com/Designs4TheWeb" alt = "Designs 4 The Web on Facebook" title = "Designs 4 The Web on Facebook" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href = "https://twitter.com/Designs4theWeb" alt = "Designs 4 The Web on Twitter" title = "Designs 4 The Web on Twitter" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href = "http://www.linkedin.com/in/mikeoberdick/" alt = "Designs 4 The Web on LinkedIn" title = "Designs 4 The Web on LinkedIn" target = "_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href = "https://plus.google.com/+Designs4thewebLLC/posts" alt = "Designs 4 The Web on Google+" title = "Designs 4 The Web on Google+" target = "_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href = "http://www.youtube.com/user/Designs4TheWebLLC" alt = "Designs 4 The Web on YouTube" title = "Designs 4 The Web on YouTube" target = "_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 contact">
				<a class = "footerLink" href="mailto:mike@designs4theweb.com" alt = "E-Mail Mike Oberdick of Designs 4 The Web" title = "E-Mail Mike Oberdick of Designs 4 The Web">mike@designs4theweb.com</a> | <a class = "footerLink" href="tel:2035160359" alt = "Call Mike Oberdick of Designs 4 The Web" title = "Call Mike Oberdick of Designs 4 The Web">203.516.0359</a>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #footer -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

<?php if ( is_post_type_archive( 'projects' ) ) { ?>

	<script>
	    var containerEl = document.querySelector('#portfolio');
	    var mixer = mixitup(containerEl, {
    load: {
        filter: '.all'
    }
});
	</script>
	<?php } ?>

</body>

</html>