<?php

add_theme_support('post-thumbnails');
add_image_size('image_index_news', 400, 400);

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