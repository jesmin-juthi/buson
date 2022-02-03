<?php 

function buson_setup(){

    // load_textdomain( 'buson', get_template_directory() . '/languages' );

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('post-formats', array('aside', 'gallery'));
    add_theme_support('automatic-feed-links');
    add_theme_support('customize-selective-refresh-widgets');

    // Register Menus

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'buson'),
        'footer' => __('Footer Menu', 'buson'),
    ));

}
add_action('after_setup_theme','buson_setup');


function buson_scripts(){

    // CSS

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), true, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(), true, 'all');
    wp_enqueue_style('owl', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), true, 'all');
    wp_enqueue_style('slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), true, 'all');
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), true, 'all');
    wp_enqueue_style('stylecss', get_template_directory_uri().'/assets/css/style.css', array(), true, 'all');
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', array(), true, 'all');
    wp_enqueue_style('buson-style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    // JS

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), true, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), true, true);
    wp_enqueue_script('slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery'), true, true);
    wp_enqueue_script('carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), true, true);
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), true, true);
    wp_enqueue_script('sticky', get_template_directory_uri().'/assets/js/jquery.sticky.js', array('jquery'), true, true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), true, true);
}


add_action('wp_enqueue_scripts', 'buson_scripts');

// Custom post types

function buson_cpt(){

    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New slider', 'buson' ),
        'new_item'              => __( 'New slider', 'buson' ),
        'edit_item'             => __( 'Edit slider', 'buson' ),
        'view_item'             => __( 'View slider', 'buson' ),
        'all_items'             => __( 'All sliders', 'buson' ),
        'search_items'          => __( 'Search sliders', 'buson' ),
        'parent_item_colon'     => __( 'Parent sliders:', 'buson' ),
        'not_found'             => __( 'No sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'buson' ),
        'featured_image'        => _x( 'Slider Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
        'set_featured_image'    => _x( 'Set slider image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Sliders',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-slides',
        'supports'           => array( 'title', 'thumbnail' ),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Slider', $args );

    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Service', 'buson' ),
        'new_item'              => __( 'New service', 'buson' ),
        'edit_item'             => __( 'Edit service', 'buson' ),
        'view_item'             => __( 'View service', 'buson' ),
        'all_items'             => __( 'All services', 'buson' ),
        'search_items'          => __( 'Search services', 'buson' ),
        'parent_item_colon'     => __( 'Parent services:', 'buson' ),
        'not_found'             => __( 'No services found.', 'buson' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'buson' ),
        'featured_image'        => _x( 'Service Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
        'set_featured_image'    => _x( 'Set service image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Services',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-networking',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Services', $args );

    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Case', 'buson' ),
        'new_item'              => __( 'New Case', 'buson' ),
        'edit_item'             => __( 'Edit Case', 'buson' ),
        'view_item'             => __( 'View Case', 'buson' ),
        'all_items'             => __( 'All Cases', 'buson' ),
        'search_items'          => __( 'Search Cases', 'buson' ),
        'parent_item_colon'     => __( 'Parent Cases:', 'buson' ),
        'not_found'             => __( 'No Cases found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Cases found in Trash.', 'buson' ),
        'featured_image'        => _x( 'Case Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
        'set_featured_image'    => _x( 'Set Case Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Cases',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cases' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-rest-api',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Cases', $args );

}

add_action('init', 'buson_cpt');


















?>