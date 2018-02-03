<div id = "serviceArea">

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3>From Ansonia to Woodbridge and Everything In Between</h3>
			<p>Designs 4 The Web is a Connecticut based website design and development company specializing in WordPress website design, maintenance and training.  With the nature of the business we have worked with clients across the country from Connecticut to California however we mostly stay at home here in the New England region.  Currently, we are servicing the following towns as well as some of the other in betweeners here in Connecticut.</p>
		</div>
	</div>



<?php
  $menu_name = 'service-area';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id );
?>

<nav class = "row">

<?php
$count = 0;

foreach( $menuitems as $item ):
    $link = $item->url;
    $title = $item->title;
?>

<?php 

if( $count === 0 || $count === 10 || $count === 20 ) {
	echo '<div class = "col-sm-4">';
}

?>

<div class="item">
    <a href="<?php echo $link; ?>" class="title">
        <?php echo $title; ?>
    </a>
</div>

<?php if( $count === 9 || $count === 19 || $count === 29 ) {
	echo '</div>';
} ?>

<?php $count++; endforeach; ?>

	</ul>
</nav>

	</div>
</div>

</div><!-- #serviceArea -->