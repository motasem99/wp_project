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
    <h2><?php esc_html_e('title page here'); ?></h2>
    <table border="1">
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