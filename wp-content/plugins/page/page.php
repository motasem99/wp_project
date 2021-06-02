<?php

/*
Plugin Name: page insert
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: hello mutasem kwaik </cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Text Domains: pageInsert
Author URI: http://ma.tt/
*/

function add_custom_menu_page () {
    add_menu_page(__('page custom', 'pageInsert'), __('page menu custom', 'pageInsert'), 'administrator', 'page_custom', 'add_custom_page');

}

add_action('admin_menu','add_custom_menu_page');

function add_custom_page () {
    ?>
    <h2 class="custom_h2"><?php esc_html_e('title page here'); ?></h2>
    <table border="1" class="custom_table">
        <tr>
            <td><?php esc_html_e('title'); ?></td>
            <td><?php esc_html_e('description'); ?></td>
        </tr>
        <tr>
            <td><?php esc_html_e('title'); ?></td>
            <td><?php esc_html_e('description'); ?></td>
        </tr>        <tr>
            <td><?php esc_html_e('title'); ?></td>
            <td><?php esc_html_e('description'); ?></td>
        </tr>        <tr>
            <td><?php esc_html_e('title'); ?></td>
            <td><?php esc_html_e('description'); ?></td>
        </tr>        <tr>
            <td><?php esc_html_e('title'); ?></td>
            <td><?php esc_html_e('description'); ?></td>
        </tr>
    </table>

    <?php
}

function my_plugin_custom_style () {
    if(isset($_GET['page']) && $_GET['page'] == 'page_custom')
    wp_enqueue_style('my_custom_style', plugin_dir_url(__FILE__).'/css/style.css');
}

add_action('admin_print_styles', 'my_plugin_custom_style');