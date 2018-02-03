<?php
/**
 * Setup Custom Post Types
 *
 * @package understrap
 */

//Projects custom post type
add_action( 'init', 'project_post_type', 0 );
function project_post_type() {
// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => 'Projects',
    'singular_name'       => 'Project',
    'menu_name'           => 'Projects',
    'parent_item_colon'   => 'Parent Project',
    'all_items'           => 'All Projects',
    'view_item'           => 'View Project',
    'add_new_item'        => 'Add New Project',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Project',
    'update_item'         => 'Update Project',
    'search_items'        => 'Search Projects',
    'not_found'           => 'No Project Found',
    'not_found_in_trash'  => 'No Project Found in Trash',
  );
  
// Set other options for Custom Post Type
  $args = array(
    'label'               => 'Project',
    'description'         => 'Project',
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Projects', $args );
}

//Create the Project Category Taxonomy
add_action( 'init', 'create_project_cat_taxonomy' );
function create_project_cat_taxonomy() {
  $labels = array(
    'add_new_item' => 'Add New Project Category',
    'view_item' => 'View Project Category',
    'edit_item' => 'Edit Project Category',
    'update_item' => 'Update Project Category',
  );
  $args = array(
    'label' => 'Project Categories',
    'rewrite' => array( 'slug' => 'project-category' ),
    'labels'            => $labels,
  );
  register_taxonomy( 'project-industry', array( 'projects' ), $args );
}

// Add the gallery thumbnail size
add_action( 'after_setup_theme', 'd4tw_project_pics' );
function d4tw_project_pics() {
    add_image_size( 'project-thumb', 850, 550, array( 'center', 'top' ) );
}