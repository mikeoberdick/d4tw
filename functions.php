<?php
/**
 * WP Understrrap Functions and Definitions
 *
 * @package understrap
 */

/**
 * Theme setup
 */
require get_stylesheet_directory() . '/inc/setup.php';

/**
 * Setup Custom Dashboard
 */
require get_stylesheet_directory() . '/inc/cpt.php';

/**
 * Setup Custom Dashboard
 */
require get_stylesheet_directory() . '/inc/dashboard.php';

/**
 * Advanced Custom Fields
 */
require get_stylesheet_directory() . '/inc/acf.php';

/**
 * Custom Menus
 */
require get_stylesheet_directory() . '/inc/menus.php';

/**
 * Advanced Custom Fields
 */
require get_stylesheet_directory() . '/inc/woocommerce.php';

/**
 * Register theme styles
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
require get_stylesheet_directory() . '/inc/styles.php';

/**
 * Register theme scripts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
require get_stylesheet_directory() . '/inc/scripts.php';

/*
 * Register theme Template Tags
 */
require get_stylesheet_directory() . '/inc/template_tags.php';

/**
 * Customize widget areas
 *
 * @link https://codex.wordpress.org/Function_Reference/unregister_sidebar
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_stylesheet_directory() . '/inc/widgets.php';