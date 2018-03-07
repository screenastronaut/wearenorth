<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'fancybox-scripts', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js', array(), $the_theme->get( 'Version' ), true );
}

// Register Case Study Custom Post Type
function case_study_cpt() {

    $labels = array(
        'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Case Studies', 'text_domain' ),
        'name_admin_bar'        => __( 'Case Studies', 'text_domain' ),
        'archives'              => __( 'Case Studies Archives', 'text_domain' ),
        'attributes'            => __( 'Case Study Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Case Study:', 'text_domain' ),
        'all_items'             => __( 'All Case Studies', 'text_domain' ),
        'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Case Study', 'text_domain' ),
        'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
        'update_item'           => __( 'Update Case Study', 'text_domain' ),
        'view_item'             => __( 'View Case Study', 'text_domain' ),
        'view_items'            => __( 'View Case Studies', 'text_domain' ),
        'search_items'          => __( 'Search Case Study', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Case Study', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Case Study', 'text_domain' ),
        'items_list'            => __( 'Case Studies list', 'text_domain' ),
        'items_list_navigation' => __( 'Case Studies list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Case Studies list', 'text_domain' ),
    );
    $rewrite = array(
        'slug'                  => 'work',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Case Study', 'text_domain' ),
        'description'           => __( 'Custom Post Type for Case Study', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'case_study_cpt', $args );

}
add_action( 'init', 'case_study_cpt', 0 );