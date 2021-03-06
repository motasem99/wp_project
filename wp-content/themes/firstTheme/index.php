<?php get_header(); ?>

<?php
update_post_meta(14, 'auth_name', 'mutasem kwaik');
add_post_meta(14, 'auth_name', 'noor');

    $array = array(
        'post_type' => 'post',
    );

$post = new WP_Query($array);
// print_r($post->posts);

?>

<?php foreach($post->posts as $row) {
    $m = get_post_meta($row->ID, 'show', true);
    $num = absint($m)+1;
        update_post_meta($row->ID, 'show', $num);
    ?>
    <div style="margin: 60px; width: 80%;height: 200px; background-color: #ccc; padding: 10px; ">
        <?php echo $row->post_title ?>
        <br>
        <?php echo $row->post_content ?>
        <br>
            <?php echo __('عدد المشاهدات :'); ?>
        <?php print_r(get_post_meta($row->ID, 'show', true)); ?>

    </div>
<?php } ?>

<?php get_footer(); ?>
