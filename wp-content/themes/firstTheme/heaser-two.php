<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body>

<div style="text-align: center; width: 1024px; height: 120px; background-color: black">
<h1>I am a header</h1>
</div>

<?php 
    wp_nav_menu(array(
        'theme_location' => 'header_index',
        'menu_class' => 'nav_menu_class',
        'menu_di' => 'nav_menu_id',
        'container_class' => 'custom_menu_class'
    ));
?>