<?php

// function print_in_footer() {
//     echo '<div style="background-color: red; width: 100%; height: 50px">
//     </div>';
// };

// add_action('wp_footer','print_in_footer');

function add_title_to_header () {
    echo '<title>firstTheme</title>';
}

add_action('wp_head', 'add_title_to_header');