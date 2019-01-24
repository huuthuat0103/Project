<?php 
define('THEME_URL', get_stylesheet_directory() );

require_once(THEME_URL.'/core/init.php');

function register_my_menus(){
	register_nav_menu('topmenu',('menu chính'));
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );
define('bootstrap', get_bloginfo('template_directory'));
define('fontawesomecss', get_bloginfo('template_directory').'/assets/vendors/bootstrap/css/fontawesome.css');
define('fontawesomejs', get_bloginfo('template_directory').'/assets/vendors/bootstrap/js/fontawesome.min.js');
define('style', get_bloginfo('template_directory'));
define('btjs', get_bloginfo('template_directory'));
define('js', get_bloginfo('template_directory'));
define('datepickercss', get_bloginfo('template_directory'));
define('mainjs', get_bloginfo('template_directory'));
define('btdatepickerjs', get_bloginfo('template_directory'));
define('bootstrap', get_bloginfo('template_directory').'/assets/vendors/bootstrap/css/bootstrap.min.css');

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => ( 'Sản phẩm' ),
        'singular_name'       => ( 'Sản phẩm' ),
        'menu_name'           => ( 'Sản phẩm'),
        'parent_item_colon'   => ( 'Parent Sản phẩm'),
        'all_items'           => ( 'All Sản phẩm'),
        'view_item'           => ( 'View Sản phẩm'),
        'add_new_item'        => ( 'Add New Sản phẩm'),
        'add_new'             => ( 'Add New'),
        'edit_item'           => ( 'Edit Sản phẩm'),
        'update_item'         => ( 'Update Sản phẩm'),
        'search_items'        => ( 'Search Sản phẩm'),
        'not_found'           => ( 'Not Found'),
        'not_found_in_trash'  => ( 'Not found in Trash')
    );

   $args = array(
        'label'               => ( 'Sản phẩm'),
        'description'         => ( 'Sản phẩm news and reviews'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
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
    register_post_type( 'Sản phẩm', $args );
 
}
add_action( 'init', 'custom_post_type', 0 );
