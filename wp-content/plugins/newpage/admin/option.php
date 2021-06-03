<?php 



class MY_PLUGIN_NAME_OPTION {
    public function __construct() {
        add_action('admin_menu',array($this, 'add_custom_new_menu_page'));
    }

public function add_custom_new_menu_page () {
    add_menu_page(__('new page custom', 'newPageInsert'), __('new page menu custom', 'newPageInsert'), 'administrator', 'new_page_custom', array($this, 'add_new_custom_page'));
}


public function add_new_custom_page () {
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
}

new MY_PLUGIN_NAME_OPTION();