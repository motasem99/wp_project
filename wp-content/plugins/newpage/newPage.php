<?php

/*
Plugin Name: page options
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: hello mutasem kwaik </cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Text Domains: newPageInsert
Author URI: http://ma.tt/
*/

function add_custom_new_menu_page () {
    add_menu_page(__('new page custom', 'newPageInsert'), __('new page menu custom', 'newPageInsert'), 'administrator', 'new_page_custom', 'add_new_custom_page');

}

add_action('admin_menu','add_custom_new_menu_page');

function add_new_custom_page () {
    if(isset($_POST) && !empty($_POST)) {
        update_option('my_plugin_email',sanitize_email($_POST['email']));
    }
    ?>
    <form action="#" method="post">
    <table>
        <tr>
            <td>Your Email</td>
            <td><input type="email" name="email" value="<?php esc_attr_e(get_option('my_plugin_email')); ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Save</button></td>
        </tr>
    </table>
    </form>
    <?php
}
