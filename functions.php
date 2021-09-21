<?php

require_once(get_theme_file_path('/inc/xenon-customize.php'));

function xenon_setup() {

    load_theme_textdomain('xenon', get_template_directory() . '/languages');

    add_theme_support('title-tag');

    register_nav_menus(array(
        'primary-menu' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'xenon_setup');

function xenon_scripts() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all');

    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoint', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'xenon_scripts');