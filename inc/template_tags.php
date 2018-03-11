<?php

//Grab the first image of a post and set as thumbnail for masonry layout
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = get_stylesheet_directory_uri() . '/img/default.png';
  }
  return $first_img;
}

function d4tw_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	if ( ! $next && ! $previous ) {
		return;
	}
	?>
			<nav class="container navigation post-navigation">
				<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
				<div class="row nav-links justify-content-between">
					<?php
						if ( get_previous_post_link() && get_next_post_link() ) {
							previous_post_link( '<span class="nav-previous col-sm-12 col-md-6 mb-3">%link</span>', _x( '<i class="fa fa-angle-left"></i><span class = "col-sm-10">&nbsp;%title</span>', 'Previous post link', 'understrap' ) );
						}

						else if ( get_previous_post_link() && ! get_next_post_link() ) {
							previous_post_link( '<span class="nav-previous col-sm-12">%link</span>', _x( '<i class="fa fa-angle-left mr-3"></i><span>&nbsp;%title</span>', 'Previous post link', 'understrap' ) );
						}
						if ( get_previous_post_link() && get_next_post_link() ) {
							next_post_link( '<span class="nav-next col-sm-12 col-md-6">%link</span>',     _x( '<span class = "col-sm-10">%title&nbsp;</span><i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
						}

						else if ( ! get_previous_post_link() && get_next_post_link() ) {
							next_post_link( '<span class="nav-next col-sm-12 col-md-6">%link</span>',     _x( '<span>%title&nbsp;</span><i class="fa fa-angle-right ml-3"></i>', 'Next post link', 'understrap' ) );
						}
					?>
				</div><!-- .nav-links -->
			</nav><!-- .navigation -->

	<?php
}