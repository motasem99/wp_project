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
        update_option('my_plugin_backgroundColor',sanitize_hex_color($_POST['backgroundColor']));
        update_option('my_plugin_color',sanitize_hex_color($_POST['color']));
        update_option('my_plugin_categoryColor',sanitize_hex_color($_POST['categoryColor']));
        update_option('my_plugin_fontsize',intval($_POST['fontsize']));
    }
    ?>
    <form action="#" method="post">

    <div>
        <div>
            <label>لون الخلفية: </label>
            <input type="color" name="backgroundColor" value="<?php esc_attr_e(get_option('my_plugin_backgroundColor')); ?>" />
        </div>
        <div>
            <label>لون النص: </label>
            <input type="color" name="color" value="<?php esc_attr_e(get_option('my_plugin_color')); ?>" />
        </div>
        <div>
            <label>لون اتصنيف: </label>
            <input type="color" name="categoryColor" value="<?php esc_attr_e(get_option('my_plugin_categoryColor')); ?>" />
        </div>
        <div>
            <label>حجم النص :</label>
            <input type="number" name="fontsize" value="<?php esc_attr_e(get_option('my_plugin_fontsize')); ?>" />
        </div>
    </div>

    <div>
        <button><?php _e('save', 'newPageInsert') ?></button>
    </div>

    <!-- <table>
        <tr>
            <td>Your Email</td>
            <td><input type="email" name="email" value="<?php esc_attr_e(get_option('my_plugin_email')); ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Save</button></td>
        </tr>
    </table> -->
    </form>
    <?php
    }
}

new MY_PLUGIN_NAME_OPTION();