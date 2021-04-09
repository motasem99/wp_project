<?php

add_theme_support('post-thumbnails');
add_image_size('image_index_news', 400, 400);


function add_nav_menu(){
    register_nav_menu('head_index',__('header_index '));
}

add_action('init','add_nav_menu');


function add_css_file() {
    wp_enqueue_style('bootstrap1', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('bootstrap2', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('bootstrap3', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('bootstrap4', get_template_directory_uri().'/css/style.css');
}

add_action('wp_enqueue_scripts', 'add_css_file');

// function print_in_footer() {
//     echo '<div style="background-color: red; width: 100%; height: 50px">
//     </div>';
// };

// add_action('wp_footer','print_in_footer');

function add_title_to_header () {
    echo '<title>firstTheme</title>';
}

add_action('wp_head', 'add_title_to_header');

function form_cont(){
    if(isset($post)){
        // add any thing
    }
}
?>

<!-- <form action="#">
    <input type="text" name="title" />
    <input type="text" name="sub" />
    <input type="text"  />
    <input type="text"  />
    <input type="text"  />
    <input type="text"  />
</form> -->

<?php
// add_shortcode('moh', 'form_cont');