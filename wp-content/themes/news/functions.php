<?php

add_theme_support('title-tag');



function image_sup() {
    add_theme_support('post-thumbnails');
    add_image_size('home_slider', 300, 180, true);
}

add_action('after_setup_theme', 'image_sup')
;

function add_css_file() {
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.css');
    wp_enqueue_style('templatemo-grad-school', get_template_directory_uri().'/assets/css/templatemo-grad-school.css');
    wp_enqueue_style('owl', get_template_directory_uri().'/assets/css/owl.css');
    wp_enqueue_style('lightbox', get_template_directory_uri().'/assets/css/lightbox.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js', array('jquery'),'1.5', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array(),'1.5', true);
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.min.js', array(),'1.5', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl-carousel.js', array(),'1.5', true);
    wp_enqueue_script('lightbox', get_template_directory_uri().'/assets/js/lightbox.js', array(),'1.5', true);
    wp_enqueue_script('tabs', get_template_directory_uri().'/assets/js/tabs.js', array(),'1.5', true);
    wp_enqueue_script('video', get_template_directory_uri().'/assets/js/video.js', array(),'1.5', true);
    wp_enqueue_script('slick-slider', get_template_directory_uri().'/assets/js/slick-slider.js', array(),'1.5', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', array(),'1.5', true);
    
}

add_action('wp_enqueue_scripts', 'add_css_file');

