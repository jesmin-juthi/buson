<?php 

function buson_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('post-formats', array('aside', 'gallery'));
    add_theme_support('automatic-feed-links');
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme','buson_setup');


function buson_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style('buson-style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('buson-script', get_template_directory_uri().'/js/buson.js', array('jquery'), '1.0.0', true);
}

















?>