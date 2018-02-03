<?php
/**
 * Register theme scripts
 *
 * @package understrap
 */

// Add the Javascript
function d4tw_enqueue_scripts () {
   	wp_enqueue_script( 'D4TW Theme JS', get_stylesheet_directory_uri() . '/js/d4tw.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'AOS JS', get_stylesheet_directory_uri() . '/aos/aos.js', array('jquery'), '1.0.0', true );

	if ( is_page( '5' ) ) {
	    wp_enqueue_script( 'matchHeight JS', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', array('jquery'), '1.0.0', true );
   		}

	if ( is_page( '2564' ) ) {
	    wp_enqueue_script( 'bxSlider JS', get_stylesheet_directory_uri() . '/bxslider/jquery.bxslider.min.js', array('jquery'), '1.0.0', true );
	    wp_enqueue_script( 'D4TW bxSlider JS', get_stylesheet_directory_uri() . '/bxslider/d4tw_bxSlider.js', array('jquery'), '1.0.0', true );
   		}

	if ( is_post_type_archive( 'projects' ) ) {
	    wp_enqueue_script( 'MIU JS', get_stylesheet_directory_uri() . '/miu/mixitup.min.js', array('jquery'), '1.0.0', true );
   }
}
add_action( 'wp_enqueue_scripts', 'd4tw_enqueue_scripts' );