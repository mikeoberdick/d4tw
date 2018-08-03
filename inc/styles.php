<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme fonts
function d4tw_enqueue_fonts () {
    wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat' );
    wp_enqueue_style( 'Francois One', 'https://fonts.googleapis.com/css?family=Francois+One' );
    wp_enqueue_style( 'Abel', 'https://fonts.googleapis.com/css?family=Abel' );
    wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway' );

    wp_enqueue_style( 'AOS CSS', get_stylesheet_directory_uri() . '/aos/aos.css' );
    
    if ( is_page( '2564' ) ) {
        wp_enqueue_style( 'bxSlider CSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css' );
    }

}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_fonts');